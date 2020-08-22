<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketCarStatusData extends AbstractF12020Struct
{

    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

    /**
    * 
    *
    * @var CarStatusData[]
    * @size 22
    */
    protected array $carStatusData;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return CarStatusData[]
     */
    public function getCarStatusData(): array
    {
        return $this->carStatusData;
    }

    /**
     * @param int $carIndex
     * @return CarStatusData
     */
    public function getCarStatus(int $carIndex): CarStatusData
    {
        return $this->carStatusData[$carIndex];
    }

}