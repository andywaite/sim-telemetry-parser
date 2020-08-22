<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class Penalty extends AbstractF12020Struct
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
    * Penalty type – see Appendices
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $penaltyType;

    /**
    * Infringement type – see Appendices
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $infringementType;

    /**
    * Vehicle index of the car the penalty is applied to
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $vehicleIdx;

    /**
    * Vehicle index of the other car involved
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $otherVehicleIdx;

    /**
    * Time gained, or time spent doing action in seconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $time;

    /**
    * Lap the penalty occurred on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $lapNum;

    /**
    * Number of places gained by this
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $placesGained;

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
    public function getPenaltyType(): int
    {
        return $this->penaltyType;
    }

    /**
     * @return int
     */
    public function getInfringementType(): int
    {
        return $this->infringementType;
    }

    /**
     * @return int
     */
    public function getVehicleIdx(): int
    {
        return $this->vehicleIdx;
    }

    /**
     * @return int
     */
    public function getOtherVehicleIdx(): int
    {
        return $this->otherVehicleIdx;
    }

    /**
     * @return int
     */
    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getLapNum(): int
    {
        return $this->lapNum;
    }

    /**
     * @return int
     */
    public function getPlacesGained(): int
    {
        return $this->placesGained;
    }
}