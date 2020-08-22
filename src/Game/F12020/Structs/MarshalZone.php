<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class MarshalZone extends AbstractF12020Struct
{

    /**
    * Fraction (0..1) of way through the lap the marshal zone starts
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $zoneStart;

    /**
    * -1 = invalid/unknown, 0 = none, 1 = green, 2 = blue, 3 = yellow, 4 = red
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $zoneFlag;

    /**
     * @return float
     */
    public function getZoneStart(): float
    {
        return $this->zoneStart;
    }

    /**
     * @return int
     */
    public function getZoneFlag(): int
    {
        return $this->zoneFlag;
    }


}