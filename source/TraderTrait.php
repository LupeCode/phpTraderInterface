<?php

namespace LupeCode\phpTraderInterface;

/**
 * Trait TraderTrait
 *
 * This trait contains all of the interfaces to the original methods with their original names.
 *
 * @package LupeCode\phpTraderInterface
 */
trait TraderTrait
{

    public static $TRADER_MA_TYPE_SMA                   = 0;
    public static $TRADER_MA_TYPE_EMA                   = 1;
    public static $TRADER_MA_TYPE_WMA                   = 2;
    public static $TRADER_MA_TYPE_DEMA                  = 3;
    public static $TRADER_MA_TYPE_TEMA                  = 4;
    public static $TRADER_MA_TYPE_TRIMA                 = 5;
    public static $TRADER_MA_TYPE_KAMA                  = 6;
    public static $TRADER_MA_TYPE_MAMA                  = 7;
    public static $TRADER_MA_TYPE_T3                    = 8;
    public static $TRADER_REAL_MIN                      = -3.0000000000000002E+37;
    public static $TRADER_REAL_MAX                      = 3.0000000000000002E+37;
    public static $TRADER_FUNC_UNST_ADX                 = 0;
    public static $TRADER_FUNC_UNST_ADXR                = 1;
    public static $TRADER_FUNC_UNST_ATR                 = 2;
    public static $TRADER_FUNC_UNST_CMO                 = 3;
    public static $TRADER_FUNC_UNST_DX                  = 4;
    public static $TRADER_FUNC_UNST_EMA                 = 5;
    public static $TRADER_FUNC_UNST_HT_DCPERIOD         = 6;
    public static $TRADER_FUNC_UNST_HT_DCPHASE          = 7;
    public static $TRADER_FUNC_UNST_HT_PHASOR           = 8;
    public static $TRADER_FUNC_UNST_HT_TRENDLINE        = 10;
    public static $TRADER_FUNC_UNST_HT_TRENDMODE        = 11;
    public static $TRADER_FUNC_UNST_KAMA                = 12;
    public static $TRADER_FUNC_UNST_MAMA                = 13;
    public static $TRADER_FUNC_UNST_MFI                 = 14;
    public static $TRADER_FUNC_UNST_MINUS_DI            = 15;
    public static $TRADER_FUNC_UNST_MINUS_DM            = 16;
    public static $TRADER_FUNC_UNST_NATR                = 17;
    public static $TRADER_FUNC_UNST_PLUS_DI             = 18;
    public static $TRADER_FUNC_UNST_PLUS_DM             = 19;
    public static $TRADER_FUNC_UNST_RSI                 = 20;
    public static $TRADER_FUNC_UNST_STOCHRSI            = 21;
    public static $TRADER_FUNC_UNST_T3                  = 22;
    public static $TRADER_FUNC_UNST_ALL                 = 23;
    public static $TRADER_FUNC_UNST_NONE                = -1;
    public static $TRADER_COMPATIBILITY_DEFAULT         = 0;
    public static $TRADER_COMPATIBILITY_METASTOCK       = 1;
    public static $TRADER_ERR_SUCCESS                   = 0;
    public static $TRADER_ERR_LIB_NOT_INITIALIZE        = 1;
    public static $TRADER_ERR_BAD_PARAM                 = 2;
    public static $TRADER_ERR_ALLOC_ERR                 = 3;
    public static $TRADER_ERR_GROUP_NOT_FOUND           = 4;
    public static $TRADER_ERR_FUNC_NOT_FOUND            = 5;
    public static $TRADER_ERR_INVALID_HANDLE            = 6;
    public static $TRADER_ERR_INVALID_PARAM_HOLDER      = 7;
    public static $TRADER_ERR_INVALID_PARAM_HOLDER_TYPE = 8;
    public static $TRADER_ERR_INVALID_PARAM_FUNCTION    = 9;
    public static $TRADER_ERR_INPUT_NOT_ALL_INITIALIZE  = 10;
    public static $TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE = 11;
    public static $TRADER_ERR_OUT_OF_RANGE_START_INDEX  = 12;
    public static $TRADER_ERR_OUT_OF_RANGE_END_INDEX    = 13;
    public static $TRADER_ERR_INVALID_LIST_TYPE         = 14;
    public static $TRADER_ERR_BAD_OBJECT                = 15;
    public static $TRADER_ERR_NOT_SUPPORTED             = 16;
    public static $TRADER_ERR_INTERNAL_ERROR            = 5000;
    public static $TRADER_ERR_UNKNOWN_ERROR             = 65535;

    protected static $errorArray = [
        1     => "Library not initialized",
        2     => "Bad parameter",
        3     => "Allocation error",
        4     => "Group not found",
        5     => "Function not found",
        6     => "Invalid handle",
        7     => "Invalid parameter holder",
        8     => "Invalid parameter holder type",
        9     => "Invalid parameter function",
        10    => "Input not all initialized",
        11    => "Output not all initialized",
        12    => "Out of range on start index",
        13    => "Out of range on end index",
        14    => "Invalid list type",
        15    => "Bad object",
        16    => "Not supported",
        5000  => "Internal error",
        65535 => "Unknown error",
    ];

    /**
     * @throws \Exception
     */
    protected static function checkForError()
    {
        $errorNumber = trader_errno();
        switch ($errorNumber) {
            case static::$TRADER_ERR_SUCCESS:
                return;
            default:
                throw new \Exception(static::$errorArray[$errorNumber], $errorNumber);
        }
    }

    /**
     * Calculates the arc cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function acos(array $real): array
    {
        $return = trader_acos($real);
        static::checkForError();

        return $return;
    }

    /**
     * Chaikin A/D Line
     *
     * @param array $high   High price, array of real values.
     * @param array $low    Low price, array of real values.
     * @param array $close  Closing price, array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ad(array $high, array $low, array $close, array $volume): array
    {
        $return = trader_ad($high, $low, $close, $volume);
        static::checkForError();

        return $return;
    }

    /**
     * Calculates the vector addition of real0 to real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function add(array $real0, array $real1): array
    {
        $return = trader_add($real0, $real1);
        static::checkForError();

        return $return;
    }

    /**
     * Chaikin A/D Oscillator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param array $volume     Volume traded, array of real values.
     * @param int   $fastPeriod [OPTIONAL] [DEFAULT 3] Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod [OPTIONAL] [DEFAULT 10] Number of period for the slow MA. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function adosc(array $high, array $low, array $close, array $volume, int $fastPeriod = null, int $slowPeriod = null): array
    {
        $fastPeriod = $fastPeriod ?? 3;
        $slowPeriod = $slowPeriod ?? 10;
        $return     = trader_adosc($high, $low, $close, $volume, $fastPeriod, $slowPeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Average Directional Movement Index
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function adx(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_adx($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Average Directional Movement Index Rating
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function adxr(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_adxr($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Absolute Price Oscillator
     *
     * @param array $real       Array of real values.
     * @param int   $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $mAType     [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function apo(array $real, int $fastPeriod = null, int $slowPeriod = null, int $mAType = null): array
    {
        $fastPeriod = $fastPeriod ?? 12;
        $slowPeriod = $slowPeriod ?? 26;
        $mAType     = $mAType ?? static::$TRADER_MA_TYPE_SMA;
        $return     = trader_apo($real, $fastPeriod, $slowPeriod, $mAType);
        static::checkForError();

        return $return;
    }

    /**
     * Aroon
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function aroon(array $high, array $low, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_aroon($high, $low, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Aroon Oscillator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function aroonosc(array $high, array $low, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_aroonosc($high, $low, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric ASin
     * Calculates the arc sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function asin(array $real): array
    {
        $return = trader_asin($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric ATan
     * Calculates the arc tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function atan(array $real): array
    {
        $return = trader_atan($real);
        static::checkForError();

        return $return;
    }

    /**
     * Average True Range
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function atr(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_atr($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Average Price
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function avgprice(array $open, array $high, array $low, array $close): array
    {
        $return = trader_avgprice($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Bollinger Bands
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
     * @param float $nbDevUp    [OPTIONAL] [DEFAULT 2.0] Deviation multiplier for upper band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float $nbDevDn    [OPTIONAL] [DEFAULT 2.0] Deviation multiplier for lower band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param int   $mAType     [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function bbands(array $real, int $timePeriod = null, float $nbDevUp = null, float $nbDevDn = null, int $mAType = null): array
    {
        $timePeriod = $timePeriod ?? 5;
        $nbDevUp    = $nbDevUp ?? 2.0;
        $nbDevDn    = $nbDevDn ?? 2.0;
        $mAType     = $mAType ?? static::$TRADER_MA_TYPE_SMA;
        $return     = trader_bbands($real, $timePeriod, $nbDevUp, $nbDevDn, $mAType);
        static::checkForError();

        return $return;
    }

    /**
     * Beta
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function beta(array $real0, array $real1, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 5;
        $return     = trader_beta($real0, $real1, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Balance Of Power
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function bop(array $open, array $high, array $low, array $close): array
    {
        $return = trader_bop($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Commodity Channel Index
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cci(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_cci($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Two Crows
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl2crows(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl2crows($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three Black Crows
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3blackcrows(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3blackcrows($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three Inside Up/Down
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3inside(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3inside($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three-Line Strike
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3linestrike(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3linestrike($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three Outside Up/Down
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3outside(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3outside($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three Stars In The South
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3starsinsouth(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3starsinsouth($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Three Advancing White Soldiers
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdl3whitesoldiers(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdl3whitesoldiers($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Abandoned Baby
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.3;
        $return      = trader_cdlabandonedbaby($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Advance Block
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdladvanceblock(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdladvanceblock($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Belt-hold
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlbelthold(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlbelthold($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Breakaway
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlbreakaway(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlbreakaway($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Closing Marubozu
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlclosingmarubozu(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlclosingmarubozu($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Concealing Baby Swallow
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlconcealbabyswall(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlconcealbabyswall($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Counterattack
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlcounterattack(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlcounterattack($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Dark Cloud Cover
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.5] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.5;
        $return      = trader_cdldarkcloudcover($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Doji
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdldoji(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdldoji($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Doji Star
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdldojistar(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdldojistar($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Dragonfly Doji
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdldragonflydoji(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdldragonflydoji($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Engulfing Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlengulfing(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlengulfing($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Evening Doji Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.3;
        $return      = trader_cdleveningdojistar($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Evening Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.3;
        $return      = trader_cdleveningstar($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Up/Down-gap side-by-side white lines
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlgapsidesidewhite($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Gravestone Doji
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlgravestonedoji(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlgravestonedoji($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Hammer
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhammer(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhammer($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Hanging Man
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhangingman(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhangingman($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Harami Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlharami(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlharami($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Harami Cross Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlharamicross(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlharamicross($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * High-Wave Candle
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhighwave(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhighwave($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Hikkake Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhikkake(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhikkake($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Modified Hikkake Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhikkakemod(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhikkakemod($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Homing Pigeon
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlhomingpigeon(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlhomingpigeon($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Identical Three Crows
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlidentical3crows(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlidentical3crows($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * In-Neck Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlinneck(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlinneck($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Inverted Hammer
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlinvertedhammer(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlinvertedhammer($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Kicking
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlkicking(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlkicking($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Kicking - bull/bear determined by the longer marubozu
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlkickingbylength(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlkickingbylength($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Ladder Bottom
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlladderbottom(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlladderbottom($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Long Legged Doji
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdllongleggeddoji(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdllongleggeddoji($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Long Line Candle
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdllongline(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdllongline($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Marubozu
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlmarubozu(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlmarubozu($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Matching Low
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlmatchinglow(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlmatchinglow($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Mat Hold
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.5] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlmathold(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.5;
        $return      = trader_cdlmathold($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Morning Doji Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.3;
        $return      = trader_cdlmorningdojistar($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * Morning Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        $penetration = $penetration ?? 0.3;
        $return      = trader_cdlmorningstar($open, $high, $low, $close, $penetration);
        static::checkForError();

        return $return;
    }

    /**
     * On-Neck Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlonneck(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlonneck($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Piercing Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlpiercing(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlpiercing($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Rickshaw Man
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlrickshawman(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlrickshawman($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Rising/Falling Three Methods
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlrisefall3methods(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlrisefall3methods($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Separating Lines
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlseparatinglines(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlseparatinglines($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Shooting Star
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlshootingstar(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlshootingstar($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Short Line Candle
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlshortline(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlshortline($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Spinning Top
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlspinningtop(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlspinningtop($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Stalled Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlstalledpattern(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlstalledpattern($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Stick Sandwich
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlsticksandwich(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlsticksandwich($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Takuri (Dragonfly Doji with very long lower shadow)
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdltakuri(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdltakuri($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Tasuki Gap
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdltasukigap(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdltasukigap($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Thrusting Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlthrusting(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlthrusting($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Tristar Pattern
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdltristar(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdltristar($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Unique 3 River
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlunique3river(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlunique3river($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Upside Gap Two Crows
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlupsidegap2crows(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlupsidegap2crows($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Upside/Downside Gap Three Methods
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cdlxsidegap3methods(array $open, array $high, array $low, array $close): array
    {
        $return = trader_cdlxsidegap3methods($open, $high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Ceil
     * Calculates the next highest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ceil(array $real): array
    {
        $return = trader_ceil($real);
        static::checkForError();

        return $return;
    }

    /**
     * Chande Momentum Oscillator
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cmo(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_cmo($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Pearson's Correlation Coefficient (r)
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function correl(array $real0, array $real1, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_correl($real0, $real1, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric Cos
     * Calculates the cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cos(array $real): array
    {
        $return = trader_cos($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric Cosh
     * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function cosh(array $real): array
    {
        $return = trader_cosh($real);
        static::checkForError();

        return $return;
    }

    /**
     * Double Exponential Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 3.] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function dema(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_dema($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Arithmetic Div
     * Divides each value from real0 by the corresponding value from real1 and returns the resulting array.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function div(array $real0, array $real1): array
    {
        $return = trader_div($real0, $real1);
        static::checkForError();

        return $return;
    }

    /**
     * Directional Movement Index
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array  Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function dx(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_dx($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Exponential Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ema(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_ema($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Get error code
     * Get error code of the last operation.
     *
     * @return int Returns the error code identified by one of the TRADER_ERR_* constants.
     * @throws \Exception
     */
    public static function errno(): integer
    {
        $return = trader_errno();
        static::checkForError();

        return $return;
    }

    /**
     * Vector Arithmetic Exp
     * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function exp(array $real): array
    {
        $return = trader_exp($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Floor
     * Calculates the next lowest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function floor(array $real): array
    {
        $return = trader_floor($real);
        static::checkForError();

        return $return;
    }

    /**
     * Get compatibility mode
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by TRADER_COMPATIBILITY_* series of constants.
     * @throws \Exception
     */
    public static function get_compat(): integer
    {
        $return = trader_get_compat();
        static::checkForError();

        return $return;
    }

    /**
     * Get unstable period
     * Get unstable period factor for a particular function.
     *
     * @param int $functionId Function ID the factor to be read for. TRADER_FUNC_UNST_* series of constants should be used.
     *
     * @return int Returns the unstable period factor for the corresponding function.
     * @throws \Exception
     */
    public static function get_unstable_period(integer $functionId): integer
    {
        $return = trader_get_unstable_period($functionId);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - Dominant Cycle Period
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_dcperiod(array $real): array
    {
        $return = trader_ht_dcperiod($real);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - Dominant Cycle Phase
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_dcphase(array $real): array
    {
        $return = trader_ht_dcphase($real);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - Phasor Components
     *
     * @param array $real    Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_phasor(array $real): array
    {
        $return = trader_ht_phasor($real);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - SineWave
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_sine(array $real): array
    {
        $return = trader_ht_sine($real);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - Instantaneous Trendline
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_trendline(array $real): array
    {
        $return = trader_ht_trendline($real);
        static::checkForError();

        return $return;
    }

    /**
     * Hilbert Transform - Trend vs Cycle Mode
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ht_trendmode(array $real): array
    {
        $return = trader_ht_trendmode($real);
        static::checkForError();

        return $return;
    }

    /**
     * Kaufman Adaptive Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function kama(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_kama($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Linear Regression Angle
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearreg_angle(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_linearreg_angle($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Linear Regression Angle
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearreg_intercept(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_linearreg_intercept($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Linear Regression Slope
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearreg_slope(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_linearreg_slope($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Linear Regression
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearreg(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_linearreg($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Log Natural
     * Calculates the natural logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ln(array $real): array
    {
        $return = trader_ln($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Log10
     * Calculates the base-10 logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function log10(array $real): array
    {
        $return = trader_log10($real);
        static::checkForError();

        return $return;
    }

    /**
     * Moving average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     * @param int   $mAType     [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ma(array $real, int $timePeriod = null, int $mAType = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $mAType     = $mAType ?? static::$TRADER_MA_TYPE_SMA;
        $return     = trader_ma($real, $timePeriod, $mAType);
        static::checkForError();

        return $return;
    }

    /**
     * Moving Average Convergence/Divergence
     *
     * @param array $real         Array of real values.
     * @param int   $fastPeriod   [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod   [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function macd(array $real, int $fastPeriod = null, int $slowPeriod = null, int $signalPeriod = null): array
    {
        $fastPeriod   = $fastPeriod ?? 12;
        $slowPeriod   = $slowPeriod ?? 26;
        $signalPeriod = $signalPeriod ?? 9;
        $return       = trader_macd($real, $fastPeriod, $slowPeriod, $signalPeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Moving Average Convergence/Divergence with controllable Moving Average type
     *
     * @param array $real         Array of real values.
     * @param int   $fastPeriod   [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $fastMAType   [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
     * @param int   $slowPeriod   [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $slowMAType   [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
     * @param int   $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function macdext(array $real, int $fastPeriod = null, int $fastMAType = null, int $slowPeriod = null, int $slowMAType = null, int $signalPeriod = null): array
    {
        $fastPeriod   = $fastPeriod ?? 12;
        $fastMAType   = $fastMAType ?? static::$TRADER_MA_TYPE_SMA;
        $slowPeriod   = $slowPeriod ?? 26;
        $slowMAType   = $slowMAType ?? static::$TRADER_MA_TYPE_SMA;
        $signalPeriod = $signalPeriod ?? 9;
        $return       = trader_macdext($real, $fastPeriod, $fastMAType, $slowPeriod, $slowMAType, $signalPeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Moving Average Convergence/Divergence Fix 12/26
     *
     * @param array $real         Array of real values.
     * @param int   $signalPeriod [OPTIONAL] [DEFAULT 9] Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function macdfix(array $real, int $signalPeriod = null): array
    {
        $signalPeriod = $signalPeriod ?? 9;
        $return       = trader_macdfix($real, $signalPeriod);
        static::checkForError();

        return $return;
    }

    /**
     * MESA Adaptive Moving Average
     *
     * @param array $real      Array of real values.
     * @param float $fastLimit [OPTIONAL] [DEFAULT 0.5] Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     * @param float $slowLimit [OPTIONAL] [DEFAULT 0.05] Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mama(array $real, float $fastLimit = null, float $slowLimit = null): array
    {
        $fastLimit = $fastLimit ?? 0.5;
        $slowLimit = $slowLimit ?? 0.05;
        $return    = trader_mama($real, $fastLimit, $slowLimit);
        static::checkForError();

        return $return;
    }

    /**
     * Moving average with variable period
     *
     * @param array $real      Array of real values.
     * @param array $periods   Array of real values.
     * @param int   $minPeriod [OPTIONAL] [DEFAULT 2] Value less than minimum will be changed to Minimum period. Valid range from 2 to 100000
     * @param int   $maxPeriod [OPTIONAL] [DEFAULT 30] Value higher than maximum will be changed to Maximum period. Valid range from 2 to 100000
     * @param int   $mAType    [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mavp(array $real, array $periods, int $minPeriod = null, int $maxPeriod = null, int $mAType = null): array
    {
        $minPeriod = $minPeriod ?? 2;
        $maxPeriod = $maxPeriod ?? 30;
        $mAType    = $mAType ?? static::$TRADER_MA_TYPE_SMA;
        $return    = trader_mavp($real, $periods, $minPeriod, $maxPeriod, $mAType);
        static::checkForError();

        return $return;
    }

    /**
     * Highest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function max(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_max($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Index of highest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function maxindex(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_maxindex($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Median Price
     *
     * @param array $high High price, array of real values.
     * @param array $low  Low price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function medprice(array $high, array $low): array
    {
        $return = trader_medprice($high, $low);
        static::checkForError();

        return $return;
    }

    /**
     * Money Flow Index
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param array $volume     Volume traded, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mfi(array $high, array $low, array $close, array $volume, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_mfi($high, $low, $close, $volume, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * MidPoint over period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function midpoint(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_midpoint($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Midpoint Price over period
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function midprice(array $high, array $low, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_midprice($high, $low, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Lowest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function min(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_min($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Index of lowest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minindex(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_minindex($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Lowest and highest values over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minmax(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_minmax($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Indexes of lowest and highest values over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minmaxindex(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_minmaxindex($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Minus Directional Indicator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minus_di(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_minus_di($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Minus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minus_dm(array $high, array $low, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_minus_dm($high, $low, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Momentum
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mom(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 10;
        $return     = trader_mom($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Arithmetic Mult
     * Calculates the vector dot product of real0 with real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mult(array $real0, array $real1): array
    {
        $return = trader_mult($real0, $real1);
        static::checkForError();

        return $return;
    }

    /**
     * Normalized Average True Range
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function natr(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_natr($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * On Balance Volume
     *
     * @param array $real   Array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function obv(array $real, array $volume): array
    {
        $return = trader_obv($real, $volume);
        static::checkForError();

        return $return;
    }

    /**
     * Plus Directional Indicator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function plus_di(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_plus_di($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Plus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function plus_dm(array $high, array $low, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_plus_dm($high, $low, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Percentage Price Oscillator
     *
     * @param array $real       Array of real values.
     * @param int   $fastPeriod [OPTIONAL] [DEFAULT 12] Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod [OPTIONAL] [DEFAULT 26] Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $mAType     [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ppo(array $real, int $fastPeriod = null, int $slowPeriod = null, int $mAType = null): array
    {
        $fastPeriod = $fastPeriod ?? 12;
        $slowPeriod = $slowPeriod ?? 26;
        $mAType     = $mAType ?? static::$TRADER_MA_TYPE_SMA;
        $return     = trader_ppo($real, $fastPeriod, $slowPeriod, $mAType);
        static::checkForError();

        return $return;
    }

    /**
     * Rate of change : ((price/prevPrice)-1)*100
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function roc(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 10;
        $return     = trader_roc($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rocp(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 10;
        $return     = trader_rocp($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rocr100(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 10;
        $return     = trader_rocr100($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Rate of change ratio: (price/prevPrice)
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 10] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rocr(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 10;
        $return     = trader_rocr($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Relative Strength Index
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rsi(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_rsi($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Parabolic SAR
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param float $acceleration [OPTIONAL] [DEFAULT 0.02] Acceleration Factor used up to the Maximum value. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $maximum      [OPTIONAL] [DEFAULT 0.2] Acceleration Factor Maximum value. Valid range from 0 to TRADER_REAL_MAX.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sar(array $high, array $low, float $acceleration = null, float $maximum = null): array
    {
        $acceleration = $acceleration ?? 0.02;
        $maximum      = $maximum ?? 0.2;
        $return       = trader_sar($high, $low, $acceleration, $maximum);
        static::checkForError();

        return $return;
    }

    /**
     * Parabolic SAR - Extended
     *
     * @param array $high                  High price, array of real values.
     * @param array $low                   Low price, array of real values.
     * @param float $startValue            [OPTIONAL] [DEFAULT 0.0] Start value and direction. 0 for Auto, >0 for Long, <0 for Short. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float $offsetOnReverse       [OPTIONAL] [DEFAULT 0.0] Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationInitLong  [OPTIONAL] [DEFAULT 0.02] Acceleration Factor initial value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationLong      [OPTIONAL] [DEFAULT 0.02] Acceleration Factor for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationMaxLong   [OPTIONAL] [DEFAULT 0.2] Acceleration Factor maximum value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationInitShort [OPTIONAL] [DEFAULT 0.02] Acceleration Factor initial value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationShort     [OPTIONAL] [DEFAULT 0.02] Acceleration Factor for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationMaxShort  [OPTIONAL] [DEFAULT 0.2] Acceleration Factor maximum value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sarext(array $high, array $low, float $startValue = null, float $offsetOnReverse = null, float $accelerationInitLong = null, float $accelerationLong = null, float $accelerationMaxLong = null, float $accelerationInitShort = null, float $accelerationShort = null, float $accelerationMaxShort = null): array
    {
        $startValue            = $startValue ?? 0.0;
        $offsetOnReverse       = $offsetOnReverse ?? 0.0;
        $accelerationInitLong  = $accelerationInitLong ?? 0.02;
        $accelerationLong      = $accelerationLong ?? 0.02;
        $accelerationMaxLong   = $accelerationMaxLong ?? 0.2;
        $accelerationInitShort = $accelerationInitShort ?? 0.02;
        $accelerationShort     = $accelerationShort ?? 0.02;
        $accelerationMaxShort  = $accelerationMaxShort ?? 0.2;
        $return                = trader_sarext($high, $low, $startValue, $offsetOnReverse, $accelerationInitLong, $accelerationLong, $accelerationMaxLong, $accelerationInitShort, $accelerationShort, $accelerationMaxShort);
        static::checkForError();

        return $return;
    }

    /**
     * Set compatibility mode
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. TRADER_COMPATIBILITY_* series of constants should be used.
     *
     * @throws \Exception
     */
    public static function set_compat(integer $compatId)
    {
        trader_set_compat($compatId);
        static::checkForError();
    }

    /**
     * Set unstable period
     * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
     *
     * @param int $functionId Function ID the factor should be set for. TRADER_FUNC_UNST_* constant series can be used to affect the corresponding function.
     * @param int $timePeriod Unstable period value.
     *
     * @throws \Exception
     */
    public static function set_unstable_period(integer $functionId, int $timePeriod)
    {
        trader_set_unstable_period($functionId, $timePeriod);
        static::checkForError();
    }

    /**
     * Vector Trigonometric Sin
     * Calculates the sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sin(array $real): array
    {
        $return = trader_sin($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric Sinh
     * Calculates the hyperbolic sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sinh(array $real): array
    {
        $return = trader_sinh($real);
        static::checkForError();

        return $return;
    }

    /**
     * Simple Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sma(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_sma($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Square Root
     * Calculates the square root of each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sqrt(array $real): array
    {
        $return = trader_sqrt($real);
        static::checkForError();

        return $return;
    }

    /**
     * Standard Deviation
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
     * @param float $nbDev      [OPTIONAL] [DEFAULT 1.0] Number of deviations
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function stddev(array $real, int $timePeriod = null, float $nbDev = null): array
    {
        $timePeriod = $timePeriod ?? 5;
        $nbDev      = $nbDev ?? 1.0;
        $return     = trader_stddev($real, $timePeriod, $nbDev);
        static::checkForError();

        return $return;
    }

    /**
     * Stochastic
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param array $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $slowK_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Slow-K line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $slowK_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Slow-K. TRADER_MA_TYPE_* series of constants should be used.
     * @param int   $slowD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Slow-D line. Valid range from 1 to 100000.
     * @param int   $slowD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Slow-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function stoch(array $high, array $low, array $close, int $fastK_Period = null, int $slowK_Period = null, int $slowK_MAType = null, int $slowD_Period = null, int $slowD_MAType = null): array
    {
        $fastK_Period = $fastK_Period ?? 5;
        $slowK_Period = $slowK_Period ?? 3;
        $slowK_MAType = $slowK_MAType ?? static::$TRADER_MA_TYPE_SMA;
        $slowD_Period = $slowD_Period ?? 3;
        $slowD_MAType = $slowD_MAType ?? static::$TRADER_MA_TYPE_SMA;
        $return       = trader_stoch($high, $low, $close, $fastK_Period, $slowK_Period, $slowK_MAType, $slowD_Period, $slowD_MAType);
        static::checkForError();

        return $return;
    }

    /**
     * Stochastic Fast
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param array $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $fastD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function stochf(array $high, array $low, array $close, int $fastK_Period = null, int $fastD_Period = null, int $fastD_MAType = null): array
    {
        $fastK_Period = $fastK_Period ?? 5;
        $fastD_Period = $fastD_Period ?? 3;
        $fastD_MAType = $fastD_MAType ?? static::$TRADER_MA_TYPE_SMA;
        $return       = trader_stochf($high, $low, $close, $fastK_Period, $fastD_Period, $fastD_MAType);
        static::checkForError();

        return $return;
    }

    /**
     * Stochastic Relative Strength Index
     *
     * @param array $real         Array of real values.
     * @param int   $timePeriod   [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     * @param int   $fastK_Period [OPTIONAL] [DEFAULT 5] Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastD_Period [OPTIONAL] [DEFAULT 3] Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $fastD_MAType [OPTIONAL] [DEFAULT TRADER_MA_TYPE_SMA] Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function stochrsi(array $real, int $timePeriod = null, int $fastK_Period = null, int $fastD_Period = null, int $fastD_MAType = null): array
    {
        $timePeriod   = $timePeriod ?? 14;
        $fastK_Period = $fastK_Period ?? 5;
        $fastD_Period = $fastD_Period ?? 3;
        $fastD_MAType = $fastD_MAType ?? static::$TRADER_MA_TYPE_SMA;
        $return       = trader_stochrsi($real, $timePeriod, $fastK_Period, $fastD_Period, $fastD_MAType);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Arithmetic Subtraction
     * Calculates the vector subtraction of real1 from real0 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sub(array $real0, array $real1): array
    {
        $return = trader_sub($real0, $real1);
        static::checkForError();

        return $return;
    }

    /**
     * Summation
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function sum(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_sum($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Triple Exponential Moving Average (T3)
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
     * @param float $vFactor    [OPTIONAL] [DEFAULT 0.7] Volume Factor. Valid range from 1 to 0.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function t3(array $real, int $timePeriod = null, float $vFactor = null): array
    {
        $timePeriod = $timePeriod ?? 5;
        $vFactor    = $vFactor ?? 0.7;
        $return     = trader_t3($real, $timePeriod, $vFactor);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric Tan
     * Calculates the tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tan(array $real): array
    {
        $return = trader_tan($real);
        static::checkForError();

        return $return;
    }

    /**
     * Vector Trigonometric Tanh
     * Calculates the hyperbolic tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tanh(array $real): array
    {
        $return = trader_tanh($real);
        static::checkForError();

        return $return;
    }

    /**
     * Triple Exponential Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tema(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_tema($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * True Range
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function trange(array $high, array $low, array $close): array
    {
        $return = trader_trange($high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Triangular Moving Average
     *
     * @param array $real     Array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function trima(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_trima($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA
     *
     * @param array $real     Array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function trix(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_trix($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Time Series Forecast
     *
     * @param array $real     Array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tsf(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_tsf($real, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Typical Price
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function typprice(array $high, array $low, array $close): array
    {
        $return = trader_typprice($high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Ultimate Oscillator
     *
     * @param array $high      High price, array of real values.
     * @param array $low       Low price, array of real values.
     * @param array $close     Closing price, array of real values.
     * @param int $timePeriod1 [OPTIONAL] [DEFAULT 7] Number of bars for 1st period. Valid range from 1 to 100000.
     * @param int $timePeriod2 [OPTIONAL] [DEFAULT 14] Number of bars for 2nd period. Valid range from 1 to 100000.
     * @param int $timePeriod3 [OPTIONAL] [DEFAULT 28] Number of bars for 3rd period. Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function ultosc(array $high, array $low, array $close, int $timePeriod1 = null, int $timePeriod2 = null, int $timePeriod3 = null): array
    {
        $timePeriod1 = $timePeriod1 ?? 7;
        $timePeriod2 = $timePeriod2 ?? 14;
        $timePeriod3 = $timePeriod3 ?? 28;
        $return      = trader_ultosc($high, $low, $close, $timePeriod1, $timePeriod2, $timePeriod3);
        static::checkForError();

        return $return;
    }

    /**
     * Variance
     *
     * @param array $real     Array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 5] Number of period. Valid range from 2 to 100000.
     * @param float $nbDev    [OPTIONAL] [DEFAULT 1.0] Number of deviations
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function var(array $real, int $timePeriod = null, float $nbDev = null): array
    {
        $timePeriod = $timePeriod ?? 5;
        $nbDev      = $nbDev ?? 1.0;
        $return     = trader_var($real, $timePeriod, $nbDev);
        static::checkForError();

        return $return;
    }

    /**
     * Weighted Close Price
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function wclprice(array $high, array $low, array $close): array
    {
        $return = trader_wclprice($high, $low, $close);
        static::checkForError();

        return $return;
    }

    /**
     * Williams' %R
     *
     * @param array $high     High price, array of real values.
     * @param array $low      Low price, array of real values.
     * @param array $close    Closing price, array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 14] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function willr(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 14;
        $return     = trader_willr($high, $low, $close, $timePeriod);
        static::checkForError();

        return $return;
    }

    /**
     * Weighted Moving Average
     *
     * @param array $real     Array of real values.
     * @param int $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function wma(array $real, int $timePeriod = null): array
    {
        $timePeriod = $timePeriod ?? 30;
        $return     = trader_wma($real, $timePeriod);
        static::checkForError();

        return $return;
    }

}
