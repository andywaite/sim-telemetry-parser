<?php

namespace AndyWaite\SimTelemetryParser\Util;

class BinaryFormatCodesHelper
{
    const UINT8_LE = 'C';
    const UINT16_LE = 'v';
    const UINT32_LE = 'V';
    const UINT64_LE = 'P';

    const CHAR = 'A';
    const INT8 = 'c';
    const INT16 = 's';
    const INT32 = 'l';
    const INT64 = 'q';

    const FLOAT_LE = 'g';
}