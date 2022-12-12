<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'الإعدادات',
    'settings_save' => 'حفظ الإعدادات',
    'settings_save_success' => 'تم حفظ الإعدادات',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => 'تخصيص',
    'app_features_security' => 'الميزات و الأمان',
    'app_name' => 'اسم التطبيق',
    'app_name_desc' => 'سيتم عرض هذا الاسم في الترويسة وفي أي رسالة بريد إلكتروني.',
    'app_name_header' => 'عرض اسم التطبيق في الترويسة؟',
    'app_public_access' => 'الوصول العام',
    'app_public_access_desc' => 'تمكين هذا الخيار سيسمح للزوار، الذين لم يتم تسجيل دخولهم، بالوصول إلى المحتوى في مثيل مكدس الكتب الخاص بك.',
    'app_public_access_desc_guest' => 'يمكن التحكم في وصول الزوار العموميين من خلال المستخدم "الضيف".',
    'app_public_access_toggle' => 'السماح بالوصول العام',
    'app_public_viewing' => 'السماح بالعرض على العامة؟',
    'app_secure_images' => 'تفعيل حماية أكبر لرفع الصور؟',
    'app_secure_images_toggle' => 'لمزيد من الحماية',
    'app_secure_images_desc' => 'لتحسين أداء النظام, ستكون جميع الصور متاحة للعامة. هذا الخيار يضيف سلسلة من الحروف والأرقام العشوائية صعبة التخمين إلى رابط الصورة. الرجاء التأكد من تعطيل فهرسة المسارات لمنع الوصول السهل.',
    'app_default_editor' => 'Default Page Editor',
    'app_default_editor_desc' => 'Select which editor will be used by default when editing new pages. This can be overridden at a page level where permissions allow.',
    'app_custom_html' => 'Custom HTML head content',
    'app_custom_html_desc' => 'سيتم إدراج أي محتوى مضاف هنا في الجزء السفلي من قسم <head> من كل صفحة. هذا أمر مفيد لتجاوز الأنماط أو إضافة رمز التحليل.',
    'app_custom_html_disabled_notice' => 'تم تعطيل محتوى HTML الرئيسي المخصص في صفحة الإعدادات هذه لضمان عكس أي تغييرات متتالية.',
    'app_logo' => 'شعار التطبيق',
    'app_logo_desc' => 'يجب أن تكون الصورة بارتفاع 43 بكسل. <br>سيتم تصغير الصور الأكبر من ذلك.',
    'app_primary_color' => 'اللون الأساسي للتطبيق',
    'app_primary_color_desc' => 'يجب أن تكون القيمة من نوع hex. <br>اترك الخانة فارغة للرجوع للون الافتراضي.',
    'app_homepage' => 'الصفحة الرئيسية للتطبيق',
    'app_homepage_desc' => 'الرجاء اختيار صفحة لتصبح الصفحة الرئيسية بدل من الافتراضية. سيتم تجاهل جميع الأذونات الخاصة بالصفحة المختارة.',
    'app_homepage_select' => 'اختر صفحة',
    'app_footer_links' => 'Footer Links',
    'app_footer_links_desc' => 'Add links to show within the site footer. These will be displayed at the bottom of most pages, including those that do not require login. You can use a label of "trans::<key>" to use system-defined translations. For example: Using "trans::common.privacy_policy" will provide the translated text "Privacy Policy" and "trans::common.terms_of_service" will provide the translated text "Terms of Service".',
    'app_footer_links_label' => 'Link Label',
    'app_footer_links_url' => 'Link URL',
    'app_footer_links_add' => 'Add Footer Link',
    'app_disable_comments' => 'تعطيل التعليقات',
    'app_disable_comments_toggle' => 'تعطيل التعليقات',
    'app_disable_comments_desc' => 'تعطيل التعليقات على جميع الصفحات داخل التطبيق. التعليقات الموجودة من الأصل لن تكون ظاهرة.',

    // Color settings
    'content_colors' => 'ألوان المحتوى',
    'content_colors_desc' => 'تعيين الألوان لجميع العناصر في التسلسل الهرمي لتنظيم الصفحات. يوصى باختيار الألوان ذات السطوع المماثل للألوان الافتراضية للقراءة.',
    'bookshelf_color' => 'لون الرف',
    'book_color' => 'لون الكتاب',
    'chapter_color' => 'لون الفصل',
    'page_color' => 'لون الصفحة',
    'page_draft_color' => 'لون مسودة الصفحة',

    // Registration Settings
    'reg_settings' => 'إعدادات التسجيل',
    'reg_enable' => 'تمكين التسجيل',
    'reg_enable_toggle' => 'تمكين التسجيل',
    'reg_enable_desc' => 'عند تمكين التسجيل سيكون المستخدم قادرا على تسجيل نفسه كمستخدم تطبيق. عند التسجيل يعطى لهم دور مستخدم افتراضي وحيد.',
    'reg_default_role' => 'دور المستخدم الأساسي بعد التسجيل',
    'reg_enable_external_warning' => 'يتم تجاهل الخيار أعلاه بينما يتم تفعيل مصادقة LDAP الخارجية أو SAML. حسابات المستخدم للأعضاء غير الحاليين سيتم إنشاؤها تلقائياً إذا كانت المصادقة، مقابل النظام الخارجي المستخدم، ناجحة.',
    'reg_email_confirmation' => 'تأكيد البريد الإلكتروني',
    'reg_email_confirmation_toggle' => 'يتطلب تأكيد البريد الإلكتروني',
    'reg_confirm_email_desc' => 'إذا تم استخدام قيود للمجال سيصبح التأكيد عن طريق البريد الإلكتروني إلزامي وسيتم تجاهل القيمة أسفله.',
    'reg_confirm_restrict_domain' => 'تقييد التسجيل على مجال محدد',
    'reg_confirm_restrict_domain_desc' => 'أدخل قائمة مفصولة بفواصل لنطاقات البريد الإلكتروني التي ترغب في تقييد التسجيل إليها. سيتم إرسال بريد إلكتروني للمستخدمين لتأكيد عنوانهم قبل السماح لهم بالتفاعل مع التطبيق. <br> لاحظ أن المستخدمين سيكونون قادرين على تغيير عناوين البريد الإلكتروني الخاصة بهم بعد التسجيل بنجاح.',
    'reg_confirm_restrict_domain_placeholder' => 'لم يتم اختيار أي قيود',

    // Maintenance settings
    'maint' => 'الصيانة',
    'maint_image_cleanup' => 'تنظيف الصور',
    'maint_image_cleanup_desc' => 'مسح الصفحة ومراجعة المحتوى للتحقق من أي الصور والرسوم المستخدمة حاليًا وأي الصور زائدة عن الحاجة. تأكد من إنشاء قاعدة بيانات كاملة و نسخة احتياطية للصور قبل تشغيل هذا.',
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'بدء التنظيف',
    'maint_image_cleanup_warning' => 'يوجد عدد :count من الصور المحتمل عدم استخدامها. تأكيد حذف الصور؟',
    'maint_image_cleanup_success' => 'تم إيجاد وحذف عدد :count من الصور المحتمل عدم استخدامها!',
    'maint_image_cleanup_nothing_found' => 'لم يتم حذف أي شيء لعدم وجود أي صور غير مسمتخدمة',
    'maint_send_test_email' => 'إرسال بريد إلكتروني تجريبي',
    'maint_send_test_email_desc' => 'يرسل هذا بريدًا إلكترونيًا تجريبيًا إلى عنوان بريدك الإلكتروني المحدد في ملفك الشخصي.',
    'maint_send_test_email_run' => 'إرسال بريد إليكتروني تجريبي',
    'maint_send_test_email_success' => 'تم إرسال البريد الإلكتروني إلى:العنوان',
    'maint_send_test_email_mail_subject' => 'اختبار البريد الإلكتروني',
    'maint_send_test_email_mail_greeting' => 'يبدو أن تسليم البريد الإلكتروني يعمل!',
    'maint_send_test_email_mail_text' => 'تهانينا! كما تلقيت إشعار هذا البريد الإلكتروني، يبدو أن إعدادات البريد الإلكتروني الخاص بك قد تم تكوينها بشكل صحيح.',
    'maint_recycle_bin_desc' => 'تُرسل الأرفف والكتب والفصول والصفحات المحذوفة إلى سلة المحذوفات حتى يمكن استعادتها أو حذفها نهائيًا. قد يتم إزالة العناصر الأقدم في سلة المحذوفات تلقائيًا بعد فترة اعتمادًا على تكوين النظام.',
    'maint_recycle_bin_open' => 'افتح سلة المحذوفات',
    'maint_regen_references' => 'Regenerate References',
    'maint_regen_references_desc' => 'This action will rebuild the cross-item reference index within the database. This is usually handled automatically but this action can be useful to index old content or content added via unofficial methods.',
    'maint_regen_references_success' => 'Reference index has been regenerated!',
    'maint_timeout_command_note' => 'Note: This action can take time to run, which can lead to timeout issues in some web environments. As an alternative, this action be performed using a terminal command.',

    // Recycle Bin
    'recycle_bin' => 'سلة المحذوفات',
    'recycle_bin_desc' => 'هنا يمكنك استعادة العناصر التي تم حذفها أو اختيار إزالتها نهائيا من النظام. هذه القائمة غير مصفاة خلافاً لقوائم الأنشطة المماثلة في النظام حيث يتم تطبيق عوامل تصفية الأذونات.',
    'recycle_bin_deleted_item' => 'عنصر محذوف',
    'recycle_bin_deleted_parent' => 'Parent',
    'recycle_bin_deleted_by' => 'حُذف بواسطة',
    'recycle_bin_deleted_at' => 'وقت الحذف',
    'recycle_bin_permanently_delete' => 'حُذف نهائيًا',
    'recycle_bin_restore' => 'استرجاع',
    'recycle_bin_contents_empty' => 'سلة المحذوفات فارغة حاليًا',
    'recycle_bin_empty' => 'إفراغ سلة المحذوفات',
    'recycle_bin_empty_confirm' => 'سيؤدي هذا إلى إتلاف جميع العناصر الموجودة في سلة المحذوفات بشكل دائم بما في ذلك المحتوى الموجود داخل كل عنصر. هل أنت متأكد من أنك تريد إفراغ سلة المحذوفات؟',
    'recycle_bin_destroy_confirm' => 'سيؤدي هذا الإجراء إلى حذف هذا العنصر نهائيًا ، إلى جانب أي عناصر فرعية مدرجة أدناه ، من النظام ولن تتمكن من استعادة هذا المحتوى. هل أنت متأكد من أنك تريد حذف هذا العنصر نهائيًا؟',
    'recycle_bin_destroy_list' => 'العناصر المراد تدميرها',
    'recycle_bin_restore_list' => 'العناصر المراد استرجاعها',
    'recycle_bin_restore_confirm' => 'سيعيد هذا الإجراء العنصر المحذوف ، بما في ذلك أي عناصر فرعية ، إلى موقعه الأصلي. إذا تم حذف الموقع الأصلي منذ ذلك الحين ، وهو الآن في سلة المحذوفات ، فسيلزم أيضًا استعادة العنصر الأصلي.',
    'recycle_bin_restore_deleted_parent' => 'تم حذف أصل هذا العنصر أيضًا. سيبقى حذفه حتى يتم استعادة ذلك الأصل أيضًا.',
    'recycle_bin_restore_parent' => 'Restore Parent',
    'recycle_bin_destroy_notification' => 'المحذوف: قُم بعد إجمالي العناصر من سلة المحذوفات.',
    'recycle_bin_restore_notification' => 'المرتجع: قُم بعد إجمالي العناصر من سلة المحذوفات.',

    // Audit Log
    'audit' => 'سجل المراجعة',
    'audit_desc' => 'يعرض هذا السجل قائمة بالأنشطة المتعقبة في النظام. هذه القائمة غير مصفاة خلافاً لقوائم الأنشطة المماثلة في النظام حيث يتم تطبيق عوامل تصفية الأذونات.',
    'audit_event_filter' => 'تصفية الحدث',
    'audit_event_filter_no_filter' => 'لا يوجد فلتر',
    'audit_deleted_item' => 'عنصر محذوف',
    'audit_deleted_item_name' => 'الاسم: كتابة الاسم',
    'audit_table_user' => 'المستخدم',
    'audit_table_event' => 'الحدث',
    'audit_table_related' => 'العنصر أو التفاصيل ذات الصلة',
    'audit_table_ip' => 'IP Address',
    'audit_table_date' => 'تاريخ النشاط',
    'audit_date_from' => 'نطاق التاريخ من',
    'audit_date_to' => 'نطاق التاريخ إلى',

    // Role Settings
    'roles' => 'الأدوار',
    'role_user_roles' => 'أدوار المستخدمين',
    'roles_index_desc' => 'Roles are used to group users & provide system permission to their members. When a user is a member of multiple roles the privileges granted will stack and the user will inherit all abilities.',
    'roles_x_users_assigned' => '1 user assigned|:count users assigned',
    'roles_x_permissions_provided' => '1 permission|:count permissions',
    'roles_assigned_users' => 'Assigned Users',
    'roles_permissions_provided' => 'Provided Permissions',
    'role_create' => 'إنشاء دور جديد',
    'role_create_success' => 'تم إنشاء الدور بنجاح',
    'role_delete' => 'حذف الدور',
    'role_delete_confirm' => 'سيتم حذف الدور المسمى \':roleName\'.',
    'role_delete_users_assigned' => 'هذا الدور له: عدد المستخدمين المعينين له. إذا كنت ترغب في ترحيل المستخدمين من هذا الدور ، فحدد دورًا جديدًا أدناه.',
    'role_delete_no_migration' => "لا تقم بترجيل المستخدمين",
    'role_delete_sure' => 'تأكيد حذف الدور؟',
    'role_delete_success' => 'تم حذف الدور بنجاح',
    'role_edit' => 'تعديل الدور',
    'role_details' => 'تفاصيل الدور',
    'role_name' => 'اسم الدور',
    'role_desc' => 'وصف مختصر للدور',
    'role_mfa_enforced' => 'Requires Multi-Factor Authentication',
    'role_external_auth_id' => 'ربط الحساب بمواقع التواصل',
    'role_system' => 'أذونات النظام',
    'role_manage_users' => 'إدارة المستخدمين',
    'role_manage_roles' => 'إدارة الأدوار وأذوناتها',
    'role_manage_entity_permissions' => 'إدارة جميع أذونات الكتب والفصول والصفحات',
    'role_manage_own_entity_permissions' => 'إدارة الأذونات الخاصة بكتابك أو فصلك أو صفحاتك',
    'role_manage_page_templates' => 'إدارة قوالب الصفحة',
    'role_access_api' => 'الوصول إلى واجهة برمجة تطبيقات النظام API',
    'role_manage_settings' => 'إدارة إعدادات التطبيق',
    'role_export_content' => 'Export content',
    'role_editor_change' => 'Change page editor',
    'role_asset' => 'أذونات الأصول',
    'roles_system_warning' => 'اعلم أن الوصول إلى أي من الأذونات الثلاثة المذكورة أعلاه يمكن أن يسمح للمستخدم بتغيير امتيازاته الخاصة أو امتيازات الآخرين في النظام. قم بتعيين الأدوار مع هذه الأذونات فقط للمستخدمين الموثوق بهم.',
    'role_asset_desc' => 'تتحكم هذه الأذونات في الوصول الافتراضي إلى الأصول داخل النظام. ستتجاوز الأذونات الخاصة بالكتب والفصول والصفحات هذه الأذونات.',
    'role_asset_admins' => 'يُمنح المسؤولين حق الوصول تلقائيًا إلى جميع المحتويات ولكن هذه الخيارات قد تعرض خيارات واجهة المستخدم أو تخفيها.',
    'role_asset_image_view_note' => 'This relates to visibility within the image manager. Actual access of uploaded image files will be dependant upon system image storage option.',
    'role_all' => 'الكل',
    'role_own' => 'ما يخص',
    'role_controlled_by_asset' => 'يتحكم فيها الأصول التي يتم رفعها إلى',
    'role_save' => 'حفظ الدور',
    'role_update_success' => 'تم تحديث الدور بنجاح',
    'role_users' => 'مستخدمون داخل هذا الدور',
    'role_users_none' => 'لم يتم تعيين أي مستخدمين لهذا الدور',

    // Users
    'users' => 'المستخدمون',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'ملف المستخدم',
    'users_add_new' => 'إضافة مستخدم جديد',
    'users_search' => 'بحث عن مستخدم',
    'users_latest_activity' => 'أحدث نشاط',
    'users_details' => 'بيانات المستخدم',
    'users_details_desc' => 'قم بتعيين اسم عرض وعنوان بريد إلكتروني لهذا المستخدم. سيتم استخدام عنوان البريد الإلكتروني لتسجيل الدخول إلى التطبيق.',
    'users_details_desc_no_email' => 'قم بتعيين اسم عرض لهذا المستخدم حتى يتمكن الآخرون من التعرف عليه.',
    'users_role' => 'أدوار المستخدمين',
    'users_role_desc' => 'حدد الأدوار التي سيتم تعيين هذا المستخدم لها. إذا تم تعيين مستخدم لأدوار متعددة ، فسيتم تكديس الأذونات من هذه الأدوار وسيتلقى كل قدرات الأدوار المعينة.',
    'users_password' => 'كلمة مرور المستخدم',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'يمكنك اختيار إرسال دعوة بالبريد الإلكتروني إلى هذا المستخدم مما يسمح له بتعيين كلمة المرور الخاصة به أو يمكنك تعيين كلمة المرور الخاصة به بنفسك.',
    'users_send_invite_option' => 'أرسل بريدًا إلكترونيًا لدعوة المستخدم',
    'users_external_auth_id' => 'ربط الحساب بمواقع التواصل',
    'users_external_auth_id_desc' => 'تستخدم هذه الهوية لإثبات شخصية المستخدم عند الدخول إلى مواقع التواصل الخاصة بك.',
    'users_password_warning' => 'الرجاء ملئ الحقل أدناه فقط في حال أردتم تغيير كلمة المرور:',
    'users_system_public' => 'هذا المستخدم يمثل أي ضيف يقوم بزيارة شيء يخصك. لا يمكن استخدامه لتسجيل الدخول ولكن يتم تعيينه تلقائياً.',
    'users_delete' => 'حذف المستخدم',
    'users_delete_named' => 'حذف المستخدم :userName',
    'users_delete_warning' => 'سيتم حذف المستخدم \':userName\' بشكل تام من النظام.',
    'users_delete_confirm' => 'تأكيد حذف المستخدم؟',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_edit' => 'تعديل المستخدم',
    'users_edit_profile' => 'تعديل الملف',
    'users_avatar' => 'صورة المستخدم',
    'users_avatar_desc' => 'يجب أن تكون الصورة مربعة ومقاربة لحجم 256 بكسل',
    'users_preferred_language' => 'اللغة المفضلة',
    'users_preferred_language_desc' => 'سيؤدي هذا الخيار إلى تغيير اللغة المستخدمة لواجهة المستخدم الخاصة بالتطبيق. لن يؤثر هذا على أي محتوى قد أنشائه المستخدم.',
    'users_social_accounts' => 'الحسابات الاجتماعية',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'ربط الحساب',
    'users_social_disconnect' => 'فصل الحساب',
    'users_social_connected' => 'تم ربط حساب :socialAccount بملفك بنجاح.',
    'users_social_disconnected' => 'تم فصل حساب :socialAccount من ملفك بنجاح.',
    'users_api_tokens' => 'رموز الـ API',
    'users_api_tokens_none' => 'لم يتم إنشاء رموز API لهذا المستخدم',
    'users_api_tokens_create' => 'قم بإنشاء رمز مميز',
    'users_api_tokens_expires' => 'انتهاء مدة الصلاحية',
    'users_api_tokens_docs' => 'وثائق API',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'قم بإنشاء رمز API',
    'user_api_token_name' => 'الاسم',
    'user_api_token_name_desc' => 'اعطي الرمز الخاص بك اسمًا يمكن قراءته للتذكير مستقبلًا بالغرض المقصود منه.',
    'user_api_token_expiry' => 'تاريخ انتهاء الصلاحية',
    'user_api_token_expiry_desc' => 'حدد التاريخ الذي تنتهي فيه صلاحية هذا الرمز. بعد هذا التاريخ ، لن تعمل الطلبات المقدمة باستخدام هذا الرمز. سيؤدي ترك هذا الحقل فارغًا إلى تعيين انتهاء صلاحية لمدة 100 عام في المستقبل.',
    'user_api_token_create_secret_message' => 'عقب إنشاء هذا الرمز مباشرة، سيتم إنشاء "مُعرّف الرمز" و "رمز سري" وعرضهما. وسيتم عرض الرمز السري لمرة واحدة فقط ، لذا تأكد من نسخ قيمة هذا الرمز إلى مكان آمن ومضمون قبل المتابعة.',
    'user_api_token_create_success' => 'تم إنشاء رمز الـ API بنجاح',
    'user_api_token_update_success' => 'تم تحديث رمز الـ API بنجاح',
    'user_api_token' => 'رمز الـ API',
    'user_api_token_id' => 'مُعرّف الرمز',
    'user_api_token_id_desc' => 'هذا مُعرّف تم إنشاؤه بواسطة النظام غير قابل للتحرير لهذا الرمز والذي يجب توفيره في طلبات API.',
    'user_api_token_secret' => 'الرمز السري',
    'user_api_token_secret_desc' => 'هذا الرمز السري تم إنشاؤه بواسطة النظام والذي يجب توفيره ضمن طلبات API. سيتم عرضه لمرة واحدة فقط ، لذا انسخ قيمة هذا الرمز إلى مكان آمن ومضمون.',
    'user_api_token_created' => 'تم إنشاء رمز :الوقت الزمني',
    'user_api_token_updated' => 'تم تحديث الرمز :الوقت الزمني',
    'user_api_token_delete' => 'حذف الرمز',
    'user_api_token_delete_warning' => 'سيؤدي هذا إلى حذف رمز API المُشار إليه بالكامل باسم \'اسم الرمز\' من النظام.',
    'user_api_token_delete_confirm' => 'هل أنت متأكد من أنك تريد حذف رمز API؟',
    'user_api_token_delete_success' => 'تم حذف رمز الـ API بنجاح',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => '1 trigger event|:count trigger events',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
