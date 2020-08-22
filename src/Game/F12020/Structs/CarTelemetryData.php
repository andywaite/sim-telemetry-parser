<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class CarTelemetryData extends AbstractF12020Struct
{

    /**
    * Speed of car in kilometres per hour
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $speed;

    /**
    * Amount of throttle applied (0.0 to 1.0)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $throttle;

    /**
    * Steering (-1.0 (full lock left) to 1.0 (full lock right))
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $steer;

    /**
    * Amount of brake applied (0.0 to 1.0)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $brake;

    /**
    * Amount of clutch applied (0 to 100)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $clutch;

    /**
    * Gear selected (1-8, N=0, R=-1)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $gear;

    /**
    * Engine RPM
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $engineRPM;

    /**
    * 0 = off, 1 = on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $drs;

    /**
    * Rev lights indicator (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $revLightsPercent;

    /**
    * Brakes temperature (celsius)
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT16_LE
    * @size 4
    */
    protected array $brakesTemperature;

    /**
    * Tyres surface temperature (celsius)
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 4
    */
    protected array $tyresSurfaceTemperature;

    /**
    * Tyres inner temperature (celsius)
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 4
    */
    protected array $tyresInnerTemperature;

    /**
    * Engine temperature (celsius)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $engineTemperature;

    /**
    * Tyres pressure (PSI)
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $tyresPressure;

    /**
    * Driving surface, see appendices
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 4
    */
    protected array $surfaceType;

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return float
     */
    public function getThrottle(): float
    {
        return $this->throttle;
    }

    /**
     * @return float
     */
    public function getSteer(): float
    {
        return $this->steer;
    }

    /**
     * @return float
     */
    public function getBrake(): float
    {
        return $this->brake;
    }

    /**
     * @return int
     */
    public function getClutch(): int
    {
        return $this->clutch;
    }

    /**
     * @return int
     */
    public function getGear(): int
    {
        return $this->gear;
    }

    /**
     * @return int
     */
    public function getEngineRPM(): int
    {
        return $this->engineRPM;
    }

    /**
     * @return int
     */
    public function getDrs(): int
    {
        return $this->drs;
    }

    /**
     * @return int
     */
    public function getRevLightsPercent(): int
    {
        return $this->revLightsPercent;
    }

    /**
     * @return array
     */
    public function getBrakesTemperature(): array
    {
        return $this->brakesTemperature;
    }

    /**
     * @return array
     */
    public function getTyresSurfaceTemperature(): array
    {
        return $this->tyresSurfaceTemperature;
    }

    /**
     * @return array
     */
    public function getTyresInnerTemperature(): array
    {
        return $this->tyresInnerTemperature;
    }

    /**
     * @return int
     */
    public function getEngineTemperature(): int
    {
        return $this->engineTemperature;
    }

    /**
     * @return array
     */
    public function getTyresPressure(): array
    {
        return $this->tyresPressure;
    }

    /**
     * @return array
     */
    public function getSurfaceType(): array
    {
        return $this->surfaceType;
    }


}