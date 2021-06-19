<?php
/**
 * @package apiUser
 * @version 1.0.0
 */
/*
Plugin Name: apiUser
Plugin URI: https://srinathdevinfo.github.io/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Srinath Madusanka
Version: 1.0.0
Author URI: https://srinathdevinfo.github.io/
License: GPLv2 or later
Text Domain: apiuser
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

// Exit if accessed directly.
defined('ABSPATH') or die();


class ApiUser
{
    function activate()
    {
    }
    

    function deactivate()
    {
    }

    function uninstall()
    {
    }
}




if (class_exists('ApiUser')) {
    $ApiUser=new ApiUser();
}

//activation
register_activation_hook(__FILE__, array($ApiUser,'activate'));

//deactivation
register_deactivation_hook(__FILE__, array($ApiUser,'activate'));
//uninstall
