<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class FastestLap extends AbstractF12020Struct
{

    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

    /**
     * Event string code, see below
     *
     * @var string
     * @type BinaryFormatCodesHelper::CHAR
     * @size 4
     */
    protected string $eventStringCode;

    /**
    * Vehicle index of car achieving fastest lap
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $vehicleIdx;

    /**
    * Lap time is in seconds
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $lapTime;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return array
     */
    public function getEventStringCode(): array
    {
        return $this->eventStringCode;
    }

    /**
     * @return int
     */
    public function getVehicleIdx(): int
    {
        return $this->vehicleIdx;
    }

    /**
     * @return float
     */
    public function getLapTime(): float
    {
        return $this->lapTime;
    }
}