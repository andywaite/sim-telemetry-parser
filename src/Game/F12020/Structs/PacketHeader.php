<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketHeader extends AbstractF12020Struct
{

    /**
    * 2020
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $packetFormat;

    /**
    * Game major version - "X.00"
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gameMajorVersion;

    /**
    * Game minor version - "1.XX"
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gameMinorVersion;

    /**
    * Version of this packet type, all start from 1
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $packetVersion;

    /**
    * Identifier for the packet type, see below
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $packetId;

    /**
    * Unique identifier for the session
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT64_LE
    */
    protected int $sessionUID;

    /**
    * Session timestamp
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $sessionTime;

    /**
    * Identifier for the frame the data was retrieved on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT32_LE
    */
    protected int $frameIdentifier;

    /**
    * Index of player's car in the array
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $playerCarIndex;

    /**
    * Index of secondary player's car in the array (splitscreen)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $secondaryPlayerCarIndex;

    /**
     * @return int
     */
    public function getPacketFormat(): int
    {
        return $this->packetFormat;
    }

    /**
     * @return int
     */
    public function getGameMajorVersion(): int
    {
        return $this->gameMajorVersion;
    }

    /**
     * @return int
     */
    public function getGameMinorVersion(): int
    {
        return $this->gameMinorVersion;
    }

    /**
     * @return int
     */
    public function getPacketVersion(): int
    {
        return $this->packetVersion;
    }

    /**
     * @return int
     */
    public function getPacketId(): int
    {
        return $this->packetId;
    }

    /**
     * @return int
     */
    public function getSessionUID(): int
    {
        return $this->sessionUID;
    }

    /**
     * @return float
     */
    public function getSessionTime(): float
    {
        return $this->sessionTime;
    }

    /**
     * @return int
     */
    public function getFrameIdentifier(): int
    {
        return $this->frameIdentifier;
    }


    /**
     * @return int
     */
    public function getPlayerCarIndex(): int
    {
        return $this->playerCarIndex;
    }

    /**
     * @return int
     */
    public function getSecondaryPlayerCarIndex(): int
    {
        return $this->secondaryPlayerCarIndex;
    }



}