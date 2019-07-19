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
	'ACP_TPOTM_TITLE'				=> 'أنشط الأعضاء لهذا الشهر',
	'ACP_TPOTM_SETTINGS'			=> 'الإعدادات',
	'ACP_TPOTM_SETTING_SAVED'		=> 'تم حفظ الإعدادات بنجاح.',

	// Error log
	'TPOTM_LOG_CONFIG_SAVED'		=> '<strong>تم حفظ إعدادات “أنشط الأعضاء لهذا الشهر”.</strong>',
	'TPOTM_LOG_BADGE_IMG_INVALID'	=> '<strong>“أنشط الأعضاء لهذا الشهر” - <em>إسم صورة الكأس</em> غير صحيح أو مفقود تماماً.</strong>',
]);
