<?php

require_once __DIR__ . '/../source/Trader.php';

class TraderTest extends PHPUnit_Framework_TestCase
{
    public function testConstants()
    {
        $this->assertEquals(TRADER_MA_TYPE_SMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_SMA);
        $this->assertEquals(TRADER_MA_TYPE_EMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_EMA);
        $this->assertEquals(TRADER_MA_TYPE_WMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_WMA);
        $this->assertEquals(TRADER_MA_TYPE_DEMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_DEMA);
        $this->assertEquals(TRADER_MA_TYPE_TEMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_TEMA);
        $this->assertEquals(TRADER_MA_TYPE_TRIMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_TRIMA);
        $this->assertEquals(TRADER_MA_TYPE_KAMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_KAMA);
        $this->assertEquals(TRADER_MA_TYPE_MAMA, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_MAMA);
        $this->assertEquals(TRADER_MA_TYPE_T3, \LupeCode\phpTraderInterface\Trader::TRADER_MA_TYPE_T3);
        $this->assertEquals(TRADER_REAL_MIN, \LupeCode\phpTraderInterface\Trader::TRADER_REAL_MIN);
        $this->assertEquals(TRADER_REAL_MAX, \LupeCode\phpTraderInterface\Trader::TRADER_REAL_MAX);
        $this->assertEquals(TRADER_FUNC_UNST_ADX, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_ADX);
        $this->assertEquals(TRADER_FUNC_UNST_ADXR, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_ADXR);
        $this->assertEquals(TRADER_FUNC_UNST_ATR, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_ATR);
        $this->assertEquals(TRADER_FUNC_UNST_CMO, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_CMO);
        $this->assertEquals(TRADER_FUNC_UNST_DX, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_DX);
        $this->assertEquals(TRADER_FUNC_UNST_EMA, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_EMA);
        $this->assertEquals(TRADER_FUNC_UNST_HT_DCPERIOD, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_HT_DCPERIOD);
        $this->assertEquals(TRADER_FUNC_UNST_HT_DCPHASE, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_HT_DCPHASE);
        $this->assertEquals(TRADER_FUNC_UNST_HT_PHASOR, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_HT_PHASOR);
        $this->assertEquals(TRADER_FUNC_UNST_HT_TRENDLINE, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_HT_TRENDLINE);
        $this->assertEquals(TRADER_FUNC_UNST_HT_TRENDMODE, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_HT_TRENDMODE);
        $this->assertEquals(TRADER_FUNC_UNST_KAMA, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_KAMA);
        $this->assertEquals(TRADER_FUNC_UNST_MAMA, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_MAMA);
        $this->assertEquals(TRADER_FUNC_UNST_MFI, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_MFI);
        $this->assertEquals(TRADER_FUNC_UNST_MINUS_DI, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_MINUS_DI);
        $this->assertEquals(TRADER_FUNC_UNST_MINUS_DM, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_MINUS_DM);
        $this->assertEquals(TRADER_FUNC_UNST_NATR, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_NATR);
        $this->assertEquals(TRADER_FUNC_UNST_PLUS_DI, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_PLUS_DI);
        $this->assertEquals(TRADER_FUNC_UNST_PLUS_DM, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_PLUS_DM);
        $this->assertEquals(TRADER_FUNC_UNST_RSI, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_RSI);
        $this->assertEquals(TRADER_FUNC_UNST_STOCHRSI, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_STOCHRSI);
        $this->assertEquals(TRADER_FUNC_UNST_T3, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_T3);
        $this->assertEquals(TRADER_FUNC_UNST_ALL, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_ALL);
        $this->assertEquals(TRADER_FUNC_UNST_NONE, \LupeCode\phpTraderInterface\Trader::TRADER_FUNC_UNST_NONE);
        $this->assertEquals(TRADER_COMPATIBILITY_DEFAULT, \LupeCode\phpTraderInterface\Trader::TRADER_COMPATIBILITY_DEFAULT);
        $this->assertEquals(TRADER_COMPATIBILITY_METASTOCK, \LupeCode\phpTraderInterface\Trader::TRADER_COMPATIBILITY_METASTOCK);
        $this->assertEquals(TRADER_ERR_SUCCESS, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_SUCCESS);
        $this->assertEquals(TRADER_ERR_LIB_NOT_INITIALIZE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_LIB_NOT_INITIALIZE);
        $this->assertEquals(TRADER_ERR_BAD_PARAM, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_BAD_PARAM);
        $this->assertEquals(TRADER_ERR_ALLOC_ERR, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_ALLOC_ERR);
        $this->assertEquals(TRADER_ERR_GROUP_NOT_FOUND, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_GROUP_NOT_FOUND);
        $this->assertEquals(TRADER_ERR_FUNC_NOT_FOUND, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_FUNC_NOT_FOUND);
        $this->assertEquals(TRADER_ERR_INVALID_HANDLE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INVALID_HANDLE);
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_HOLDER, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INVALID_PARAM_HOLDER);
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_HOLDER_TYPE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INVALID_PARAM_HOLDER_TYPE);
        $this->assertEquals(TRADER_ERR_INVALID_PARAM_FUNCTION, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INVALID_PARAM_FUNCTION);
        $this->assertEquals(TRADER_ERR_INPUT_NOT_ALL_INITIALIZE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INPUT_NOT_ALL_INITIALIZE);
        $this->assertEquals(TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE);
        $this->assertEquals(TRADER_ERR_OUT_OF_RANGE_START_INDEX, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_OUT_OF_RANGE_START_INDEX);
        $this->assertEquals(TRADER_ERR_OUT_OF_RANGE_END_INDEX, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_OUT_OF_RANGE_END_INDEX);
        $this->assertEquals(TRADER_ERR_INVALID_LIST_TYPE, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INVALID_LIST_TYPE);
        $this->assertEquals(TRADER_ERR_BAD_OBJECT, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_BAD_OBJECT);
        $this->assertEquals(TRADER_ERR_NOT_SUPPORTED, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_NOT_SUPPORTED);
        $this->assertEquals(TRADER_ERR_INTERNAL_ERROR, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_INTERNAL_ERROR);
        $this->assertEquals(TRADER_ERR_UNKNOWN_ERROR, \LupeCode\phpTraderInterface\Trader::TRADER_ERR_UNKNOWN_ERROR);
    }
}
