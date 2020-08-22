<?php


namespace AndyWaite\SimTelemetryParser\Util;


class DocBlockParser
{
    /**
     * @param string $docBlock
     * @return array
     */
    public function parseDocBlock(string $docBlock): array
    {
        $regex = '#\*\s*@([a-z]+)\s+(.*)#';
        preg_match_all($regex, $docBlock, $matches);

        $return = [];

        foreach ($matches[1] as $id => $key) {
            $return[$key] = $matches[2][$id];
        }

        return $return;
    }
}