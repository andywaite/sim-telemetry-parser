<?php


namespace AndyWaite\SimTelemetryParser\Game\F12020\Structs;

use AndyWaite\SimTelemetryParser\Util\BinaryFormatCodesHelper;

class CarStatusData extends AbstractF12020Struct
{

    /**
    * 0 (off) - 2 (high)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $tractionControl;

    /**
    * 0 (off) - 1 (on)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $antiLockBrakes;

    /**
    * Fuel mix - 0 = lean, 1 = standard, 2 = rich, 3 = max
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $fuelMix;

    /**
    * Front brake bias (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontBrakeBias;

    /**
    * Pit limiter status - 0 = off, 1 = on
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $pitLimiterStatus;

    /**
    * Current fuel mass
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $fuelInTank;

    /**
    * Fuel capacity
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $fuelCapacity;

    /**
    * Fuel remaining in terms of laps (value on MFD)
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $fuelRemainingLaps;

    /**
    * Cars max RPM, point of rev limiter
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $maxRPM;

    /**
    * Cars idle RPM
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $idleRPM;

    /**
    * Maximum number of gears
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $maxGears;

    /**
    * 0 = not allowed, 1 = allowed, -1 = unknown
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $drsAllowed;

    /**
    * 0 = DRS not available, non-zero - DRS will be available
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT16_LE
    */
    protected int $drsActivationDistance;

    /**
    * Tyre wear percentage
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 4
    */
    protected array $tyresWear;

    /**
    * F1 Modern - 16 = C5, 17 = C4, 18 = C3, 19 = C2, 20 = C1
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $actualTyreCompound;

    /**
    * F1 visual (can be different from actual compound)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $visualTyreCompound;

    /**
    * Age in laps of the current set of tyres
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $tyresAgeLaps;

    /**
    * Tyre damage (percentage)
    *
    * @var int[]
    * @type BinaryFormatCodesHelper::UINT8_LE
    * @size 4
    */
    protected array $tyresDamage;

    /**
    * Front left wing damage (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontLeftWingDamage;

    /**
    * Front right wing damage (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $frontRightWingDamage;

    /**
    * Rear wing damage (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $rearWingDamage;

    /**
    * Indicator for DRS fault, 0 = OK, 1 = fault
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $drsFault;

    /**
    * Engine damage (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $engineDamage;

    /**
    * Gear box damage (percentage)
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $gearBoxDamage;

    /**
    * -1 = invalid/unknown, 0 = none, 1 = green
    *
    * @var int
    * @type BinaryFormatCodesHelper::INT8
    */
    protected int $vehicleFiaFlags;

    /**
    * ERS energy store in Joules
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $ersStoreEnergy;

    /**
    * ERS deployment mode, 0 = none, 1 = medium
    *
    * @var int
    * @type BinaryFormatCodesHelper::UINT8_LE
    */
    protected int $ersDeployMode;

    /**
    * ERS energy harvested this lap by MGU-K
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $ersHarvestedThisLapMGUK;

    /**
    * ERS energy harvested this lap by MGU-H
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $ersHarvestedThisLapMGUH;

    /**
    * ERS energy deployed this lap
    *
    * @var float
    * @type BinaryFormatCodesHelper::FLOAT_LE
    */
    protected float $ersDeployedThisLap;

    /**
     * @return int
     */
    public function getTractionControl(): int
    {
        return $this->tractionControl;
    }

    /**
     * @return int
     */
    public function getAntiLockBrakes(): int
    {
        return $this->antiLockBrakes;
    }

    /**
     * @return int
     */
    public function getFuelMix(): int
    {
        return $this->fuelMix;
    }

    /**
     * @return int
     */
    public function getFrontBrakeBias(): int
    {
        return $this->frontBrakeBias;
    }

    /**
     * @return int
     */
    public function getPitLimiterStatus(): int
    {
        return $this->pitLimiterStatus;
    }

    /**
     * @return float
     */
    public function getFuelInTank(): float
    {
        return $this->fuelInTank;
    }

    /**
     * @return float
     */
    public function getFuelCapacity(): float
    {
        return $this->fuelCapacity;
    }

    /**
     * @return float
     */
    public function getFuelRemainingLaps(): float
    {
        return $this->fuelRemainingLaps;
    }

    /**
     * @return int
     */
    public function getMaxRPM(): int
    {
        return $this->maxRPM;
    }

    /**
     * @return int
     */
    public function getIdleRPM(): int
    {
        return $this->idleRPM;
    }

    /**
     * @return int
     */
    public function getMaxGears(): int
    {
        return $this->maxGears;
    }

    /**
     * @return int
     */
    public function getDrsAllowed(): int
    {
        return $this->drsAllowed;
    }

    /**
     * @return int
     */
    public function getDrsActivationDistance(): int
    {
        return $this->drsActivationDistance;
    }

    /**
     * @return array
     */
    public function getTyresWear(): array
    {
        return $this->tyresWear;
    }

    /**
     * @return int
     */
    public function getActualTyreCompound(): int
    {
        return $this->actualTyreCompound;
    }

    /**
     * @return int
     */
    public function getVisualTyreCompound(): int
    {
        return $this->visualTyreCompound;
    }

    /**
     * @return int
     */
    public function getTyresAgeLaps(): int
    {
        return $this->tyresAgeLaps;
    }

    /**
     * @return array
     */
    public function getTyresDamage(): array
    {
        return $this->tyresDamage;
    }

    /**
     * @return int
     */
    public function getFrontLeftWingDamage(): int
    {
        return $this->frontLeftWingDamage;
    }

    /**
     * @return int
     */
    public function getFrontRightWingDamage(): int
    {
        return $this->frontRightWingDamage;
    }

    /**
     * @return int
     */
    public function getRearWingDamage(): int
    {
        return $this->rearWingDamage;
    }

    /**
     * @return int
     */
    public function getDrsFault(): int
    {
        return $this->drsFault;
    }

    /**
     * @return int
     */
    public function getEngineDamage(): int
    {
        return $this->engineDamage;
    }

    /**
     * @return int
     */
    public function getGearBoxDamage(): int
    {
        return $this->gearBoxDamage;
    }

    /**
     * @return int
     */
    public function getVehicleFiaFlags(): int
    {
        return $this->vehicleFiaFlags;
    }

    /**
     * @return float
     */
    public function getErsStoreEnergy(): float
    {
        return $this->ersStoreEnergy;
    }

    /**
     * @return int
     */
    public function getErsDeployMode(): int
    {
        return $this->ersDeployMode;
    }

    /**
     * @return float
     */
    public function getErsHarvestedThisLapMGUK(): float
    {
        return $this->ersHarvestedThisLapMGUK;
    }

    /**
     * @return float
     */
    public function getErsHarvestedThisLapMGUH(): float
    {
        return $this->ersHarvestedThisLapMGUH;
    }

    /**
     * @return float
     */
    public function getErsDeployedThisLap(): float
    {
        return $this->ersDeployedThisLap;
    }


}