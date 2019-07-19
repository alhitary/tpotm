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

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	'TPOTM_CAT'						=> 'أنشط الأعضاء لهذا الشهر',
	'TPOTM_EVER_CAT'				=> 'أنشط الأعضاء سابقاً',
	'TPOTM_NOW'						=> 'أكثر الأعضاء مُشاركة لهذا الشهر هو ',
	'TPOTM_NOBODY'					=> 'لا يوجد حالياً ',
	'TPOTM_BADGE'					=> 'صورة الكأس ?',
	'TPOTM_BADGE_MINIPROFILE'		=> 'أنشط الأعضاء لهذا الشهر',
	'TOTAL_MONTH'					=> ' من أصل <strong>%1s</strong> (%2s%%)',
	'TPOTM_EXPLAIN'					=> 'من %1s إلى %2s',
	'TPOTM_NO_EXPLAIN'				=> 'خلال الشهر الحالي',
	'TPOTM_TOT_POST'				=> 'إجمالي المشاركات',
	'TPOTM_DATE'					=> 'السنة والشهر',
	'TPOTM_LAST_POST_IN_MONTH'		=> 'آخر مشاركة في ',

	'TPOTM_CACHE'	=> [
		0	=> ' <i>[التحديث عند كل تحميل للصفحة]</i>',
		1	=> ' <i>[التحديث كل <strong>%d</strong> دقيقة]</i>',
		2	=> ' <i>[التحديث كل <strong>%d</strong> دقائق]</i>',
	],

	'TPOTM_POST'	=> [
		1	=> ' بإجمالي <strong>%d</strong> مُشاركة',
		2	=> ' بإجمالي <strong>%d</strong> مشاركات',
	],

	// Translators please do not change the following line, no need to translate it!
	'TPOTM_CREDIT_LINE'		=>	' | <a href="https://github.com/3D-I/tpotm">أنشط الأعضاء لهذا الشهر</a> &copy; 2005, 2018 - 3Di',

	// Hall of fame
	'VIEWING_TPOTM_HALL'			=> 'يُشاهد قاعة المُمَيَّزين',
	'TPOTM_PAGE'					=> 'قاعة المُمَيَّزين',
	'TPOTM_HELLO'					=> 'أنشط الأعضاء لهذا الشهر - قاعة المُمَيَّزين',
	'TPOTM_EXPLAIN_HALL'			=> 'من %1s إلى %2s',
	'TPOTM_HALL_NO_EXPLAIN'			=> 'منذ تاريخ قديم حتى نهاية الشهر السابق',

	'HALL_OF_FAME'	=> [
		0	=> 'قاعة المُمَيَّزين',
		1	=> 'قاعة المُمَيَّزين &bull; صفحة %d',
		2	=> 'قاعة المُمَيَّزين &bull; صفحة %d',
	],

	'TPOTM_HALL_COUNT'	=> [
		1	=> ' تم العثور على إجمالي <strong>%d</strong> أنشط عضو مشارك',
		2	=> ' تم العثور على إجمالي <strong>%d</strong> أنشط أعضاء مشاركين',
	],

	'NOT_AUTHORISED_TPOTM__HALL'	=> 'ليس لديك الصلاحية لمشاهدة قاعة المُمَيَّزين لأنشط الأعضاء لهذا الشهر.',
	'TPOTM__HALL_DISABLED'			=> 'تم تعطيل قاعة المُمَيَّزين لأنشط الأعضاء لهذا الشهر.',
]);
