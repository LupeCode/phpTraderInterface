# PHP Trader Interface

This is an interface to the PHP Trader Extension.
The PHP Trader Extension is available from <http://pecl.php.net/package/trader>.
The extension and the source for it can be downloaded there.

### Requires the PHP Trader Extension to be installed.

This project is just an interface to that extension, and does not work without it.

If you cannot install the PECL extension, try the [PHP Trader Native](https://github.com/LupeCode/phpTraderNative) project instead.

### Requires PHP 7.0.0 or newer

Variable types are set on all function parameters.

### Requires PECL Trader 0.4.1.

If you are using version 0.4.0, see the branch `trader-0.4.0` for that.

## Purpose

This package is meant to help when using the Trader PECL package.
This is helpful if you do not have the code stub for the Trader Extension.
Loading this interface will provide your IDE with the function information and auto completing.

## How to use

Lets assume that you want to generate a correlation indicator.
Instead of using 
`trader_correl($Open, $Close, 30)`
You can now use the exact named
`\LupeCode\phpTraderInterface\Trader::correl($Open, $Close, 30)`
or the friendly named
`\LupeCode\phpTraderInterface\Trader::pearsonCorrelationCoefficient($Open, $Close, 30)`

## Metrics & Coverage
### PHP Metrics Report
To see the current report of metrics by PHP Metrics, visit [Metrics](https://projects.lupecode.com/phpTraderInterface/metrics/)
### PHP Unit Coverage
To see the current report of coverage by PHP Unit, visit [Coverage](https://projects.lupecode.com/phpTraderInterface/logs/report/)
### PHP Unit Test Results
 * PHP 7.0 NTS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.0NTS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.0NTS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.0NTS.html)
 * PHP 7.0 TS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.0TS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.0TS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.0TS.html)
 * PHP 7.1 NTS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.1NTS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.1NTS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.1NTS.html)
 * PHP 7.1 TS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.1TS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.1TS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.1TS.html)
 * PHP 7.2 NTS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.2NTS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.2NTS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.2TS.html)
 * PHP 7.2 TS [[XML]](https://projects.lupecode.com/phpTraderInterface/logs/logfile-7.2TS.xml) [[TXT]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.2TS.txt) [[HTML]](https://projects.lupecode.com/phpTraderInterface/logs/testdox-7.2TS.html)

## License
Copyright (C) Lupe Code, LLC.; Joshua Lopez

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
