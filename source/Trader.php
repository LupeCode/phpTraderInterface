<?php

namespace LupeCode\phpTraderInterface;

class Trader
{

    const TRADER_MA_TYPE_SMA                   = 0;
    const TRADER_MA_TYPE_EMA                   = 1;
    const TRADER_MA_TYPE_WMA                   = 2;
    const TRADER_MA_TYPE_DEMA                  = 3;
    const TRADER_MA_TYPE_TEMA                  = 4;
    const TRADER_MA_TYPE_TRIMA                 = 5;
    const TRADER_MA_TYPE_KAMA                  = 6;
    const TRADER_MA_TYPE_MAMA                  = 7;
    const TRADER_MA_TYPE_T3                    = 8;
    const TRADER_REAL_MIN                      = -3.0000000000000002E+37;
    const TRADER_REAL_MAX                      = 3.0000000000000002E+37;
    const TRADER_FUNC_UNST_ADX                 = 0;
    const TRADER_FUNC_UNST_ADXR                = 1;
    const TRADER_FUNC_UNST_ATR                 = 2;
    const TRADER_FUNC_UNST_CMO                 = 3;
    const TRADER_FUNC_UNST_DX                  = 4;
    const TRADER_FUNC_UNST_EMA                 = 5;
    const TRADER_FUNC_UNST_HT_DCPERIOD         = 6;
    const TRADER_FUNC_UNST_HT_DCPHASE          = 7;
    const TRADER_FUNC_UNST_HT_PHASOR           = 8;
    const TRADER_FUNC_UNST_HT_TRENDLINE        = 10;
    const TRADER_FUNC_UNST_HT_TRENDMODE        = 11;
    const TRADER_FUNC_UNST_KAMA                = 12;
    const TRADER_FUNC_UNST_MAMA                = 13;
    const TRADER_FUNC_UNST_MFI                 = 14;
    const TRADER_FUNC_UNST_MINUS_DI            = 15;
    const TRADER_FUNC_UNST_MINUS_DM            = 16;
    const TRADER_FUNC_UNST_NATR                = 17;
    const TRADER_FUNC_UNST_PLUS_DI             = 18;
    const TRADER_FUNC_UNST_PLUS_DM             = 19;
    const TRADER_FUNC_UNST_RSI                 = 20;
    const TRADER_FUNC_UNST_STOCHRSI            = 21;
    const TRADER_FUNC_UNST_T3                  = 22;
    const TRADER_FUNC_UNST_ALL                 = 23;
    const TRADER_FUNC_UNST_NONE                = -1;
    const TRADER_COMPATIBILITY_DEFAULT         = 0;
    const TRADER_COMPATIBILITY_METASTOCK       = 1;
    const TRADER_ERR_SUCCESS                   = 0;
    const TRADER_ERR_LIB_NOT_INITIALIZE        = 1;
    const TRADER_ERR_BAD_PARAM                 = 2;
    const TRADER_ERR_ALLOC_ERR                 = 3;
    const TRADER_ERR_GROUP_NOT_FOUND           = 4;
    const TRADER_ERR_FUNC_NOT_FOUND            = 5;
    const TRADER_ERR_INVALID_HANDLE            = 6;
    const TRADER_ERR_INVALID_PARAM_HOLDER      = 7;
    const TRADER_ERR_INVALID_PARAM_HOLDER_TYPE = 8;
    const TRADER_ERR_INVALID_PARAM_FUNCTION    = 9;
    const TRADER_ERR_INPUT_NOT_ALL_INITIALIZE  = 10;
    const TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE = 11;
    const TRADER_ERR_OUT_OF_RANGE_START_INDEX  = 12;
    const TRADER_ERR_OUT_OF_RANGE_END_INDEX    = 13;
    const TRADER_ERR_INVALID_LIST_TYPE         = 14;
    const TRADER_ERR_BAD_OBJECT                = 15;
    const TRADER_ERR_NOT_SUPPORTED             = 16;
    const TRADER_ERR_INTERNAL_ERROR            = 5000;
    const TRADER_ERR_UNKNOWN_ERROR             = 65535;

    /**
     * Calculates the arc cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function acos(array $real): array
    {
        return trader_acos($real);
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
     */
    public static function ad(array $high, array $low, array $close, array $volume): array
    {
        return trader_ad($high, $low, $close, $volume);
    }

    /**
     * Calculates the vector addition of real0 to real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function add(array $real0, array $real1): array
    {
        return trader_add($real0, $real1);
    }

    /**
     * Chaikin A/D Oscillator
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param array    $volume     Volume traded, array of real values.
     * @param int|null $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function adosc(array $high, array $low, array $close, array $volume, integer $fastPeriod = null, integer $slowPeriod = null): array
    {
        return trader_adosc($high, $low, $close, $volume, $fastPeriod, $slowPeriod);
    }

    /**
     * Average Directional Movement Index
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function adx(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_adx($high, $low, $close, $timePeriod);
    }

    /**
     * Average Directional Movement Index Rating
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function adxr(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_adxr($high, $low, $close, $timePeriod);
    }

    /**
     * Absolute Price Oscillator
     *
     * @param array    $real       Array of real values.
     * @param int|null $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int|null $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function apo(array $real, integer $fastPeriod = null, integer $slowPeriod = null, integer $mAType = null): array
    {
        return trader_apo($real, $fastPeriod, $slowPeriod, $mAType);
    }

    /**
     * Aroon
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function aroon(array $high, array $low, integer $timePeriod = null): array
    {
        return trader_aroon($high, $low, $timePeriod);
    }

    /**
     * Aroon Oscillator
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function arronosc(array $high, array $low, integer $timePeriod = null): array
    {
        return trader_aroonosc($high, $low, $timePeriod);
    }

    /**
     * Vector Trigonometric ASin
     * Calculates the arc sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function asin(array $real): array
    {
        return trader_asin($real);
    }

    /**
     * Vector Trigonometric ATan
     * Calculates the arc tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function atan(array $real): array
    {
        return trader_atan($real);
    }

    /**
     * Average True Range
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function atr(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_atr($high, $low, $close, $timePeriod);
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
     */
    public static function avgprice(array $open, array $high, array $low, array $close): array
    {
        return trader_avgprice($open, $high, $low, $close);
    }

    /**
     * Bollinger Bands
     *
     * @param array      $real       Array of real values.
     * @param int|null   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float|null $nbDevUp    Deviation multiplier for upper band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float|null $nbDevDn    Deviation multiplier for lower band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param int|null   $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function bbands(array $real, integer $timePeriod = null, float $nbDevUp = null, float $nbDevDn = null, integer $mAType = null): array
    {
        return trader_bbands($real, $timePeriod, $nbDevUp, $nbDevDn, $mAType);
    }

    /**
     * Beta
     *
     * @param array    $real0      Array of real values.
     * @param array    $real1      Array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function beta(array $real0, array $real1, integer $timePeriod = null): array
    {
        return trader_beta($real0, $real1, $timePeriod);
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
     */
    public static function bop(array $open, array $high, array $low, array $close): array
    {

    }

    /**
     * Commodity Channel Index
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cci(array $high, array $low, array $close, integer $timePeriod = null): array
    {

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
     */
    public static function cdl2crows(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl2crows($open, $high, $low, $close);
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
     */
    public static function cdl3blackcrows(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3blackcrows($open, $high, $low, $close);
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
     */
    public static function cdl3inside(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3inside($open, $high, $low, $close);
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
     */
    public static function cdl3linestrike(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3linestrike($open, $high, $low, $close);
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
     */
    public static function cdl3outside(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3outside($open, $high, $low, $close);
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
     */
    public static function cdl3starsinsouth(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3starsinsouth($open, $high, $low, $close);
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
     */
    public static function cdl3whitesoldiers(array $open, array $high, array $low, array $close): array
    {
        return trader_cdl3whitesoldiers($open, $high, $low, $close);
    }

    /**
     * Abandoned Baby
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdlabandonedbaby($open, $high, $low, $close, $penetration);
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
     */
    public static function cdladvanceblock(array $open, array $high, array $low, array $close): array
    {
        return trader_cdladvanceblock($open, $high, $low, $close);
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
     */
    public static function cdlbelthold(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlbelthold($open, $high, $low, $close);
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
     */
    public static function cdlbreakaway(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlbreakaway($open, $high, $low, $close);
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
     */
    public static function cdlclosingmarubozu(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlclosingmarubozu($open, $high, $low, $close);
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
     */
    public static function cdlconcealbabyswall(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlconcealbabyswall($open, $high, $low, $close);
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
     */
    public static function cdlcounterattack(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlcounterattack($open, $high, $low, $close);
    }

    /**
     * Dark Cloud Cover
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdldarkcloudcover($open, $high, $low, $close, $penetration);
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
     */
    public static function cdldoji(array $open, array $high, array $low, array $close): array
    {
        return trader_cdldoji($open, $high, $low, $close);
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
     */
    public static function cdldojistar(array $open, array $high, array $low, array $close): array
    {
        return trader_cdldojistar($open, $high, $low, $close);
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
     */
    public static function cdldragonflydoji(array $open, array $high, array $low, array $close): array
    {
        return trader_cdldragonflydoji($open, $high, $low, $close);
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
     */
    public static function cdlengulfing(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlengulfing($open, $high, $low, $close);
    }

    /**
     * Evening Doji Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdleveningdojistar($open, $high, $low, $close, $penetration);
    }

    /**
     * Evening Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdleveningstar($open, $high, $low, $close, $penetration);
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
     */
    public static function cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlgapsidesidewhite($open, $high, $low, $close);
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
     */
    public static function cdlgravestonedoji(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlgravestonedoji($open, $high, $low, $close);
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
     */
    public static function cdlhammer(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhammer($open, $high, $low, $close);
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
     */
    public static function cdlhangingman(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhangingman($open, $high, $low, $close);
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
     */
    public static function cdlharami(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlharami($open, $high, $low, $close);
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
     */
    public static function cdlharamicross(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlharamicross($open, $high, $low, $close);
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
     */
    public static function cdlhighwave(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhighwave($open, $high, $low, $close);
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
     */
    public static function cdlhikkake(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhikkake($open, $high, $low, $close);
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
     */
    public static function cdlhikkakemod(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhikkakemod($open, $high, $low, $close);
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
     */
    public static function cdlhomingpigeon(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlhomingpigeon($open, $high, $low, $close);
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
     */
    public static function cdlidentical3crows(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlidentical3crows($open, $high, $low, $close);
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
     */
    public static function cdlinneck(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlinneck($open, $high, $low, $close);
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
     */
    public static function cdlinvertedhammer(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlinvertedhammer($open, $high, $low, $close);
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
     */
    public static function cdlkicking(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlkicking($open, $high, $low, $close);
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
     */
    public static function cdlkickingbylength(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlkickingbylength($open, $high, $low, $close);
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
     */
    public static function cdlladderbottom(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlladderbottom($open, $high, $low, $close);
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
     */
    public static function cdllongleggeddoji(array $open, array $high, array $low, array $close): array
    {
        return trader_cdllongleggeddoji($open, $high, $low, $close);
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
     */
    public static function cdllongline(array $open, array $high, array $low, array $close): array
    {
        return trader_cdllongline($open, $high, $low, $close);
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
     */
    public static function cdlmarubozu(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlmarubozu($open, $high, $low, $close);
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
     */
    public static function cdlmatchinglow(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlmatchinglow($open, $high, $low, $close);
    }

    /**
     * Mat Hold
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdlmathold(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdlmathold($open, $high, $low, $close, $penetration);
    }

    /**
     * Morning Doji Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdlmorningdojistar($open, $high, $low, $close, $penetration);
    }

    /**
     * Morning Star
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return trader_cdlmorningstar($open, $high, $low, $close, $penetration);
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
     */
    public static function cdlonneck(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlonneck($open, $high, $low, $close);
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
     */
    public static function cdlpiercing(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlpiercing($open, $high, $low, $close);
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
     */
    public static function cdlrickshawman(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlrickshawman($open, $high, $low, $close);
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
     */
    public static function cdlrisefall3methods(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlrisefall3methods($open, $high, $low, $close);
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
     */
    public static function cdlseparatinglines(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlseparatinglines($open, $high, $low, $close);
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
     */
    public static function cdlshootingstar(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlshootingstar($open, $high, $low, $close);
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
     */
    public static function cdlshortline(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlshortline($open, $high, $low, $close);
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
     */
    public static function cdlspinningtop(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlspinningtop($open, $high, $low, $close);
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
     */
    public static function cdlstalledpattern(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlstalledpattern($open, $high, $low, $close);
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
     */
    public static function cdlsticksandwich(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlsticksandwich($open, $high, $low, $close);
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
     */
    public static function cdltakuri(array $open, array $high, array $low, array $close): array
    {
        return trader_cdltakuri($open, $high, $low, $close);
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
     */
    public static function cdltasukigap(array $open, array $high, array $low, array $close): array
    {
        return trader_cdltasukigap($open, $high, $low, $close);
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
     */
    public static function cdlthrusting(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlthrusting($open, $high, $low, $close);
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
     */
    public static function cdltristar(array $open, array $high, array $low, array $close): array
    {
        return trader_cdltristar($open, $high, $low, $close);
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
     */
    public static function cdlunique3river(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlunique3river($open, $high, $low, $close);
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
     */
    public static function cdlupsidegap2crows(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlupsidegap2crows($open, $high, $low, $close);
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
     */
    public static function cdlxsidegap3methods(array $open, array $high, array $low, array $close): array
    {
        return trader_cdlxsidegap3methods($open, $high, $low, $close);
    }

    /**
     * Vector Ceil
     * Calculates the next highest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ceil(array $real): array
    {
        return trader_ceil($real);
    }

    /**
     * Chande Momentum Oscillator
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cmo(array $real, integer $timePeriod): array
    {
        return trader_cmo($real, $timePeriod);
    }

    /**
     * Pearson's Correlation Coefficient (r)
     *
     * @param array    $real0      Array of real values.
     * @param array    $real1      Array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function correl(array $real0, array $real1, integer $timePeriod = null): array
    {
        return trader_correl($real0, $real1, $timePeriod);
    }

    /**
     * Vector Trigonometric Cos
     * Calculates the cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cos(array $real): array
    {
        return trader_cos($real);
    }

    /**
     * Vector Trigonometric Cosh
     * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function cosh(array $real): array
    {
        return trader_cosh($real);
    }

    /**
     * Double Exponential Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function dema(array $real, integer $timePeriod): array
    {
        return trader_dema($real, $timePeriod);
    }

    /**
     * Vector Arithmetic Div
     * Divides each value from real0 by the corresponding value from real1 and returns the resulting array.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function div(array $real0, array $real1): array
    {
        return trader_div($real0, $real1);
    }

    /**
     * Directional Movement Index
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array  Returns an array with calculated data or false on failure.
     */
    public static function dx(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_dx($high, $low, $close, $timePeriod);
    }

    /**
     * Exponential Moving Average
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ema(array $real, integer $timePeriod): array
    {
        return trader_ema($real, $timePeriod);
    }

    /**
     * Get error code
     * Get error code of the last operation.
     *
     * @return int Returns the error code identified by one of the TRADER_ERR_* constants.
     */
    public static function errno(): integer
    {
        return trader_errno();
    }

    /**
     * Vector Arithmetic Exp
     * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function exp(array $real): array
    {
        return trader_exp($real);
    }

    /**
     * Vector Floor
     * Calculates the next lowest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function floor(array $real): array
    {
        return trader_floor($real);
    }

    /**
     * Get compatibility mode
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by TRADER_COMPATIBILITY_* series of constants.
     */
    public static function get_compat(): integer
    {
        return trader_get_compat();
    }

    /**
     * Get unstable period
     * Get unstable period factor for a particular function.
     *
     * @param int $functionId Function ID the factor to be read for. TRADER_FUNC_UNST_* series of constants should be used.
     *
     * @return int Returns the unstable period factor for the corresponding function.
     */
    public static function get_unstable_period(integer $functionId): integer
    {
        return trader_get_unstable_period($functionId);
    }

    /**
     * Hilbert Transform - Dominant Cycle Period
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_dcperiod(array $real): array
    {
        return trader_ht_dcperiod($real);
    }

    /**
     * Hilbert Transform - Dominant Cycle Phase
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_dcphase(array $real): array
    {
        return trader_ht_dcphase($real);
    }

    /**
     * Hilbert Transform - Phasor Components
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_phasor(array $real): array
    {
        return trader_ht_phasor($real);
    }

    /**
     * Hilbert Transform - SineWave
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_sine(array $real): array
    {
        return trader_ht_sine($real);
    }

    /**
     * Hilbert Transform - Instantaneous Trendline
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_trendline(array $real): array
    {
        return trader_ht_trendline($real);
    }

    /**
     * Hilbert Transform - Trend vs Cycle Mode
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ht_trendmode(array $real): array
    {
        return trader_ht_trendmode($real);
    }

    /**
     * Kaufman Adaptive Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function kama(array $real, integer $timePeriod = null): array
    {
        return trader_kama($real, $timePeriod);
    }

    /**
     * Linear Regression Angle
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function linearreg_angle(array $real, integer $timePeriod = null): array
    {
        return trader_linearreg_angle($real, $timePeriod);
    }

    /**
     * Linear Regression Angle
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function linearreg_intercept(array $real, integer $timePeriod = null): array
    {
        return trader_linearreg_intercept($real, $timePeriod);
    }

    /**
     * Linear Regression Slope
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function linearreg_slope(array $real, integer $timePeriod = null): array
    {
        return trader_linearreg_slope($real, $timePeriod);
    }

    /**
     * Linear Regression
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function linearreg(array $real, integer $timePeriod = null): array
    {
        return trader_linearreg($real, $timePeriod);
    }

    /**
     * Vector Log Natural
     * Calculates the natural logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ln(array $real): array
    {
        return trader_ln($real);
    }

    /**
     * Vector Log10
     * Calculates the base-10 logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function log10(array $real): array
    {
        return trader_log10($real);
    }

    /**
     * Moving average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ma(array $real, integer $timePeriod = null, integer $mAType = null): array
    {
        return trader_ma($real, $timePeriod, $mAType);
    }

    /**
     * Moving Average Convergence/Divergence
     *
     * @param array    $real         Array of real values.
     * @param int|null $fastPeriod   Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod   Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int|null $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function macd(array $real, integer $fastPeriod = null, integer $slowPeriod = null, integer $signalPeriod = null): array
    {
        return trader_macd($real, $fastPeriod, $slowPeriod, $signalPeriod);
    }

    /**
     * Moving Average Convergence/Divergence with controllable Moving Average type
     *
     * @param array    $real         Array of real values.
     * @param int|null $fastPeriod   Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $fastMAType   Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
     * @param int|null $slowPeriod   Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int|null $slowMAType   Type of Moving Average for fast MA. TRADER_MA_TYPE_* series of constants should be used.
     * @param int|null $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function macdext(array $real, integer $fastPeriod = null, integer $fastMAType = null, integer $slowPeriod = null, integer $slowMAType = null, integer $signalPeriod = null): array
    {
        return trader_macdext($real, $fastPeriod, $fastMAType, $slowPeriod, $slowMAType, $signalPeriod);
    }

    /**
     * Moving Average Convergence/Divergence Fix 12/26
     *
     * @param array    $real         Array of real values.
     * @param int|null $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function macdfix(array $real, integer $signalPeriod = null): array
    {
        return trader_macd($real, $signalPeriod);
    }

    /**
     * MESA Adaptive Moving Average
     *
     * @param array      $real      Array of real values.
     * @param float|null $fastLimit Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     * @param float|null $slowLimit Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function mama(array $real, float $fastLimit = null, float $slowLimit = null): array
    {
        return trader_mama($real, $fastLimit, $slowLimit);
    }

    /**
     * Moving average with variable period
     *
     * @param array    $real      Array of real values.
     * @param array    $periods   Array of real values.
     * @param int|null $minPeriod Value less than minimum will be changed to Minimum period. Valid range from 2 to 100000
     * @param int|null $maxPeriod Value higher than maximum will be changed to Maximum period. Valid range from 2 to 100000
     * @param int|null $mAType    Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function mavp(array $real, array $periods, integer $minPeriod = null, integer $maxPeriod = null, integer $mAType = null): array
    {
        return trader_mavp($real, $periods, $minPeriod, $maxPeriod, $mAType);
    }

    /**
     * Highest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function max(array $real, integer $timePeriod = null): array
    {
        return trader_max($real, $timePeriod);
    }

    /**
     * Index of highest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function maxindex(array $real, integer $timePeriod = null): array
    {
        return trader_max($real, $timePeriod);
    }

    /**
     * Median Price
     *
     * @param array $high High price, array of real values.
     * @param array $low  Low price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function medprice(array $high, array $low): array
    {
        return trader_medprice($high, $low);
    }

    /**
     * Money Flow Index
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param array $volume     Volume traded, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function mfi(array $high, array $low, array $close, array $volume, integer $timePeriod = null): array
    {
        return trader_mfi($high, $low, $close, $volume, $timePeriod);
    }

    /**
     * MidPoint over period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function midpoint(array $real, integer $timePeriod = null): array
    {
        return trader_midpoint($real, $timePeriod);
    }

    /**
     * Midpoint Price over period
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function midprice(array $high, array $low, integer $timePeriod = null)
    {
        return trader_midprice($high, $low, $timePeriod);
    }

    /**
     * Lowest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function min(array $real, integer $timePeriod = null): array
    {
        return trader_min($real, $timePeriod);
    }

    /**
     * Index of lowest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function minindex(array $real, integer $timePeriod = null): array
    {
        return trader_minindex($real, $timePeriod);
    }

    /**
     * Lowest and highest values over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function minmax(array $real, integer $timePeriod = null): array
    {
        return trader_minmax($real, $timePeriod);
    }

    /**
     * Indexes of lowest and highest values over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function minmaxindex(array $real, integer $timePeriod = null): array
    {
        return trader_minmaxindex($real, $timePeriod);
    }

    /**
     * Minus Directional Indicator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function minus_di(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_minus_di($high, $low, $close, $timePeriod);
    }

    /**
     * Minus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function minus_dm(array $high, array $low, integer $timePeriod = null): array
    {
        return trader_minus_dm($high, $low, $timePeriod);
    }

    /**
     * Momentum
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function mom(array $real, integer $timePeriod = null): array
    {
        return trader_mom($real, $timePeriod);
    }

    /**
     * Vector Arithmetic Mult
     * Calculates the vector dot product of real0 with real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function mult(array $real0, array $real1): array
    {
        return trader_mult($real0, $real1);
    }

    /**
     * Normalized Average True Range
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function natr(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_natr($high, $low, $close, $timePeriod);
    }

    /**
     * On Balance Volume
     *
     * @param array $real   Array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function obv(array $real, array $volume): array
    {
        return trader_obv($real, $volume);
    }

    /**
     * Plus Directional Indicator
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function plus_di(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_plus_di($high, $low, $close, $timePeriod);
    }

    /**
     * Plus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function plus_dm(array $high, array $low, integer $timePeriod = null): array
    {
        return trader_plus_dm($high, $low, $timePeriod);
    }

    /**
     * Percentage Price Oscillator
     *
     * @param array    $real       Array of real values.
     * @param int|null $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int|null $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ppo(array $real, integer $fastPeriod = null, integer $slowPeriod = null, integer $mAType = null): array
    {
        return trader_ppo($real, $fastPeriod, $slowPeriod, $mAType);
    }

    /**
     * Rate of change : ((price/prevPrice)-1)*100
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function roc(array $real, integer $timePeriod = null): array
    {
        return trader_roc($real, $timePeriod);
    }

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function rocp(array $real, integer $timePeriod = null): array
    {
        return trader_rocp($real, $timePeriod);
    }

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function rocr100(array $real, integer $timePeriod = null): array
    {
        return trader_rocr100($real, $timePeriod);
    }

    /**
     * Rate of change ratio: (price/prevPrice)
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function rocr(array $real, integer $timePeriod = null): array
    {
        return trader_rocr($real, $timePeriod);
    }

    /**
     * Relative Strength Index
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function rsi(array $real, integer $timePeriod = null): array
    {
        return trader_rsi($real, $timePeriod);
    }

    /**
     * Parabolic SAR
     *
     * @param array      $high         High price, array of real values.
     * @param array      $low          Low price, array of real values.
     * @param float|null $acceleration Acceleration Factor used up to the Maximum value. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $maximum      Acceleration Factor Maximum value. Valid range from 0 to TRADER_REAL_MAX.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sar(array $high, array $low, float $acceleration = null, float $maximum = null): array
    {
        return trader_sar($high, $low, $acceleration, $maximum);
    }

    /**
     * Parabolic SAR - Extended
     *
     * @param array      $high                  High price, array of real values.
     * @param array      $low                   Low price, array of real values.
     * @param float|null $startValue            Start value and direction. 0 for Auto, >0 for Long, <0 for Short. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float|null $offsetOnReverse       Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationInitLong  Acceleration Factor initial value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationLong      Acceleration Factor for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationMaxLong   Acceleration Factor maximum value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationInitShort Acceleration Factor initial value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationShort     Acceleration Factor for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float|null $accelerationMaxShort  Acceleration Factor maximum value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sarext(array $high, array $low, float $startValue = null, float $offsetOnReverse = null, float $accelerationInitLong = null, float $accelerationLong = null, float $accelerationMaxLong = null, float $accelerationInitShort = null, float $accelerationShort = null, float $accelerationMaxShort = null): array
    {
        return trader_sarext($high, $low, $startValue, $offsetOnReverse, $accelerationInitLong, $accelerationLong, $accelerationMaxLong, $accelerationInitShort, $accelerationShort, $accelerationMaxShort);
    }

    /**
     * Set compatibility mode
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. TRADER_COMPATIBILITY_* series of constants should be used.
     */
    public static function set_compat(integer $compatId)
    {
        return trader_set_compat($compatId);
    }

    /**
     * Set unstable period
     * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
     *
     * @param int $functionId Function ID the factor should be set for. TRADER_FUNC_UNST_* constant series can be used to affect the corresponding function.
     * @param int $timePeriod Unstable period value.
     */
    public static function set_unstable_period(integer $functionId, integer $timePeriod)
    {
        return trader_set_unstable_period($functionId, $timePeriod);
    }

    /**
     * Vector Trigonometric Sin
     * Calculates the sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sin(array $real): array
    {
        return trader_sin($real);
    }

    /**
     * Vector Trigonometric Sinh
     * Calculates the hyperbolic sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sinh(array $real): array
    {
        return trader_sinh($real);
    }

    /**
     * Simple Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sma(array $real, integer $timePeriod = null): array
    {
        return trader_sma($real, $timePeriod);
    }

    /**
     * Vector Square Root
     * Calculates the square root of each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sqrt(array $real): array
    {
        return trader_sqrt($real);
    }

    /**
     * Standard Deviation
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $nbDev
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function stddev(array $real, integer $timePeriod = null, float $nbDev = null): array
    {
        return trader_stddev($real, $timePeriod, $nbDev);
    }

    /**
     * Stochastic
     *
     * @param array    $high         High price, array of real values.
     * @param array    $low          Low price, array of real values.
     * @param array    $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int|null $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int|null $slowK_Period Smoothing for making the Slow-K line. Valid range from 1 to 100000, usually set to 3.
     * @param int|null $slowK_MAType Type of Moving Average for Slow-K. TRADER_MA_TYPE_* series of constants should be used.
     * @param int|null $slowD_Period Smoothing for making the Slow-D line. Valid range from 1 to 100000.
     * @param int|null $slowD_MAType Type of Moving Average for Slow-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function stoch(array $high, array $low, array $close, integer $fastK_Period = null, integer $slowK_Period = null, integer $slowK_MAType = null, integer $slowD_Period = null, integer $slowD_MAType = null): array
    {
        return trader_stoch($high, $low, $close, $fastK_Period, $slowK_Period, $slowK_MAType, $slowD_Period, $slowD_MAType);
    }

    /**
     * Stochastic Fast
     *
     * @param array    $high         High price, array of real values.
     * @param array    $low          Low price, array of real values.
     * @param array    $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int|null $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int|null $fastD_Period Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int|null $fastD_MAType Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function stochf(array $high, array $low, array $close, integer $fastK_Period = null, integer $fastD_Period = null, integer $fastD_MAType = null): array
    {
        return trader_stochf($high, $low, $close, $fastK_Period, $fastD_Period, $fastD_MAType);
    }

    /**
     * Stochastic Relative Strength Index
     *
     * @param array    $real         Array of real values.
     * @param int|null $timePeriod   Number of period. Valid range from 2 to 100000.
     * @param int|null $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int|null $fastD_Period Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int|null $fastD_MAType Type of Moving Average for Fast-D. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function stochrsi(array $real, integer $timePeriod = null, integer $fastK_Period = null, integer $fastD_Period = null, integer $fastD_MAType = null): array
    {
        return trader_stochrsi($real, $timePeriod, $fastK_Period, $fastD_Period, $fastD_MAType);
    }

    /**
     * Vector Arithmetic Subtraction
     * Calculates the vector subtraction of real1 from real0 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sub(array $real0, array $real1): array
    {
        return trader_sub($real0, $real1);
    }

    /**
     * Summation
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function sum(array $real, integer $timePeriod = null): array
    {
        return trader_sum($real, $timePeriod);
    }

    /**
     * Triple Exponential Moving Average (T3)
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $vFactor    Volume Factor. Valid range from 1 to 0.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function t3(array $real, integer $timePeriod = null, float $vFactor = null): array
    {
        return trader_t3($real, $timePeriod, $vFactor);
    }

    /**
     * Vector Trigonometric Tan
     * Calculates the tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function tan(array $real): array
    {
        return trader_tan($real);
    }

    /**
     * Vector Trigonometric Tanh
     * Calculates the hyperbolic tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function tanh(array $real): array
    {
        return trader_tanh($real);
    }

    /**
     * Triple Exponential Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function tema(array $real, integer $timePeriod = null): array
    {
        return trader_tema($real, $timePeriod);
    }

    /**
     * True Range
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function trange(array $high, array $low, array $close): array
    {
        return trader_trange($high, $low, $close);
    }

    /**
     * Triangular Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function trima(array $real, integer $timePeriod = null): array
    {
        return trader_trima($real, $timePeriod);
    }

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function trix(array $real, integer $timePeriod = null): array
    {
        return trader_trix($real, $timePeriod);
    }

    /**
     * Time Series Forecast
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function tsf(array $real, integer $timePeriod = null): array
    {
        return trader_tsf($real, $timePeriod);
    }

    /**
     * Typical Price
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function typprice(array $high, array $low, array $close): array
    {
        return trader_typprice($high, $low, $close);
    }

    /**
     * Ultimate Oscillator
     *
     * @param array    $high        High price, array of real values.
     * @param array    $low         Low price, array of real values.
     * @param array    $close       Closing price, array of real values.
     * @param int|null $timePeriod1 Number of bars for 1st period. Valid range from 1 to 100000.
     * @param int|null $timePeriod2 Number of bars for 2nd period. Valid range from 1 to 100000.
     * @param int|null $timePeriod3 Number of bars for 3rd period. Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ultosc(array $high, array $low, array $close, integer $timePeriod1 = null, integer $timePeriod2 = null, integer $timePeriod3 = null): array
    {
        return trader_ultosc($high, $low, $close, $timePeriod1, $timePeriod2, $timePeriod3);
    }

    /**
     * Variance
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $nbDev
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function var(array $real, integer $timePeriod = null, float $nbDev = null): array
    {
        return trader_var($real, $timePeriod, $nbDev);
    }

    /**
     * Weighted Close Price
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function wclprice(array $high, array $low, array $close): array
    {
        return trader_wclprice($high, $low, $close);
    }

    /**
     * Williams' %R
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function willr(array $high, array $low, array $close, integer $timePeriod = null): array
    {
        return trader_willr($high, $low, $close, $timePeriod);
    }

    /**
     * Weighted Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function wma(array $real, integer $timePeriod = null): array
    {
        return trader_wma($real, $timePeriod);
    }

}
