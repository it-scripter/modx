<?php
/**
 * LudwigMarkdown
 *
 * Copyright 2014 by Thomas Ludwig <thomas@ludwig.im>
 *
 * LudwigMarkdown is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * LudwigMarkdown is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * LudwigMarkdown; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package ludwigmarkdown
 */
/**
 * Define the MODX path constants necessary for installation
 *
 * @package ludwigmarkdown
 * @subpackage build
 */
/* define package name */
define('PKG_NAME', 'LudwigMarkdown');
define('PKG_NAME_LOWER', strtolower(PKG_NAME));
define('PKG_VERSION','1.0.0');
define('PKG_RELEASE','pl');

define('MODX_ADDON_PATH', realpath(dirname(dirname(__FILE__).'/../../')) .'/');

define('MODX_BASE_PATH', '/var/www/modx/');
define('MODX_CORE_PATH', MODX_BASE_PATH . 'core/');
define('MODX_MANAGER_PATH', MODX_BASE_PATH . 'manager/');
define('MODX_CONNECTORS_PATH', MODX_BASE_PATH . 'connectors/');
define('MODX_ASSETS_PATH', MODX_BASE_PATH . 'assets/');

define('MODX_BASE_URL','/');
define('MODX_CORE_URL', MODX_BASE_URL . 'core/');
define('MODX_MANAGER_URL', MODX_BASE_URL . 'manager/');
define('MODX_CONNECTORS_URL', MODX_BASE_URL . 'connectors/');
define('MODX_ASSETS_URL', MODX_BASE_URL . 'assets/');
