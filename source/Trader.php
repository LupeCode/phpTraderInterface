<?php

namespace LupeCode\phpTraderInterface;

require_once __DIR__ . '/TraderTrait.php';

/**
 * Class Trader
 *
 * This class extends the original extension to include friendlier names.
 *
 * @package LupeCode\phpTraderInterface
 */
class Trader
{

    use TraderTrait;

    /**
     * Vector arc cosine
     *
     * Calculates the arc cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathArcCosine(array $real): array
    {
        return static::acos($real);
    }

    /**
     * Chaikin Accumulation Distribution Line
     *
     * This indicator is a volume based indicator developed by Marc Chaikin which measures the cumulative flow of money into and out of an instrument.
     * The A/D line is calculated by multiplying the specific period’s volume with a multiplier that is based on the relationship of the closing price to the high-low range.
     * The A/D Line is formed by the running total of the Money Flow Volume. This indicator can be used to assert an underlying trend or to predict reversals.
     *
     * The combination of a high positive multiplier value and high volume indicates buying pressure.
     * So even with a downtrend in prices when there is an uptrend in the Accumulation Distribution Line there is indication for buying pressure (accumulation) that may result to a bullish reversal.
     *
     * Conversely a low negative multiplier value combined with, again, high volumes indicates selling pressure (distribution).
     *
     * @param array $high   High price, array of real values.
     * @param array $low    Low price, array of real values.
     * @param array $close  Closing price, array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function chaikinAccumulationDistributionLine(array $high, array $low, array $close, array $volume): array
    {
        return static::ad($high, $low, $close, $volume);
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
    public static function mathAddition(array $real0, array $real1): array
    {
        return static::add($real0, $real1);
    }

    /**
     * Chaikin Accumulation Distribution Oscillator
     *
     * Chaikin Oscillator is positive when the 3-day EMA moves higher than the 10-day EMA and vice versa.
     *
     * The Chaikin Oscillator is the continuation of the Chaikin A/D Line and is used to observe changes in the A/D Line.
     *
     * The oscillator is based on the difference between the 3-day Exponential Moving Average (EMA) of the A/D Line and the 10-day EMA of the A/D Line and hence adds momentum to the A/D Line.
     * It is helpful for investors to use the Oscillator in order to determine the appropriate timing of trend reversals.
     *
     * When the Chaikin Oscillator turns positive there is indication that the A/D Line will increase and hence a Bullish (buy) signal will be generated. On the other hand a move into negative territory indicates a Bearish (sell) signal.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param array    $volume     Volume traded, array of real values.
     * @param int|null $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function chaikinAccumulationDistributionOscillator(array $high, array $low, array $close, array $volume, int $fastPeriod = null, int $slowPeriod = null): array
    {
        return static::adosc($high, $low, $close, $volume, $fastPeriod, $slowPeriod);
    }

    /**
     * Average Directional Movement Index
     *
     * Developed by J. Welles Wilder and described in his book “New Concepts in Technical Trading Systems”, the Average Directional Movement Index (ADX) is a technical indicator that describes if a market or a financial instrument is trending or not.
     *
     * The ADX is a combination of two other indicators developed by Wilder, the positive directional indicator (+DI) and the negative directional indicator (-DI).
     *
     * Wilder recommends buying when +DI is higher than -DI, and selling when +DI is lower than -DI.
     *
     * The ADX indicates trend strength, not trend direction, and it is a lagging indicator.
     *
     * ADX range is between 0 and 100. Generally ADX readings below 20 indicate trend weakness, and readings above 40 indicate trend strength.
     * An extremely strong trend is indicated by readings above 50.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function averageDirectionalMovementIndex(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::adx($high, $low, $close, $timePeriod);
    }

    /**
     * Average Directional Movement Index Rating
     *
     * The Average Directional Movement Index Rating (ADXR) measures the strength of the Average Directional Movement Index (ADX).
     * It's calculated by taking the average of the current ADX and the ADX from one time period before (time periods can vary, but the most typical period used is 14 days).
     *
     * Like the ADX, the ADXR ranges from values of 0 to 100 and reflects strengthening and weakening trends.
     * However, because it represents an average of ADX, values don't fluctuate as dramatically and some analysts believe the indicator helps better display trends in volatile markets.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function averageDirectionalMovementIndexRating(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::adxr($high, $low, $close, $timePeriod);
    }

    /**
     * Absolute Price Oscillator
     *
     * The Absolute Price Oscillator (APO) is based on the absolute differences between two moving averages of different lengths, a ‘Fast’ and a ‘Slow’ moving average.
     * A positive indicator value indicates an upward movement, while negative readings signal a downward trend.
     *
     * Divergences form when a new high or low in price is not confirmed by the Absolute Price Oscillator (APO).
     * A bullish divergence forms when price make a lower low, but the APO forms a higher low.
     * This indicates less downward momentum that could foreshadow a bullish reversal.
     * A bearish divergence forms when price makes a higher high, but the APO forms a lower high.
     * This shows less upward momentum that could foreshadow a bearish reversal.
     *
     * @param array    $real       Array of real values.
     * @param int|null $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int|null $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int|null $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function absolutePriceOscillator(array $real, int $fastPeriod = null, int $slowPeriod = null, int $mAType = null): array
    {
        return static::apo($real, $fastPeriod, $slowPeriod, $mAType);
    }

    /**
     * Aroon
     *
     * The Aroon indicator was developed by Tushar Chande in 1995.
     *
     * Both the Aroon up and the Aroon down fluctuate between zero and 100, with values close to 100 indicating a strong trend, and zero indicating a weak trend.
     * The lower the Aroon up, the weaker the uptrend and the stronger the downtrend, and vice versa.
     * The main assumption underlying this indicator is that a stock's price will close at record highs in an uptrend, and record lows in a downtrend.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function aroonIndicator(array $high, array $low, int $timePeriod = null): array
    {
        return static::aroon($high, $low, $timePeriod);
    }

    /**
     * Aroon Oscillator
     *
     * The Aroon oscillator is calculated by subtracting Aroon down from Aroon up.
     * Readings above zero indicate that an uptrend is present, while readings below zero indicate that a downtrend is present.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function arronOscillator(array $high, array $low, int $timePeriod = null): array
    {
        return static::aroonosc($high, $low, $timePeriod);
    }

    /**
     * Vector Trigonometric ASin
     *
     * Calculates the arc sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathArcSine(array $real): array
    {
        return static::asin($real);
    }

    /**
     * Vector Trigonometric ATan
     *
     * Calculates the arc tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathArcTangent(array $real): array
    {
        return static::atan($real);
    }

    /**
     * Average True Range
     *
     * The average true range (ATR) is a measure of volatility introduced by Welles Wilder in his book, "New Concepts in Technical Trading Systems."
     * The true range indicator is the greatest of the following:
     *      current high less the current low,
     *      the absolute value of the current high less the previous close,
     *      and the absolute value of the current low less the previous close.
     * The average true range is a moving average, generally 14 days, of the true ranges.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function averageTrueRange(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::atr($high, $low, $close, $timePeriod);
    }

    /**
     * Average Price
     *
     * An average price is a representative measure of a range of prices that is calculated by taking the sum of the values and dividing it by the number of prices being examined.
     * The average price reduces the range into a single value, which can then be compared to any point to determine if the value is higher or lower than what would be expected.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function averagePrice(array $open, array $high, array $low, array $close): array
    {
        return static::avgprice($open, $high, $low, $close);
    }

    /**
     * Bollinger Bands
     *
     * A Bollinger Band® is a band plotted two standard deviations away from a simple moving average, developed by famous technical trader John Bollinger.
     *
     * Because standard deviation is a measure of volatility, Bollinger Bands® adjust themselves to the market conditions.
     * When the markets become more volatile, the bands widen (move further away from the average), and during less volatile periods, the bands contract (move closer to the average).
     * The tightening of the bands is often used by technical traders as an early indication that the volatility is about to increase sharply.
     *
     * @param array      $real       Array of real values.
     * @param int|null   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float|null $nbDevUp    Deviation multiplier for upper band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float|null $nbDevDn    Deviation multiplier for lower band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param int|null   $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function bollingerBands(array $real, int $timePeriod = null, float $nbDevUp = null, float $nbDevDn = null, int $mAType = null): array
    {
        return static::bbands($real, $timePeriod, $nbDevUp, $nbDevDn, $mAType);
    }

    /**
     * Beta
     *
     * Beta is a measure of the volatility, or systematic risk, of a security or a portfolio in comparison to the market as a whole.
     * Beta is used in the capital asset pricing model (CAPM), which calculates the expected return of an asset based on its beta and expected market returns.
     * Beta is also known as the beta coefficient.
     *
     * A beta of 1 indicates that the security's price moves with the market.
     * A beta of less than 1 means that the security is theoretically less volatile than the market.
     * A beta of greater than 1 indicates that the security's price is theoretically more volatile than the market.
     *
     * @param array    $real0      Array of real values.
     * @param array    $real1      Array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function betaVolatility(array $real0, array $real1, int $timePeriod = null): array
    {
        return static::beta($real0, $real1, $timePeriod);
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
    public static function balanceOfPower(array $open, array $high, array $low, array $close): array
    {
        return static::bop($open, $high, $low, $close);
    }

    /**
     * Commodity Channel Index
     *
     * An oscillator used in technical analysis to help determine when an investment vehicle has been overbought and oversold.
     * The Commodity Channel Index, first developed by Donald Lambert, quantifies the relationship between the asset's price, a moving average (MA) of the asset's price, and normal deviations (D) from that average.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function commodityChannelIndex(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::cci($high, $low, $close, $timePeriod);
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
    public static function candleTwoCrows(array $open, array $high, array $low, array $close): array
    {
        return static::cdl2crows($open, $high, $low, $close);
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
    public static function candleThreeBlackCrows(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3blackcrows($open, $high, $low, $close);
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
    public static function candleThreeInsideUpDown(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3inside($open, $high, $low, $close);
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
    public static function candleThreeLineStrike(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3linestrike($open, $high, $low, $close);
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
    public static function candleThreeOutsideUpDown(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3outside($open, $high, $low, $close);
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
    public static function candleThreeStarsInTheSouth(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3starsinsouth($open, $high, $low, $close);
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
    public static function candleThreeWhiteSoldiers(array $open, array $high, array $low, array $close): array
    {
        return static::cdl3whitesoldiers($open, $high, $low, $close);
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
     * @throws \Exception
     */
    public static function candleAbandonedBaby(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdlabandonedbaby($open, $high, $low, $close, $penetration);
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
    public static function candleAdvanceBlock(array $open, array $high, array $low, array $close): array
    {
        return static::cdladvanceblock($open, $high, $low, $close);
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
    public static function candleBeltHold(array $open, array $high, array $low, array $close): array
    {
        return static::cdlbelthold($open, $high, $low, $close);
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
    public static function candleBreakaway(array $open, array $high, array $low, array $close): array
    {
        return static::cdlbreakaway($open, $high, $low, $close);
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
    public static function candleClosingMarubozu(array $open, array $high, array $low, array $close): array
    {
        return static::cdlclosingmarubozu($open, $high, $low, $close);
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
    public static function candleConcealingBabySwallow(array $open, array $high, array $low, array $close): array
    {
        return static::cdlconcealbabyswall($open, $high, $low, $close);
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
    public static function candleCounterattack(array $open, array $high, array $low, array $close): array
    {
        return static::cdlcounterattack($open, $high, $low, $close);
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
     * @throws \Exception
     */
    public static function candleDarkCloudCover(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdldarkcloudcover($open, $high, $low, $close, $penetration);
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
    public static function candleDoji(array $open, array $high, array $low, array $close): array
    {
        return static::cdldoji($open, $high, $low, $close);
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
    public static function candleDojiStar(array $open, array $high, array $low, array $close): array
    {
        return static::cdldojistar($open, $high, $low, $close);
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
    public static function candleDragonflyDoji(array $open, array $high, array $low, array $close): array
    {
        return static::cdldragonflydoji($open, $high, $low, $close);
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
    public static function candleEngulfingPattern(array $open, array $high, array $low, array $close): array
    {
        return static::cdlengulfing($open, $high, $low, $close);
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
     * @throws \Exception
     */
    public static function candleEveningDojiStar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdleveningdojistar($open, $high, $low, $close, $penetration);
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
     * @throws \Exception
     */
    public static function candleEveningStar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdleveningstar($open, $high, $low, $close, $penetration);
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
    public static function candleUpDownGapsSideBySideWhiteLines(array $open, array $high, array $low, array $close): array
    {
        return static::cdlgapsidesidewhite($open, $high, $low, $close);
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
    public static function candleGravestoneDoji(array $open, array $high, array $low, array $close): array
    {
        return static::cdlgravestonedoji($open, $high, $low, $close);
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
    public static function candleHammer(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhammer($open, $high, $low, $close);
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
    public static function candleHangingMan(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhangingman($open, $high, $low, $close);
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
    public static function candleHarami(array $open, array $high, array $low, array $close): array
    {
        return static::cdlharami($open, $high, $low, $close);
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
    public static function candleHaramiCross(array $open, array $high, array $low, array $close): array
    {
        return static::cdlharamicross($open, $high, $low, $close);
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
    public static function candleHighWave(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhighwave($open, $high, $low, $close);
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
    public static function candleHikkake(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhikkake($open, $high, $low, $close);
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
    public static function candleModifiedHikkake(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhikkakemod($open, $high, $low, $close);
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
    public static function candleHomingPigeon(array $open, array $high, array $low, array $close): array
    {
        return static::cdlhomingpigeon($open, $high, $low, $close);
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
    public static function candleIdenticalThreeCrows(array $open, array $high, array $low, array $close): array
    {
        return static::cdlidentical3crows($open, $high, $low, $close);
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
    public static function candleInNeck(array $open, array $high, array $low, array $close): array
    {
        return static::cdlinneck($open, $high, $low, $close);
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
    public static function candleInvertedHammer(array $open, array $high, array $low, array $close): array
    {
        return static::cdlinvertedhammer($open, $high, $low, $close);
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
    public static function candleKicking(array $open, array $high, array $low, array $close): array
    {
        return static::cdlkicking($open, $high, $low, $close);
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
    public static function candleKickingByLength(array $open, array $high, array $low, array $close): array
    {
        return static::cdlkickingbylength($open, $high, $low, $close);
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
    public static function candleLadderBottom(array $open, array $high, array $low, array $close): array
    {
        return static::cdlladderbottom($open, $high, $low, $close);
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
    public static function candleLongLeggedDoji(array $open, array $high, array $low, array $close): array
    {
        return static::cdllongleggeddoji($open, $high, $low, $close);
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
    public static function candleLongLine(array $open, array $high, array $low, array $close): array
    {
        return static::cdllongline($open, $high, $low, $close);
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
    public static function candleMarubozu(array $open, array $high, array $low, array $close): array
    {
        return static::cdlmarubozu($open, $high, $low, $close);
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
    public static function candleMatchingLow(array $open, array $high, array $low, array $close): array
    {
        return static::cdlmatchinglow($open, $high, $low, $close);
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
     * @throws \Exception
     */
    public static function candleMatHold(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdlmathold($open, $high, $low, $close, $penetration);
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
     * @throws \Exception
     */
    public static function candleMorningDojiStar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdlmorningdojistar($open, $high, $low, $close, $penetration);
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
     * @throws \Exception
     */
    public static function candleMorningStar(array $open, array $high, array $low, array $close, float $penetration = null): array
    {
        return static::cdlmorningstar($open, $high, $low, $close, $penetration);
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
    public static function candleOnNeck(array $open, array $high, array $low, array $close): array
    {
        return static::cdlonneck($open, $high, $low, $close);
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
    public static function candlePiercing(array $open, array $high, array $low, array $close): array
    {
        return static::cdlpiercing($open, $high, $low, $close);
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
    public static function candleRickshawMan(array $open, array $high, array $low, array $close): array
    {
        return static::cdlrickshawman($open, $high, $low, $close);
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
    public static function candleRisingFallingThreeMethods(array $open, array $high, array $low, array $close): array
    {
        return static::cdlrisefall3methods($open, $high, $low, $close);
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
    public static function candleSeparatingLines(array $open, array $high, array $low, array $close): array
    {
        return static::cdlseparatinglines($open, $high, $low, $close);
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
    public static function candleShootingStar(array $open, array $high, array $low, array $close): array
    {
        return static::cdlshootingstar($open, $high, $low, $close);
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
    public static function candleShortLine(array $open, array $high, array $low, array $close): array
    {
        return static::cdlshortline($open, $high, $low, $close);
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
    public static function candleSpinningTop(array $open, array $high, array $low, array $close): array
    {
        return static::cdlspinningtop($open, $high, $low, $close);
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
    public static function candleStalled(array $open, array $high, array $low, array $close): array
    {
        return static::cdlstalledpattern($open, $high, $low, $close);
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
    public static function candleStickSandwich(array $open, array $high, array $low, array $close): array
    {
        return static::cdlsticksandwich($open, $high, $low, $close);
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
    public static function candleTakuri(array $open, array $high, array $low, array $close): array
    {
        return static::cdltakuri($open, $high, $low, $close);
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
    public static function candleTasukiGap(array $open, array $high, array $low, array $close): array
    {
        return static::cdltasukigap($open, $high, $low, $close);
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
    public static function candleThrusting(array $open, array $high, array $low, array $close): array
    {
        return static::cdlthrusting($open, $high, $low, $close);
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
    public static function candleTristar(array $open, array $high, array $low, array $close): array
    {
        return static::cdltristar($open, $high, $low, $close);
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
    public static function candleUniqueThreeRiver(array $open, array $high, array $low, array $close): array
    {
        return static::cdlunique3river($open, $high, $low, $close);
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
    public static function candleUpsideGapTwoCrows(array $open, array $high, array $low, array $close): array
    {
        return static::cdlupsidegap2crows($open, $high, $low, $close);
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
    public static function candleUpsideDownsideGapThreeMethods(array $open, array $high, array $low, array $close): array
    {
        return static::cdlxsidegap3methods($open, $high, $low, $close);
    }

    /**
     * Vector Ceil
     *
     * Calculates the next highest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathCeiling(array $real): array
    {
        return static::ceil($real);
    }

    /**
     * Chande Momentum Oscillator
     *
     * A technical momentum indicator invented by the technical analyst Tushar Chande.
     * It is created by calculating the difference between the sum of all recent gains and the sum of all recent losses and then dividing the result by the sum of all price movement over the period.
     * This oscillator is similar to other momentum indicators such as the Relative Strength Index and the Stochastic Oscillator because it is range bounded (+100 and -100).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function chandeMomentumOscillator(array $real, int $timePeriod): array
    {
        return static::cmo($real, $timePeriod);
    }

    /**
     * Pearson's Correlation Coefficient (r)
     *
     * A type of correlation coefficient that represents the relationship between two variables that are measured on the same interval or ratio scale.
     *
     * @param array    $real0      Array of real values.
     * @param array    $real1      Array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function pearsonCorrelationCoefficient(array $real0, array $real1, int $timePeriod = null): array
    {
        return static::correl($real0, $real1, $timePeriod);
    }

    /**
     * Vector Trigonometric Cos
     *
     * Calculates the cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathCosine(array $real): array
    {
        return static::cos($real);
    }

    /**
     * Vector Trigonometric Cosh
     *
     * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathHyperbolicCosine(array $real): array
    {
        return static::cosh($real);
    }

    /**
     * Double Exponential Moving Average
     *
     * A technical indicator developed by Patrick Mulloy that first appeared in the February, 1994 Technical Analysis of Stocks & Commodities.
     * The DEMA is a calculation based on both a single exponential moving average (EMA) and a double EMA.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function doubleExponentialMovingAverage(array $real, int $timePeriod): array
    {
        return static::dema($real, $timePeriod);
    }

    /**
     * Vector Arithmetic Div
     *
     * Divides each value from real0 by the corresponding value from real1 and returns the resulting array.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathDivision(array $real0, array $real1): array
    {
        return static::div($real0, $real1);
    }

    /**
     * Directional Movement Index
     *
     * The directional movement index (DMI) is an indicator developed by J. Welles Wilder for identifying when a definable trend is present in an instrument.
     * That is, the DMI tells whether an instrument is trending or not.
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param int|null $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array  Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function directionalMovementIndex(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::dx($high, $low, $close, $timePeriod);
    }

    /**
     * Exponential Moving Average
     *
     * An exponential moving average (EMA) is a type of moving average that is similar to a simple moving average, except that more weight is given to the latest data.
     * It's also known as the exponentially weighted moving average.
     * This type of moving average reacts faster to recent price changes than a simple moving average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function exponentialMovingAverage(array $real, int $timePeriod): array
    {
        return static::ema($real, $timePeriod);
    }

    /**
     * Get error code
     *
     * Get error code of the last operation.
     *
     * @return int Returns the error code identified by one of the TRADER_ERR_* constants.
     * @throws \Exception
     */
    public static function errorNumber(): int
    {
        return static::errno();
    }

    /**
     * Vector Arithmetic Exp
     *
     * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathExponent(array $real): array
    {
        return static::exp($real);
    }

    /**
     * Vector Floor
     *
     * Calculates the next lowest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathFloor(array $real): array
    {
        return static::floor($real);
    }

    /**
     * Get compatibility mode
     *
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by TRADER_COMPATIBILITY_* series of constants.
     * @throws \Exception
     */
    public static function getCompatibilityMode(): int
    {
        return static::get_compat();
    }

    /**
     * Get unstable period
     *
     * Get unstable period factor for a particular function.
     *
     * @param int $functionId Function ID the factor to be read for. TRADER_FUNC_UNST_* series of constants should be used.
     *
     * @return int Returns the unstable period factor for the corresponding function.
     * @throws \Exception
     */
    public static function getUnstablePeriod(int $functionId): int
    {
        return static::get_unstable_period($functionId);
    }

    /**
     * Hilbert Transform - Dominant Cycle Period
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformDominantCyclePeriod(array $real): array
    {
        return static::ht_dcperiod($real);
    }

    /**
     * Hilbert Transform - Dominant Cycle Phase
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformDominantCyclePhase(array $real): array
    {
        return static::ht_dcphase($real);
    }

    /**
     * Hilbert Transform - Phasor Components
     *
     * @param array $real    Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformPhasorComponents(array $real): array
    {
        return static::ht_phasor($real);
    }

    /**
     * Hilbert Transform - SineWave
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformSineWave(array $real): array
    {
        return static::ht_sine($real);
    }

    /**
     * Hilbert Transform - Instantaneous TrendLine
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformInstantaneousTrendLine(array $real): array
    {
        return static::ht_trendline($real);
    }

    /**
     * Hilbert Transform - Trend vs Cycle Mode
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function hilbertTransformTrendVsCycleMode(array $real): array
    {
        return static::ht_trendmode($real);
    }

    /**
     * Kaufman Adaptive Moving Average
     *
     * Developed by Perry Kaufman, Kaufman's Adaptive Moving Average (KAMA) is a moving average designed to account for market noise or volatility.
     * KAMA will closely follow prices when the price swings are relatively small and the noise is low.
     * KAMA will adjust when the price swings widen and follow prices from a greater distance.
     * This trend-following indicator can be used to identify the overall trend, time turning points and filter price movements.
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function kaufmanAdaptiveMovingAverage(array $real, int $timePeriod = null): array
    {
        return static::kama($real, $timePeriod);
    }

    /**
     * Linear Regression Angle
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearRegressionAngle(array $real, int $timePeriod = null): array
    {
        return static::linearreg_angle($real, $timePeriod);
    }

    /**
     * Linear Regression Intercept
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearRegressionIntercept(array $real, int $timePeriod = null): array
    {
        return static::linearreg_intercept($real, $timePeriod);
    }

    /**
     * Linear Regression Slope
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearRegressionSlope(array $real, int $timePeriod = null): array
    {
        return static::linearreg_slope($real, $timePeriod);
    }

    /**
     * Linear Regression
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function linearRegression(array $real, int $timePeriod = null): array
    {
        return static::linearreg($real, $timePeriod);
    }

    /**
     * Vector Log Natural
     *
     * Calculates the natural logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathLogarithmNatural(array $real): array
    {
        return static::ln($real);
    }

    /**
     * Vector Log10
     *
     * Calculates the base-10 logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathLogarithmBase10(array $real): array
    {
        return static::log10($real);
    }

    /**
     * Moving average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param int      $mAType     Type of Moving Average. TRADER_MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function movingAverage(array $real, int $timePeriod = null, int $mAType = null): array
    {
        return static::ma($real, $timePeriod, $mAType);
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
     * @throws \Exception
     */
    public static function movingAverageConvergenceDivergence(array $real, int $fastPeriod = null, int $slowPeriod = null, int $signalPeriod = null): array
    {
        return static::macd($real, $fastPeriod, $slowPeriod, $signalPeriod);
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
     * @throws \Exception
     */
    public static function movingAverageConvergenceDivergenceExtended(array $real, int $fastPeriod = null, int $fastMAType = null, int $slowPeriod = null, int $slowMAType = null, int $signalPeriod = null): array
    {
        return static::macdext($real, $fastPeriod, $fastMAType, $slowPeriod, $slowMAType, $signalPeriod);
    }

    /**
     * Moving Average Convergence/Divergence Fix 12/26
     *
     * @param array    $real         Array of real values.
     * @param int|null $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function movingAverageConvergenceDivergenceFixed(array $real, int $signalPeriod = null): array
    {
        return static::macdfix($real, $signalPeriod);
    }

    /**
     * MESA Adaptive Moving Average
     *
     * @param array      $real      Array of real values.
     * @param float|null $fastLimit Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     * @param float|null $slowLimit Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mesaAdaptiveMovingAverage(array $real, float $fastLimit = null, float $slowLimit = null): array
    {
        return static::mama($real, $fastLimit, $slowLimit);
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
     * @throws \Exception
     */
    public static function movingAverageVariablePeriod(array $real, array $periods, int $minPeriod = null, int $maxPeriod = null, int $mAType = null): array
    {
        return static::mavp($real, $periods, $minPeriod, $maxPeriod, $mAType);
    }

    /**
     * Highest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMax(array $real, int $timePeriod = null): array
    {
        return static::max($real, $timePeriod);
    }

    /**
     * Index of highest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMaxIndex(array $real, int $timePeriod = null): array
    {
        return static::maxindex($real, $timePeriod);
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
    public static function mathMedianPrice(array $high, array $low): array
    {
        return static::medprice($high, $low);
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
     * @throws \Exception
     */
    public static function moneyFlowIndex(array $high, array $low, array $close, array $volume, int $timePeriod = null): array
    {
        return static::mfi($high, $low, $close, $volume, $timePeriod);
    }

    /**
     * MidPoint over period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function middlePoint(array $real, int $timePeriod = null): array
    {
        return static::midpoint($real, $timePeriod);
    }

    /**
     * Midpoint Price over period
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function middlePointPrice(array $high, array $low, int $timePeriod = null): array
    {
        return static::midprice($high, $low, $timePeriod);
    }

    /**
     * Lowest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMin(array $real, int $timePeriod = null): array
    {
        return static::min($real, $timePeriod);
    }

    /**
     * Index of lowest value over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMinIndex(array $real, int $timePeriod = null): array
    {
        return static::minindex($real, $timePeriod);
    }

    /**
     * Lowest and highest values over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMinMax(array $real, int $timePeriod = null): array
    {
        return static::minmax($real, $timePeriod);
    }

    /**
     * Indexes of lowest and highest values over a specified period
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathMinMaxIndex(array $real, int $timePeriod = null): array
    {
        return static::minmaxindex($real, $timePeriod);
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
     * @throws \Exception
     */
    public static function minusDirectionalIndicator(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::minus_di($high, $low, $close, $timePeriod);
    }

    /**
     * Minus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function minusDirectionalMovement(array $high, array $low, int $timePeriod = null): array
    {
        return static::minus_dm($high, $low, $timePeriod);
    }

    /**
     * Momentum
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function momentum(array $real, int $timePeriod = null): array
    {
        return static::mom($real, $timePeriod);
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
    public static function mathMultiply(array $real0, array $real1): array
    {
        return static::mult($real0, $real1);
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
     * @throws \Exception
     */
    public static function normalizedAverageTrueRange(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::natr($high, $low, $close, $timePeriod);
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
    public static function onBalanceVolume(array $real, array $volume): array
    {
        return static::obv($real, $volume);
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
     * @throws \Exception
     */
    public static function plusDirectionalIndicator(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::plus_di($high, $low, $close, $timePeriod);
    }

    /**
     * Plus Directional Movement
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function plusDirectionalMovement(array $high, array $low, int $timePeriod = null): array
    {
        return static::plus_dm($high, $low, $timePeriod);
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
     * @throws \Exception
     */
    public static function percentagePriceOscillator(array $real, int $fastPeriod = null, int $slowPeriod = null, int $mAType = null): array
    {
        return static::ppo($real, $fastPeriod, $slowPeriod, $mAType);
    }

    /**
     * Rate of change : ((price/prevPrice)-1)*100
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rateOfChange(array $real, int $timePeriod = null): array
    {
        return static::roc($real, $timePeriod);
    }

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rateOfChangePercentage(array $real, int $timePeriod = null): array
    {
        return static::rocp($real, $timePeriod);
    }

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rateOfChangeRatio100(array $real, int $timePeriod = null): array
    {
        return static::rocr100($real, $timePeriod);
    }

    /**
     * Rate of change ratio: (price/prevPrice)
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function rateOfChangeRatio(array $real, int $timePeriod = null): array
    {
        return static::rocr($real, $timePeriod);
    }

    /**
     * Relative Strength Index
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function relativeStrengthIndex(array $real, int $timePeriod = null): array
    {
        return static::rsi($real, $timePeriod);
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
     * @throws \Exception
     */
    public static function parabolicSAR(array $high, array $low, float $acceleration = null, float $maximum = null): array
    {
        return static::sar($high, $low, $acceleration, $maximum);
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
     * @throws \Exception
     */
    public static function parabolicSARExtended(array $high, array $low, float $startValue = null, float $offsetOnReverse = null, float $accelerationInitLong = null, float $accelerationLong = null, float $accelerationMaxLong = null, float $accelerationInitShort = null, float $accelerationShort = null, float $accelerationMaxShort = null): array
    {
        return static::sarext($high, $low, $startValue, $offsetOnReverse, $accelerationInitLong, $accelerationLong, $accelerationMaxLong, $accelerationInitShort, $accelerationShort, $accelerationMaxShort);
    }

    /**
     * Set compatibility mode
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. TRADER_COMPATIBILITY_* series of constants should be used.
     *
     * @throws \Exception
     */
    public static function setCompatibilityMode(int $compatId)
    {
        static::set_compat($compatId);
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
    public static function setUnstablePeriod(int $functionId, int $timePeriod)
    {
        static::set_unstable_period($functionId, $timePeriod);
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
    public static function mathSine(array $real): array
    {
        return static::sin($real);
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
    public static function mathHyperbolicSine(array $real): array
    {
        return static::sinh($real);
    }

    /**
     * Simple Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function simpleMovingAverage(array $real, int $timePeriod = null): array
    {
        return static::sma($real, $timePeriod);
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
    public static function mathSquareRoot(array $real): array
    {
        return static::sqrt($real);
    }

    /**
     * Standard Deviation
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $nbDev
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function standardDeviation(array $real, int $timePeriod = null, float $nbDev = null): array
    {
        return static::stddev($real, $timePeriod, $nbDev);
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
     * @throws \Exception
     */
    public static function stochastic(array $high, array $low, array $close, int $fastK_Period = null, int $slowK_Period = null, int $slowK_MAType = null, int $slowD_Period = null, int $slowD_MAType = null): array
    {
        return static::stoch($high, $low, $close, $fastK_Period, $slowK_Period, $slowK_MAType, $slowD_Period, $slowD_MAType);
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
     * @throws \Exception
     */
    public static function stochasticFast(array $high, array $low, array $close, int $fastK_Period = null, int $fastD_Period = null, int $fastD_MAType = null): array
    {
        return static::stochf($high, $low, $close, $fastK_Period, $fastD_Period, $fastD_MAType);
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
     * @throws \Exception
     */
    public static function stochasticRelativeStrengthIndex(array $real, int $timePeriod = null, int $fastK_Period = null, int $fastD_Period = null, int $fastD_MAType = null): array
    {
        return static::stochrsi($real, $timePeriod, $fastK_Period, $fastD_Period, $fastD_MAType);
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
    public static function mathSubtraction(array $real0, array $real1): array
    {
        return static::sub($real0, $real1);
    }

    /**
     * Summation
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function mathSummation(array $real, int $timePeriod = null): array
    {
        return static::sum($real, $timePeriod);
    }

    /**
     * Triple Exponential Moving Average (T3)
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $vFactor    Volume Factor. Valid range from 1 to 0.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tripleExponentialMovingAverageT3(array $real, int $timePeriod = null, float $vFactor = null): array
    {
        return static::t3($real, $timePeriod, $vFactor);
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
    public static function mathTangent(array $real): array
    {
        return static::tan($real);
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
    public static function mathHyperbolicTangent(array $real): array
    {
        return static::tanh($real);
    }

    /**
     * Triple Exponential Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tripleExponentialMovingAverage(array $real, int $timePeriod = null): array
    {
        return static::tema($real, $timePeriod);
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
    public static function trueRange(array $high, array $low, array $close): array
    {
        return static::trange($high, $low, $close);
    }

    /**
     * Triangular Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function triangularMovingAverage(array $real, int $timePeriod = null): array
    {
        return static::trima($real, $timePeriod);
    }

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function tripleExponentialAverage(array $real, int $timePeriod = null): array
    {
        return static::trix($real, $timePeriod);
    }

    /**
     * Time Series Forecast
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function timeSeriesForecast(array $real, int $timePeriod = null): array
    {
        return static::tsf($real, $timePeriod);
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
    public static function typicalPrice(array $high, array $low, array $close): array
    {
        return static::typprice($high, $low, $close);
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
     * @throws \Exception
     */
    public static function ultimateOscillator(array $high, array $low, array $close, int $timePeriod1 = null, int $timePeriod2 = null, int $timePeriod3 = null): array
    {
        return static::ultosc($high, $low, $close, $timePeriod1, $timePeriod2, $timePeriod3);
    }

    /**
     * Variance
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float    $nbDev
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function variance(array $real, int $timePeriod = null, float $nbDev = null): array
    {
        return static::var($real, $timePeriod, $nbDev);
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
    public static function weightedClosePrice(array $high, array $low, array $close): array
    {
        return static::wclprice($high, $low, $close);
    }

    /**
     * Williams' %R
     *
     * @param array    $high       High price, array of real values.
     * @param array    $low        Low price, array of real values.
     * @param array    $close      Closing price, array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function williamsR(array $high, array $low, array $close, int $timePeriod = null): array
    {
        return static::willr($high, $low, $close, $timePeriod);
    }

    /**
     * Weighted Moving Average
     *
     * @param array    $real       Array of real values.
     * @param null|int $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data or false on failure.
     * @throws \Exception
     */
    public static function weightedMovingAverage(array $real, int $timePeriod = null): array
    {
        return static::wma($real, $timePeriod);
    }

}
