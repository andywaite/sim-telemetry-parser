<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class CarSetupData extends AbstractF12020Struct
{

    /**
    * Front wing aero
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontWing;

    /**
    * Rear wing aero
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $rearWing;

    /**
    * Differential adjustment on throttle (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $onThrottle;

    /**
    * Differential adjustment off throttle (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $offThrottle;

    /**
    * Front camber angle (suspension geometry)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $frontCamber;

    /**
    * Rear camber angle (suspension geometry)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $rearCamber;

    /**
    * Front toe angle (suspension geometry)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $frontToe;

    /**
    * Rear toe angle (suspension geometry)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $rearToe;

    /**
    * Front suspension
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontSuspension;

    /**
    * Rear suspension
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $rearSuspension;

    /**
    * Front anti-roll bar
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontAntiRollBar;

    /**
    * Front anti-roll bar
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $rearAntiRollBar;

    /**
    * Front ride height
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontSuspensionHeight;

    /**
    * Rear ride height
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $rearSuspensionHeight;

    /**
    * Brake pressure (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $brakePressure;

    /**
    * Brake bias (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $brakeBias;

    /**
    * Rear left tyre pressure (PSI)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $rearLeftTyrePressure;

    /**
    * Rear right tyre pressure (PSI)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $rearRightTyrePressure;

    /**
    * Front left tyre pressure (PSI)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $frontLeftTyrePressure;

    /**
    * Front right tyre pressure (PSI)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $frontRightTyrePressure;

    /**
    * Ballast
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $ballast;

    /**
    * Fuel load
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $fuelLoad;

    /**
     * @return int
     */
    public function getFrontWing(): int
    {
        return $this->frontWing;
    }

    /**
     * @return int
     */
    public function getRearWing(): int
    {
        return $this->rearWing;
    }

    /**
     * @return int
     */
    public function getOnThrottle(): int
    {
        return $this->onThrottle;
    }

    /**
     * @return int
     */
    public function getOffThrottle(): int
    {
        return $this->offThrottle;
    }

    /**
     * @return float
     */
    public function getFrontCamber(): float
    {
        return $this->frontCamber;
    }

    /**
     * @return float
     */
    public function getRearCamber(): float
    {
        return $this->rearCamber;
    }

    /**
     * @return float
     */
    public function getFrontToe(): float
    {
        return $this->frontToe;
    }

    /**
     * @return float
     */
    public function getRearToe(): float
    {
        return $this->rearToe;
    }

    /**
     * @return int
     */
    public function getFrontSuspension(): int
    {
        return $this->frontSuspension;
    }

    /**
     * @return int
     */
    public function getRearSuspension(): int
    {
        return $this->rearSuspension;
    }

    /**
     * @return int
     */
    public function getFrontAntiRollBar(): int
    {
        return $this->frontAntiRollBar;
    }

    /**
     * @return int
     */
    public function getRearAntiRollBar(): int
    {
        return $this->rearAntiRollBar;
    }

    /**
     * @return int
     */
    public function getFrontSuspensionHeight(): int
    {
        return $this->frontSuspensionHeight;
    }

    /**
     * @return int
     */
    public function getRearSuspensionHeight(): int
    {
        return $this->rearSuspensionHeight;
    }

    /**
     * @return int
     */
    public function getBrakePressure(): int
    {
        return $this->brakePressure;
    }

    /**
     * @return int
     */
    public function getBrakeBias(): int
    {
        return $this->brakeBias;
    }

    /**
     * @return float
     */
    public function getRearLeftTyrePressure(): float
    {
        return $this->rearLeftTyrePressure;
    }

    /**
     * @return float
     */
    public function getRearRightTyrePressure(): float
    {
        return $this->rearRightTyrePressure;
    }

    /**
     * @return float
     */
    public function getFrontLeftTyrePressure(): float
    {
        return $this->frontLeftTyrePressure;
    }

    /**
     * @return float
     */
    public function getFrontRightTyrePressure(): float
    {
        return $this->frontRightTyrePressure;
    }

    /**
     * @return int
     */
    public function getBallast(): int
    {
        return $this->ballast;
    }

    /**
     * @return float
     */
    public function getFuelLoad(): float
    {
        return $this->fuelLoad;
    }


}