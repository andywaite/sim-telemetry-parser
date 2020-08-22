<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketSessionData extends AbstractF12020Struct
{

    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

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
    * Total number of laps in this race
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $totalLaps;

    /**
    * Track length in metres
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $trackLength;

    /**
    * 0 = unknown, 1 = P1, 2 = P2, 3 = P3, 4 = Short P
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $sessionType;

    /**
    * -1 for unknown, 0-21 for tracks, see appendix
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $trackId;

    /**
    * Formula, 0 = F1 Modern, 1 = F1 Classic, 2 = F2,
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $formula;

    /**
    * Time left in session in seconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $sessionTimeLeft;

    /**
    * Session duration in seconds
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $sessionDuration;

    /**
    * Pit speed limit in kilometres per hour
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $pitSpeedLimit;

    /**
    * Whether the game is paused
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gamePaused;

    /**
    * Whether the player is spectating
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $isSpectating;

    /**
    * Index of the car being spectated
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $spectatorCarIndex;

    /**
    * SLI Pro support, 0 = inactive, 1 = active
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $sliProNativeSupport;

    /**
    * Number of marshal zones to follow
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numMarshalZones;

    /**
    * List of marshal zones – max 21
    *
    * @var MarshalZone[]
    * @size 21
    */
    protected array $marshalZones;

    /**
    * 0 = no safety car, 1 = full safety car
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $safetyCarStatus;

    /**
    * 0 = offline, 1 = online
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $networkGame;

    /**
    * Number of weather samples to follow
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $numWeatherForecastSamples;

    /**
    * Array of weather forecast samples
    *
    * @var WeatherForecastSample[]
    * @size 20
    */
    protected array $weatherForecastSamples;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
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

    /**
     * @return int
     */
    public function getTotalLaps(): int
    {
        return $this->totalLaps;
    }

    /**
     * @return int
     */
    public function getTrackLength(): int
    {
        return $this->trackLength;
    }

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
    public function getTrackId(): int
    {
        return $this->trackId;
    }

    /**
     * @return int
     */
    public function getFormula(): int
    {
        return $this->formula;
    }

    /**
     * @return int
     */
    public function getSessionTimeLeft(): int
    {
        return $this->sessionTimeLeft;
    }

    /**
     * @return int
     */
    public function getSessionDuration(): int
    {
        return $this->sessionDuration;
    }

    /**
     * @return int
     */
    public function getPitSpeedLimit(): int
    {
        return $this->pitSpeedLimit;
    }

    /**
     * @return int
     */
    public function getGamePaused(): int
    {
        return $this->gamePaused;
    }

    /**
     * @return int
     */
    public function getIsSpectating(): int
    {
        return $this->isSpectating;
    }

    /**
     * @return int
     */
    public function getSpectatorCarIndex(): int
    {
        return $this->spectatorCarIndex;
    }

    /**
     * @return int
     */
    public function getSliProNativeSupport(): int
    {
        return $this->sliProNativeSupport;
    }

    /**
     * @return int
     */
    public function getNumMarshalZones(): int
    {
        return $this->numMarshalZones;
    }

    /**
     * @return MarshalZone[]
     */
    public function getMarshalZones(): array
    {
        return $this->marshalZones;
    }

    /**
     * @return int
     */
    public function getSafetyCarStatus(): int
    {
        return $this->safetyCarStatus;
    }

    /**
     * @return int
     */
    public function getNetworkGame(): int
    {
        return $this->networkGame;
    }

    /**
     * @return int
     */
    public function getNumWeatherForecastSamples(): int
    {
        return $this->numWeatherForecastSamples;
    }

    /**
     * @return WeatherForecastSample[]
     */
    public function getWeatherForecastSamples(): array
    {
        return $this->weatherForecastSamples;
    }

}