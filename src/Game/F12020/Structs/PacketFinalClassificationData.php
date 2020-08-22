<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketFinalClassificationData extends AbstractF12020Struct
{

    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

    /**
    * Number of cars in the final classification
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numCars;

    /**
    * 
    *
    * @var FinalClassificationData[]
    * @size 22
    */
    protected array $classificationData;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return int
     */
    public function getNumCars(): int
    {
        return $this->numCars;
    }

    /**
     * @return FinalClassificationData[]
     */
    public function getClassificationData(): array
    {
        return $this->classificationData;
    }

    /**
     * @param int $carIndex
     * @return FinalClassificationData
     */
    public function getClassification(int $carIndex): FinalClassificationData
    {
        return $this->classificationData[$carIndex];
    }


}