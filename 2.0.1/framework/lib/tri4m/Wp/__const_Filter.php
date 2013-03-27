<?PHP
	NAMESPACE tri4m\Wp;
	
	CLASS __const_Filter EXTENDS \ILLI\Core\Std\ConstantCollection
	{
		#:Additional:
			/**
			 * @since 2.8
			 */
			CONST ADDITIONAL_CAPABILITIES_DISPLAY			= 'additional_capabilities_display';
		#::
		#:Add:
			/**
			 * @since 2.7
			 */
			CONST ADD_MENU_CLASSES					= 'add_menu_classes';
			
			/**
			 * @since 2.0
			 */
			CONST ADD_PING						= 'add_ping';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_SIGNUP_META					= 'add_signup_meta';
			
			/**
			 * @since 3.1
			 */
			CONST ADD_META_TYPE_METADATA__				= 'add_{:metaType}_metadata';
		#::
		#:Admin:
			/**
			 * @since 2.3
			 */
			CONST ADMIN_BODY_CLASS					= 'admin_body_class';
			
			/**
			 * @since 2.7
			 */
			CONST ADMIN_COMMENT_TYPES_DROPDOWN			= 'admin_comment_types_dropdown';
			
			/**
			 * @since 2.8
			 */
			CONST ADMIN_FOOTER_TEXT					= 'admin_footer_text';
			
			/**
			 * @since 3.0
			 */
			CONST ADMIN_MEMORY_LIMIT				= 'admin_memory_limit';
			
			/**
			 * @since 2.9
			 */
			CONST ADMIN_POST_THUMBNAIL_HTML				= 'admin_post_thumbnail_html';
			
			/**
			 * @since 3.1
			 */
			CONST ADMIN_TITLE					= 'admin_title';
			
			/**
			 * @since 2.8
			 */
			CONST ADMIN_URL						= 'admin_url';
		#::
		#:Akismet:
			/**
			 * @since 3.1
			 */
			CONST AKISMET_COMMENT_NONCE				= 'akismet_comment_nonce';
			
			/**
			 * @since 3.4
			 */
			CONST AKISMET_DELETE_COMMENTMETA_INTERVAL		= 'akismet_delete_commentmeta_interval';
			
			/**
			 * @since 3.1
			 */
			CONST AKISMET_OPTIMIZE_TABLE				= 'akismet_optimize_table';
			
			/**
			 * @since 3.1
			 */
			CONST AKISMET_SHOW_USER_COMMENTS_APPROVED		= 'akismet_show_user_comments_approved';
			
			/**
			 * @since 2.9
			 */
			CONST AKISMET_SPAM_COUNT_INCR				= 'akismet_spam_count_incr';
			
			/**
			 * @since 3.4
			 */
			CONST AKISMET_UA					= 'akismet_ua';
		#::
		#:Allowed:
			/**
			 * @since 3.4
			 */
			CONST ALLOWED_HTTP_ORIGIN				= 'allowed_http_origin';
			
			/**
			 * @since 3.4
			 */
			CONST ALLOWED_HTTP_ORIGINS				= 'allowed_http_origins';
			
			/**
			 * @since 2.3
			 */
			CONST ALLOWED_REDIRECT_HOSTS				= 'allowed_redirect_hosts';
			
			/**
			 * @since 3.0
			 */
			CONST ALLOWED_THEMES					= 'allowed_themes';
		#::
		#:Allow:
			/**
			 * @since 2.7
			 */
			CONST ALLOW_PASSWORD_RESET				= 'allow_password_reset';
			
			/**
			 * @since 3.0
			 */
			CONST ALLOW_SUBDIRECTORY_INSTALL			= 'allow_subdirectory_install';
		#::
		#:All:
			
			/**
			 * @since 3.0
			 */
			CONST ALL_PLUGINS					= 'all_plugins';
			
			/**
			 * @since 3.1
			 */
			CONST ALL_THEMES					= 'all_themes';
		#::
		#:Asynch:
			/**
			 * @since 2.5
			 */
			CONST ASYNC_UPLOAD_TYPE__				= 'async_upload_{:type}';
		#::
		#:Atom:
			/**
			 * @since 2.2
			 */
			CONST ATOM_ENCLOSURE					= 'atom_enclosure';
		#::
		#:Attachment:
			/**
			 * @since 2.5
			 */
			CONST ATTACHMENT_FIELDS_TO_EDIT				= 'attachment_fields_to_edit';
			
			/**
			 * @since 2.5
			 */
			CONST ATTACHMENT_FIELDS_TO_SAVE				= 'attachment_fields_to_save';
			
			/**
			 * @since 2.0
			 */
			CONST ATTACHMENT_ICON					= 'attachment_icon';
			
			/**
			 * @since 2.0
			 */
			CONST ATTACHMENT_INNERHTML				= 'attachment_innerhtml';
			
			/**
			 * @since 2.0
			 */
			CONST ATTACHMENT_LINK					= 'attachment_link';
			
			/**
			 * @since 2.0
			 */
			CONST ATTACHMENT_MAX_DIMS				= 'attachment_max_dims';
		#::
		#:Attribute:
			/**
			 * @since 2.0.11
			 */
			CONST ATTRIBUTE_ESCAPE					= 'attribute_escape';
		#::
		#:Authenticate:
			/**
			 * @since 2.8
			 */
			CONST AUTHENTICATE					= 'authenticate';
		#::
		#:Author:
			/**
			 * @since 1.2.1
			 */
			CONST AUTHOR_EMAIL					= 'author_email';
			
			/**
			 * @since 1.5.2
			 */
			CONST AUTHOR_FEED_LINK					= 'author_feed_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST AUTHOR_LINK					= 'author_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST AUTHOR_REWRITE_RULES				= 'author_rewrite_rules';
		#::
		#:Auth:
			/**
			 * @since 2.5
			 */
			CONST AUTH_COOKIE					= 'auth_cookie';
			
			/**
			 * @since 2.8
			 */
			CONST AUTH_COOKIE_EXPIRATION				= 'auth_cookie_expiration';
			
			/**
			 * @since 3.3
			 */
			CONST AUTH_POST_META_META_KEY__				= 'auth_post_meta_{:metaKey}';
			
			/**
			 * @since 2.9
			 */
			CONST AUTH_REDIRECT_SCHEME				= 'auth_redirect_scheme';
		#::
		#:Autocomplete:
			/**
			 * @since 3.4
			 */
			CONST AUTOCOMPLETE_USERS_FOR_SITE_ADMINS		= 'autocomplete_users_for_site_admins';
		#::
		#:Avater:
			/**
			 * @since 2.6
			 */
			CONST AVATAR_DEFAULTS					= 'avatar_defaults';
		#::
		#:Block:
			/**
			 * @since 2.8
			 */
			CONST BLOCK_LOCAL_REQUESTS				= 'block_local_requests';
		#::
		#:Bloginfo:
			/**
			 * @since 1.2.1
			 */
			CONST BLOGINFO						= 'bloginfo';
			
			/**
			 * @since 2.1
			 */
			CONST BLOGINFO_RSS					= 'bloginfo_rss';
			
			/**
			 * @since 2.0.11
			 */
			CONST BLOGINFO_URL					= 'bloginfo_url';
		#::
		#:Blog:
			/**
			 * @since 3.0
			 */
			CONST BLOG_DETAILS					= 'blog_details';
			
			/**
			 * @since 3.5
			 */
			CONST BLOG_OPTION_OPTION__				= 'blog_option_{:option}';
			
			/**
			 * @since 3.0
			 */
			CONST BLOG_REDIRECT_404					= 'blog_redirect_404';
		#::
		#:Body:
			/**
			 * @since 2.8
			 */
			CONST BODY_CLASS					= 'body_class';
		#::
		#:Browse:
			/**
			 * @since 3.2
			 */
			CONST BROWSE_HAPPY_NOTICE				= 'browse-happy-notice';
		#::
		#:Bulk:
			/**
			 * @since 3.5
			 */
			CONST BULK_ACTIONS_SCREEN_ID__				= 'bulk_actions-{:screenId}';
		#::
		#:Cancel:
			/**
			 * @since 2.7
			 */
			CONST CANCEL_COMMENT_REPLY_LINK				= 'cancel_comment_reply_link';
		#::
		#:Can:
			/**
			 * @since 3.1
			 */
			CONST CAN_EDIT_NETWORK					= 'can_edit_network';
		#::
		#:Category:
			/**
			 * @since 3.2
			 */
			CONST CATEGORY_ARCHIVE_META				= 'category_archive_meta';
			
			/**
			 * @since 1.2.1
			 */
			CONST CATEGORY_DESCRIPTION				= 'category_description';
			
			/**
			 * @since 1.5.2
			 */
			CONST CATEGORY_FEED_LINK				= 'category_feed_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST CATEGORY_LINK					= 'category_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST CATEGORY_SAVE_PRE					= 'category_save_pre';
		#::
		#:Check:
			/**
			 * @since 2.5
			 */
			CONST CHECK_PASSWORD					= 'check_password';
		#::
		#:Clean:
			/**
			 * @since 2.3
			 */
			CONST CLEAN_URL						= 'clean_url';
		#::
		#:Close:
			/**
			 * @since 3.2
			 */
			CONST CLOSE_COMMENTS_FOR_POST_TYPES			= 'close_comments_for_post_types';
		#::
		#:Comments:
			/**
			 * @since 2.1
			 */
			CONST COMMENTS_ARRAY					= 'comments_array';
			
			/**
			 * @since 3.1
			 */
			CONST COMMENTS_CLAUSES					= 'comments_clauses';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENTS_NUMBER					= 'comments_number';
			
			/**
			 * @since 2.5
			 */
			CONST COMMENTS_OPEN					= 'comments_open';
			
			/**
			 * @since 2.6
			 */
			CONST COMMENTS_PER_PAGE					= 'comments_per_page';
			
			/**
			 * @since 2.5
			 */
			CONST COMMENTS_POPUP_LINK_ATTRIBUTES			= 'comments_popup_link_attributes';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENTS_REWRITE_RULES				= 'comments_rewrite_rules';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENTS_TEMPLATE					= 'comments_template';
		#::
		#:Comment:
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_AUTHOR					= 'comment_author';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_AUTHOR_RSS				= 'comment_author_rss';
			
			/**
			 * @since 2.7
			 */
			CONST COMMENT_CLASS					= 'comment_class';
			
			/**
			 * @since 2.8
			 */
			CONST COMMENT_COOKIE_LIFETIME				= 'comment_cookie_lifetime';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_EDIT_PRE					= 'comment_edit_pre';
			
			/**
			 * @since 2.0.11
			 */
			CONST COMMENT_EDIT_REDIRECT				= 'comment_edit_redirect';
			
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_EMAIL					= 'comment_email';
			
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_EXCERPT					= 'comment_excerpt';
			
			/**
			 * @since 2.2
			 */
			CONST COMMENT_FEED_GROUPBY				= 'comment_feed_groupby';
			
			/**
			 * @since 2.2
			 */
			CONST COMMENT_FEED_JOIN					= 'comment_feed_join';
			
			/**
			 * @since 2.8
			 */
			CONST COMMENT_FEED_LIMITS				= 'comment_feed_limits';
			
			/**
			 * @since 2.8
			 */
			CONST COMMENT_FEED_ORDERBY				= 'comment_feed_orderby';
			
			/**
			 * @since 2.2
			 */
			CONST COMMENT_FEED_WHERE				= 'comment_feed_where';
			
			/**
			 * @since 2.1
			 */
			CONST COMMENT_FLOOD_FILTER				= 'comment_flood_filter';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_DEFAULTS				= 'comment_form_defaults';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_DEFAULT_FIELDS			= 'comment_form_default_fields';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_FIELD_COMMENT			= 'comment_form_field_comment';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_FIELD_NAME__				= 'comment_form_field_{:name}';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_LOGGED_IN				= 'comment_form_logged_in';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_ID_FIELDS					= 'comment_id_fields';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_MAX_LINKS_URL				= 'comment_max_links_url';
			
			/**
			 * @since 2.8
			 */
			CONST COMMENT_MODERATION_HEADERS			= 'comment_moderation_headers';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_MODERATION_SUBJECT			= 'comment_moderation_subject';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_MODERATION_TEXT				= 'comment_moderation_text';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_NOTIFICATION_HEADERS			= 'comment_notification_headers';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_NOTIFICATION_SUBJECT			= 'comment_notification_subject';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_NOTIFICATION_TEXT				= 'comment_notification_text';
			
			/**
			 * @since 2.0.11
			 */
			CONST COMMENT_POST_REDIRECT				= 'comment_post_redirect';
			
			/**
			 * @since 2.7
			 */
			CONST COMMENT_REPLY_LINK				= 'comment_reply_link';
			
			/**
			 * @since 2.6
			 */
			CONST COMMENT_ROW_ACTIONS				= 'comment_row_actions';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_SAVE_PRE					= 'comment_save_pre';
			
			/**
			 * @since 2.5
			 */
			CONST COMMENT_STATUS_LINKS				= 'comment_status_links';
			
			/**
			 * @since 2.0
			 */
			CONST COMMENT_STATUS_PRE				= 'comment_status_pre';
			
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_TEXT					= 'comment_text';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_TEXT_RSS					= 'comment_text_rss';
			
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_URL					= 'comment_url';
		#::
		#:Content:
			/**
			 * @since 2.0.11
			 */
			CONST CONTENT_FILTERED_SAVE_PRE				= 'content_filtered_save_pre';
			
			/**
			 * @since 2.8
			 */
			CONST CONTENT_URL					= 'content_url';
		#::
		#:Contextual:
			/**
			 * @since 2.7
			 */
			CONST CONTEXTUAL_HELP					= 'contextual_help';
			
			/**
			 * @since 2.7
			 */
			CONST CONTEXTUAL_HELP_LIST				= 'contextual_help_list';
		#::
		#:Core:
			/**
			 * @since 2.8
			 */
			CONST CORE_VERSION_CHECK_LOCALE				= 'core_version_check_locale';
		#::
		#:Cron:
			/**
			 * @since 3.5
			 */
			CONST CRON_REQUEST					= 'cron_request';
			
			/**
			 * @since 2.1
			 */
			CONST CRON_SCHEDULES					= 'cron_schedules';
		#::
		#:Current:
			/**
			 * @since 3.0
			 */
			CONST CURRENT_SCREEN					= 'current_screen';
			
			/**
			 * @since 3.4
			 */
			CONST CURRENT_THEME_SUPPORTS_FEATURE__			= 'current_theme_supports-{:feature}';
		#::
		#:Customize:
			/**
			 * @since 3.4
			 */
			CONST CUSTOMIZE_ALLOWED_URLS				= 'customize_allowed_urls';
			
			/**
			 * @since 3.4
			 */
			CONST CUSTOMIZE_SANITIZE_JS_ID__			= 'customize_sanitize_js_{:id}';
			
			/**
			 * @since 3.4
			 */
			CONST CUSTOMIZE_SANITIZE_ID__				= 'customize_sanitize_{:id}';
			
			/**
			 * @since 3.4
			 */
			CONST CUSTOMIZE_VALUE_ID_DATA_BASE__			= 'customize_value_{:idDataBase}';
		#::
		#:Custom:
			/**
			 * @since 2.8
			 */
			CONST CUSTOM_MENU_ORDER					= 'custom_menu_order';
		#::
		#:Dashboard:
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_INCOMING_LINKS_FEED			= 'dashboard_incoming_links_feed';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_INCOMING_LINKS_LINK			= 'dashboard_incoming_links_link';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_PRIMARY_FEED				= 'dashboard_primary_feed';
			
			/**
			 * @since 2.5
			 */
			CONST DASHBOARD_PRIMARY_LINK				= 'dashboard_primary_link';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_PRIMARY_TITLE				= 'dashboard_primary_title';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_SECONDARY_FEED				= 'dashboard_secondary_feed';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_SECONDARY_LINK				= 'dashboard_secondary_link';
			
			/**
			 * @since 2.3
			 */
			CONST DASHBOARD_SECONDARY_TITLE				= 'dashboard_secondary_title';
		#::
		#:Date:
			/**
			 * @since 2.7
			 */
			CONST DATE_FORMATS					= 'date_formats';
			
			/**
			 * @since 2.8
			 */
			CONST DATE_I18N						= 'date_i18n';
			
			/**
			 * @since 1.5.2
			 */
			CONST DATE_REWRITE_RULES				= 'date_rewrite_rules';
		#::
		#:Day:
			/**
			 * @since 1.5.2
			 */
			CONST DAY_LINK						= 'day_link';
		#::
		#:DbDelta:
			/**
			 * @since 3.3
			 */
			CONST DBDELTA_CREATE_QUERIES				= 'dbdelta_create_queries';
			
			/**
			 * @since 3.3
			 */
			CONST DBDELTA_INSERT_QUERIES				= 'dbdelta_insert_queries';
			
			/**
			 * @since 3.3
			 */
			CONST DBDELTA_QUERIES					= 'dbdelta_queries';
		#::
		#:Default:
			/**
			 * @since 2.6
			 */
			CONST DEFAULT_AVATAR_SELECT				= 'default_avatar_select';
			
			/**
			 * @since 1.5.2
			 */
			CONST DEFAULT_CONTENT					= 'default_content';
			
			/**
			 * @since 2.8
			 */
			CONST DEFAULT_CONTEXTUAL_HELP				= 'default_contextual_help';
			
			/**
			 * @since 1.5.2
			 */
			CONST DEFAULT_EXCERPT					= 'default_excerpt';
			
			/**
			 * @since 2.5
			 */
			CONST DEFAULT_FEED					= 'default_feed';
			
			/**
			 * @since 3.1
			 */
			CONST DEFAULT_HIDDEN_META_BOXES				= 'default_hidden_meta_boxes';
			
			/**
			 * @since 3.4
			 */
			CONST DEFAULT_OPTION_OPTION__				= 'default_option_{:option}';
			
			/**
			 * @since 3.4
			 */
			CONST DEFAULT_SITE_OPTION_OPTION__			= 'default_site_option_{:option}';
			
			/**
			 * @since 1.5.2
			 */
			CONST DEFAULT_TITLE					= 'default_title';
		#::
		#:Delete:
			/**
			 * @since 3.0
			 */
			CONST DELETE_SITE_EMAIL_CONTENT				= 'delete_site_email_content';
			
			/**
			 * @since 3.1
			 */
			CONST DELETE_META_TYPE_METADATA__			= 'delete_{:metaType}_metadata';
		#::
		#:Deprecated:
			/**
			 * @since 3.0
			 */
			CONST DEPRECATED_ARGUMENT_TRIGGER_ERROR			= 'deprecated_argument_trigger_error';
			
			/**
			 * @since 2.5
			 */
			CONST DEPRECATED_FILE_TRIGGER_ERROR			= 'deprecated_file_trigger_error';
			
			/**
			 * @since 2.5
			 */
			CONST DEPRECATED_FUNCTION_TRIGGER_ERROR			= 'deprecated_function_trigger_error';
		#::
		#:Disable:
			/**
			 * @since 2.7
			 */
			CONST DISABLE_CAPTIONS					= 'disable_captions';
		#::
		#:Display:
			/**
			 * @since 3.2
			 */
			CONST DISPLAY_MEDIA_STATES				= 'display_media_states';
			
			/**
			 * @since 2.8
			 */
			CONST DISPLAY_POST_STATES				= 'display_post_states';
		#::
		#:Documentation:
			/**
			 * @since 2.8
			 */
			CONST DOCUMENTATION_IGNORE_FUNCTIONS			= 'documentation_ignore_functions';
		#::
		#:Doing:
			/**
			 * @since 3.1
			 */
			CONST DOING_IT_WRONG_TRIGGER_ERROR			= 'doing_it_wrong_trigger_error';
		#::
		#:Domain:
			/**
			 * @since 3.5
			 */
			CONST DOMAIN_EXISTS					= 'domain_exists';
		#::
		#:Do:
			/**
			 * @since 3.0
			 */
			CONST DO_MU_UPGRADE					= 'do_mu_upgrade';
			
			/**
			 * @since 3.5
			 */
			CONST DO_PARSE_REQUEST					= 'do_parse_request';
		#::
		#:Dynamic:
			/**
			 * @since 2.5
			 */
			CONST DYNAMIC_SIDEBAR_PARAMS				= 'dynamic_sidebar_params';
		#::
		#:Editable:
			/**
			 * @since 2.8
			 */
			CONST EDITABLE_EXTENSIONS				= 'editable_extensions';
			
			/**
			 * @since 2.8
			 */
			CONST EDITABLE_ROLES					= 'editable_roles';
			
			/**
			 * @since 2.6
			 */
			CONST EDITABLE_SLUG					= 'editable_slug';
		#::
		#:Editor:
			/**
			 * @since 2.5
			 */
			CONST EDITOR_MAX_IMAGE_SIZE				= 'editor_max_image_size';
		#::
		#:Edit:
			/**
			 * @since 2.7
			 */
			CONST EDIT_BOOKMARK_LINK				= 'edit_bookmark_link';
			
			/**
			 * @since 2.8
			 */
			CONST EDIT_CATEGORIES_PER_PAGE				= 'edit_categories_per_page';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_COMMENT_LINK					= 'edit_comment_link';
			
			/**
			 * @since 2.8
			 */
			CONST EDIT_POSTS_PER_PAGE				= 'edit_posts_per_page';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_POST_LINK					= 'edit_post_link';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_POST_FIELD__					= 'edit_post_{:field}';
			
			/**
			 * @since 3.1
			 */
			CONST EDIT_PROFILE_URL					= 'edit_profile_url';
			
			/**
			 * @since 2.8
			 */
			CONST EDIT_TAGS_PER_PAGE				= 'edit_tags_per_page';
			
			/**
			 * @since 2.7
			 */
			CONST EDIT_TAG_LINK					= 'edit_tag_link';
			
			/**
			 * @since 3.1
			 */
			CONST EDIT_TERM_LINK					= 'edit_term_link';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_TERM_FIELD__					= 'edit_term_{:field}';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_USER_FIELD__					= 'edit_user_{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_FIELD__					= 'edit_{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_TAXONOMY_FIELD__				= 'edit_{:taxonomy}_{:field}';
		#::
		#:Embed:
			/**
			 * @since 2.9
			 */
			CONST EMBED_CACHE_OEMBED_TYPES				= 'embed_cache_oembed_types';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_DEFAULTS					= 'embed_defaults';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_GOOGLEVIDEO					= 'embed_googlevideo';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_HANDLER_HTML				= 'embed_handler_html';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_MAYBE_MAKE_LINK				= 'embed_maybe_make_link';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_OEMBED_DISCOVER				= 'embed_oembed_discover';
			
			/**
			 * @since 2.9
			 */
			CONST EMBED_OEMBED_HTML					= 'embed_oembed_html';
		#::
		#:Enable:
			/**
			 * @since 3.0
			 */
			CONST ENABLE_EDIT_ANY_USER_CONFIGURATION		= 'enable_edit_any_user_configuration';
			
			/**
			 * @since 3.0
			 */
			CONST ENABLE_POST_BY_EMAIL_CONFIGURATION		= 'enable_post_by_email_configuration';
			
			/**
			 * @since 3.0
			 */
			CONST ENABLE_UPDATE_SERVICES_CONFIGURATION		= 'enable_update_services_configuration';
		#::
		#:Enter:
			/**
			 * @since 3.1
			 */
			CONST ENTER_TITLE_HERE					= 'enter_title_here';
		#::
		#:Esc:
			/**
			 * @since 2.8
			 */
			CONST ESC_HTML						= 'esc_html';
			
			/**
			 * @since 3.1
			 */
			CONST ESC_TEXTAREA					= 'esc_textarea';
		#::
		#:Excerpt:
			/**
			 * @since 1.5.2
			 */
			CONST EXCERPT_EDIT_PRE					= 'excerpt_edit_pre';
			
			/**
			 * @since 2.7
			 */
			CONST EXCERPT_LENGTH					= 'excerpt_length';
			
			/**
			 * @since 2.9
			 */
			CONST EXCERPT_MORE					= 'excerpt_more';
			
			/**
			 * @since 1.5.2
			 */
			CONST EXCERPT_SAVE_PRE					= 'excerpt_save_pre';
		#::
		#:Exit:
			/**
			 * @since 3.5
			 */
			CONST EXIT_ON_HTTP_HEAD					= 'exit_on_http_head';
		#::
		#:Export:
			/**
			 * @since 3.5
			 */
			CONST EXPORT_ARGS					= 'export_args';
		#::
		#:Ext:
			/**
			 * @since 2.5
			 */
			CONST EXT2TYPE						= 'ext2type';
		#::
		#:Extra:
			/**
			 * @since 3.4
			 */
			CONST EXTRA_THEME_HEADERS				= 'extra_theme_headers';
			
			/**
			 * @since 2.9
			 */
			CONST EXTRA_CONTEXT_HEADERS__				= 'extra_{:context}_headers';
		#::
		#:Feed:
			/**
			 * @since 2.8
			 */
			CONST FEED_CONTENT_TYPE					= 'feed_content_type';
			
			/**
			 * @since 1.5.2
			 */
			CONST FEED_LINK						= 'feed_link';
		#::
		#:Filesystem:
			/**
			 * @since 2.6
			 */
			CONST FILESYSTEM_METHOD					= 'filesystem_method';
			
			/**
			 * @since 2.6
			 */
			CONST FILESYSTEM_METHOD_FILE				= 'filesystem_method_file';
		#::
		#:File:
			/**
			 * @since 2.5
			 */
			CONST FILE_IS_DISPLAYABLE_IMAGE				= 'file_is_displayable_image';
		#::
		#:Force:
			/**
			 * @since 3.1
			 */
			CONST FORCE_FILTERED_HTML_ON_IMPORT			= 'force_filtered_html_on_import';
		#::
		#:Format:
			/**
			 * @since 1.2.1
			 */
			CONST FORMAT_TO_EDIT					= 'format_to_edit';
			
			/**
			 * @since 1.2.1
			 */
			CONST FORMAT_TO_POST					= 'format_to_post';
		#::
		#:Found:
			/**
			 * @since 2.1
			 */
			CONST FOUND_POSTS					= 'found_posts';
			
			/**
			 * @since 2.1
			 */
			CONST FOUND_POSTS_QUERY					= 'found_posts_query';
			
			/**
			 * @since 3.2
			 */
			CONST FOUND_USERS_QUERY					= 'found_users_query';
		#::
		#:Fs:
			/**
			 * @since 2.9
			 */
			CONST FS_FTP_CONNECTION_TYPES				= 'fs_ftp_connection_types';
		#::
		#:Gallery:
			/**
			 * @since 2.5
			 */
			CONST GALLERY_STYLE					= 'gallery_style';
		#::
		#:Get\:
			/**
			 * @since 2.2
			 */
			CONST GETARCHIVES_JOIN					= 'getarchives_join';
			
			/**
			 * @since 2.2
			 */
			CONST GETARCHIVES_WHERE					= 'getarchives_where';
			
			/**
			 * @since 3.0
			 */
			CONST GETIMAGESIZE_MIMES_TO_EXTS			= 'getimagesize_mimes_to_exts';
			
			/**
			 * @since 2.0.11
			 */
			CONST GETTEXT						= 'gettext';
			
			/**
			 * @since 2.8
			 */
			CONST GETTEXT_WITH_CONTEXT				= 'gettext_with_context';
		#::
		#:Get:
			/**
			 * @since 3.1
			 */
			CONST GET_ANCESTORS					= 'get_ancestors';
			
			/**
			 * @since 2.6
			 */
			CONST GET_ARCHIVES_LINK					= 'get_archives_link';
			
			/**
			 * @since 2.1
			 */
			CONST GET_ATTACHED_FILE					= 'get_attached_file';
			
			/**
			 * @since 2.5
			 */
			CONST GET_AVATAR					= 'get_avatar';
			
			/**
			 * @since 3.0
			 */
			CONST GET_AVATAR_COMMENT_TYPES				= 'get_avatar_comment_types';
			
			/**
			 * @since 2.2
			 */
			CONST GET_BLOGINFO_RSS					= 'get_bloginfo_rss';
			
			/**
			 * @since 3.0
			 */
			CONST GET_BLOGS_OF_USER					= 'get_blogs_of_user';
			
			/**
			 * @since 2.1
			 */
			CONST GET_BOOKMARKS					= 'get_bookmarks';
			
			/**
			 * @since 3.0
			 */
			CONST GET_CALENDAR					= 'get_calendar';
			
			/**
			 * @since 2.7
			 */
			CONST GET_CATEGORIES_TAXONOMY				= 'get_categories_taxonomy';
			
			/**
			 * @since 2.0.11
			 */
			CONST GET_CATEGORY					= 'get_category';
			
			/**
			 * @since 2.3
			 */
			CONST GET_COMMENT					= 'get_comment';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENTS_NUMBER				= 'get_comments_number';
			
			/**
			 * @since 2.7
			 */
			CONST GET_COMMENTS_PAGENUM_LINK				= 'get_comments_pagenum_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR				= 'get_comment_author';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR_EMAIL				= 'get_comment_author_email';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR_IP				= 'get_comment_author_ip';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR_LINK				= 'get_comment_author_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR_URL				= 'get_comment_author_url';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_AUTHOR_URL_LINK			= 'get_comment_author_url_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_DATE					= 'get_comment_date';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_EXCERPT				= 'get_comment_excerpt';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_ID					= 'get_comment_id';
			
			/**
			 * @since 2.8
			 */
			CONST GET_COMMENT_LINK					= 'get_comment_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_TEXT					= 'get_comment_text';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_TIME					= 'get_comment_time';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_COMMENT_TYPE					= 'get_comment_type';
			
			/**
			 * @since 2.9
			 */
			CONST GET_DELETE_POST_LINK				= 'get_delete_post_link';
			
			/**
			 * @since 2.0
			 */
			CONST GET_EDITABLE_AUTHORS				= 'get_editable_authors';
			
			/**
			 * @since 2.7
			 */
			CONST GET_EDIT_BOOKMARK_LINK				= 'get_edit_bookmark_link';
			
			/**
			 * @since 2.3
			 */
			CONST GET_EDIT_COMMENT_LINK				= 'get_edit_comment_link';
			
			/**
			 * @since 2.3
			 */
			CONST GET_EDIT_POST_LINK				= 'get_edit_post_link';
			
			/**
			 * @since 2.7
			 */
			CONST GET_EDIT_TAG_LINK					= 'get_edit_tag_link';
			
			/**
			 * @since 3.1
			 */
			CONST GET_EDIT_TERM_LINK				= 'get_edit_term_link';
			
			/**
			 * @since 3.5
			 */
			CONST GET_EDIT_USER_LINK				= 'get_edit_user_link';
			
			/**
			 * @since 2.0
			 */
			CONST GET_ENCLOSED					= 'get_enclosed';
			
			/**
			 * @since 2.6
			 */
			CONST GET_IMAGE_TAG					= 'get_image_tag';
			
			/**
			 * @since 2.6
			 */
			CONST GET_IMAGE_TAG_CLASS				= 'get_image_tag_class';
			
			/**
			 * @since 2.3
			 */
			CONST GET_LASTPOSTDATE					= 'get_lastpostdate';
			
			/**
			 * @since 2.3
			 */
			CONST GET_LASTPOSTMODIFIED				= 'get_lastpostmodified';
			
			/**
			 * @since 3.1
			 */
			CONST GET_MEDIA_ITEM_ARGS				= 'get_media_item_args';
			
			/**
			 * @since 3.1
			 */
			CONST GET_META_SQL					= 'get_meta_sql';
			
			/**
			 * @since 2.1
			 */
			CONST GET_NEXT_POST_JOIN				= 'get_next_post_join';
			
			/**
			 * @since 2.1
			 */
			CONST GET_NEXT_POST_SORT				= 'get_next_post_sort';
			
			/**
			 * @since 2.1
			 */
			CONST GET_NEXT_POST_WHERE				= 'get_next_post_where';
			
			/**
			 * @since 2.0
			 */
			CONST GET_OTHERS_DRAFTS					= 'get_others_drafts';
			
			/**
			 * @since 2.5
			 */
			CONST GET_PAGENUM_LINK					= 'get_pagenum_link';
			
			/**
			 * @since 2.1
			 */
			CONST GET_PAGES						= 'get_pages';
			
			/**
			 * @since 2.8
			 */
			CONST GET_POST_MODIFIED_TIME				= 'get_post_modified_time';
			
			/**
			 * @since 2.6
			 */
			CONST GET_POST_TIME					= 'get_post_time';
			
			/**
			 * @since 2.1
			 */
			CONST GET_PREVIOUS_POST_JOIN				= 'get_previous_post_join';
			
			/**
			 * @since 2.1
			 */
			CONST GET_PREVIOUS_POST_SORT				= 'get_previous_post_sort';
			
			/**
			 * @since 2.1
			 */
			CONST GET_PREVIOUS_POST_WHERE				= 'get_previous_post_where';
			
			/**
			 * @since 2.0
			 */
			CONST GET_PUNG						= 'get_pung';
			
			/**
			 * @since 2.9
			 */
			CONST GET_SAMPLE_PERMALINK_HTML				= 'get_sample_permalink_html';
			
			/**
			 * @since 2.7
			 */
			CONST GET_SEARCH_FORM					= 'get_search_form';
			
			/**
			 * @since 2.3
			 */
			CONST GET_SEARCH_QUERY					= 'get_search_query';
			
			/**
			 * @since 3.0
			 */
			CONST GET_SHORTLINK					= 'get_shortlink';
			
			/**
			 * @since 2.3
			 */
			CONST GET_TAGS						= 'get_tags';
			
			/**
			 * @since 2.3
			 */
			CONST GET_TERM						= 'get_term';
			
			/**
			 * @since 2.3
			 */
			CONST GET_TERMS						= 'get_terms';
			
			/**
			 * @since 3.1
			 */
			CONST GET_TERMS_ARGS					= 'get_terms_args';
			
			/**
			 * @since 2.8
			 */
			CONST GET_TERMS_FIELDS					= 'get_terms_fields';
			
			/**
			 * @since 2.8
			 */
			CONST GET_TERMS_ORDERBY					= 'get_terms_orderby';
			
			/**
			 * @since 2.8
			 */
			CONST GET_THE_AUTHOR_FIELD__				= 'get_the_author_{:field}';
			
			/**
			 * @since 3.1
			 */
			CONST GET_THE_CATEGORIES				= 'get_the_categories';
			
			/**
			 * @since 3.0
			 */
			CONST GET_THE_DATE					= 'get_the_date';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_THE_EXCERPT					= 'get_the_excerpt';
			
			/**
			 * @since 2.5
			 */
			CONST GET_THE_GENERATOR_TYPE__				= 'get_the_generator_{:type}';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_THE_GUID					= 'get_the_guid';
			
			/**
			 * @since 2.1
			 */
			CONST GET_THE_MODIFIED_DATE				= 'get_the_modified_date';
			
			/**
			 * @since 2.0
			 */
			CONST GET_THE_MODIFIED_TIME				= 'get_the_modified_time';
			
			/**
			 * @since 2.3
			 */
			CONST GET_THE_TAGS					= 'get_the_tags';
			
			/**
			 * @since 3.1
			 */
			CONST GET_THE_TERMS					= 'get_the_terms';
			
			/**
			 * @since 1.5.2
			 */
			CONST GET_THE_TIME					= 'get_the_time';
			
			/**
			 * @since 2.0
			 */
			CONST GET_TO_PING					= 'get_to_ping';
			
			/**
			 * @since 2.7
			 */
			CONST GET_USERNUMPOSTS					= 'get_usernumposts';
			
			/**
			 * @since 2.0
			 */
			CONST GET_USERS_DRAFTS					= 'get_users_drafts';
			
			/**
			 * @since 2.5
			 */
			CONST GET_USER_OPTION_OPTION__				= 'get_user_option_{:option}';
			
			/**
			 * @since 2.2
			 */
			CONST GET_WP_TITLE_RSS					= 'get_wp_title_rss';
			
			/**
			 * @since 2.5
			 */
			CONST GET_ADJACENT_POST_JOIN__				= 'get_{:adjacent}_post_join';
			
			/**
			 * @since 2.5
			 */
			CONST GET_ADJACENT_POST_SORT__				= 'get_{:adjacent}_post_sort';
			
			/**
			 * @since 2.5
			 */
			CONST GET_ADJACENT_POST_WHERE__				= 'get_{:adjacent}_post_where';
			
			/**
			 * @since 3.1
			 */
			CONST GET_META_TYPE_METADATA__				= 'get_{:metaType}_metadata';
			
			/**
			 * @since 2.3
			 */
			CONST GET_TAXONOMY__					= 'get_{:taxonomy}';
		#::
		#:Global:
			/**
			 * @since 3.0
			 */
			CONST GLOBAL_TERMS_ENABLED				= 'global_terms_enabled';
		#::
		#:Got:
			/**
			 * @since 2.5
			 */
			CONST GOT_REWRITE					= 'got_rewrite';
		#::
		#:Graceful:
			/**
			 * @since 3.0
			 */
			CONST GRACEFUL_FAIL					= 'graceful_fail';
			
			/**
			 * @since 3.0
			 */
			CONST GRACEFUL_FAIL_TEMPLATE				= 'graceful_fail_template';
		#::
		#:Hidden:
			/**
			 * @since 3.3
			 */
			CONST HIDDEN_META_BOXES					= 'hidden_meta_boxes';
		#::
		#:Home:
			/**
			 * @since 3.0
			 */
			CONST HOME_URL						= 'home_url';
		#::
		#:HtmlEdit:
			/**
			 * @since 2.5
			 */
			CONST HTMLEDIT_PRE					= 'htmledit_pre';
		#::
		#:Https:
			/**
			 * @since 2.8
			 */
			CONST HTTPS_LOCAL_SSL_VERIFY				= 'https_local_ssl_verify';
			
			/**
			 * @since 2.8
			 */
			CONST HTTPS_SSL_VERIFY					= 'https_ssl_verify';
		#::
		#:Http:
			/**
			 * @since 2.7
			 */
			CONST HTTP_HEADERS_USERAGENT				= 'http_headers_useragent';
			
			/**
			 * @since 3.4
			 */
			CONST HTTP_ORIGIN					= 'http_origin';
			
			/**
			 * @since 2.7
			 */
			CONST HTTP_REQUEST_ARGS					= 'http_request_args';
			
			/**
			 * @since 2.7
			 */
			CONST HTTP_REQUEST_REDIRECTION_COUNT			= 'http_request_redirection_count';
			
			/**
			 * @since 2.7
			 */
			CONST HTTP_REQUEST_TIMEOUT				= 'http_request_timeout';
			
			/**
			 * @since 2.7
			 */
			CONST HTTP_REQUEST_VERSION				= 'http_request_version';
			
			/**
			 * @since 2.9
			 */
			CONST HTTP_RESPONSE					= 'http_response';
		#::
		#:Icon:
			/**
			 * @since 2.0
			 */
			CONST ICON_DIR						= 'icon_dir';
			
			/**
			 * @since 2.5
			 */
			CONST ICON_DIRS						= 'icon_dirs';
			
			/**
			 * @since 2.0
			 */
			CONST ICON_DIR_URI					= 'icon_dir_uri';
		#::
		#:IIS7:
			/**
			 * @since 2.8
			 */
			CONST IIS7_SUPPORTS_PERMALINKS				= 'iis7_supports_permalinks';
			
			/**
			 * @since 2.8
			 */
			CONST IIS7_URL_REWRITE_RULES				= 'iis7_url_rewrite_rules';
		#::
		#:Image:
			/**
			 * @since 2.6
			 */
			CONST IMAGE_ADD_CAPTION_SHORTCODE			= 'image_add_caption_shortcode';
			
			/**
			 * @since 2.5
			 */
			CONST IMAGE_DOWNSIZE					= 'image_downsize';
			
			/**
			 * @since 3.5
			 */
			CONST IMAGE_EDITOR_DEFAULT_MIME_TYPE			= 'image_editor_default_mime_type';
			
			/**
			 * @since 3.5
			 */
			CONST IMAGE_EDITOR_SAVE_PRE				= 'image_editor_save_pre';
			
			/**
			 * @since 2.9
			 */
			CONST IMAGE_EDIT_BEFORE_CHANGE				= 'image_edit_before_change';
			
			/**
			 * @since 2.6
			 */
			CONST IMAGE_MAKE_INTERMEDIATE_SIZE			= 'image_make_intermediate_size';
			
			/**
			 * @since 3.2
			 */
			CONST IMAGE_MEMORY_LIMIT				= 'image_memory_limit';
			
			/**
			 * @since 3.4
			 */
			CONST IMAGE_RESIZE_DIMENSIONS				= 'image_resize_dimensions';
			
			/**
			 * @since 2.9
			 */
			CONST IMAGE_SAVE_PRE					= 'image_save_pre';
			
			/**
			 * @since 2.5
			 */
			CONST IMAGE_SEND_TO_EDITOR				= 'image_send_to_editor';
			
			/**
			 * @since 2.8
			 */
			CONST IMAGE_SEND_TO_EDITOR_URL				= 'image_send_to_editor_url';
			
			/**
			 * @since 3.3
			 */
			CONST IMAGE_SIZE_NAMES_CHOOSE				= 'image_size_names_choose';
		#::
		#:Img:
			/**
			 * @since 2.6
			 */
			CONST IMG_CAPTION_SHORTCODE				= 'img_caption_shortcode';
		#::
		#:Import:
			/**
			 * @since 2.3
			 */
			CONST IMPORT_UPLOAD_SIZE_LIMIT				= 'import_upload_size_limit';
		#::
		#:Includes:
			/**
			 * @since 2.8
			 */
			CONST INCLUDES_URL					= 'includes_url';
		#::
		#:Index:
			/**
			 * @since 2.8
			 */
			CONST INDEX_REL_LINK					= 'index_rel_link';
		#::
		#:Install:
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGINS_NONMENU_TABS			= 'install_plugins_nonmenu_tabs';
			
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGINS_TABS				= 'install_plugins_tabs';
			
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGIN_COMPLETE_ACTIONS			= 'install_plugin_complete_actions';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEMES_NONMENU_TABS			= 'install_themes_nonmenu_tabs';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEMES_TABS				= 'install_themes_tabs';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEME_COMPLETE_ACTIONS			= 'install_theme_complete_actions';
		#::
		#:Intermediate:
			/**
			 * @since 2.5
			 */
			CONST INTERMEDIATE_IMAGE_SIZES				= 'intermediate_image_sizes';
			
			/**
			 * @since 2.9
			 */
			CONST INTERMEDIATE_IMAGE_SIZES_ADVANCED			= 'intermediate_image_sizes_advanced';
		#::
		#:Is:
			/**
			 * @since 2.8
			 */
			CONST IS_EMAIL						= 'is_email';
			
			/**
			 * @since 3.5
			 */
			CONST IS_EMAIL_ADDRESS_UNSAFE				= 'is_email_address_unsafe';
			
			/**
			 * @since 3.3
			 */
			CONST IS_MULTI_AUTHOR					= 'is_multi_author';
			
			/**
			 * @since 3.2
			 */
			CONST IS_PROTECTED_META					= 'is_protected_meta';
		#::
		#:Jpeg:
			/**
			 * @since 2.5
			 */
			CONST JPEG_QUALITY					= 'jpeg_quality';
		#::
		#:Js:
			/**
			 * @since 2.0.11
			 */
			CONST JS_ESCAPE						= 'js_escape';
		#::
		#:Kses:
			/**
			 * @since 3.0
			 */
			CONST KSES_ALLOWED_PROTOCOLS				= 'kses_allowed_protocols';
		#::
		#:Language:
			/**
			 * @since 2.5
			 */
			CONST LANGUAGE_ATTRIBUTES				= 'language_attributes';
		#::
		#:Lang:
			/**
			 * @since 3.0
			 */
			CONST LANG_CODES					= 'lang_codes';
		#::
		#:Link:
			/**
			 * @since 2.2
			 */
			CONST LINK_CATEGORY					= 'link_category';
			
			/**
			 * @since 2.2
			 */
			CONST LINK_DESCRIPTION					= 'link_description';
			
			/**
			 * @since 1.5.2
			 */
			CONST LINK_RATING					= 'link_rating';
			
			/**
			 * @since 2.2
			 */
			CONST LINK_TITLE					= 'link_title';
		#::
		#:List:
			/**
			 * @since 1.2.1
			 */
			CONST LIST_CATS						= 'list_cats';
			
			/**
			 * @since 3.1
			 */
			CONST LIST_PAGES					= 'list_pages';
			
			/**
			 * @since 2.3
			 */
			CONST LIST_TERMS_EXCLUSIONS				= 'list_terms_exclusions';
		#::
		#:Load:
			/**
			 * @since 2.9
			 */
			CONST LOAD_DEFAULT_EMBEDS				= 'load_default_embeds';
			
			/**
			 * @since 2.8
			 */
			CONST LOAD_DEFAULT_WIDGETS				= 'load_default_widgets';
			
			/**
			 * @since 2.9
			 */
			CONST LOAD_IMAGE_TO_EDIT				= 'load_image_to_edit';
			
			/**
			 * @since 3.1
			 */
			CONST LOAD_IMAGE_TO_EDIT_ATTACHMENTURL			= 'load_image_to_edit_attachmenturl';
			
			/**
			 * @since 3.1
			 */
			CONST LOAD_IMAGE_TO_EDIT_FILESYSTEMPATH			= 'load_image_to_edit_filesystempath';
			
			/**
			 * @since 2.9
			 */
			CONST LOAD_IMAGE_TO_EDIT_PATH				= 'load_image_to_edit_path';
			
			/**
			 * @since 2.9
			 */
			CONST LOAD_TEXTDOMAIN_MOFILE				= 'load_textdomain_mofile';
		#::
		#:Locale:
			/**
			 * @since 1.5.2
			 */
			CONST LOCALE						= 'locale';
			
			/**
			 * @since 2.1
			 */
			CONST LOCALE_STYLESHEET_URI				= 'locale_stylesheet_uri';
		#::
		#:Login\:
			/**
			 * @since 1.5.2
			 */
			CONST LOGINOUT						= 'loginout';
		#::
		#:Login:
			/**
			 * @since 3.5
			 */
			CONST LOGIN_BODY_CLASS					= 'login_body_class';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_ERRORS					= 'login_errors';
			
			/**
			 * @since 3.0
			 */
			CONST LOGIN_FORM_BOTTOM					= 'login_form_bottom';
			
			/**
			 * @since 3.0
			 */
			CONST LOGIN_FORM_DEFAULTS				= 'login_form_defaults';
			
			/**
			 * @since 3.0
			 */
			CONST LOGIN_FORM_MIDDLE					= 'login_form_middle';
			
			/**
			 * @since 3.0
			 */
			CONST LOGIN_FORM_TOP					= 'login_form_top';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_HEADERTITLE					= 'login_headertitle';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_HEADERURL					= 'login_headerurl';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_MESSAGE					= 'login_message';
			
			/**
			 * @since 2.5
			 */
			CONST LOGIN_MESSAGES					= 'login_messages';
			
			/**
			 * @since 2.7
			 */
			CONST LOGIN_REDIRECT					= 'login_redirect';
			
			/**
			 * @since 2.8
			 */
			CONST LOGIN_URL						= 'login_url';
		#::
		#:Logout:
			/**
			 * @since 2.8
			 */
			CONST LOGOUT_URL					= 'logout_url';
		#::
		#:Lost\:
			/**
			 * @since 3.0
			 */
			CONST LOSTPASSWORD_REDIRECT				= 'lostpassword_redirect';
			
			/**
			 * @since 2.8
			 */
			CONST LOSTPASSWORD_URL					= 'lostpassword_url';
		#::
		#:Manage:
			/**
			 * @since 2.5
			 */
			CONST MANAGE_MEDIA_COLUMNS				= 'manage_media_columns';
			
			/**
			 * @since 2.5
			 */
			CONST MANAGE_PAGES_COLUMNS				= 'manage_pages_columns';
			
			/**
			 * @since 1.5.2
			 */
			CONST MANAGE_POSTS_COLUMNS				= 'manage_posts_columns';
			
			/**
			 * @since 3.1
			 */
			CONST MANAGE_SITES_ACTION_LINKS				= 'manage_sites_action_links';
			
			/**
			 * @since 3.5
			 */
			CONST MANAGE_TAXONOMIES_FOR_ATTACHMENT_COLUMNS		= 'manage_taxonomies_for_attachment_columns';
			
			/**
			 * @since 3.5
			 */
			CONST MANAGE_TAXONOMIES_FOR_POST_TYPE_COLUMNS__		= 'manage_taxonomies_for_{:postType}_columns';
			
			/**
			 * @since 2.8
			 */
			CONST MANAGE_USERS_CUSTOM_COLUMN			= 'manage_users_custom_column';
			
			/**
			 * @since 3.0
			 */
			CONST MANAGE_POST_TYPE_POSTS_COLUMNS__			= 'manage_{:postType}_posts_columns';
			
			/**
			 * @since 3.0
			 */
			CONST MANAGE_SCREEN_ID_COLUMNS__			= 'manage_{:screenId}_columns';
			
			/**
			 * @since 3.5
			 */
			CONST MANAGE_SCREEN_ID_SORTABLE_COLUMNS__		= 'manage_{:screenId}_sortable_columns';
			
			/**
			 * @since 3.5
			 */
			CONST MANAGE_SCREEN_TAXONOMY_CUSTOM_COLUMN__		= 'manage_{:screenTaxonomy}_custom_column';
		#::
		#:Map:
			/**
			 * @since 2.8
			 */
			CONST MAP_META_CAP					= 'map_meta_cap';
		#::
		#:Mce:
			/**
			 * @since 2.0
			 */
			CONST MCE_BUTTONS					= 'mce_buttons';
			
			/**
			 * @since 2.0
			 */
			CONST MCE_BUTTONS_2					= 'mce_buttons_2';
			
			/**
			 * @since 2.0
			 */
			CONST MCE_BUTTONS_3					= 'mce_buttons_3';
			
			/**
			 * @since 2.5
			 */
			CONST MCE_BUTTONS_4					= 'mce_buttons_4';
			
			/**
			 * @since 2.1
			 */
			CONST MCE_CSS						= 'mce_css';
			
			/**
			 * @since 2.5
			 */
			CONST MCE_EXTERNAL_LANGUAGES				= 'mce_external_languages';
			
			/**
			 * @since 2.5
			 */
			CONST MCE_EXTERNAL_PLUGINS				= 'mce_external_plugins';
			
			/**
			 * @since 2.5
			 */
			CONST MCE_SPELLCHECKER_LANGUAGES			= 'mce_spellchecker_languages';
		#::
		#:Media:
			/**
			 * @since 2.5
			 */
			CONST MEDIA_BUTTONS_CONTEXT				= 'media_buttons_context';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_META					= 'media_meta';
			
			/**
			 * @since 2.8
			 */
			CONST MEDIA_ROW_ACTIONS					= 'media_row_actions';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_SEND_TO_EDITOR				= 'media_send_to_editor';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_UPLOAD_DEFAULT_TAB				= 'media_upload_default_tab';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_UPLOAD_DEFAULT_TYPE				= 'media_upload_default_type';
			
			/**
			 * @since 2.6
			 */
			CONST MEDIA_UPLOAD_FORM_URL				= 'media_upload_form_url';
			
			/**
			 * @since 3.1
			 */
			CONST MEDIA_UPLOAD_MIME_TYPE_LINKS			= 'media_upload_mime_type_links';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_UPLOAD_TABS					= 'media_upload_tabs';
			
			/**
			 * @since 3.5
			 */
			CONST MEDIA_VIEW_SETTINGS				= 'media_view_settings';
			
			/**
			 * @since 3.5
			 */
			CONST MEDIA_VIEW_STRINGS				= 'media_view_strings';
		#::
		#:Menu:
			/**
			 * @since 2.8
			 */
			CONST MENU_ORDER					= 'menu_order';
		#::
		#:Mime:
			/**
			 * @since 3.5
			 */
			CONST MIME_TYPES					= 'mime_types';
		#::
		#:Mod:
			/**
			 * @since 1.5.2
			 */
			CONST MOD_REWRITE_RULES					= 'mod_rewrite_rules';
		#::
		#:Month:
			/**
			 * @since 1.5.2
			 */
			CONST MONTH_LINK					= 'month_link';
		#::
		#:Ms:
			/**
			 * @since 3.0
			 */
			CONST MS_SITE_CHECK					= 'ms_site_check';
			
			/**
			 * @since 3.1
			 */
			CONST MS_USER_LIST_SITE_ACTIONS				= 'ms_user_list_site_actions';
			
			/**
			 * @since 3.2
			 */
			CONST MS_USER_ROW_ACTIONS				= 'ms_user_row_actions';
		#::
		#:Mu:
			/**
			 * @since 3.0
			 */
			CONST MU_DROPDOWN_LANGUAGES				= 'mu_dropdown_languages';
			
			/**
			 * @since 3.0
			 */
			CONST MU_MENU_ITEMS					= 'mu_menu_items';
		#::
		#:MyBlogs:
			/**
			 * @since 3.0
			 */
			CONST MYBLOGS_BLOG_ACTIONS				= 'myblogs_blog_actions';
			
			/**
			 * @since 3.0
			 */
			CONST MYBLOGS_OPTIONS					= 'myblogs_options';
		#::
		#:Name:
			/**
			 * @since 1.5.2
			 */
			CONST NAME_SAVE_PRE					= 'name_save_pre';
		#::
		#:Nav:
			/**
			 * @since 3.0
			 */
			CONST NAV_MENU_ATTR_TITLE				= 'nav_menu_attr_title';
			
			/**
			 * @since 3.0
			 */
			CONST NAV_MENU_CSS_CLASS				= 'nav_menu_css_class';
			
			/**
			 * @since 3.0
			 */
			CONST NAV_MENU_DESCRIPTION				= 'nav_menu_description';
			
			/**
			 * @since 3.2
			 */
			CONST NAV_MENU_ITEMS_POST_TYPE_NAME__			= 'nav_menu_items_{:postTypeName}';
			
			/**
			 * @since 3.1
			 */
			CONST NAV_MENU_ITEM_ID					= 'nav_menu_item_id';
			
			/**
			 * @since 3.0
			 */
			CONST NAV_MENU_META_BOX_OBJECT				= 'nav_menu_meta_box_object';
		#::
		#:Network:
			/**
			 * @since 3.0
			 */
			CONST NETWORK_ADMIN_URL					= 'network_admin_url';
			
			/**
			 * @since 3.0
			 */
			CONST NETWORK_HOME_URL					= 'network_home_url';
			
			/**
			 * @since 3.5
			 */
			CONST NETWORK_SITES_UPDATED_MESSAGE_UPDATED__		= 'network_sites_updated_message_{:updated}';
			
			/**
			 * @since 3.0
			 */
			CONST NETWORK_SITE_URL					= 'network_site_url';
		#::
		#:New\:
			/**
			 * @since 3.0
			 */
			CONST NEWBLOGNAME					= 'newblogname';
			
			/**
			 * @since 3.0
			 */
			CONST NEWBLOG_NOTIFY_SITEADMIN				= 'newblog_notify_siteadmin';
			
			/**
			 * @since 3.0
			 */
			CONST NEWUSER_NOTIFY_SITEADMIN				= 'newuser_notify_siteadmin';
			
			/**
			 * @since 3.0
			 */
			CONST NEW_ADMIN_EMAIL_CONTENT				= 'new_admin_email_content';
			
			/**
			 * @since 3.0
			 */
			CONST NEW_USER_EMAIL_CONTENT				= 'new_user_email_content';
		#::
		#:Next:
			/**
			 * @since 2.7
			 */
			CONST NEXT_COMMENTS_LINK_ATTRIBUTES			= 'next_comments_link_attributes';
			
			/**
			 * @since 2.7
			 */
			CONST NEXT_POSTS_LINK_ATTRIBUTES			= 'next_posts_link_attributes';
		#::
		#:NGet\:
			/**
			 * @since 2.2
			 */
			CONST NGETTEXT						= 'ngettext';
			
			/**
			 * @since 2.8
			 */
			CONST NGETTEXT_WITH_CONTEXT				= 'ngettext_with_context';
		#::
		#:No\:
			/**
			 * @since 2.8
			 */
			CONST NOCACHE_HEADERS					= 'nocache_headers';
			
			/**
			 * @since 2.5
			 */
			CONST NONCE_LIFE					= 'nonce_life';
			
			/**
			 * @since 3.5
			 */
			CONST NONCE_USER_LOGGED_OUT				= 'nonce_user_logged_out';
			
			/**
			 * @since 2.8
			 */
			CONST NO_TEXTURIZE_SHORTCODES				= 'no_texturize_shortcodes';
			
			/**
			 * @since 2.8
			 */
			CONST NO_TEXTURIZE_TAGS					= 'no_texturize_tags';
		#::
		#:Number:
			/**
			 * @since 2.8
			 */
			CONST NUMBER_FORMAT_I18N				= 'number_format_i18n';
		#::
		#:OEmbed:
			/**
			 * @since 2.9
			 */
			CONST OEMBED_DATAPARSE					= 'oembed_dataparse';
			
			/**
			 * @since 3.5
			 */
			CONST OEMBED_FETCH_URL					= 'oembed_fetch_url';
			
			/**
			 * @since 2.9
			 */
			CONST OEMBED_LINKTYPES					= 'oembed_linktypes';
			
			/**
			 * @since 2.9
			 */
			CONST OEMBED_PROVIDERS					= 'oembed_providers';
			
			/**
			 * @since 2.9
			 */
			CONST OEMBED_RESULT					= 'oembed_result';
		#::
		#:Option:
			/**
			 * @since 3.5
			 */
			CONST OPTION_ENABLE_XMLRPC				= 'option_enable_xmlrpc';
			
			/**
			 * @since 3.2
			 */
			CONST OPTION_PAGE_CAPABILITY_OPTION_PAGE__		= 'option_page_capability_{:optionPage}';
			
			/**
			 * @since 3.0
			 */
			CONST OPTION_OPTION__					= 'option_{:option}';
		#::
		#:Override:
			/**
			 * @since 2.9
			 */
			CONST OVERRIDE_LOAD_TEXTDOMAIN				= 'override_load_textdomain';
			
			/**
			 * @since 3.0
			 */
			CONST OVERRIDE_UNLOAD_TEXTDOMAIN			= 'override_unload_textdomain';
		#::
		#:page:
			/**
			 * @since 3.3
			 */
			CONST PAGE_ATTRIBUTES_DROPDOWN_PAGES_ARGS		= 'page_attributes_dropdown_pages_args';
			
			/**
			 * @since 2.8
			 */
			CONST PAGE_CSS_CLASS					= 'page_css_class';
			
			/**
			 * @since 1.5.2
			 */
			CONST PAGE_LINK						= 'page_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST PAGE_REWRITE_RULES				= 'page_rewrite_rules';
			
			/**
			 * @since 2.8
			 */
			CONST PAGE_ROW_ACTIONS					= 'page_row_actions';
		#::
		#:Paginate:
			/**
			 * @since 3.0
			 */
			CONST PAGINATE_LINKS					= 'paginate_links';
		#::
		#:Parent:
			/**
			 * @since 3.0
			 */
			CONST PARENT_FILE					= 'parent_file';
			
			/**
			 * @since 2.8
			 */
			CONST PARENT_POST_REL_LINK				= 'parent_post_rel_link';
		#::
		#:Phone:
			/**
			 * @since 1.2.1
			 */
			CONST PHONE_CONTENT					= 'phone_content';
		#::
		#:Ping\:
			/**
			 * @since 2.9
			 */
			CONST PINGBACK_USERAGENT				= 'pingback_useragent';
			
			/**
			 * @since 2.5
			 */
			CONST PINGS_OPEN					= 'pings_open';
			
			/**
			 * @since 2.0
			 */
			CONST PING_STATUS_PRE					= 'ping_status_pre';
		#::
		#:Plugins\:
			/**
			 * @since 2.7
			 */
			CONST PLUGINS_API					= 'plugins_api';
			
			/**
			 * @since 2.7
			 */
			CONST PLUGINS_API_ARGS					= 'plugins_api_args';
			
			/**
			 * @since 2.7
			 */
			CONST PLUGINS_API_RESULT				= 'plugins_api_result';
			
			/**
			 * @since 2.8
			 */
			CONST PLUGINS_URL					= 'plugins_url';
		#::
		#:Plugin:
			/**
			 * @since 2.7
			 */
			CONST PLUGIN_INSTALL_ACTION_LINKS			= 'plugin_install_action_links';
			
			/**
			 * @since 3.0
			 */
			CONST PLUGIN_LOCALE					= 'plugin_locale';
			
			/**
			 * @since 2.8
			 */
			CONST PLUGIN_ROW_META					= 'plugin_row_meta';
		#::
		#:PLUpload:
			/**
			 * @since 3.4
			 */
			CONST PLUPLOAD_DEFAULT_PARAMS				= 'plupload_default_params';
			
			/**
			 * @since 3.4
			 */
			CONST PLUPLOAD_DEFAULT_SETTINGS				= 'plupload_default_settings';
			
			/**
			 * @since 3.3
			 */
			CONST PLUPLOAD_INIT					= 'plupload_init';
		#::
		#:Postbox:
			/**
			 * @since 3.2
			 */
			CONST POSTBOX_CLASSES_PAGE_ID__				= 'postbox_classes_{:page}_{:id}';
		#::
		#:PostMeta:
			/**
			 * @since 2.1
			 */
			CONST POSTMETA_FORM_LIMIT				= 'postmeta_form_limit';
		#::
		#:Posts:
			/**
			 * @since 3.1
			 */
			CONST POSTS_CLAUSES					= 'posts_clauses';
			
			/**
			 * @since 3.1
			 */
			CONST POSTS_CLAUSES_REQUEST				= 'posts_clauses_request';
			
			/**
			 * @since 2.1
			 */
			CONST POSTS_DISTINCT					= 'posts_distinct';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_DISTINCT_REQUEST				= 'posts_distinct_request';
			
			/**
			 * @since 2.1
			 */
			CONST POSTS_FIELDS					= 'posts_fields';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_FIELDS_REQUEST				= 'posts_fields_request';
			
			/**
			 * @since 2.0
			 */
			CONST POSTS_GROUPBY					= 'posts_groupby';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_GROUPBY_REQUEST				= 'posts_groupby_request';
			
			/**
			 * @since 1.5.2
			 */
			CONST POSTS_JOIN					= 'posts_join';
			
			/**
			 * @since 1.5.2
			 */
			CONST POSTS_JOIN_PAGED					= 'posts_join_paged';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_JOIN_REQUEST				= 'posts_join_request';
			
			/**
			 * @since 1.5.2
			 */
			CONST POSTS_ORDERBY					= 'posts_orderby';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_ORDERBY_REQUEST				= 'posts_orderby_request';
			
			/**
			 * @since 2.0
			 */
			CONST POSTS_REQUEST					= 'posts_request';
			
			/**
			 * @since 3.4
			 */
			CONST POSTS_REQUEST_IDS					= 'posts_request_ids';
			
			/**
			 * @since 2.3
			 */
			CONST POSTS_RESULTS					= 'posts_results';
			
			/**
			 * @since 3.0
			 */
			CONST POSTS_SEARCH					= 'posts_search';
			
			/**
			 * @since 1.5.2
			 */
			CONST POSTS_WHERE					= 'posts_where';
			
			/**
			 * @since 1.5.2
			 */
			CONST POSTS_WHERE_PAGED					= 'posts_where_paged';
			
			/**
			 * @since 2.5
			 */
			CONST POSTS_WHERE_REQUEST				= 'posts_where_request';
		#::
		#:Post:
			/**
			 * @since 2.7
			 */
			CONST POST_CLASS					= 'post_class';
			
			/**
			 * @since 1.5.2
			 */
			CONST POST_COMMENTS_FEED_LINK				= 'post_comments_feed_link';
			
			/**
			 * @since 2.8
			 */
			CONST POST_COMMENTS_FEED_LINK_HTML			= 'post_comments_feed_link_html';
			
			/**
			 * @since 2.7
			 */
			CONST POST_COMMENTS_LINK				= 'post_comments_link';
			
			/**
			 * @since 2.6
			 */
			CONST POST_DATE_COLUMN_TIME				= 'post_date_column_time';
			
			/**
			 * @since 3.1
			 */
			CONST POST_FORMAT_REWRITE_BASE				= 'post_format_rewrite_base';
			
			/**
			 * @since 2.5
			 */
			CONST POST_GALLERY					= 'post_gallery';
			
			/**
			 * @since 2.1
			 */
			CONST POST_LIMITS					= 'post_limits';
			
			/**
			 * @since 2.5
			 */
			CONST POST_LIMITS_REQUEST				= 'post_limits_request';
			
			/**
			 * @since 1.5.2
			 */
			CONST POST_LINK						= 'post_link';
			
			/**
			 * @since 3.5
			 */
			CONST POST_LINK_CATEGORY				= 'post_link_category';
			
			/**
			 * @since 2.5
			 */
			CONST POST_MIME_TYPES					= 'post_mime_types';
			
			/**
			 * @since 2.0
			 */
			CONST POST_MIME_TYPE_PRE				= 'post_mime_type_pre';
			
			/**
			 * @since 1.5.2
			 */
			CONST POST_REWRITE_RULES				= 'post_rewrite_rules';
			
			/**
			 * @since 2.8
			 */
			CONST POST_ROW_ACTIONS					= 'post_row_actions';
			
			/**
			 * @since 2.9
			 */
			CONST POST_THUMBNAIL_HTML				= 'post_thumbnail_html';
			
			/**
			 * @since 2.9
			 */
			CONST POST_THUMBNAIL_SIZE				= 'post_thumbnail_size';
			
			/**
			 * @since 3.4
			 */
			CONST POST_TYPES_TO_DELETE_WITH_USER			= 'post_types_to_delete_with_user';
			
			/**
			 * @since 3.1
			 */
			CONST POST_TYPE_ARCHIVE_FEED_LINK			= 'post_type_archive_feed_link';
			
			/**
			 * @since 3.1
			 */
			CONST POST_TYPE_ARCHIVE_LINK				= 'post_type_archive_link';
			
			/**
			 * @since 3.1
			 */
			CONST POST_TYPE_ARCHIVE_TITLE				= 'post_type_archive_title';
			
			/**
			 * @since 3.5
			 */
			CONST POST_TYPE_LABELS_POST_TYPE__			= 'post_type_labels_{:postType}';
			
			/**
			 * @since 3.0
			 */
			CONST POST_TYPE_LINK					= 'post_type_link';
			
			/**
			 * @since 3.0
			 */
			CONST POST_UPDATED_MESSAGES				= 'post_updated_messages';
			
			/**
			 * @since 2.3
			 */
			CONST POST_FIELD					= 'post_{:field}';
		#::
		#:Prepend:
			/**
			 * @since 2.0
			 */
			CONST PREPEND_ATTACHMENT				= 'prepend_attachment';
		#::
		#:PreProcess:
			/**
			 * @since 1.5.2
			 */
			CONST PREPROCESS_COMMENT				= 'preprocess_comment';
		#::
		#:Preview:
			/**
			 * @since 2.0.11
			 */
			CONST PREVIEW_POST_LINK					= 'preview_post_link';
		#::
		#:Previous:
			/**
			 * @since 2.7
			 */
			CONST PREVIOUS_COMMENTS_LINK_ATTRIBUTES			= 'previous_comments_link_attributes';
			
			/**
			 * @since 2.7
			 */
			CONST PREVIOUS_POSTS_LINK_ATTRIBUTES			= 'previous_posts_link_attributes';
		#::
		#:Pre:
			/**
			 * @since 3.0
			 */
			CONST PRE_ADD_SITE_OPTION_OPTION__			= 'pre_add_site_option_{:option}';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_CATEGORY_DESCRIPTION				= 'pre_category_description';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_CATEGORY_NAME					= 'pre_category_name';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_CATEGORY_NICENAME				= 'pre_category_nicename';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_APPROVED				= 'pre_comment_approved';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_AUTHOR_EMAIL				= 'pre_comment_author_email';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_AUTHOR_NAME				= 'pre_comment_author_name';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_AUTHOR_URL				= 'pre_comment_author_url';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_CONTENT				= 'pre_comment_content';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_USER_AGENT				= 'pre_comment_user_agent';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_COMMENT_USER_IP				= 'pre_comment_user_ip';
			
			/**
			 * @since 3.3
			 */
			CONST PRE_ENT2NCR					= 'pre_ent2ncr';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_GET_SHORTLINK					= 'pre_get_shortlink';
			
			/**
			 * @since 3.5
			 */
			CONST PRE_GET_SPACE_USED				= 'pre_get_space_used';
			
			/**
			 * @since 2.9
			 */
			CONST PRE_HTTP_REQUEST					= 'pre_http_request';
			
			/**
			 * @since 3.5
			 */
			CONST PRE_HTTP_SEND_THROUGH_PROXY			= 'pre_http_send_through_proxy';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_INSERT_TERM					= 'pre_insert_term';
			
			/**
			 * @since 2.3
			 */
			CONST PRE_KSES						= 'pre_kses';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_DESCRIPTION				= 'pre_link_description';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_IMAGE					= 'pre_link_image';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_NAME					= 'pre_link_name';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_NOTES					= 'pre_link_notes';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_REL					= 'pre_link_rel';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_RSS					= 'pre_link_rss';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_TARGET					= 'pre_link_target';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_LINK_URL					= 'pre_link_url';
			
			/**
			 * @since 3.5
			 */
			CONST PRE_OPTION_ENABLE_XMLRPC				= 'pre_option_enable_xmlrpc';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_OPTION_OPTION__				= 'pre_option_{:option}';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_POST_LINK					= 'pre_post_link';
			
			/**
			 * @since 2.3
			 */
			CONST PRE_POST_FIELD__					= 'pre_post_{:field}';
			
			/**
			 * @since 2.5
			 */
			CONST PRE_REMOTE_SOURCE					= 'pre_remote_source';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_SET_SITE_TRANSIENT_TRANSIENT__		= 'pre_set_site_transient_{:transient}';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_SET_TRANSIENT_TRANSIENT__			= 'pre_set_transient_{:transient}';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_SITE_OPTION_OPTION__				= 'pre_site_option_{:option}';
			
			/**
			 * @since 2.9
			 */
			CONST PRE_SITE_TRANSIENT_TRANSIENT__			= 'pre_site_transient_{:transient}';
			
			/**
			 * @since 2.3
			 */
			CONST PRE_TERM_FIELD__					= 'pre_term_{:field}';
			
			/**
			 * @since 2.8
			 */
			CONST PRE_TRANSIENT_TRANSIENT__				= 'pre_transient_{:transient}';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_UPDATE_OPTION_OPTION__			= 'pre_update_option_{:option}';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_UPDATE_SITE_OPTION_OPTION__			= 'pre_update_site_option_{:option}';
			
			/**
			 * @since 2.1
			 */
			CONST PRE_UPLOAD_ERROR					= 'pre_upload_error';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_DESCRIPTION				= 'pre_user_description';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_DISPLAY_NAME				= 'pre_user_display_name';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_EMAIL					= 'pre_user_email';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_FIRST_NAME				= 'pre_user_first_name';
			
			/**
			 * @since 1.5.2
			 */
			CONST PRE_USER_ID					= 'pre_user_id';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_LAST_NAME				= 'pre_user_last_name';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_LOGIN					= 'pre_user_login';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_NICENAME					= 'pre_user_nicename';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_NICKNAME					= 'pre_user_nickname';
			
			/**
			 * @since 2.0.11
			 */
			CONST PRE_USER_URL					= 'pre_user_url';
			
			/**
			 * @since 2.9
			 */
			CONST PRE_USER_FIELD__					= 'pre_user_{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST PRE_FIELD__					= 'pre_{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST PRE_TAXONOMY_FIELD__				= 'pre_{:taxonomy}_{:field}';
		#::
		#:Print:
			/**
			 * @since 2.8
			 */
			CONST PRINT_ADMIN_STYLES				= 'print_admin_styles';
			
			/**
			 * @since 2.8
			 */
			CONST PRINT_FOOTER_SCRIPTS				= 'print_footer_scripts';
			
			/**
			 * @since 2.8
			 */
			CONST PRINT_HEAD_SCRIPTS				= 'print_head_scripts';
			
			/**
			 * @since 3.3
			 */
			CONST PRINT_LATE_STYLES					= 'print_late_styles';
			
			/**
			 * @since 2.3
			 */
			CONST PRINT_SCRIPTS_ARRAY				= 'print_scripts_array';
			
			/**
			 * @since 2.6
			 */
			CONST PRINT_STYLES_ARRAY				= 'print_styles_array';
		#::
		#:Privacy:
			/**
			 * @since 3.0
			 */
			CONST PRIVACY_ON_LINK_TEXT				= 'privacy_on_link_text';
			
			/**
			 * @since 3.0
			 */
			CONST PRIVACY_ON_LINK_TITLE				= 'privacy_on_link_title';
		#::
		#:Private:
			/**
			 * @since 2.8
			 */
			CONST PRIVATE_TITLE_FORMAT				= 'private_title_format';
			
			/**
			 * @since 2.8
			 */
			CONST PROTECTED_TITLE_FORMAT				= 'protected_title_format';
		#::
		#:Pub:
			/**
			 * @since 2.2
			 */
			CONST PUB_PRIV_SQL_CAPABILITY				= 'pub_priv_sql_capability';
		#::
		#:Query:
			/**
			 * @since 2.0.11
			 */
			CONST QUERY						= 'query';
			
			/**
			 * @since 1.5.2
			 */
			CONST QUERY_STRING					= 'query_string';
			
			/**
			 * @since 1.5.2
			 */
			CONST QUERY_VARS					= 'query_vars';
		#::
		#:Quick\:
			/**
			 * @since 3.3
			 */
			CONST QUICKTAGS_SETTINGS				= 'quicktags_settings';
			
			/**
			 * @since 2.7
			 */
			CONST QUICK_EDIT_DROPDOWN_PAGES_ARGS			= 'quick_edit_dropdown_pages_args';
		#::
		#:Random:
			/**
			 * @since 3.0
			 */
			CONST RANDOM_PASSWORD					= 'random_password';
		#::
		#:Redirect:
			/**
			 * @since 2.3
			 */
			CONST REDIRECT_CANONICAL				= 'redirect_canonical';
			
			/**
			 * @since 3.2
			 */
			CONST REDIRECT_NETWORK_ADMIN_REQUEST			= 'redirect_network_admin_request';
			
			/**
			 * @since 2.9
			 */
			CONST REDIRECT_POST_LOCATION				= 'redirect_post_location';
			
			/**
			 * @since 3.2
			 */
			CONST REDIRECT_USER_ADMIN_REQUEST			= 'redirect_user_admin_request';
		#::
		#:Register:
			/**
			 * @since 1.5.2
			 */
			CONST REGISTER						= 'register';
		#::
		#:Registration:
			/**
			 * @since 2.1
			 */
			CONST REGISTRATION_ERRORS				= 'registration_errors';
			
			/**
			 * @since 3.0
			 */
			CONST REGISTRATION_REDIRECT				= 'registration_redirect';
		#::
		#:Request:
			/**
			 * @since 2.1
			 */
			CONST REQUEST						= 'request';
			
			/**
			 * @since 2.5
			 */
			CONST REQUEST_FILESYSTEM_CREDENTIALS			= 'request_filesystem_credentials';
		#::
		#:Retrieve:
			/**
			 * @since 2.8
			 */
			CONST RETRIEVE_PASSWORD_MESSAGE				= 'retrieve_password_message';
			
			/**
			 * @since 2.8
			 */
			CONST RETRIEVE_PASSWORD_TITLE				= 'retrieve_password_title';
		#::
		#:Rewrite:
			/**
			 * @since 1.5.2
			 */
			CONST REWRITE_RULES					= 'rewrite_rules';
			
			/**
			 * @since 1.5.2
			 */
			CONST REWRITE_RULES_ARRAY				= 'rewrite_rules_array';
		#::
		#:Rich\:
			/**
			 * @since 2.0
			 */
			CONST RICHEDIT_PRE					= 'richedit_pre';
		#::
		#:Robots:
			/**
			 * @since 3.0
			 */
			CONST ROBOTS_TXT					= 'robots_txt';
		#::
		#:Role:
			/**
			 * @since 2.0
			 */
			CONST ROLE_HAS_CAP					= 'role_has_cap';
		#::
		#:Root:
			/**
			 * @since 1.5.2
			 */
			CONST ROOT_REWRITE_RULES				= 'root_rewrite_rules';
		#::
		#:Rss:
			/**
			 * @since 2.2
			 */
			CONST RSS_ENCLOSURE					= 'rss_enclosure';
			
			/**
			 * @since 2.7
			 */
			CONST RSS_UPDATE_FREQUENCY				= 'rss_update_frequency';
			
			/**
			 * @since 2.7
			 */
			CONST RSS_UPDATE_PERIOD					= 'rss_update_period';
		#::
		#:Safe:
			/**
			 * @since 2.9
			 */
			CONST SAFE_STYLE_CSS					= 'safe_style_css';
		#::
		#:Salt:
			/**
			 * @since 2.5
			 */
			CONST SALT						= 'salt';
		#::
		#:Sanitize:
			/**
			 * @since 2.8
			 */
			CONST SANITIZE_EMAIL					= 'sanitize_email';
			
			/**
			 * @since 2.8
			 */
			CONST SANITIZE_FILE_NAME				= 'sanitize_file_name';
			
			/**
			 * @since 2.8
			 */
			CONST SANITIZE_FILE_NAME_CHARS				= 'sanitize_file_name_chars';
			
			/**
			 * @since 2.8
			 */
			CONST SANITIZE_HTML_CLASS				= 'sanitize_html_class';
			
			/**
			 * @since 3.0
			 */
			CONST SANITIZE_KEY					= 'sanitize_key';
			
			/**
			 * @since 3.2
			 */
			CONST SANITIZE_MIME_TYPE				= 'sanitize_mime_type';
			
			/**
			 * @since 2.3
			 */
			CONST SANITIZE_OPTION_OPTION__				= 'sanitize_option_{:option}';
			
			/**
			 * @since 2.9
			 */
			CONST SANITIZE_TEXT_FIELD				= 'sanitize_text_field';
			
			/**
			 * @since 3.4
			 */
			CONST SANITIZE_TRACKBACK_URLS				= 'sanitize_trackback_urls';
			
			/**
			 * @since 2.0.11
			 */
			CONST SANITIZE_USER					= 'sanitize_user';
			
			/**
			 * @since 3.3
			 */
			CONST SANITIZE_META_TYPE_META_KEY__			= 'sanitize_{:metaType}_meta_{:metaKey}';
		#::
		#:Schedule:
			/**
			 * @since 3.1
			 */
			CONST SCHEDULE_EVENT					= 'schedule_event';
		#::
		#:Screen:
			/**
			 * @since 2.8
			 */
			CONST SCREEN_LAYOUT_COLUMNS				= 'screen_layout_columns';
			
			/**
			 * @since 3.2
			 */
			CONST SCREEN_OPTIONS_SHOW_SCREEN			= 'screen_options_show_screen';
			
			/**
			 * @since 3.0
			 */
			CONST SCREEN_SETTINGS					= 'screen_settings';
		#::
		#:Script:
			/**
			 * @since 2.2
			 */
			CONST SCRIPT_LOADER_SRC					= 'script_loader_src';
		#::
		#:Search:
			/**
			 * @since 2.5
			 */
			CONST SEARCH_FEED_LINK					= 'search_feed_link';
			
			/**
			 * @since 3.0
			 */
			CONST SEARCH_LINK					= 'search_link';
			
			/**
			 * @since 1.5.2
			 */
			CONST SEARCH_REWRITE_RULES				= 'search_rewrite_rules';
		#::
		#:Secure:
			/**
			 * @since 3.1
			 */
			CONST SECURE_AUTH_COOKIE				= 'secure_auth_cookie';
			
			/**
			 * @since 3.1
			 */
			CONST SECURE_AUTH_REDIRECT				= 'secure_auth_redirect';
			
			/**
			 * @since 3.1
			 */
			CONST SECURE_LOGGED_IN_COOKIE				= 'secure_logged_in_cookie';
			
			/**
			 * @since 3.1
			 */
			CONST SECURE_SIGNON_COOKIE				= 'secure_signon_cookie';
		#::
		#:Set:
			/**
			 * @since 2.8
			 */
			CONST SET_SCREEN_OPTION					= 'set-screen-option';
			
			/**
			 * @since 3.4
			 */
			CONST SET_URL_SCHEME					= 'set_url_scheme';
		#::
		#:Shake:
			/**
			 * @since 3.0
			 */
			CONST SHAKE_ERROR_CODES					= 'shake_error_codes';
		#::
		#:Shortcut:
			/**
			 * @since 2.6
			 */
			CONST SHORTCUT_LINK					= 'shortcut_link';
		#::
		#:Show:
			/**
			 * @since 3.1
			 */
			CONST SHOW_ADMIN_BAR					= 'show_admin_bar';
			
			/**
			 * @since 3.0
			 */
			CONST SHOW_ADVANCED_PLUGINS				= 'show_advanced_plugins';
			
			/**
			 * @since 3.1
			 */
			CONST SHOW_NETWORK_SITE_USERS_ADD_EXISTING_FORM		= 'show_network_site_users_add_existing_form';
			
			/**
			 * @since 3.1
			 */
			CONST SHOW_NETWORK_SITE_USERS_ADD_NEW_FORM		= 'show_network_site_users_add_new_form';
			
			/**
			 * @since 1.5.2
			 */
			CONST SHOW_PASSWORD_FIELDS				= 'show_password_fields';
			
			/**
			 * @since 3.1
			 */
			CONST SHOW_RECENT_COMMENTS_WIDGET_STYLE			= 'show_recent_comments_widget_style';
		#::
		#:Sidebars:
			/**
			 * @since 2.7
			 */
			CONST SIDEBARS_WIDGETS					= 'sidebars_widgets';
		#::
		#:Signup:
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_ANOTHER_BLOG_INIT				= 'signup_another_blog_init';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_BLOG_INIT					= 'signup_blog_init';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_CREATE_BLOG_META				= 'signup_create_blog_meta';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_USER_INIT					= 'signup_user_init';
		#::
		#:Single:
			/**
			 * @since 2.0.11
			 */
			CONST SINGLE_CAT_TITLE					= 'single_cat_title';
			
			/**
			 * @since 1.2.1
			 */
			CONST SINGLE_POST_TITLE					= 'single_post_title';
			
			/**
			 * @since 2.3
			 */
			CONST SINGLE_TAG_TITLE					= 'single_tag_title';
			
			/**
			 * @since 3.1
			 */
			CONST SINGLE_TERM_TITLE					= 'single_term_title';
		#::
		#:Site:
			/**
			 * @since 3.0
			 */
			CONST SITE_OPTION_OPTION__				= 'site_option_{:option}';
			
			/**
			 * @since 2.9
			 */
			CONST SITE_TRANSIENT_TRANSIENT__			= 'site_transient_{:transient}';
			
			/**
			 * @since 2.7
			 */
			CONST SITE_URL						= 'site_url';
		#::
		#:Smilies:
			/**
			 * @since 2.9
			 */
			CONST SMILIES_SRC					= 'smilies_src';
		#::
		#:Split:
			/**
			 * @since 3.4
			 */
			CONST SPLIT_THE_QUERY					= 'split_the_query';
		#::
		#:Status:
			/**
			 * @since 2.2
			 */
			CONST STATUS_HEADER					= 'status_header';
			
			/**
			 * @since 1.5.2
			 */
			CONST STATUS_SAVE_PRE					= 'status_save_pre';
		#::
		#:Stylesheet:
			/**
			 * @since 1.5.2
			 */
			CONST STYLESHEET					= 'stylesheet';
			
			/**
			 * @since 1.5.2
			 */
			CONST STYLESHEET_DIRECTORY				= 'stylesheet_directory';
			
			/**
			 * @since 1.5.2
			 */
			CONST STYLESHEET_DIRECTORY_URI				= 'stylesheet_directory_uri';
			
			/**
			 * @since 1.5.2
			 */
			CONST STYLESHEET_URI					= 'stylesheet_uri';
			
			/**
			 * @since 2.6
			 */
			CONST STYLE_LOADER_SRC					= 'style_loader_src';
			
			/**
			 * @since 2.6
			 */
			CONST STYLE_LOADER_TAG					= 'style_loader_tag';
		#::
		#:SubDirectory:
			/**
			 * @since 3.0
			 */
			CONST SUBDIRECTORY_RESERVED_NAMES			= 'subdirectory_reserved_names';
		#::
		#:Tables:
			/**
			 * @since 3.0
			 */
			CONST TABLES_TO_REPAIR					= 'tables_to_repair';
		#::
		#:Tags:
			/**
			 * @since 2.7
			 */
			CONST TAGSPERPAGE					= 'tagsperpage';
		#::
		#:Tag:
			/**
			 * @since 3.2
			 */
			CONST TAG_ARCHIVE_META					= 'tag_archive_meta';
			
			/**
			 * @since 2.8
			 */
			CONST TAG_CLOUD_SORT					= 'tag_cloud_sort';
			
			/**
			 * @since 2.5
			 */
			CONST TAG_ESCAPE					= 'tag_escape';
			
			/**
			 * @since 2.3
			 */
			CONST TAG_FEED_LINK					= 'tag_feed_link';
			
			/**
			 * @since 2.3
			 */
			CONST TAG_LINK						= 'tag_link';
			
			/**
			 * @since 2.3
			 */
			CONST TAG_REWRITE_RULES					= 'tag_rewrite_rules';
			
			/**
			 * @since 2.8
			 */
			CONST TAG_ROW_ACTIONS					= 'tag_row_actions';
		#::
		#:Taxonomy:
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_FEED_LINK				= 'taxonomy_feed_link';
		#::
		#:Teeny:
			/**
			 * @since 2.7
			 */
			CONST TEENY_MCE_BEFORE_INIT				= 'teeny_mce_before_init';
			
			/**
			 * @since 2.7
			 */
			CONST TEENY_MCE_BUTTONS					= 'teeny_mce_buttons';
			
			/**
			 * @since 2.7
			 */
			CONST TEENY_MCE_PLUGINS					= 'teeny_mce_plugins';
		#::
		#:Template:
			/**
			 * @since 1.5.2
			 */
			CONST TEMPLATE						= 'template';
			
			/**
			 * @since 1.5.2
			 */
			CONST TEMPLATE_DIRECTORY				= 'template_directory';
			
			/**
			 * @since 1.5.2
			 */
			CONST TEMPLATE_DIRECTORY_URI				= 'template_directory_uri';
			
			/**
			 * @since 3.0
			 */
			CONST TEMPLATE_INCLUDE					= 'template_include';
		#::
		#:Terms:
			/**
			 * @since 3.1
			 */
			CONST TERMS_CLAUSES					= 'terms_clauses';
			
			/**
			 * @since 2.8
			 */
			CONST TERMS_TO_EDIT					= 'terms_to_edit';
		#::
		#:Term:
			/**
			 * @since 2.3
			 */
			CONST TERM_ID_FILTER					= 'term_id_filter';
			
			/**
			 * @since 2.5
			 */
			CONST TERM_LINK						= 'term_link';
			
			/**
			 * @since 2.5
			 */
			CONST TERM_LINKS_TAXONOMY__				= 'term_links-{:taxonomy}';
			
			/**
			 * @since 2.5
			 */
			CONST TERM_NAME						= 'term_name';
			
			/**
			 * @since 2.3
			 */
			CONST TERM_FIELD__					= 'term_{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST TERM_FIELD_RSS__					= 'term_{:field}_rss';
		#::
		#:Temes:
			/**
			 * @since 2.8
			 */
			CONST THEMES_API					= 'themes_api';
			
			/**
			 * @since 2.8
			 */
			CONST THEMES_API_ARGS					= 'themes_api_args';
			
			/**
			 * @since 2.8
			 */
			CONST THEMES_API_RESULT					= 'themes_api_result';
		#::
		#:Theme:
			/**
			 * @since 2.8
			 */
			CONST THEME_ACTION_LINKS				= 'theme_action_links';
			
			/**
			 * @since 3.5
			 */
			CONST THEME_ACTION_LINKS_STYLESHEET			= 'theme_action_links_{:stylesheet}';
			
			/**
			 * @since 3.4
			 */
			CONST THEME_INSTALL_ACTIONS				= 'theme_install_actions';
			
			/**
			 * @since 3.0
			 */
			CONST THEME_LOCALE					= 'theme_locale';
			
			/**
			 * @since 2.2
			 */
			CONST THEME_MOD_NAME__					= 'theme_mod_{:name}';
			
			/**
			 * @since 1.5.2
			 */
			CONST THEME_ROOT					= 'theme_root';
			
			/**
			 * @since 1.5.2
			 */
			CONST THEME_ROOT_URI					= 'theme_root_uri';
			
			/**
			 * @since 3.1
			 */
			CONST THEME_ROW_META					= 'theme_row_meta';
		#::
		#:The:
			/**
			 * @since 2.0
			 */
			CONST THE_AUTHOR					= 'the_author';
			
			/**
			 * @since 2.9
			 */
			CONST THE_AUTHOR_POSTS_LINK				= 'the_author_posts_link';
			
			/**
			 * @since 2.8
			 */
			CONST THE_AUTHOR_FIELD__				= 'the_author_{:field}';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_CATEGORY					= 'the_category';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_CATEGORY_RSS					= 'the_category_rss';
			
			/**
			 * @since 3.1
			 */
			CONST THE_COMMENTS					= 'the_comments';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_CONTENT					= 'the_content';
			
			/**
			 * @since 2.5
			 */
			CONST THE_CONTENT_EXPORT				= 'the_content_export';
			
			/**
			 * @since 2.9
			 */
			CONST THE_CONTENT_FEED					= 'the_content_feed';
			
			/**
			 * @since 2.8
			 */
			CONST THE_CONTENT_MORE_LINK				= 'the_content_more_link';
			
			/**
			 * @since 2.0
			 */
			CONST THE_CONTENT_RSS					= 'the_content_rss';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_DATE						= 'the_date';
			
			/**
			 * @since 2.1
			 */
			CONST THE_EDITOR					= 'the_editor';
			
			/**
			 * @since 2.1
			 */
			CONST THE_EDITOR_CONTENT				= 'the_editor_content';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_EXCERPT					= 'the_excerpt';
			
			/**
			 * @since 2.6
			 */
			CONST THE_EXCERPT_EXPORT				= 'the_excerpt_export';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_EXCERPT_RSS					= 'the_excerpt_rss';
			
			/**
			 * @since 3.0
			 */
			CONST THE_FEED_LINK					= 'the_feed_link';
			
			/**
			 * @since 2.5
			 */
			CONST THE_GENERATOR					= 'the_generator';
			
			/**
			 * @since 2.2
			 */
			CONST THE_META_KEY					= 'the_meta_key';
			
			/**
			 * @since 2.8
			 */
			CONST THE_MODIFIED_AUTHOR				= 'the_modified_author';
			
			/**
			 * @since 2.1
			 */
			CONST THE_MODIFIED_DATE					= 'the_modified_date';
			
			/**
			 * @since 2.0
			 */
			CONST THE_MODIFIED_TIME					= 'the_modified_time';
			
			/**
			 * @since 2.7
			 */
			CONST THE_PASSWORD_FORM					= 'the_password_form';
			
			/**
			 * @since 1.5.2
			 */
			CONST THE_PERMALINK					= 'the_permalink';
			
			/**
			 * @since 2.3
			 */
			CONST THE_PERMALINK_RSS					= 'the_permalink_rss';
			
			/**
			 * @since 1.5.2
			 */
			CONST THE_POSTS						= 'the_posts';
			
			/**
			 * @since 2.7
			 */
			CONST THE_PREVIEW					= 'the_preview';
			
			/**
			 * @since 2.3
			 */
			CONST THE_SEARCH_QUERY					= 'the_search_query';
			
			/**
			 * @since 3.0
			 */
			CONST THE_SHORTLINK					= 'the_shortlink';
			
			/**
			 * @since 2.3
			 */
			CONST THE_TAGS						= 'the_tags';
			
			/**
			 * @since 2.9
			 */
			CONST THE_TERMS						= 'the_terms';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_TIME						= 'the_time';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_TITLE						= 'the_title';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_TITLE_RSS					= 'the_title_rss';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_WEEKDAY					= 'the_weekday';
			
			/**
			 * @since 1.2.1
			 */
			CONST THE_WEEKDAY_DATE					= 'the_weekday_date';
		#::
		#:Thread:
			/**
			 * @since 2.7
			 */
			CONST THREAD_COMMENTS_DEPTH_MAX				= 'thread_comments_depth_max';
		#::
		#:Time:
			/**
			 * @since 2.7
			 */
			CONST TIME_FORMATS					= 'time_formats';
		#::
		#:Tiny:
			/**
			 * @since 2.5
			 */
			CONST TINY_MCE_BEFORE_INIT				= 'tiny_mce_before_init';
			
			/**
			 * @since 3.3
			 */
			CONST TINY_MCE_PLUGINS					= 'tiny_mce_plugins';
		#::
		#:Title:
			/**
			 * @since 1.5.2
			 */
			CONST TITLE_EDIT_PRE					= 'title_edit_pre';
			
			/**
			 * @since 1.5.2
			 */
			CONST TITLE_SAVE_PRE					= 'title_save_pre';
		#::
		#:Trackback:
			/**
			 * @since 2.2
			 */
			CONST TRACKBACK_URL					= 'trackback_url';
		#::
		#:Transient:
			/**
			 * @since 2.8
			 */
			CONST TRANSIENT_TRANSIENT__				= 'transient_{:transient}';
		#::
		#:Twenty:
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_ATTACHMENT_SIZE			= 'twentyeleven_attachment_size';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_AUTHOR_BIO_AVATAR_SIZE		= 'twentyeleven_author_bio_avatar_size';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_COLOR_SCHEMES			= 'twentyeleven_color_schemes';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_DEFAULT_THEME_OPTIONS		= 'twentyeleven_default_theme_options';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_HEADER_IMAGE_HEIGHT			= 'twentyeleven_header_image_height';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_HEADER_IMAGE_WIDTH			= 'twentyeleven_header_image_width';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_LAYOUTS				= 'twentyeleven_layouts';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_LAYOUT_CLASSES			= 'twentyeleven_layout_classes';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_STATUS_AVATAR			= 'twentyeleven_status_avatar';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_THEME_OPTIONS_VALIDATE		= 'twentyeleven_theme_options_validate';
			
			/**
			 * @since 3.5
			 */
			CONST TWENTYTWELVE_ATTACHMENT_SIZE			= 'twentytwelve_attachment_size';
			
			/**
			 * @since 3.5
			 */
			CONST TWENTYTWELVE_AUTHOR_BIO_AVATAR_SIZE		= 'twentytwelve_author_bio_avatar_size';
			
			/**
			 * @since 3.5
			 */
			CONST TWENTYTWELVE_STATUS_AVATAR			= 'twentytwelve_status_avatar';
		#::
		#:Type:
			/**
			 * @since 3.3
			 */
			CONST TYPE_URL_FORM_MEDIA				= 'type_url_form_media';
		#::
		#:Unzip:
			/**
			 * @since 3.0
			 */
			CONST UNZIP_FILE_USE_ZIPARCHIVE				= 'unzip_file_use_ziparchive';
		#::
		#:Update:
			/**
			 * @since 2.1
			 */
			CONST UPDATE_ATTACHED_FILE				= 'update_attached_file';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_BULK_PLUGINS_COMPLETE_ACTIONS		= 'update_bulk_plugins_complete_actions';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_BULK_THEME_COMPLETE_ACTIONS		= 'update_bulk_theme_complete_actions';
			
			/**
			 * @since 2.5
			 */
			CONST UPDATE_FEEDBACK					= 'update_feedback';
			
			/**
			 * @since 2.3
			 */
			CONST UPDATE_FOOTER					= 'update_footer';
			
			/**
			 * @since 2.7
			 */
			CONST UPDATE_PLUGIN_COMPLETE_ACTIONS			= 'update_plugin_complete_actions';
			
			/**
			 * @since 2.8
			 */
			CONST UPDATE_THEME_COMPLETE_ACTIONS			= 'update_theme_complete_actions';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_WELCOME_EMAIL				= 'update_welcome_email';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_WELCOME_SUBJECT				= 'update_welcome_subject';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_WELCOME_USER_EMAIL				= 'update_welcome_user_email';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_WELCOME_USER_SUBJECT			= 'update_welcome_user_subject';
			
			/**
			 * @since 3.1
			 */
			CONST UPDATE_META_TYPE_METADATA				= 'update_{:metaType}_metadata';
		#::
		#:Upgrader:
			/**
			 * @since 2.8
			 */
			CONST UPGRADER_CLEAR_DESTINATION			= 'upgrader_clear_destination';
			
			/**
			 * @since 2.8
			 */
			CONST UPGRADER_POST_INSTALL				= 'upgrader_post_install';
			
			/**
			 * @since 2.8
			 */
			CONST UPGRADER_PRE_INSTALL				= 'upgrader_pre_install';
			
			/**
			 * @since 2.8
			 */
			CONST UPGRADER_SOURCE_SELECTION				= 'upgrader_source_selection';
		#::
		#:Upload:
			/**
			 * @since 2.0
			 */
			CONST UPLOAD_DIR					= 'upload_dir';
			
			/**
			 * @since 2.0
			 */
			CONST UPLOAD_MIMES					= 'upload_mimes';
			
			/**
			 * @since 2.9
			 */
			CONST UPLOAD_PER_PAGE					= 'upload_per_page';
			
			/**
			 * @since 3.3
			 */
			CONST UPLOAD_POST_PARAMS				= 'upload_post_params';
			
			/**
			 * @since 2.5
			 */
			CONST UPLOAD_SIZE_LIMIT					= 'upload_size_limit';
		#::
		#:Url:
			/**
			 * @since 2.2
			 */
			CONST URL_TO_POSTID					= 'url_to_postid';
		#::
		#:User:
			/**
			 * @since 3.1
			 */
			CONST USER_ADMIN_URL					= 'user_admin_url';
			
			/**
			 * @since 2.1
			 */
			CONST USER_CAN_RICHEDIT					= 'user_can_richedit';
			
			/**
			 * @since 2.9
			 */
			CONST USER_CONTACTMETHODS				= 'user_contactmethods';
			
			/**
			 * @since 3.1
			 */
			CONST USER_DASHBOARD_URL				= 'user_dashboard_url';
			
			/**
			 * @since 2.0
			 */
			CONST USER_HAS_CAP					= 'user_has_cap';
			
			/**
			 * @since 2.1
			 */
			CONST USER_REGISTRATION_EMAIL				= 'user_registration_email';
			
			/**
			 * @since 2.8
			 */
			CONST USER_ROW_ACTIONS					= 'user_row_actions';
			
			/**
			 * @since 2.2
			 */
			CONST USER_TRAILINGSLASHIT				= 'user_trailingslashit';
			
			/**
			 * @since 2.9
			 */
			CONST USER_FIELD__					= 'user_{:field}';
			
			/**
			 * @since 2.9
			 */
			CONST USER_NAME_LABEL__					= 'user_{:name}_label';
		#::
		#:Use:
			/**
			 * @since 2.7
			 */
			CONST USE_CURL_TRANSPORT				= 'use_curl_transport';
			
			/**
			 * @since 3.1
			 */
			CONST USE_DEFAULT_GALLERY_STYLE				= 'use_default_gallery_style';
			
			/**
			 * @since 2.7
			 */
			CONST USE_FSOCKOPEN_TRANSPORT				= 'use_fsockopen_transport';
			
			/**
			 * @since 3.2
			 */
			CONST USE_GOOGLE_CHROME_FRAME				= 'use_google_chrome_frame';
			
			/**
			 * @since 2.7
			 */
			CONST USE_STREAMS_TRANSPORT				= 'use_streams_transport';
		#::
		#:Validate:
			/**
			 * @since 2.7
			 */
			CONST VALIDATE_CURRENT_THEME				= 'validate_current_theme';
			
			/**
			 * @since 2.0.11
			 */
			CONST VALIDATE_USERNAME					= 'validate_username';
		#::
		#:Views:
			/**
			 * @since 3.5
			 */
			CONST VIEWS_SCREEN_ID__					= 'views_{:screenId}';
		#::
		#:Walker:
			/**
			 * @since 3.0
			 */
			CONST WALKER_NAV_MENU_START_EL				= 'walker_nav_menu_start_el';
		#::
		#:Whitelist:
			/**
			 * @since 2.7
			 */
			CONST WHITELIST_OPTIONS					= 'whitelist_options';
		#::
		#:Widget:
			/**
			 * @since 2.8
			 */
			CONST WIDGET_ARCHIVES_ARGS				= 'widget_archives_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_ARCHIVES_DROPDOWN_ARGS			= 'widget_archives_dropdown_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_CATEGORIES_ARGS				= 'widget_categories_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_CATEGORIES_DROPDOWN_ARGS			= 'widget_categories_dropdown_args';
			
			/**
			 * @since 3.4
			 */
			CONST WIDGET_COMMENTS_ARGS				= 'widget_comments_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_DISPLAY_CALLBACK				= 'widget_display_callback';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_FORM_CALLBACK				= 'widget_form_callback';
			
			/**
			 * @since 2.6
			 */
			CONST WIDGET_LINKS_ARGS					= 'widget_links_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_PAGES_ARGS					= 'widget_pages_args';
			
			/**
			 * @since 3.4
			 */
			CONST WIDGET_POSTS_ARGS					= 'widget_posts_args';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_TAG_CLOUD_ARGS				= 'widget_tag_cloud_args';
			
			/**
			 * @since 2.3
			 */
			CONST WIDGET_TEXT					= 'widget_text';
			
			/**
			 * @since 2.6
			 */
			CONST WIDGET_TITLE					= 'widget_title';
			
			/**
			 * @since 2.8
			 */
			CONST WIDGET_UPDATE_CALLBACK				= 'widget_update_callback';
		#::
		#:WPMU:
			/**
			 * @since 3.0
			 */
			CONST WPMU_ACTIVE_SIGNUP				= 'wpmu_active_signup';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_BLOGS_COLUMNS				= 'wpmu_blogs_columns';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_DELETE_BLOG_UPLOAD_DIR			= 'wpmu_delete_blog_upload_dir';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_DROP_TABLES					= 'wpmu_drop_tables';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_BLOG_NOTIFICATION			= 'wpmu_signup_blog_notification';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_BLOG_NOTIFICATION_EMAIL		= 'wpmu_signup_blog_notification_email';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_BLOG_NOTIFICATION_SUBJECT		= 'wpmu_signup_blog_notification_subject';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_USER_NOTIFICATION			= 'wpmu_signup_user_notification';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_USER_NOTIFICATION_EMAIL		= 'wpmu_signup_user_notification_email';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_SIGNUP_USER_NOTIFICATION_SUBJECT		= 'wpmu_signup_user_notification_subject';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_USERS_COLUMNS				= 'wpmu_users_columns';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_VALIDATE_BLOG_SIGNUP				= 'wpmu_validate_blog_signup';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_VALIDATE_USER_SIGNUP				= 'wpmu_validate_user_signup';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_WELCOME_NOTIFICATION				= 'wpmu_welcome_notification';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_WELCOME_USER_NOTIFICATION			= 'wpmu_welcome_user_notification';
			
			/**
			 * @since 3.1
			 */
			CONST WP_ADMIN_BAR_CLASS				= 'wp_admin_bar_class';
		#::
		#:WP:
			/**
			 * @since 2.3
			 */
			CONST WP_ADMIN_CSS					= 'wp_admin_css';
			
			/**
			 * @since 2.3
			 */
			CONST WP_ADMIN_CSS_URI					= 'wp_admin_css_uri';
			
			/**
			 * @since 2.5
			 */
			CONST WP_AUTHENTICATE_USER				= 'wp_authenticate_user';
			
			/**
			 * @since 3.4
			 */
			CONST WP_CACHE_THEMES_PERSISTENTLY			= 'wp_cache_themes_persistently';
			
			/**
			 * @since 3.5
			 */
			CONST WP_CHECKDATE					= 'wp_checkdate';
			
			/**
			 * @since 3.0
			 */
			CONST WP_CHECK_FILETYPE_AND_EXT				= 'wp_check_filetype_and_ext';
			
			/**
			 * @since 2.5
			 */
			CONST WP_CHECK_POST_LOCK_WINDOW				= 'wp_check_post_lock_window';
			
			/**
			 * @since 2.7
			 */
			CONST WP_COMMENT_REPLY					= 'wp_comment_reply';
			
			/**
			 * @since 2.7
			 */
			CONST WP_COUNT_COMMENTS					= 'wp_count_comments';
			
			/**
			 * @since 2.1
			 */
			CONST WP_CREATE_FILE_IN_UPLOADS				= 'wp_create_file_in_uploads';
			
			/**
			 * @since 2.1
			 */
			CONST WP_CREATE_THUMBNAIL				= 'wp_create_thumbnail';
			
			/**
			 * @since 2.5
			 */
			CONST WP_DASHBOARD_WIDGETS				= 'wp_dashboard_widgets';
			
			/**
			 * @since 2.5
			 */
			CONST WP_DEFAULT_EDITOR					= 'wp_default_editor';
			
			/**
			 * @since 2.1
			 */
			CONST WP_DELETE_FILE					= 'wp_delete_file';
			
			/**
			 * @since 3.4
			 */
			CONST WP_DIE_AJAX_HANDLER				= 'wp_die_ajax_handler';
			
			/**
			 * @since 3.0
			 */
			CONST WP_DIE_HANDLER					= 'wp_die_handler';
			
			/**
			 * @since 3.4
			 */
			CONST WP_DIE_XMLRPC_HANDLER				= 'wp_die_xmlrpc_handler';
			
			/**
			 * @since 2.1
			 */
			CONST WP_DROPDOWN_CATS					= 'wp_dropdown_cats';
			
			/**
			 * @since 2.1
			 */
			CONST WP_DROPDOWN_PAGES					= 'wp_dropdown_pages';
			
			/**
			 * @since 2.3
			 */
			CONST WP_DROPDOWN_USERS					= 'wp_dropdown_users';
			
			/**
			 * @since 3.5
			 */
			CONST WP_EDITOR_SET_QUALITY				= 'wp_editor_set_quality';
			
			/**
			 * @since 3.0
			 */
			CONST WP_EDIT_NAV_MENU_WALKER				= 'wp_edit_nav_menu_walker';
			
			/**
			 * @since 2.8
			 */
			CONST WP_FEED_CACHE_TRANSIENT_LIFETIME			= 'wp_feed_cache_transient_lifetime';
			
			/**
			 * @since 3.2
			 */
			CONST WP_FULLSCREEN_BUTTONS				= 'wp_fullscreen_buttons';
			
			/**
			 * @since 2.1
			 */
			CONST WP_GENERATE_ATTACHMENT_METADATA			= 'wp_generate_attachment_metadata';
			
			/**
			 * @since 2.3
			 */
			CONST WP_GENERATE_TAG_CLOUD				= 'wp_generate_tag_cloud';
			
			/**
			 * @since 2.5
			 */
			CONST WP_GENERATOR_TYPE					= 'wp_generator_type';
			
			/**
			 * @since 2.8
			 */
			CONST WP_GET_ATTACHMENT_IMAGE_ATTRIBUTES		= 'wp_get_attachment_image_attributes';
			
			/**
			 * @since 2.7
			 */
			CONST WP_GET_ATTACHMENT_LINK				= 'wp_get_attachment_link';
			
			/**
			 * @since 2.1
			 */
			CONST WP_GET_ATTACHMENT_METADATA			= 'wp_get_attachment_metadata';
			
			/**
			 * @since 2.1
			 */
			CONST WP_GET_ATTACHMENT_THUMB_FILE			= 'wp_get_attachment_thumb_file';
			
			/**
			 * @since 2.1
			 */
			CONST WP_GET_ATTACHMENT_THUMB_URL			= 'wp_get_attachment_thumb_url';
			
			/**
			 * @since 2.1
			 */
			CONST WP_GET_ATTACHMENT_URL				= 'wp_get_attachment_url';
			
			/**
			 * @since 3.1
			 */
			CONST WP_GET_CURRENT_COMMENTER				= 'wp_get_current_commenter';
			
			/**
			 * @since 3.0
			 */
			CONST WP_GET_NAV_MENUS					= 'wp_get_nav_menus';
			
			/**
			 * @since 3.0
			 */
			CONST WP_GET_NAV_MENU_ITEMS				= 'wp_get_nav_menu_items';
			
			/**
			 * @since 2.8
			 */
			CONST WP_GET_OBJECT_TERMS				= 'wp_get_object_terms';
			
			/**
			 * @since 3.5
			 */
			CONST WP_GET_UPDATE_DATA				= 'wp_get_update_data';
			
			/**
			 * @since 2.1
			 */
			CONST WP_HANDLE_UPLOAD					= 'wp_handle_upload';
			
			/**
			 * @since 2.9
			 */
			CONST WP_HANDLE_UPLOAD_PREFILTER			= 'wp_handle_upload_prefilter';
			
			/**
			 * @since 2.8
			 */
			CONST WP_HEADERS					= 'wp_headers';
			
			/**
			 * @since 3.4
			 */
			CONST WP_HTTP_COOKIE_VALUE				= 'wp_http_cookie_value';
			
			/**
			 * @since 3.5
			 */
			CONST WP_IMAGE_EDITORS					= 'wp_image_editors';
			
			/**
			 * @since 3.5
			 */
			CONST WP_IMAGE_EDITOR_BEFORE_CHANGE			= 'wp_image_editor_before_change';
			
			/**
			 * @since 2.7
			 */
			CONST WP_INSERT_POST_DATA				= 'wp_insert_post_data';
			
			/**
			 * @since 3.3
			 */
			CONST WP_INSERT_POST_EMPTY_CONTENT			= 'wp_insert_post_empty_content';
			
			/**
			 * @since 3.1
			 */
			CONST WP_INSERT_POST_PARENT				= 'wp_insert_post_parent';
			
			/**
			 * @since 3.3
			 */
			CONST WP_IS_LARGE_NETWORK				= 'wp_is_large_network';
			
			/**
			 * @since 3.5
			 */
			CONST WP_KSES_ALLOWED_HTML				= 'wp_kses_allowed_html';
			
			/**
			 * @since 3.0
			 */
			CONST WP_LINK_PAGES_ARGS				= 'wp_link_pages_args';
			
			/**
			 * @since 2.5
			 */
			CONST WP_LIST_BOOKMARKS					= 'wp_list_bookmarks';
			
			/**
			 * @since 2.1
			 */
			CONST WP_LIST_CATEGORIES				= 'wp_list_categories';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_LIST_PAGES					= 'wp_list_pages';
			
			/**
			 * @since 2.1
			 */
			CONST WP_LIST_PAGES_EXCLUDES				= 'wp_list_pages_excludes';
			
			/**
			 * @since 2.2
			 */
			CONST WP_MAIL						= 'wp_mail';
			
			/**
			 * @since 2.3
			 */
			CONST WP_MAIL_CHARSET					= 'wp_mail_charset';
			
			/**
			 * @since 2.3
			 */
			CONST WP_MAIL_CONTENT_TYPE				= 'wp_mail_content_type';
			
			/**
			 * @since 2.2
			 */
			CONST WP_MAIL_FROM					= 'wp_mail_from';
			
			/**
			 * @since 2.3
			 */
			CONST WP_MAIL_FROM_NAME					= 'wp_mail_from_name';
			
			/**
			 * @since 2.8
			 */
			CONST WP_MAIL_ORIGINAL_CONTENT				= 'wp_mail_original_content';
			
			/**
			 * @since 2.1
			 */
			CONST WP_MIME_TYPE_ICON					= 'wp_mime_type_icon';
			
			/**
			 * @since 3.0
			 */
			CONST WP_NAV_MENU					= 'wp_nav_menu';
			
			/**
			 * @since 3.0
			 */
			CONST WP_NAV_MENU_ARGS					= 'wp_nav_menu_args';
			
			/**
			 * @since 3.0
			 */
			CONST WP_NAV_MENU_CONTAINER_ALLOWEDTAGS			= 'wp_nav_menu_container_allowedtags';
			
			/**
			 * @since 3.0
			 */
			CONST WP_NAV_MENU_ITEMS					= 'wp_nav_menu_items';
			
			/**
			 * @since 3.1
			 */
			CONST WP_NAV_MENU_OBJECTS				= 'wp_nav_menu_objects';
			
			/**
			 * @since 3.0
			 */
			CONST WP_NAV_MENU_SLUG_ITEMS__				= 'wp_nav_menu_{:menuSlug}_items';
			
			/**
			 * @since 3.1
			 */
			CONST WP_NETWORK_DASHBOARD_WIDGETS			= 'wp_network_dashboard_widgets';
			
			/**
			 * @since 2.7
			 */
			CONST WP_PAGE_MENU					= 'wp_page_menu';
			
			/**
			 * @since 2.7
			 */
			CONST WP_PAGE_MENU_ARGS					= 'wp_page_menu_args';
			
			/**
			 * @since 2.3
			 */
			CONST WP_PARSE_STR					= 'wp_parse_str';
			
			/**
			 * @since 3.5
			 */
			CONST WP_PREPARE_ATTACHMENT_FOR_JS			= 'wp_prepare_attachment_for_js';
			
			/**
			 * @since 2.5
			 */
			CONST WP_READ_IMAGE_METADATA				= 'wp_read_image_metadata';
			
			/**
			 * @since 2.5
			 */
			CONST WP_READ_IMAGE_METADATA_TYPES			= 'wp_read_image_metadata_types';
			
			/**
			 * @since 2.1
			 */
			CONST WP_REDIRECT					= 'wp_redirect';
			
			/**
			 * @since 2.5
			 */
			CONST WP_REDIRECT_STATUS				= 'wp_redirect_status';
			
			/**
			 * @since 3.5
			 */
			CONST WP_SAVE_IMAGE_EDITOR_FILE				= 'wp_save_image_editor_file';
			
			/**
			 * @since 2.9
			 */
			CONST WP_SAVE_IMAGE_FILE				= 'wp_save_image_file';
			
			/**
			 * @since 3.0
			 */
			CONST WP_SETUP_NAV_MENU_ITEM				= 'wp_setup_nav_menu_item';
			
			/**
			 * @since 3.0
			 */
			CONST WP_SIGNUP_LOCATION				= 'wp_signup_location';
			
			/**
			 * @since 2.5
			 */
			CONST WP_SPRINTF					= 'wp_sprintf';
			
			/**
			 * @since 2.5
			 */
			CONST WP_SPRINTF_L					= 'wp_sprintf_l';
			
			/**
			 * @since 2.3
			 */
			CONST WP_TAG_CLOUD					= 'wp_tag_cloud';
			
			/**
			 * @since 3.4
			 */
			CONST WP_TERMS_CHECKLIST_ARGS				= 'wp_terms_checklist_args';
			
			/**
			 * @since 2.0
			 */
			CONST WP_TITLE						= 'wp_title';
			
			/**
			 * @since 2.2
			 */
			CONST WP_TITLE_RSS					= 'wp_title_rss';
			
			/**
			 * @since 2.8
			 */
			CONST WP_TRIM_EXCERPT					= 'wp_trim_excerpt';
			
			/**
			 * @since 3.3
			 */
			CONST WP_TRIM_WORDS					= 'wp_trim_words';
			
			/**
			 * @since 3.3
			 */
			CONST WP_UNIQUE_POST_SLUG				= 'wp_unique_post_slug';
			
			/**
			 * @since 3.1
			 */
			CONST WP_UNIQUE_POST_SLUG_IS_BAD_ATTACHMENT_SLUG	= 'wp_unique_post_slug_is_bad_attachment_slug';
			
			/**
			 * @since 3.1
			 */
			CONST WP_UNIQUE_POST_SLUG_IS_BAD_FLAT_SLUG		= 'wp_unique_post_slug_is_bad_flat_slug';
			
			/**
			 * @since 3.1
			 */
			CONST WP_UNIQUE_POST_SLUG_IS_BAD_HIERARCHICAL_SLUG	= 'wp_unique_post_slug_is_bad_hierarchical_slug';
			
			/**
			 * @since 2.1
			 */
			CONST WP_UPDATE_ATTACHMENT_METADATA			= 'wp_update_attachment_metadata';
			
			/**
			 * @since 3.1
			 */
			CONST WP_UPDATE_TERM_PARENT				= 'wp_update_term_parent';
			
			/**
			 * @since 3.0
			 */
			CONST WP_UPLOAD_BITS					= 'wp_upload_bits';
			
			/**
			 * @since 3.1
			 */
			CONST WP_USER_DASHBOARD_WIDGETS				= 'wp_user_dashboard_widgets';
			
			/**
			 * @since 3.1
			 */
			CONST WP_XMLRPC_SERVER_CLASS				= 'wp_xmlrpc_server_class';
		#::
		#:WXR:
			/**
			 * @since 3.3
			 */
			CONST WXR_EXPORT_SKIP_POSTMETA				= 'wxr_export_skip_postmeta';
		#::
		#:XMLRPC:
			/**
			 * @since 2.7
			 */
			CONST XMLRPC_ALLOW_ANONYMOUS_COMMENTS			= 'xmlrpc_allow_anonymous_comments';
			
			/**
			 * @since 2.6
			 */
			CONST XMLRPC_BLOG_OPTIONS				= 'xmlrpc_blog_options';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_DEFAULT_POSTTYPE_FIELDS			= 'xmlrpc_default_posttype_fields';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_DEFAULT_POST_FIELDS			= 'xmlrpc_default_post_fields';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_DEFAULT_REVISION_FIELDS			= 'xmlrpc_default_revision_fields';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_DEFAULT_TAXONOMY_FIELDS			= 'xmlrpc_default_taxonomy_fields';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_DEFAULT_USER_FIELDS			= 'xmlrpc_default_user_fields';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_ENABLED					= 'xmlrpc_enabled';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_LOGIN_ERROR				= 'xmlrpc_login_error';
			
			/**
			 * @since 1.5.2
			 */
			CONST XMLRPC_METHODS					= 'xmlrpc_methods';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_COMMENT				= 'xmlrpc_prepare_comment';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_MEDIA_ITEM				= 'xmlrpc_prepare_media_item';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_PAGE				= 'xmlrpc_prepare_page';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_POST				= 'xmlrpc_prepare_post';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_POST_TYPE				= 'xmlrpc_prepare_post_type';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_TAXONOMY				= 'xmlrpc_prepare_taxonomy';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_PREPARE_TERM				= 'xmlrpc_prepare_term';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_PREPARE_USER				= 'xmlrpc_prepare_user';
			
			/**
			 * @since 2.2
			 */
			CONST XMLRPC_TEXT_FILTERS				= 'xmlrpc_text_filters';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_WP_INSERT_POST_DATA			= 'xmlrpc_wp_insert_post_data';
		#::
		#:Year:
			/**
			 * @since 1.5.2
			 */
			CONST YEAR_LINK						= 'year_link';
		#::
		#:_:
			/**
			 * @since 2.1
			 */
			CONST _GET_PAGE_LINK					= '_get_page_link';
			
			/**
			 * @since 2.6
			 */
			CONST _WP_POST_REVISION_FIELDS				= '_wp_post_revision_fields';
			
			/**
			 * @since 2.6
			 */
			CONST _WP_POST_REVISION_FIELD_FIELD__			= '_wp_post_revision_field_{:field}';
			
			/**
			 * @since 2.9
			 */
			CONST _WP_RELATIVE_UPLOAD_PATH				= '_wp_relative_upload_path';
		#::
		#:RUNTIME:
			/**
			 * @since 3.5
			 */
			CONST ADJACENT_IMAGE_LINK__				= '{:adjacent}_image_link';
			
			/**
			 * @since 2.6
			 */
			CONST ADJACENT_POST_LINK__				= '{:adjacent}_post_link';
			
			/**
			 * @since 2.8
			 */
			CONST ADJACENT_POST_REL_LINK__				= '{:adjacent}_post_rel_link';
			
			/**
			 * @since 2.8
			 */
			CONST BOUNDARY_POST_REL_LINK__				= '{:boundary}_post_rel_link';
			
			/**
			 * @since 2.3
			 */
			CONST FIELD_NO_PREFIX_EDIT_PRE__			= '{:fieldNoPrefix}_edit_pre';
			
			/**
			 * @since 2.3
			 */
			CONST FIELD_NO_PREFIX_SAVE_PRE__			= '{:fieldNoPrefix}_save_pre';
			
			/**
			 * @since 2.3
			 */
			CONST FIELD__						= '{:field}';
			
			/**
			 * @since 2.3
			 */
			CONST FIELD_PRE__					= '{:field}_pre';
			
			/**
			 * @since 2.9
			 */
			CONST OPTION__						= '{:option}';
			
			/**
			 * @since 3.1
			 */
			CONST PERMASTRUCTNAME_REWRITE_RULES__			= '{:permaStructName}_rewrite_rules';
			
			/**
			 * @since 3.0
			 */
			CONST PER_PAGE__					= '{:perPage}';
			
			/**
			 * @since 3.1
			 */
			CONST PREFIX_PLUGIN_ACTION_LINKS__			= '{:prefix}plugin_action_links';
			
			/**
			 * @since 3.1
			 */
			CONST PREFIX_PLUGIN_ACTION_LINKS_PLUGIN_FILE__		= '{:prefix}plugin_action_links_{:pluginFile}';
			
			/**
			 * @since 1.2.1
			 */
			CONST TAG__						= '{:tag}';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_ROW_ACTIONS__				= '{:taxonomy}_row_actions';
			
			/**
			 * @since 2.3
			 */
			CONST TAXONOMY_FIELDRSS__				= '{:taxonomy}_{:fieldRss}';
			
			/**
			 * @since 2.3
			 */
			CONST TAXONOMY_FIELD__					= '{:taxonomy}_{:field}';
			
			/**
			 * @since 2.5
			 */
			CONST TAXONOMY_FIELD_RSS__				= '{:taxonomy}_{:field}_rss';
			
			/**
			 * @since 3.3
			 */
			CONST TYPE_SEND_TO_EDITOR_URL__				= '{:type}_send_to_editor_url';
			
			/**
			 * @since 1.5.2
			 */
			CONST TYPE_TEMPLATE__					= '{:type}_template';
			
			/**
			 * @since 3.0
			 */
			CONST TYPE_UPLOAD_IFRAME_SRC__				= '{:type}_upload_iframe_src';
		#::
	}