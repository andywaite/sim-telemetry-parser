<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class WeatherForecastSample extends AbstractF12020Struct
{

    /**
    * 0 = unknown, 1 = P1, 2 = P2, 3 = P3, 4 = Short P, 5 = Q1
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $sessionType;

    /**
    * Time in minutes the forecast is for
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $timeOffset;

    /**
    * Weather - 0 = clear, 1 = light cloud, 2 = overcast
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $weather;

    /**
    * Track temp. in degrees celsius
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $trackTemperature;

    /**
    * Air temp. in degrees celsius
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $airTemperature;

    /**
     * @return int
     */
    public function getSessionType(): int
    {
        return $this->sessionType;
    }

    /**
     * @return int
     */
    public function getTimeOffset(): int
    {
        return $this->timeOffset;
    }

    /**
     * @return int
     */
    public function getWeather(): int
    {
        return $this->weather;
    }

    /**
     * @return int
     */
    public function getTrackTemperature(): int
    {
        return $this->trackTemperature;
    }

    /**
     * @return int
     */
    public function getAirTemperature(): int
    {
        return $this->airTemperature;
    }


}