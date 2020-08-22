<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class CarMotionData extends AbstractF12020Struct
{

    /**
    * World space X position
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldPositionX;

    /**
    * World space Y position
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldPositionY;

    /**
    * World space Z position
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldPositionZ;

    /**
    * Velocity in world space X
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldVelocityX;

    /**
    * Velocity in world space Y
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldVelocityY;

    /**
    * Velocity in world space Z
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $worldVelocityZ;

    /**
    * World space forward X direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldForwardDirX;

    /**
    * World space forward Y direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldForwardDirY;

    /**
    * World space forward Z direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldForwardDirZ;

    /**
    * World space right X direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldRightDirX;

    /**
    * World space right Y direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldRightDirY;

    /**
    * World space right Z direction (normalised)
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT16
    */
    protected int $worldRightDirZ;

    /**
    * Lateral G-Force component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $gForceLateral;

    /**
    * Longitudinal G-Force component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $gForceLongitudinal;

    /**
    * Vertical G-Force component
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $gForceVertical;

    /**
    * Yaw angle in radians
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $yaw;

    /**
    * Pitch angle in radians
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $pitch;

    /**
    * Roll angle in radians
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $roll;

    /**
     * @return float
     */
    public function getWorldPositionX(): float
    {
        return $this->worldPositionX;
    }

    /**
     * @return float
     */
    public function getWorldPositionY(): float
    {
        return $this->worldPositionY;
    }

    /**
     * @return float
     */
    public function getWorldPositionZ(): float
    {
        return $this->worldPositionZ;
    }

    /**
     * @return float
     */
    public function getWorldVelocityX(): float
    {
        return $this->worldVelocityX;
    }

    /**
     * @return float
     */
    public function getWorldVelocityY(): float
    {
        return $this->worldVelocityY;
    }

    /**
     * @return float
     */
    public function getWorldVelocityZ(): float
    {
        return $this->worldVelocityZ;
    }

    /**
     * @return int
     */
    public function getWorldForwardDirX(): int
    {
        return $this->worldForwardDirX;
    }

    /**
     * @return int
     */
    public function getWorldForwardDirY(): int
    {
        return $this->worldForwardDirY;
    }

    /**
     * @return int
     */
    public function getWorldForwardDirZ(): int
    {
        return $this->worldForwardDirZ;
    }

    /**
     * @return int
     */
    public function getWorldRightDirX(): int
    {
        return $this->worldRightDirX;
    }

    /**
     * @return int
     */
    public function getWorldRightDirY(): int
    {
        return $this->worldRightDirY;
    }

    /**
     * @return int
     */
    public function getWorldRightDirZ(): int
    {
        return $this->worldRightDirZ;
    }

    /**
     * @return float
     */
    public function getGForceLateral(): float
    {
        return $this->gForceLateral;
    }

    /**
     * @return float
     */
    public function getGForceLongitudinal(): float
    {
        return $this->gForceLongitudinal;
    }

    /**
     * @return float
     */
    public function getGForceVertical(): float
    {
        return $this->gForceVertical;
    }

    /**
     * @return float
     */
    public function getYaw(): float
    {
        return $this->yaw;
    }

    /**
     * @return float
     */
    public function getPitch(): float
    {
        return $this->pitch;
    }

    /**
     * @return float
     */
    public function getRoll(): float
    {
        return $this->roll;
    }

}