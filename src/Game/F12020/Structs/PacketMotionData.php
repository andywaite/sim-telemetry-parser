<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class PacketMotionData extends AbstractF12020Struct
{
    /**
    * Header
    *
    * @var PacketHeader
    */
    protected PacketHeader $header;

    /**
    * Data for all cars on track
    *
    * @var CarMotionData[]
    * @size 22
    */
    protected array $carMotionData;

    /**
    * Note: All wheel arrays have the following order:
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $suspensionPosition;

    /**
    * RL, RR, FL, FR
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $suspensionVelocity;

    /**
    * RL, RR, FL, FR
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $suspensionAcceleration;

    /**
    * Speed of each wheel
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $wheelSpeed;

    /**
    * Slip ratio for each wheel
    *
    * @var float[]
    * @type BinaryFormatCodesHelper::FLOAT_LE
    * @size 4
    */
    protected array $wheelSlip;

    /**
    * Velocity in local space
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $localVelocityX;

    /**
    * Velocity in local space
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $localVelocityY;

    /**
    * Velocity in local space
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $localVelocityZ;

    /**
    * Angular velocity x-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularVelocityX;

    /**
    * Angular velocity y-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularVelocityY;

    /**
    * Angular velocity z-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularVelocityZ;

    /**
    * Angular velocity x-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularAccelerationX;

    /**
    * Angular velocity y-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularAccelerationY;

    /**
    * Angular velocity z-component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $angularAccelerationZ;

    /**
    * Current front wheels angle in radians
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $frontWheelsAngle;

    /**
     * @return PacketHeader
     */
    public function getHeader(): PacketHeader
    {
        return $this->header;
    }

    /**
     * @return CarMotionData[]
     */
    public function getCarMotionData(): array
    {
        return $this->carMotionData;
    }

    /**
     * @param int $carIndex
     * @return CarMotionData
     */
    public function getCarMotion(int $carIndex): CarMotionData
    {
        return $this->carMotionData[$carIndex];
    }

    /**
     * @return array
     */
    public function getSuspensionPosition(): array
    {
        return $this->suspensionPosition;
    }

    /**
     * @return array
     */
    public function getSuspensionVelocity(): array
    {
        return $this->suspensionVelocity;
    }

    /**
     * @return array
     */
    public function getSuspensionAcceleration(): array
    {
        return $this->suspensionAcceleration;
    }

    /**
     * @return array
     */
    public function getWheelSpeed(): array
    {
        return $this->wheelSpeed;
    }

    /**
     * @return array
     */
    public function getWheelSlip(): array
    {
        return $this->wheelSlip;
    }

    /**
     * @return float
     */
    public function getLocalVelocityX(): float
    {
        return $this->localVelocityX;
    }

    /**
     * @return float
     */
    public function getLocalVelocityY(): float
    {
        return $this->localVelocityY;
    }

    /**
     * @return float
     */
    public function getLocalVelocityZ(): float
    {
        return $this->localVelocityZ;
    }

    /**
     * @return float
     */
    public function getAngularVelocityX(): float
    {
        return $this->angularVelocityX;
    }

    /**
     * @return float
     */
    public function getAngularVelocityY(): float
    {
        return $this->angularVelocityY;
    }

    /**
     * @return float
     */
    public function getAngularVelocityZ(): float
    {
        return $this->angularVelocityZ;
    }

    /**
     * @return float
     */
    public function getAngularAccelerationX(): float
    {
        return $this->angularAccelerationX;
    }

    /**
     * @return float
     */
    public function getAngularAccelerationY(): float
    {
        return $this->angularAccelerationY;
    }

    /**
     * @return float
     */
    public function getAngularAccelerationZ(): float
    {
        return $this->angularAccelerationZ;
    }

    /**
     * @return float
     */
    public function getFrontWheelsAngle(): float
    {
        return $this->frontWheelsAngle;
    }



}