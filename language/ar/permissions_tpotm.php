<?php
/**
 *
 * Top Poster Of The Month. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2005, 2017, 3Di
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
	'ACL_U_ALLOW_TPOTM_VIEW'	=> 'يستطيع مشاهدة “أنشط الأعضاء لهذا الشهر”',
	'ACL_A_TPOTM_ADMIN'			=> 'يستطيع إدارة “أنشط الأعضاء لهذا الشهر”',
]);
