<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;


use AndyWaite\SimTelemetryParser\Packet\DataStructure;
use AndyWaite\SimTelemetryParser\Util\DocBlockParser;
use ReflectionClass;

abstract class AbstractF12020Struct implements DataStructure
{
    /**
     * Takes array of data from
     *
     * @param array $data
     * @throws \ReflectionException
     */
    public function hydrate(array $data)
    {
        $reflection = new ReflectionClass($this);
        $dockblockParser = new DocBlockParser();
        foreach ($data as $key => $value) {
            $reflectionProperty = $reflection->getProperty($key);
            $docBlock = $dockblockParser->parseDocBlock($reflectionProperty->getDocComment());

            if (!isset($docBlock['type'])) {
                $className = $docBlock['var'];
                $qualifiedClassName = $reflection->getNamespaceName().'\\'.$className;

                if (substr($qualifiedClassName, -2) === '[]') {
                    $qualifiedClassName = substr($qualifiedClassName, 0, -2);
                    foreach ($value as &$subValue) {
                        $class = new $qualifiedClassName;
                        $class->hydrate($subValue);
                        $subValue = $class;
                    }
                } else {
                    $class = new $qualifiedClassName;
                    $class->hydrate($value);
                    $value = $class;
                }
            }

            $this->$key = $value;
        }

    }
}