<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class ParticipantData extends AbstractF12020Struct
{

    /**
    * Whether the vehicle is AI (1) or Human (0) controlled
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $aiControlled;

    /**
    * Driver id - see appendix
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $driverId;

    /**
    * Team id - see appendix
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $teamId;

    /**
    * Race number of the car
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $raceNumber;

    /**
    * Nationality of the driver
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $nationality;

    /**
    * Name of participant in UTF-8 format – null terminated
    *
    * @var string
    * @type BinaryFormatCodesHelper::CHAR
    * @size 48
    */
    protected string $name;

    /**
    * The player's UDP setting, 0 = restricted, 1 = public
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $yourTelemetry;

    /**
     * @return int
     */
    public function getAiControlled(): int
    {
        return $this->aiControlled;
    }

    /**
     * @return int
     */
    public function getDriverId(): int
    {
        return $this->driverId;
    }

    /**
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->teamId;
    }

    /**
     * @return int
     */
    public function getRaceNumber(): int
    {
        return $this->raceNumber;
    }

    /**
     * @return int
     */
    public function getNationality(): int
    {
        return $this->nationality;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getYourTelemetry(): int
    {
        return $this->yourTelemetry;
    }


}