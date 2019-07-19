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
	'TPOTM_GENERAL'							=>	'الإعدادات العامة',
	// Legend Tpl locations
	'ACP_TPOTM_TEMPLATE_LOCATIONS'			=>	'مواقع العرض',
	'ACP_TPOTM_TEMPLATE_LOCATIONS_EXPLAIN'	=>	'تستطيع إظهار نتائج “أنشط الأعضاء لهذا الشهر” في أسفل أو أعلى الصفحة الرئيسية. وتستطيع أيضاً عرض النتائج في صفحات المنتديات.',
	// Legend Hall of fame
	'ACP_TPOTM_HALL'						=>	'إعدادات قاعة المُمَيَّزين',
	// Legend Board Management
	'ACP_TPOTM_MANAGEMENT'					=>	'إدارة المنتدى',
	'ACP_TPOTM_MANAGEMENT_EXPLAIN'			=>	'<strong>هذه الإعدادات تنطبق على كل النتائج.</strong><br><em>نرجوا الملاحظة:</em> خيار المؤسسين يعمل تماماً مع خيار المدراء والمشرفين. بمعنى آخر إذا حددت “لا” لخيار المدراء والمشرفين مع تحديد “نعم” لخيار المؤسسين, فلن يتم احتساب المؤسسين على أي حال.',
	// Tpl locations
	'TPOTM_INDEX'							=>	'الصفحة الرئيسية',
	'TPOTM_BOTTOM'							=>	'أسفل',
	'TPOTM_TOP'								=>	'أعلى',
	'TPOTM_FORUMS'							=>	'العرض في صفحات المنتديات',
	// Hall of fame
	'TPOTM_HALL'							=>	'تفعيل قاعة المُمَيَّزين',
	'TPOTM_HALL_EXPLAIN'					=>	'سيتم تعطيل صفحة قاعة المُمَيَّزين وكذلك إخفاء الرابط في الشريط العلوي عند اختيارك “لا”',
	'TPOTM_USERS_PAGE'						=>	'أنشط الأعضاء',
	'TPOTM_USERS_PAGE_EXPLAIN'				=>	'عدد الأعضاء الذين سيتم عرضهم في كل صفحة',
	'ACP_TPOTM_TTL_MODE'					=>	'<em>التخزين الديناميكي التلقائي للملفات المؤقتة</em> يأخذ السنة الكبيسة في الإعتبار ويعمل على التجديد تلقائياً في أول أيام كل شهر.<br>سيتم تعطيل جميع الخيارات في القائمة المنسدلة إذا تم تفعيل هذا الخيار.<br>سيتم تعطيل جميع خيارات الملفات المؤقتة عند تحديد “لا”. اختار أحد الخيارات (مرة أخرى) لتفعيل أحد حالات تخزين الملفات المؤقتة.',
	'TPOTM_TTL_MODE'						=>	'التخزين الديناميكي للملفات المؤقتة TPE',
	'TPOTM_TTL_TPE'							=>	'مُدة التخزين TPE',
	'TPOTM_ACP_NO_CACHE'					=>	'بدون الملفات المؤقتة',
	'TPOTM_ACP_ONE_DAY'						=>	'1 يوم',
	'TPOTM_ACP_ONE_WEEK'					=>	'1 أسبوع',
	'TPOTM_ACP_TWO_WEEKS'					=>	'2 أسابيع',
	'TPOTM_ACP_ONE_MONTH'					=>	'1 شهر',
	'ACP_TPOTM_HALL_EPOCH_EXPLAIN'			=>	'باستخدام <em>تاريخ قديم</em> فإن عملية الاستخراج تبدأ منذ <em>وقت قديم 1970-01-01 00:00</em> بدلاً من تاريخ بداية تأسيس المنتدى. لاستخدامها في حالة قيامك بإعادة الضبط في مرحلة ما بذلك التاريخ وتم استبعاد بعض الأعضاء من قائمة <em>أنشط الأعضاء سابقاً</em>, والتي تعتمد أيضاً على وقت المشاركة.',
	'TPOTM_HALL_EPOCH'						=>	'استخراج الأعضاء منذ',
	'TPOTM_EPOCH'							=>	'تاريخ قديم',
	'TPOTM_BOARD_S_DATE'					=>	'تاريخ بداية تأسيس المنتدى',
	// Variouses
	'ACP_TPOTM_VARIOUSES'					=>	'إعدادات عامة',
	'TPOTM_TTL'								=>	'مُدة التخزين',
	'TPOTM_TTL_EXPLAIN'						=>	'الوقت بالدقائق لتخزين الملفات المؤقتة. القيمة صفر 0 تعني تعطيل هذا الخيار<br><em>استخدمها لتحسين الأداء</em>',
	'TPOTM_AVATAR'							=>	'صور شخصية مصغرة',
	'TPOTM_AVATAR_EXPLAIN'					=>	'إظهار الصور الشخصية المصغرة للأعضاء في النتائج',
	'TPOTM_MINIPROFILE'						=>	'العرض في معلومات العضو للمشاركة',
	'TPOTM_MINIPROFILE_EXPLAIN'				=>	'إظهار صورة الكأس في معلومات العضو بصفحة الموضوع',
	'TPOTM_ADM_MODS'						=>	'احتساب المدراء والمشرفين',
	'TPOTM_ADM_MODS_EXPLAIN'				=>	'نعم = تحسين الأداء<br><em>لا = زيادة الحِمل لقاعدة البيانات, يستحسن استخدامها مع تفعيل الملفات المؤقتة.</em>',
	'TPOTM_FOUNDERS'						=>	'احتساب المؤسسين',
	'TPOTM_FOUNDERS_EXPLAIN'				=>	'نعم = تحسين الأداء<br><em>استخدم هذا مع تفعيل الخيار أعلاه.</em>',
	'TPOTM_BANNEDS'							=>	'احتساب الأعضاء المحظورين',
	'TPOTM_BANNEDS_EXPLAIN'					=>	'نعم = تحسين الأداء<br>',
	// Errors
	'ACP_TPOTM_ERRORS'						=>	'أخطاء',
	'TPOTM_BADGE_IMG_INVALID'				=>	'هناك خطأ في إسم صورة الكأس IMG للتصميم <strong><em>"%1s"</em></strong> المنصب في منتداك أو أن مجلد التصميم المماثل في الإضافة مفقود تماماً. تحقق من مجلد التصميم المماثل ومجلدات الصور لهذه الإضافة.<br>إسم صورة الكأس يجب أن يكون: <em><strong>tpotm_badge.png</strong></em>.<br><em>تم تعليق لوحة التحكم الإدارية لهذه الإضافة ولا يمكن تعديل الإعدادات الحالية حتى يتم إصلاح المشكلة.</em>',
]);
