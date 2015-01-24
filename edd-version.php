<?php
/*
Plugin Name: EDD Version
Plugin URI: http://www.jeangalea.com
Description: Shortcode to output the version number of an EDD download. Requires the EDD Software Licensing add-on.
Version: 1.0
Author: Jean Galea
Author URI: http://www.jeangalea.com
License: GPL2

Copyright 2015  Jean Galea  (email : info@jeangalea.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Add Download Version Shortcode
function edd_version_shortcode() {
  $version = get_post_meta( get_the_ID(), '_edd_sl_version', TRUE );
  return $version;
}
add_shortcode( 'edd_version', 'edd_version_shortcode' );