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
     * @return array
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
     * @return array
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
     * Calculates the arc tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     */
    public static function ceil(array $real): array
    {
        return trader_ceil($real);
    }

    public static function cmo()
    {

    }

    public static function correl()
    {

    }

    public static function cos()
    {

    }

    public static function cosh()
    {

    }

    public static function dema()
    {

    }

    public static function div()
    {

    }

    public static function dx()
    {

    }

    public static function ema()
    {

    }

    public static function errno()
    {

    }

    public static function exp()
    {

    }

    public static function floor()
    {

    }

    public static function get_compat()
    {

    }

    public static function get_unstable_period()
    {

    }

    public static function ht_dcperiod()
    {

    }

    public static function ht_dcphase()
    {

    }

    public static function ht_phasor()
    {

    }

    public static function ht_sine()
    {

    }

    public static function ht_trendline()
    {

    }

    public static function ht_trendmode()
    {

    }

    public static function kama()
    {

    }

    public static function linearreg_angle()
    {

    }

    public static function linearreg_intercept()
    {

    }

    public static function linearreg_slope()
    {

    }

    public static function linearreg()
    {

    }

    public static function ln()
    {

    }

    public static function log10()
    {

    }

    public static function ma()
    {

    }

    public static function macd()
    {

    }

    public static function macdext()
    {

    }

    public static function macdfix()
    {

    }

    public static function mama()
    {

    }

    public static function mavp()
    {

    }

    public static function max()
    {

    }

    public static function maxindex()
    {

    }

    public static function medprice()
    {

    }

    public static function mfi()
    {

    }

    public static function midpoint()
    {

    }

    public static function midprice()
    {

    }

    public static function min()
    {

    }

    public static function minindex()
    {

    }

    public static function minmax()
    {

    }

    public static function minmaxindex()
    {

    }

    public static function minus_di()
    {

    }

    public static function minus_dm()
    {

    }

    public static function mom()
    {

    }

    public static function mult()
    {

    }

    public static function natr()
    {

    }

    public static function obv()
    {

    }

    public static function plus_di()
    {

    }

    public static function plus_dm()
    {

    }

    public static function ppo()
    {

    }

    public static function roc()
    {

    }

    public static function rocp()
    {

    }

    public static function rocr100()
    {

    }

    public static function rocr()
    {

    }

    public static function rsi()
    {

    }

    public static function sar()
    {

    }

    public static function sarext()
    {

    }

    public static function set_compat()
    {

    }

    public static function set_unstable_period()
    {

    }

    public static function sin()
    {

    }

    public static function sinh()
    {

    }

    public static function sma()
    {

    }

    public static function sqrt()
    {

    }

    public static function stddev()
    {

    }

    public static function stoch()
    {

    }

    public static function stochf()
    {

    }

    public static function stochrsi()
    {

    }

    public static function sub()
    {

    }

    public static function sum()
    {

    }

    public static function t3()
    {

    }

    public static function tan()
    {

    }

    public static function tanh()
    {

    }

    public static function tema()
    {

    }

    public static function trange()
    {

    }

    public static function trima()
    {

    }

    public static function trix()
    {

    }

    public static function tsf()
    {

    }

    public static function typprice()
    {

    }

    public static function ultosc()
    {

    }

    public static function var()
    {

    }

    public static function wclprice()
    {

    }

    public static function willr()
    {

    }

    public static function wma()
    {

    }

}
