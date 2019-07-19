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
	'USER_TOOLTIP_HOVER'		=> '<em><< التلميح</em>',
	'USER_TOOLTIP'				=> 'تنسيق التاريخ UTC+00:00 في التلميح',
	'USER_TOOLTIP_EXPLAIN'		=> '<strong>نعم</strong> = سيكون التنسيق بهذا الشكل <em>01 10 2017 00:01</em> إلى <em>01 11 2027 00:00</em><br><strong>لا</strong> = التنسيق الإفتراضي للمنتدى',
	'USER_TOOLTIP_SEL'			=> 'إظهار تنسيق التاريخ في التلميح',
	'USER_TOOLTIP_SEL_EXPLAIN'	=> '<strong>لا</strong> = سيتم تجاهل الخيار المحدد أعلاه وإظهار رسالة قياسية',
]);
