<?php

namespace AndyWaite\SimTelemetryParser\Packet;

use AndyWaite\SimTelemetryParser\Util\DocBlockParser;

class Unpacker
{

    /**
     * @var DocBlockParser
     */
    private DocBlockParser $dockBlockParser;

    public function __construct(DocBlockParser $dockBlockParser)
    {
        $this->dockBlockParser = $dockBlockParser;
    }

    /**
     * Unpack the stream into an associative array
     *
     * Requires the packet model so it knows
     * what data is in the stream
     *
     * @param string $stream
     * @param DataStructure $packet
     * @return array
     */
    public function unpack(string $stream, DataStructure $packet): array
    {
        $formatStrings = $this->getUnpackStrings($packet);
        $raw = unpack(implode("/", $formatStrings), $stream);
        return $this->nest($raw);
    }

    /**
     * The unpack function gives us a 1d array of nastiness.
     *
     * Let's make it into a nested array instead for our sanity
     *
     * @param array $streamData
     * @return array
     */
    protected function nest(array $streamData)
    {
        $return = [];

        foreach ($streamData as $rawKey => $value) {
            $keyParts = array_reverse(explode("_", $rawKey));

            foreach ($keyParts as $keyPart) {

                if (is_numeric($keyPart)) {
                    $keyPart = intval($keyPart);
                }

                $value = [
                    $keyPart => $value
                ];
            }

            $return = array_replace_recursive($return, $value);
        }

        return $return;
    }

    /**
     * Don't really like this.
     *
     * Uses PHP reflection to go through the data structure and work out
     * the string we need to pass to unpack() to get the properties from
     * the data stream.
     *
     * Has to handle nested data structures & arrays. Is messy!
     *
     * @param DataStructure $packet
     * @param string $prefix
     * @return string[]
     * @throws \ReflectionException
     */
    protected function getUnpackStrings(DataStructure $packet, $prefix = ""): array
    {
        $packetStrings = [];

        $reflectionClass = new \ReflectionClass($packet);

        $props = $reflectionClass->getProperties();

        // Loop over the properties we expect in our data structure
        foreach ($props as $prop) {
            $name = $prefix.$prop->getName();
            $docBlock = $this->dockBlockParser->parseDocBlock($prop->getDocComment());
            $isString = isset($docBlock['size']) && $prop->getType()->getName() === "string";
            $isArray = isset($docBlock['size']) && !$isString;

            if (isset($docBlock['type'])) {
                // If there's a defined type, it must be a primitive (e.g. uint16)
                $typeString = constant('AndyWaite\\SimTelemetryParser\\Util\\'.$docBlock['type']);

                if ($isString) {
                    $typeString .= $docBlock['size'];
                }

                if ($isArray) {
                    // If array, we have multiple props - let's use a keying mechanism so we can get them out the array
                    for ($i = 0; $i < $docBlock['size']; $i++) {
                        $packetStrings[] = $typeString.$name."_".$i;
                    }
                } else {
                    // Plain single value
                    $packetStrings[] = $typeString.$name;
                }
            } else {
                // No defined type, must be another data structure so we must recurse
                if (!isset($docBlock['var'])) {
                    throw new \RuntimeException("Unexpected variable!");
                }

                $class = $docBlock['var'];

                if (substr($class, -2) === '[]') {
                    $class = substr($class, 0, -2);
                }

                $qualifiedClassName = $reflectionClass->getNamespaceName().'\\'.$class;
                $subPacket = new $qualifiedClassName;

                if ($isArray) {
                    // Array of nested structures
                    for ($i = 0; $i < $docBlock['size']; $i++) {
                        $packetStrings = array_merge($packetStrings, $this->getUnpackStrings($subPacket, $name."_".$i."_"));
                    }
                } else {
                    // Single nested structure
                    $packetStrings = array_merge($packetStrings, $this->getUnpackStrings($subPacket, $name."_"));
                }
            }
        }

        return $packetStrings;
    }
}