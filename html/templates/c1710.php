<?php
# vim: syntax=php tabstop=4 softtabstop=0 noexpandtab laststatus=1 ruler

/**
 * html/templates/c1710.php
 *
 * c1710 template for UNetLab.
 *
 * LICENSE:
 *
 * This file is part of UNetLab (Unified Networking Lab).
 *
 * UNetLab is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * UNetLab is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with UNetLab.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author Andrea Dainese <andrea.dainese@gmail.com>
 * @copyright 2014-2015 Andrea Dainese
 * @license http://www.gnu.org/licenses/gpl.html
 * @link http://www.unetlab.com/
 * @version 20150428
 */

$p['type'] = 'dynamips';    // Must be iol, dynamips or qemu
$p['name'] = '1710';          // Can be empty
$p['icon'] = 'Router.png';    // Can be empty, or a icon inside /opt/unetlab/html/images/icons/
$p['idlepc'] = '0x80369ac4';  // Must be hexadecimal
$p['nvram'] = 128;            // Must be integer
$p['ram'] = 96;               // Must be integer
$p['dynamips_options'] = '-P 1700 -t 1710 -o 4 -c 0x2102 -X';
?>