<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketCarTelemetryData extends AbstractF12020Struct
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
    * @var CarTelemetryData[]
    * @size 22
    */
    protected array $carTelemetryData;

    /**
    * Bit flags specifying which buttons are being pressed
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT32_LE
    */
    protected int $buttonStatus;

    /**
    * Index of MFD panel open - 255 = MFD closed
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $mfdPanelIndex;

    /**
    * See above
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $mfdPanelIndexSecondaryPlayer;

    /**
    * Suggested gear for the player (1-8)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $suggestedGear;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return CarTelemetryData[]
     */
    public function getCarTelemetryData(): array
    {
        return $this->carTelemetryData;
    }

    /**
     * @param int $carIndex
     * @return CarTelemetryData
     */
    public function getCarTelemetry(int $carIndex): CarTelemetryData
    {
        return $this->carTelemetryData[$carIndex];
    }

    /**
     * @return int
     */
    public function getButtonStatus(): int
    {
        return $this->buttonStatus;
    }

    /**
     * @return int
     */
    public function getMfdPanelIndex(): int
    {
        return $this->mfdPanelIndex;
    }

    /**
     * @return int
     */
    public function getMfdPanelIndexSecondaryPlayer(): int
    {
        return $this->mfdPanelIndexSecondaryPlayer;
    }

    /**
     * @return int
     */
    public function getSuggestedGear(): int
    {
        return $this->suggestedGear;
    }


}