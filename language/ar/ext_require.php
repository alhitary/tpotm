<?php
/**
 *
 * Top Poster Of The Month. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005,2017, 3Di
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Translated By : Bassel Taha Alhitary <http://alhitary.net>
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ERROR_MSG_3111_321_MISTMATCH'	=>	'الحد الأدنى لنسخة المنتدى 3.1.11 ولكن أقل من 3.2.0@dev أو أكبر من 3.2.1 ولكن أقل من 3.3.0@dev',
	'ERROR_MSG_PHP_VERSION'			=>	'يجب أن يكون لديك نسخة PHP أكبر من 5.4.0',
]);
