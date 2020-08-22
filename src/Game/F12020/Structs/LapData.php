<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class LapData extends AbstractF12020Struct
{

    /**
    * Last lap time in seconds
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $lastLapTime;

    /**
    * Current time around the lap in seconds
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $currentLapTime;

    /**
    * Sector 1 time in milliseconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $sector1TimeInMS;

    /**
    * Sector 2 time in milliseconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $sector2TimeInMS;

    /**
    * Best lap time of the session in seconds
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $bestLapTime;

    /**
    * Lap number best time achieved on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $bestLapNum;

    /**
    * Sector 1 time of best lap in the session in milliseconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestLapSector1TimeInMS;

    /**
    * Sector 2 time of best lap in the session in milliseconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestLapSector2TimeInMS;

    /**
    * Sector 3 time of best lap in the session in milliseconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestLapSector3TimeInMS;

    /**
    * 
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestOverallSector1TimeInMS;

    /**
    * Lap number best overall sector 1 time achieved on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $bestOverallSector1LapNum;

    /**
    * 
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestOverallSector2TimeInMS;

    /**
    * Lap number best overall sector 2 time achieved on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $bestOverallSector2LapNum;

    /**
    * 
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $bestOverallSector3TimeInMS;

    /**
    * Lap number best overall sector 3 time achieved on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $bestOverallSector3LapNum;

    /**
    * Distance vehicle is around current lap in metres – could
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $lapDistance;

    /**
    * Total distance travelled in session in metres – could
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $totalDistance;

    /**
    * Delta in seconds for safety car
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $safetyCarDelta;

    /**
    * Car race position
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $carPosition;

    /**
    * Current lap number
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $currentLapNum;

    /**
    * 0 = none, 1 = pitting, 2 = in pit area
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $pitStatus;

    /**
    * 0 = sector1, 1 = sector2, 2 = sector3
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $sector;

    /**
    * Current lap invalid - 0 = valid, 1 = invalid
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $currentLapInvalid;

    /**
    * Accumulated time penalties in seconds to be added
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $penalties;

    /**
    * Grid position the vehicle started the race in
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gridPosition;

    /**
    * Status of driver - 0 = in garage, 1 = flying lap
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $driverStatus;

    /**
    * Result status - 0 = invalid, 1 = inactive, 2 = active
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $resultStatus;

    /**
     * @return float
     */
    public function getLastLapTime(): float
    {
        return $this->lastLapTime;
    }

    /**
     * @return float
     */
    public function getCurrentLapTime(): float
    {
        return $this->currentLapTime;
    }

    /**
     * @return int
     */
    public function getSector1TimeInMS(): int
    {
        return $this->sector1TimeInMS;
    }

    /**
     * @return int
     */
    public function getSector2TimeInMS(): int
    {
        return $this->sector2TimeInMS;
    }

    /**
     * @return float
     */
    public function getBestLapTime(): float
    {
        return $this->bestLapTime;
    }

    /**
     * @return int
     */
    public function getBestLapNum(): int
    {
        return $this->bestLapNum;
    }

    /**
     * @return int
     */
    public function getBestLapSector1TimeInMS(): int
    {
        return $this->bestLapSector1TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestLapSector2TimeInMS(): int
    {
        return $this->bestLapSector2TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestLapSector3TimeInMS(): int
    {
        return $this->bestLapSector3TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestOverallSector1TimeInMS(): int
    {
        return $this->bestOverallSector1TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestOverallSector1LapNum(): int
    {
        return $this->bestOverallSector1LapNum;
    }

    /**
     * @return int
     */
    public function getBestOverallSector2TimeInMS(): int
    {
        return $this->bestOverallSector2TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestOverallSector2LapNum(): int
    {
        return $this->bestOverallSector2LapNum;
    }

    /**
     * @return int
     */
    public function getBestOverallSector3TimeInMS(): int
    {
        return $this->bestOverallSector3TimeInMS;
    }

    /**
     * @return int
     */
    public function getBestOverallSector3LapNum(): int
    {
        return $this->bestOverallSector3LapNum;
    }

    /**
     * @return float
     */
    public function getLapDistance(): float
    {
        return $this->lapDistance;
    }

    /**
     * @return float
     */
    public function getTotalDistance(): float
    {
        return $this->totalDistance;
    }

    /**
     * @return float
     */
    public function getSafetyCarDelta(): float
    {
        return $this->safetyCarDelta;
    }

    /**
     * @return int
     */
    public function getCarPosition(): int
    {
        return $this->carPosition;
    }

    /**
     * @return int
     */
    public function getCurrentLapNum(): int
    {
        return $this->currentLapNum;
    }

    /**
     * @return int
     */
    public function getPitStatus(): int
    {
        return $this->pitStatus;
    }

    /**
     * @return int
     */
    public function getSector(): int
    {
        return $this->sector;
    }

    /**
     * @return int
     */
    public function getCurrentLapInvalid(): int
    {
        return $this->currentLapInvalid;
    }

    /**
     * @return int
     */
    public function getPenalties(): int
    {
        return $this->penalties;
    }

    /**
     * @return int
     */
    public function getGridPosition(): int
    {
        return $this->gridPosition;
    }

    /**
     * @return int
     */
    public function getDriverStatus(): int
    {
        return $this->driverStatus;
    }

    /**
     * @return int
     */
    public function getResultStatus(): int
    {
        return $this->resultStatus;
    }


}