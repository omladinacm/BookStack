<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '設定',
    'settings_save' => '儲存設定',
    'settings_save_success' => '設定已儲存',
    'system_version' => 'System Version',
    'categories' => 'Categories',

    // App Settings
    'app_customization' => '自訂',
    'app_features_security' => '功能與安全',
    'app_name' => '應用程式名稱',
    'app_name_desc' => '此名稱會在網頁頂端與任何系統傳送的電子郵件中出現。',
    'app_name_header' => '在網頁頂端顯示名稱',
    'app_public_access' => '公開存取',
    'app_public_access_desc' => '啟用此選項將會允許未登入的訪客存取您 BookStack 站台中的內容。',
    'app_public_access_desc_guest' => '可以透過「訪客」使用者控制公開訪客的存取。',
    'app_public_access_toggle' => '允許公開存取',
    'app_public_viewing' => '允許公開檢視？',
    'app_secure_images' => '更高安全性的圖片上傳',
    'app_secure_images_toggle' => '啟用更高安全性的圖片上傳',
    'app_secure_images_desc' => '因為效能因素，所有圖片都是公開的。此選項會在圖片的網址前加入一串隨機且難以猜測的字串。確保未啟用目錄索引，讓直接進入變得更困難。',
    'app_editor' => '頁面編輯器',
    'app_editor_desc' => '選取所有使用者將使用哪個編輯器來編輯頁面。',
    'app_custom_html' => '自訂 HTML 標題內容',
    'app_custom_html_desc' => '此處加入的任何內容都將插入到每個頁面的 <head> 部分的底部，這對於覆蓋樣式或加入分析程式碼很方便。',
    'app_custom_html_disabled_notice' => '在此設定頁面上停用了自訂 HTML 標題內容，以確保任何重大變更都能被還原。',
    'app_logo' => '應用程式圖示',
    'app_logo_desc' => '此圖片的高度應為 43px。<br>較大的圖片將會被縮小。',
    'app_primary_color' => '應用程式主要色彩',
    'app_primary_color_desc' => '設定應用程式的主要色彩，包含了橫幅、按鈕與連結。',
    'app_homepage' => '應用程式首頁',
    'app_homepage_desc' => '選取要作為首頁的頁面，這將會取代預設首頁。選定頁面的頁面權限將會被忽略。',
    'app_homepage_select' => '選取頁面',
    'app_footer_links' => '頁面註腳連結',
    'app_footer_links_desc' => '新增連結以在網站註腳顯示。這些將會顯示在大多數頁面的底部，包含那些不需要登入的頁面。您可以使用 "trans::<key>" 標籤來使用系統定義的翻譯。舉例來說：使用 "trans::common.privacy_policy" 將會提供已翻譯的文字「隱私權政策」，以及 "trans::common.terms_of_service" 將會提供已翻譯的文字「服務條款」。',
    'app_footer_links_label' => '連結標籤',
    'app_footer_links_url' => '連結網址',
    'app_footer_links_add' => '新增註腳連結',
    'app_disable_comments' => '停用評論',
    'app_disable_comments_toggle' => '停用評論',
    'app_disable_comments_desc' => '在應用程式的所有頁面停用評論。<br>既有的評論將不會顯示。',

    // Color settings
    'content_colors' => '內容顏色',
    'content_colors_desc' => '為頁面層次結構中的所有元素設定顏色。 為了提高可讀性，建議選擇亮度與預設顏色相似的顏色。',
    'bookshelf_color' => '書架顔色',
    'book_color' => '書本顔色',
    'chapter_color' => '章節顔色',
    'page_color' => '頁面顔色',
    'page_draft_color' => '頁面草稿顏色',

    // Registration Settings
    'reg_settings' => '註冊',
    'reg_enable' => '啟用註冊',
    'reg_enable_toggle' => '啟用註冊',
    'reg_enable_desc' => '啟用註冊後，使用者將可以自行註冊為應用程式的使用者。註冊後，他們將會得到一個預設的使用者角色。',
    'reg_default_role' => '註冊後的預設使用者角色',
    'reg_enable_external_warning' => '當外部 LDAP 或 SAML 身份驗證啟用時，將會忽略上述選項。如果外部身份驗證成功，將會自動在本系統建立使用者帳號。',
    'reg_email_confirmation' => '電子郵件驗證',
    'reg_email_confirmation_toggle' => '需要電子郵件驗證',
    'reg_confirm_email_desc' => '如果使用網域限制，則需要電子郵件驗證，且此選項將被忽略。',
    'reg_confirm_restrict_domain' => '網域限制',
    'reg_confirm_restrict_domain_desc' => '輸入您想要限制註冊的電子郵件網域列表，以英文逗號分隔。在可以與應用程式互動前，使用者將會收到電子郵件以確認他們的電子郵件地址。<br>注意，使用者可以在註冊成功後變更他們的電子郵件地址。',
    'reg_confirm_restrict_domain_placeholder' => '尚未設定限制',

    // Maintenance settings
    'maint' => '維護',
    'maint_image_cleanup' => '清理圖片',
    'maint_image_cleanup_desc' => '掃描頁面與修訂版本內容來檢查目前使用了哪些圖片，而哪些圖片又是多餘的。請確保您在執行這個動作前建立了完整的資料庫與映像檔備份。',
    'maint_delete_images_only_in_revisions' => '也刪除僅存在於舊的頁面修訂版本中存在的圖片',
    'maint_image_cleanup_run' => '執行清理',
    'maint_image_cleanup_warning' => '發現了 :count 張可能未使用的圖片。您確定要刪除這些圖片嗎？',
    'maint_image_cleanup_success' => '找到並刪除了 :count 張可能未使用的圖片！',
    'maint_image_cleanup_nothing_found' => '找不到未使用的圖片，未刪除任何檔案！',
    'maint_send_test_email' => '傳送測試電子郵件',
    'maint_send_test_email_desc' => '這會將測試電子郵件傳送到您的個人資料中指定的電子郵件地址。',
    'maint_send_test_email_run' => '傳送測試郵件',
    'maint_send_test_email_success' => '電子郵件已傳送到 :address',
    'maint_send_test_email_mail_subject' => '測試郵件',
    'maint_send_test_email_mail_greeting' => '電子郵件傳遞似乎有效！',
    'maint_send_test_email_mail_text' => '恭喜！您收到這封電子郵件通知時，代表您的電子郵件設定已正確設定。',
    'maint_recycle_bin_desc' => '刪除的書架、書本、章節與頁面將會被傳送到回收桶，這樣仍可以還原或永久刪除。回收桶中較舊的項目可能會在一段時間後自動移除，取決於您的系統設定。',
    'maint_recycle_bin_open' => '開啟回收桶',

    // Recycle Bin
    'recycle_bin' => '資源回收桶',
    'recycle_bin_desc' => '在這裡，您可以還原已刪除的項目，或是選擇將其從系統中永久移除。與系統中套用了權限過濾條件類似的活動列表不同的是，此列表並未過濾。',
    'recycle_bin_deleted_item' => '已刪除項目',
    'recycle_bin_deleted_parent' => '上層',
    'recycle_bin_deleted_by' => '刪除由',
    'recycle_bin_deleted_at' => '刪除時間',
    'recycle_bin_permanently_delete' => '永久刪除',
    'recycle_bin_restore' => '還原',
    'recycle_bin_contents_empty' => '回收桶目前是空的',
    'recycle_bin_empty' => '清空回收桶',
    'recycle_bin_empty_confirm' => '這將會永久破壞回收桶中的所有項目，包括每個項目中包含的內容。您確定您想要清空回收桶嗎？',
    'recycle_bin_destroy_confirm' => '此動作將會從系統中永久移除此項目以及下方列出的所有下層元素，您將無法還原此內容。您確定您想要永久刪除此項目嗎？',
    'recycle_bin_destroy_list' => '要被銷毀的項目',
    'recycle_bin_restore_list' => '要被還原的項目',
    'recycle_bin_restore_confirm' => '此動作將會還原已被刪除的項目（包含任何下層元素）到其原始位置。如果原始位置已被刪除，且目前位於垃圾桶裡，那麼上層項目也需要被還原。',
    'recycle_bin_restore_deleted_parent' => '此項目的上層項目也已被刪除。因此將會保持被刪除的狀態，直到上層項目也被還原。',
    'recycle_bin_restore_parent' => '還原上層',
    'recycle_bin_destroy_notification' => '已從回收桶刪除共 :count 個項目。',
    'recycle_bin_restore_notification' => '已從回收桶還原共 :count 個項目。',

    // Audit Log
    'audit' => '稽核記錄',
    'audit_desc' => '此稽核日誌會顯示被系統追蹤的活動列表。與系統中套用了權限過濾條件類似的活動列表不同的是，此列表並未過濾。',
    'audit_event_filter' => '活動過濾條件',
    'audit_event_filter_no_filter' => '無過濾條件',
    'audit_deleted_item' => '已刪除的項目',
    'audit_deleted_item_name' => '名稱：:name',
    'audit_table_user' => '使用者',
    'audit_table_event' => '活動',
    'audit_table_related' => '相關的項目或詳細資訊',
    'audit_table_ip' => 'IP 位址',
    'audit_table_date' => '活動日期',
    'audit_date_from' => '日期範圍，從',
    'audit_date_to' => '日期範圍，到',

    // Role Settings
    'roles' => '角色',
    'role_user_roles' => '使用者角色',
    'role_create' => '建立新角色',
    'role_create_success' => '角色建立成功',
    'role_delete' => '刪除角色',
    'role_delete_confirm' => '這將會刪除名為「:roleName」的角色.',
    'role_delete_users_assigned' => '有 :userCount 位使用者屬於此角色。如果您想將此角色中的使用者遷移，請在下面選擇一個新角色。',
    'role_delete_no_migration' => "不要遷移使用者",
    'role_delete_sure' => '您確定要刪除此角色？',
    'role_delete_success' => '角色刪除成功',
    'role_edit' => '編輯角色',
    'role_details' => '角色詳細資訊',
    'role_name' => '角色名稱',
    'role_desc' => '角色簡短說明',
    'role_mfa_enforced' => '多重身分驗證',
    'role_external_auth_id' => '外部身份驗證 ID',
    'role_system' => '系統權限',
    'role_manage_users' => '管理使用者',
    'role_manage_roles' => '管理角色與角色權限',
    'role_manage_entity_permissions' => '管理所有書本、章節與頁面的權限',
    'role_manage_own_entity_permissions' => '管理自己的書本、章節與頁面的權限',
    'role_manage_page_templates' => '管理頁面範本',
    'role_access_api' => '存取系統 API',
    'role_manage_settings' => '管理應用程式設定',
    'role_export_content' => '匯入內容',
    'role_asset' => '資源權限',
    'roles_system_warning' => '請注意，有上述三項權限中的任一項的使用者都可以更改自己或系統中其他人的權限。有這些權限的角色只應分配給受信任的使用者。',
    'role_asset_desc' => '對系統內資源的預設權限將由這裡的權限控制。若有單獨設定在書本、章節和頁面上的權限，將會覆寫這裡的權限設定。',
    'role_asset_admins' => '管理員會自動取得對所有內容的存取權，但這些選項可能會顯示或隱藏使用者介面的選項。',
    'role_all' => '全部',
    'role_own' => '擁有',
    'role_controlled_by_asset' => '依據隸屬的資源來決定',
    'role_save' => '儲存角色',
    'role_update_success' => '角色更新成功',
    'role_users' => '屬於此角色的使用者',
    'role_users_none' => '目前沒有使用者被分配到此角色',

    // Users
    'users' => '使用者',
    'user_profile' => '使用者個人資料',
    'users_add_new' => '新增使用者',
    'users_search' => '搜尋使用者',
    'users_latest_activity' => '最新活動',
    'users_details' => '使用者詳細資訊',
    'users_details_desc' => '為此使用者設定顯示名稱與電子郵件地址。電子郵件地址將用於登入應用程式。',
    'users_details_desc_no_email' => '為此使用者設定顯示名稱，這樣其他人才能認出該使用者。',
    'users_role' => '使用者角色',
    'users_role_desc' => '選取要分配的此使用者的角色。若使用者被分配到多個角色，則這些角色的權限將會堆疊，使用者將會取得被分配角色的所有功能。',
    'users_password' => '使用者密碼',
    'users_password_desc' => '設定用於登入應用程式的密碼。密碼必須至少 8 個字元長。',
    'users_send_invite_text' => '您可以選擇向此使用者傳送邀請電子郵件，讓他們可以設定自己的密碼，您也可以自行設定他們的密碼。',
    'users_send_invite_option' => '傳送邀請電子郵件給使用者',
    'users_external_auth_id' => '外部身份驗證 ID',
    'users_external_auth_id_desc' => '與外部身份驗證系統通訊時，此 ID 將用於比對使用者。',
    'users_password_warning' => '如果您想更改密碼，請填寫以下內容：',
    'users_system_public' => '此使用者代表造訪您站台的任何訪客使用者。其不能用於登入，而會自動分配。',
    'users_delete' => '刪除使用者',
    'users_delete_named' => '刪除使用者 :userName',
    'users_delete_warning' => '這將從系統中完全刪除名為「:userName」的使用者。',
    'users_delete_confirm' => '您確定要刪除此使用者？',
    'users_migrate_ownership' => '轉移所有權',
    'users_migrate_ownership_desc' => '如果您希望其他使用者變成目前此使用者擁有的所有項目的新擁有者，請在此處選取新的使用者。',
    'users_none_selected' => '未選取使用者',
    'users_edit' => '編輯使用者',
    'users_edit_profile' => '編輯個人資料',
    'users_avatar' => '使用者大頭照',
    'users_avatar_desc' => '選取一張代表此使用者的圖片。這應該是大約 256px 的正方形。',
    'users_preferred_language' => '偏好語言',
    'users_preferred_language_desc' => '此選項將會變更用於應用程式使用者介面的語言。不會影響任何使用者建立的內容。',
    'users_social_accounts' => '社群網站帳號',
    'users_social_accounts_info' => '您可以在此處連結您其他的帳號以供快速登入。從此處取消連結帳號並不會撤銷先前已授權的存取。請從您連結的社群網站帳號的個人設定中撤銷存取權。',
    'users_social_connect' => '連結帳號',
    'users_social_disconnect' => '取消連結帳號',
    'users_social_connected' => ':socialAccount 帳號已經成功連結到您的個人資料。',
    'users_social_disconnected' => ':socialAccount 帳號已經成功取消連結。',
    'users_api_tokens' => 'API 權杖',
    'users_api_tokens_none' => '尚未為此使用者建立 API 權杖',
    'users_api_tokens_create' => '建立權杖',
    'users_api_tokens_expires' => '過期',
    'users_api_tokens_docs' => 'API 文件',
    'users_mfa' => '多重身分驗證',
    'users_mfa_desc' => '設定多重身份驗證為您的帳戶多增加了一道防線',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => '方式設置',

    // API Tokens
    'user_api_token_create' => '建立 API 權杖',
    'user_api_token_name' => '名稱',
    'user_api_token_name_desc' => '給您的權杖易於辨識的名稱，如此未來才能提醒其預期用途。',
    'user_api_token_expiry' => '到期日',
    'user_api_token_expiry_desc' => '設定此權杖的到期日。在此日期後，使用此權杖發出的請求將不再起作用。若將此欄留空，將會設定在100年後過期。',
    'user_api_token_create_secret_message' => '建立此權杖後，將會立即生成並顯示「權杖 ID」與「權杖密碼」。該密碼將只會顯示一次，因此請在繼續操作前將其複製到安全的地方。',
    'user_api_token_create_success' => '成功建立 API 權杖',
    'user_api_token_update_success' => '成功更新 API 權杖',
    'user_api_token' => 'API 權杖',
    'user_api_token_id' => '權杖 ID',
    'user_api_token_id_desc' => '這是此權杖由系統生成的不可編輯識別字串，必須在 API 請求中提供。',
    'user_api_token_secret' => '權杖密碼',
    'user_api_token_secret_desc' => '這是此權杖由系統生成的密碼，必須在 API 請求中提供。該密碼將只會顯示一次，因此請在繼續操作前將其複製到安全的地方。',
    'user_api_token_created' => '權杖建立於:timeAgo',
    'user_api_token_updated' => '權杖更新於:timeAgo',
    'user_api_token_delete' => '刪除權杖',
    'user_api_token_delete_warning' => '這將會從系統中完全刪除名為「:tokenName」的 API 權杖。',
    'user_api_token_delete_confirm' => '您確定要刪除此 API 權杖嗎？',
    'user_api_token_delete_success' => 'API 權杖已成功刪除',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_create' => '建立 Webhook',
    'webhooks_none_created' => '沒有已建立的 Webhook',
    'webhooks_edit' => '設置 Webhook',
    'webhooks_save' => '儲存 Webhook',
    'webhooks_details' => 'WebHook 詳細資料',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook 名稱',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => '事件',
    'webhooks_delete' => '刪除 Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook 狀態',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => '上次錯誤',
    'webhooks_last_error_message' => '上次錯誤信息',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => '加泰隆尼亞語',
        'cs' => 'Česky',
        'da' => '丹麥',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fr' => 'Français',
        'he' => '希伯來語',
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
