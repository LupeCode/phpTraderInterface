# PHP Trader Interface

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/221a58d6d99943688ff68ca1141a1c86)](https://www.codacy.com/app/jbspublic/phpTraderInterface?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=LupeCode/phpTraderInterface&amp;utm_campaign=Badge_Grade)

This is an interface to the PHP Trader Extension.
The PHP Trader Extension is available from <http://pecl.php.net/package/trader>.
The extension and the source for it can be downloaded there.

### Requires the PHP Trader Extension to be installed.

This project is just an interface to that extension, and does not work without it.

### Requires PHP 7.0.0 or newer

Variable types are set on all function parameters.

### Requires PECL Trader 0.4.1.

If you are using version 0.4.0, see the branch `trader-0.4.0` for that.

## How to use

Lets assume that you want to generate a correlation indicator.
Instead of using 
`trader_correl($Open, $Close, 30)`
You can now use the exact named
`\LupeCode\phpTraderInterface\Trader::correl($Open, $Close, 30)`
or the friendly named
`\LupeCode\phpTraderInterface\Trader::pearsonCorrelationCoefficient($Open, $Close, 30)`

This is helpful if you do not have the code stub for the Trader Extension.  Loading this interface will provide your IDE with the function information and auto completing.

## License
Copyright (C) 2016 Lupe Code, LLC.; Joshua Saige

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program.  If not, see <http://www.gnu.org/licenses/>.
