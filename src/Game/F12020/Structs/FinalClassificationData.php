<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class FinalClassificationData extends AbstractF12020Struct
{

    /**
    * Finishing position
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $position;

    /**
    * Number of laps completed
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numLaps;

    /**
    * Grid position of the car
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gridPosition;

    /**
    * Number of points scored
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $points;

    /**
    * Number of pit stops made
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numPitStops;

    /**
    * Result status - 0 = invalid, 1 = inactive, 2 = active
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $resultStatus;

    /**
    * Best lap time of the session in seconds
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $bestLapTime;

    /**
    * Total race time in seconds without penalties
    *
    * @var double
    */
    protected double $totalRaceTime;

    /**
    * Total penalties accumulated in seconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $penaltiesTime;

    /**
    * Number of penalties applied to this driver
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numPenalties;

    /**
    * Number of tyres stints up to maximum
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numTyreStints;

    /**
    * Actual tyres used by this driver
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 8
    */
    protected array $tyreStintsActual;

    /**
    * Visual tyres used by this driver
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 8
    */
    protected array $tyreStintsVisual;

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getNumLaps(): int
    {
        return $this->numLaps;
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
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getNumPitStops(): int
    {
        return $this->numPitStops;
    }

    /**
     * @return int
     */
    public function getResultStatus(): int
    {
        return $this->resultStatus;
    }

    /**
     * @return float
     */
    public function getBestLapTime(): float
    {
        return $this->bestLapTime;
    }

    /**
     * @return float
     */
    public function getTotalRaceTime(): float
    {
        return $this->totalRaceTime;
    }

    /**
     * @return int
     */
    public function getPenaltiesTime(): int
    {
        return $this->penaltiesTime;
    }

    /**
     * @return int
     */
    public function getNumPenalties(): int
    {
        return $this->numPenalties;
    }

    /**
     * @return int
     */
    public function getNumTyreStints(): int
    {
        return $this->numTyreStints;
    }

    /**
     * @return array
     */
    public function getTyreStintsActual(): array
    {
        return $this->tyreStintsActual;
    }

    /**
     * @return array
     */
    public function getTyreStintsVisual(): array
    {
        return $this->tyreStintsVisual;
    }


}