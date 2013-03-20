<?PHP
	NAMESPACE tri4m\Wp;
	
	CLASS __const_Action EXTENDS \ILLI\Core\Std\ConstantCollection
	{
		#:Activate:
			/**
			 * @since 3.0
			 */
			CONST ACTIVATE_BLOG					= 'activate_blog';
			
			/**
			 * @since 3.0
			 */
			CONST ACTIVATE_HEADER					= 'activate_header';
			
			/**
			 * @since 2.9
			 */
			CONST ACTIVATE_PLUGIN					= 'activate_plugin';
			
			/**
			 * @since 2.0
			 */
			CONST ACTIVATE_PLUGIN__					= 'activate_{:pluginName}';
			
			/**
			 * @since 3.0
			 */
			CONST ACTIVATE_WP_HEAD					= 'activate_wp_head';
		#::
		#:Activated:
			/**
			 * @since 2.9
			 */
			CONST ACTIVATED_PLUGIN					= 'activated_plugin';
		#::
		#:Activity:	
			/**
			 * @since 2.0
			 */
			CONST ACTIVITY_BOX_END					= 'activity_box_end';
		#::
		#:Add:
			/**
			 * @since 3.1
			 */
			CONST ADD_ADMIN_BAR_MENUS				= 'add_admin_bar_menus';
			
			/**
			 * @since 2.0
			 */
			CONST ADD_ATTACHMENT					= 'add_attachment';
			
			/**
			 * @since 2.1
			 */
			CONST ADD_CATEGORY_FORM_PRE				= 'add_category_form_pre';
			
			/**
			 * @since 2.0
			 */
			CONST ADD_LINK						= 'add_link';
			
			/**
			 * @since 2.3
			 */
			CONST ADD_LINK_CATEGORY_FORM_PRE			= 'add_link_category_form_pre';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_META_BOXES					= 'add_meta_boxes';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_META_BOXES_COMMENT				= 'add_meta_boxes_comment';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_META_BOXES_LINK				= 'add_meta_boxes_link';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_META_BOXES_POST_TYPE__			= 'add_meta_boxes_{:postType}';
			
			/**
			 * @since 3.1
			 */
			CONST ADD_META_TYPE_META__				= 'add_{:metaType}_meta';
			
			/**
			 * @since 2.9
			 */
			CONST ADD_OPTION					= 'add_option';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_OPTION_OPTION__				= 'add_option_{:option}';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_SITE_OPTION					= 'add_site_option';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_SITE_OPTION_OPTION__				= 'add_site_option_{:option}';
			
			/**
			 * @since 2.7
			 */
			CONST ADD_TAG_FORM					= 'add_tag_form';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_TAG_FORM_FIELDS				= 'add_tag_form_fields';
			
			/**
			 * @since 2.5
			 */
			CONST ADD_TAG_FORM_PRE					= 'add_tag_form_pre';
			
			/**
			 * @since 2.9
			 */
			CONST ADD_TERM_RELATIONSHIP				= 'add_term_relationship';
			
			/**
			 * @since 3.0
			 */
			CONST ADD_USER_TO_BLOG					= 'add_user_to_blog';
		#::
		#:Added:
			/**
			 * @since 3.0
			 */
			CONST ADDED_EXISTING_USER				= 'added_existing_user';
			
			/**
			 * @since 2.9
			 */
			CONST ADDED_META_TYPE_META__				= 'added_{:metaType}_meta';
			
			/**
			 * @since 2.9
			 */
			CONST ADDED_OPTION					= 'added_option';
			
			/**
			 * @since 2.9
			 */
			CONST ADDED_TERM_RELATIONSHIP				= 'added_term_relationship';
			
			/**
			 * @since 2.9
			 */
			CONST ADDED_USERMETA					= 'added_usermeta';
		#::
		#:Admin:
			/**
			 * @since 2.5
			 */
			CONST ADMINMENU						= 'adminmenu';
			
			/**
			 * @since 2.6
			 */
			CONST ADMIN_ACTION_ACTION__				= 'admin_action_{:action}';
			
			/**
			 * @since 3.1
			 */
			CONST ADMIN_BAR_INIT					= 'admin_bar_init';
			
			/**
			 * @since 3.1
			 */
			CONST ADMIN_BAR_MENU					= 'admin_bar_menu';
			
			/**
			 * @since 3.0
			 */
			CONST ADMIN_COLOR_SCHEME_PICKER				= 'admin_color_scheme_picker';
			
			/**
			 * @since 2.8
			 */
			CONST ADMIN_ENQUEUE_SCRIPTS				= 'admin_enqueue_scripts';
			
			/**
			 * @since 1.2.1
			 */
			CONST ADMIN_FOOTER					= 'admin_footer';
			
			/**
			 * @since 2.8
			 */
			CONST ADMIN_FOOTER_HOOK_SUFFIX__			= 'admin_footer-{:hookSuffix}';
			
			/**
			 * @since 1.2.1
			 */
			CONST ADMIN_HEAD					= 'admin_head';
			
			/**
			 * @since 2.9
			 */
			CONST ADMIN_HEAD_MEDIA_UPLOAD_POPUP			= 'admin_head-media-upload-popup';
			
			/**
			 * @since 2.7
			 */
			CONST ADMIN_HEAD_HOOK_SUFFIX__				= 'admin_head-{:hookSuffix}';
			
			/**
			 * @since 2.5
			 */
			CONST ADMIN_HEAD_CONTENT_FUNC__				= 'admin_head_{:contentFunc}';
			
			/**
			 * @since 2.5
			 */
			CONST ADMIN_INIT					= 'admin_init';
			
			/**
			 * @since 1.5.2
			 */
			CONST ADMIN_MENU					= 'admin_menu';
			
			/**
			 * @since 2.0.11
			 */
			CONST ADMIN_NOTICES					= 'admin_notices';
			
			/**
			 * @since 2.5
			 */
			CONST ADMIN_PAGE_ACCESS_DENIED				= 'admin_page_access_denied';
			
			/**
			 * @since 2.8
			 */
			CONST ADMIN_PRINT_FOOTER_SCRIPTS			= 'admin_print_footer_scripts';
			
			/**
			 * @since 2.1
			 */
			CONST ADMIN_PRINT_SCRIPTS				= 'admin_print_scripts';
			
			/**
			 * @since 2.9
			 */
			CONST ADMIN_PRINT_SCRIPTS_MEDIA_UPLOAD_POPUP		= 'admin_print_scripts-media-upload-popup';
			
			/**
			 * @since 2.7
			 */
			CONST ADMIN_PRINT_SCRIPTS_HOOK_SUFFIX__			= 'admin_print_scripts-{:hookSuffix}';
			
			/**
			 * @since 2.6
			 */
			CONST ADMIN_PRINT_STYLES				= 'admin_print_styles';
			
			/**
			 * @since 2.9
			 */
			CONST ADMIN_PRINT_STYLES_MEDIA_UPLOAD_POPUP		= 'admin_print_styles-media-upload-popup';
			
			/**
			 * @since 2.7
			 */
			CONST ADMIN_PRINT_STYLES_HOOK_SUFFIX__			= 'admin_print_styles-{:hookSuffix}';
			
			/**
			 * @since 2.2
			 */
			CONST ADMIN_XML_NS					= 'admin_xml_ns';
		#::
		#:After:
			/**
			 * @since 3.0
			 */
			CONST AFTER_TAXONOMY_TABLE__				= 'after-{:taxonomy}-table';
			
			/**
			 * @since 2.8
			 */
			CONST AFTER_DB_UPGRADE					= 'after_db_upgrade';
			
			/**
			 * @since 3.2
			 */
			CONST AFTER_DELETE_POST					= 'after_delete_post';
			
			/**
			 * @since 3.0
			 */
			CONST AFTER_MU_UPGRADE					= 'after_mu_upgrade';
			
			/**
			 * @since 2.3
			 */
			CONST AFTER_PLUGIN_ROW					= 'after_plugin_row';
			
			/**
			 * @since 2.7
			 */
			CONST AFTER_PLUGIN_ROW_PLUGIN_FILE			= 'after_plugin_row_{:plugin_file}';
			
			/**
			 * @since 3.0
			 */
			CONST AFTER_SETUP_THEME					= 'after_setup_theme';
			
			/**
			 * @since 3.0
			 */
			CONST AFTER_SIGNUP_FORM					= 'after_signup_form';
			
			/**
			 * @since 3.3
			 */
			CONST AFTER_SWITCH_THEME				= 'after_switch_theme';
			
			/**
			 * @since 3.1
			 */
			CONST AFTER_THEME_ROW					= 'after_theme_row';
			
			/**
			 * @since 3.5
			 */
			CONST AFTER_THEME_ROW_STYLESHEET__			= 'after_theme_row_{:stylesheet}';
			
			/**
			 * @since 3.2
			 */
			CONST AFTER_WP_TINY_MCE					= 'after_wp_tiny_mce';
		#::
		#:Akismet:
			/**
			 * @since 2.5
			 */
			CONST AKISMET_SPAM_CAUGHT				= 'akismet_spam_caught';
			
			/**
			 * @since 3.1
			 */
			CONST AKISMET_SUBMIT_NONSPAM_COMMENT			= 'akismet_submit_nonspam_comment';
			
			/**
			 * @since 3.1
			 */
			CONST AKISMET_SUBMIT_SPAM_COMMENT			= 'akismet_submit_spam_comment';
			
			/**
			 * @since 2.5
			 */
			CONST AKISMET_TABS					= 'akismet_tabs';
		#::
		#:All:
			/**
			 * @since 3.1
			 */
			CONST ALL_ADMIN_NOTICES					= 'all_admin_notices';
		#::
		#:Archive:
			/**
			 * @since 3.0
			 */
			CONST ARCHIVE_BLOG					= 'archive_blog';
		#::
		#:Atom:
			/**
			 * @since 3.2
			 */
			CONST ATOM_AUTHOR					= 'atom_author';
			
			/**
			 * @since 2.8
			 */
			CONST ATOM_COMMENTS_NS					= 'atom_comments_ns';
			
			/**
			 * @since 2.0
			 */
			CONST ATOM_ENTRY					= 'atom_entry';
			
			/**
			 * @since 2.0
			 */
			CONST ATOM_HEAD						= 'atom_head';
			
			/**
			 * @since 2.0
			 */
			CONST ATOM_NS						= 'atom_ns';
		#::
		#:Attachment:
			/**
			 * @since 3.5
			 */
			CONST ATTACHMENT_SUBMITBOX_MISC_ACTIONS			= 'attachment_submitbox_misc_actions';
		#::
		#:Auth:
			/**
			 * @since 2.7
			 */
			CONST AUTH_COOKIE_BAD_HASH				= 'auth_cookie_bad_hash';
			
			/**
			 * @since 2.7
			 */
			CONST AUTH_COOKIE_BAD_USERNAME				= 'auth_cookie_bad_username';
			
			/**
			 * @since 2.7
			 */
			CONST AUTH_COOKIE_EXPIRED				= 'auth_cookie_expired';
			
			/**
			 * @since 2.7
			 */
			CONST AUTH_COOKIE_MALFORMED				= 'auth_cookie_malformed';
			
			/**
			 * @since 2.7
			 */
			CONST AUTH_COOKIE_VALID					= 'auth_cookie_valid';
			
			/**
			 * @since 2.8
			 */
			CONST AUTH_REDIRECT					= 'auth_redirect';
		#::
		#:Before:
			/**
			 * @since 3.2
			 */
			CONST BEFORE_DELETE_POST				= 'before_delete_post';
			
			/**
			 * @since 3.0
			 */
			CONST BEFORE_SIGNUP_FORM				= 'before_signup_form';
			
			/**
			 * @since 3.2
			 */
			CONST BEFORE_WP_TINY_MCE				= 'before_wp_tiny_mce';
		#::
		#:Begin:
			/**
			 * @since 2.9
			 */
			CONST BEGIN_FETCH_POST_THUMBNAIL_HTML			= 'begin_fetch_post_thumbnail_html';
		#::
		#:Blog:
			/**
			 * @since 2.1
			 */
			CONST BLOG_PRIVACY_SELECTOR				= 'blog_privacy_selector';
		#::
		#:Bulk:
			/**
			 * @since 2.7
			 */
			CONST BULK_EDIT_CUSTOM_BOX				= 'bulk_edit_custom_box';
		#::
		#:Check:
			/**
			 * @since 1.5.2
			 */
			CONST CHECK_ADMIN_REFERER				= 'check_admin_referer';
			
			/**
			 * @since 2.1
			 */
			CONST CHECK_AJAX_REFERER				= 'check_ajax_referer';
			
			/**
			 * @since 2.3
			 */
			CONST CHECK_COMMENT_FLOOD				= 'check_comment_flood';
			
			/**
			 * @since 1.5.2
			 */
			CONST CHECK_PASSWORDS					= 'check_passwords';
		#::
		#:Clean:
			/**
			 * @since 3.0
			 */
			CONST CLEAN_ATTACHMENT_CACHE				= 'clean_attachment_cache';
			
			/**
			 * @since 2.5
			 */
			CONST CLEAN_OBJECT_TERM_CACHE				= 'clean_object_term_cache';
			
			/**
			 * @since 2.5
			 */
			CONST CLEAN_PAGE_CACHE					= 'clean_page_cache';
			
			/**
			 * @since 2.5
			 */
			CONST CLEAN_POST_CACHE					= 'clean_post_cache';
			
			/**
			 * @since 2.5
			 */
			CONST CLEAN_TERM_CACHE					= 'clean_term_cache';
			
			/**
			 * @since 2.7
			 */
			CONST CLEAR_AUTH_COOKIE					= 'clear_auth_cookie';
		#::
		#:Comment:
			/**
			 * @since 2.1
			 */
			CONST COMMENTRSS2_ITEM					= 'commentrss2_item';
			
			/**
			 * @since 2.3
			 */
			CONST COMMENTSRSS2_HEAD					= 'commentsrss2_head';
			
			/**
			 * @since 2.8
			 */
			CONST COMMENTS_ATOM_HEAD				= 'comments_atom_head';
			
			/**
			 * @since 3.4
			 */
			CONST COMMENT_ADD_AUTHOR_URL				= 'comment_add_author_url';
			
			/**
			 * @since 2.2
			 */
			CONST COMMENT_ATOM_ENTRY				= 'comment_atom_entry';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_CLOSED					= 'comment_closed';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_DUPLICATE_TRIGGER				= 'comment_duplicate_trigger';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_FLOOD_TRIGGER				= 'comment_flood_trigger';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_FORM					= 'comment_form';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_AFTER				= 'comment_form_after';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_AFTER_FIELDS				= 'comment_form_after_fields';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_BEFORE				= 'comment_form_before';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_BEFORE_FIELDS			= 'comment_form_before_fields';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_COMMENTS_CLOSED			= 'comment_form_comments_closed';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_LOGGED_IN_AFTER			= 'comment_form_logged_in_after';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_MUST_LOG_IN_AFTER			= 'comment_form_must_log_in_after';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_FORM_TOP					= 'comment_form_top';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_ID_NOT_FOUND				= 'comment_id_not_found';
			
			/**
			 * @since 2.2
			 */
			CONST COMMENT_LOOP_START				= 'comment_loop_start';
			
			/**
			 * @since 1.5.2
			 */
			CONST COMMENT_ON_DRAFT					= 'comment_on_draft';
			
			/**
			 * @since 3.0
			 */
			CONST COMMENT_ON_PASSWORD_PROTECTED			= 'comment_on_password_protected';
			
			/**
			 * @since 2.9
			 */
			CONST COMMENT_ON_TRASH					= 'comment_on_trash';
			
			/**
			 * @since 1.2.1
			 */
			CONST COMMENT_POST					= 'comment_post';
			
			/**
			 * @since 3.4
			 */
			CONST COMMENT_REMOVE_AUTHOR_URL				= 'comment_remove_author_url';
			
			/**
			 * @since 2.7
			 */
			CONST COMMENT_NEW_STATUS_COMMENT_TYPE__			= 'comment_{:newStatus}_{:commentType}';
			
			/**
			 * @since 2.7
			 */
			CONST COMMENT_OLD_STATUS_TO_NEW_STATUS__		= 'comment_{:oldStatus}_to_{:newStatus}';
		#::
		#:Core:
			/**
			 * @since 2.9
			 */
			CONST CORE_UPGRADE_PREAMBLE				= 'core_upgrade_preamble';
		#::
		#:Create:
			/**
			 * @since 2.0
			 */
			CONST CREATE_CATEGORY					= 'create_category';
			
			/**
			 * @since 2.3
			 */
			CONST CREATE_TERM					= 'create_term';
			
			/**
			 * @since 2.3
			 */
			CONST CREATE_TAXONOMY__					= 'create_{:taxonomy}';
		#::
		#:Created:
			/**
			 * @since 2.2
			 */
			CONST CREATED_CATEGORY					= 'created_category';
			
			/**
			 * @since 2.3
			 */
			CONST CREATED_TERM					= 'created_term';
			
			/**
			 * @since 2.3
			 */
			CONST CREATED_TAXONOMY__				= 'created_{:taxonomy}';
		#::
		#:Custom:
			/**
			 * @since 3.1
			 */
			CONST CUSTOM_HEADER_OPTIONS				= 'custom_header_options';
		#::
		#:Customize:
			#:Controls:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_CONTROLS_ENQUEUE_SCRIPTS		= 'customize_controls_enqueue_scripts';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_CONTROLS_INIT				= 'customize_controls_init';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_CONTROLS_PRINT_FOOTER_SCRIPTS		= 'customize_controls_print_footer_scripts';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_CONTROLS_PRINT_SCRIPTS			= 'customize_controls_print_scripts';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_CONTROLS_PRINT_STYLES			= 'customize_controls_print_styles';
			#::
			#:Preview:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_PREVIEW_INIT				= 'customize_preview_init';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_PREVIEW_ID__				= 'customize_preview_{:id}';
			#::
			#:Register:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_REGISTER				= 'customize_register';
			#::
			#:Render:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_RENDER_CONTROL				= 'customize_render_control';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_RENDER_CONTROL_ID__			= 'customize_render_control_{:id}';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_RENDER_SECTION				= 'customize_render_section';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_RENDER_SECTION_ID__			= 'customize_render_section_{:id}';
			#::
			#:Save:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_SAVE					= 'customize_save';
				
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_SAVE_ID_DATA_BASE__			= 'customize_save_{:idDataBase}';
			#::
			#:Update:
				/**
				 * @since 3.4
				 */
				CONST CUSTOMIZE_UPDATE_TYPE__				= 'customize_update_{:type}';
			#::
		#::
		#:DBX:
			/**
			 * @since 2.0.11
			 */
			CONST DBX_POST_ADVANCED					= 'dbx_post_advanced';
			
			/**
			 * @since 2.0.11
			 */
			CONST DBX_POST_SIDEBAR					= 'dbx_post_sidebar';
		#::
		#:Deactivate:
			/**
			 * @since 3.0
			 */
			CONST DEACTIVATE_BLOG					= 'deactivate_blog';
			
			/**
			 * @since 2.9
			 */
			CONST DEACTIVATE_PLUGIN					= 'deactivate_plugin';
			
			/**
			 * @since 2.0
			 */
			CONST DEACTIVATE_PLUGIN__				= 'deactivate_{:plugin}';
		#::
		#:Deactivated:
			/**
			 * @since 2.9
			 */
			CONST DEACTIVATED_PLUGIN				= 'deactivated_plugin';
		#::
		#:Delete:
			
			/**
			 * @since 2.0
			 */
			CONST DELETE_ATTACHMENT					= 'delete_attachment';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_BLOG					= 'delete_blog';
			
			/**
			 * @since 1.5.2
			 */
			CONST DELETE_CATEGORY					= 'delete_category';
			
			/**
			 * @since 1.2.1
			 */
			CONST DELETE_COMMENT					= 'delete_comment';
			
			/**
			 * @since 2.0
			 */
			CONST DELETE_LINK					= 'delete_link';
			
			/**
			 * @since 2.9
			 */
			CONST DELETE_OPTION					= 'delete_option';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_OPTION_OPTION__				= 'delete_option_{:option}';
			
			/**
			 * @since 1.2.1
			 */
			CONST DELETE_POST					= 'delete_post';
			
			/**
			 * @since 2.9
			 */
			CONST DELETE_POSTMETA					= 'delete_postmeta';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_SITE_OPTION				= 'delete_site_option';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_SITE_OPTION_OPTION__			= 'delete_site_option_{:option}';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_SITE_TRANSIENT_TRANSIENT__			= 'delete_site_transient_{:transient}';
			
			/**
			 * @since 2.5
			 */
			CONST DELETE_TERM					= 'delete_term';
			
			/**
			 * @since 2.9
			 */
			CONST DELETE_TERM_RELATIONSHIPS				= 'delete_term_relationships';
			
			/**
			 * @since 2.9
			 */
			CONST DELETE_TERM_TAXONOMY				= 'delete_term_taxonomy';
			
			/**
			 * @since 3.0
			 */
			CONST DELETE_TRANSIENT_TRANSIENT__			= 'delete_transient_{:transient}';
			
			/**
			 * @since 2.0
			 */
			CONST DELETE_USER					= 'delete_user';
			
			/**
			 * @since 2.9
			 */
			CONST DELETE_USERMETA					= 'delete_usermeta';
			
			/**
			 * @since 3.4
			 */
			CONST DELETE_META_TYPEMETA__				= 'delete_{:metaType}meta';
			
			/**
			 * @since 3.1
			 */
			CONST DELETE_META_TYPE_META__				= 'delete_{:metaType}_meta';
			
			/**
			 * @since 2.3
			 */
			CONST DELETE_TAXONOMY__					= 'delete_{:taxonomy}';
			/**
			 * @since 2.9
			 */
			CONST DELETED_COMMENT					= 'deleted_comment';
		#::
		#:Deleted:
			/**
			 * @since 2.2
			 */
			CONST DELETED_LINK					= 'deleted_link';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_OPTION					= 'deleted_option';
			
			/**
			 * @since 2.2
			 */
			CONST DELETED_POST					= 'deleted_post';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_POSTMETA					= 'deleted_postmeta';
			
			/**
			 * @since 3.0
			 */
			CONST DELETED_SITE_TRANSIENT				= 'deleted_site_transient';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_TERM_RELATIONSHIPS			= 'deleted_term_relationships';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_TERM_TAXONOMY				= 'deleted_term_taxonomy';
			
			/**
			 * @since 3.0
			 */
			CONST DELETED_TRANSIENT					= 'deleted_transient';
			
			/**
			 * @since 2.8
			 */
			CONST DELETED_USER					= 'deleted_user';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_USERMETA					= 'deleted_usermeta';
			
			/**
			 * @since 3.4
			 */
			CONST DELETED_META_TYPEMETA__				= 'deleted_{:metaType}meta';
			
			/**
			 * @since 2.9
			 */
			CONST DELETED_META_TYPE_META__				= 'deleted_{:metaType}_meta';
		#::
		#:Deprected:
			/**
			 * @since 3.0
			 */
			CONST DEPRECATED_ARGUMENT_RUN				= 'deprecated_argument_run';
			
			/**
			 * @since 2.5
			 */
			CONST DEPRECATED_FILE_INCLUDED				= 'deprecated_file_included';
			
			/**
			 * @since 2.5
			 */
			CONST DEPRECATED_FUNCTION_RUN				= 'deprecated_function_run';
		#::
		#:Do:
			/**
			 * @since 2.6
			 */
			CONST DO_META_BOXES					= 'do_meta_boxes';
			
			/**
			 * @since 2.1
			 */
			CONST DO_ROBOTS						= 'do_robots';
			
			/**
			 * @since 2.1
			 */
			CONST DO_ROBOTSTXT					= 'do_robotstxt';
		#::
		#:Doing:
			/**
			 * @since 3.1
			 */
			CONST DOING_IT_WRONG_RUN				= 'doing_it_wrong_run';
		#::
		#:Dynamic:
			/**
			 * @since 3.0
			 */
			CONST DYNAMIC_SIDEBAR					= 'dynamic_sidebar';
		#::
		#:Edit:
			/**
			 * @since 2.0
			 */
			CONST EDIT_ATTACHMENT					= 'edit_attachment';
			
			/**
			 * @since 2.0
			 */
			CONST EDIT_CATEGORY					= 'edit_category';
			
			/**
			 * @since 2.1
			 */
			CONST EDIT_CATEGORY_FORM				= 'edit_category_form';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_CATEGORY_FORM_FIELDS				= 'edit_category_form_fields';
			
			/**
			 * @since 2.1
			 */
			CONST EDIT_CATEGORY_FORM_PRE				= 'edit_category_form_pre';
			
			/**
			 * @since 1.2.1
			 */
			CONST EDIT_COMMENT					= 'edit_comment';
			
			/**
			 * @since 1.5.2
			 */
			CONST EDIT_FORM_ADVANCED				= 'edit_form_advanced';
			
			/**
			 * @since 3.5
			 */
			CONST EDIT_FORM_AFTER_EDITOR				= 'edit_form_after_editor';
			
			/**
			 * @since 3.5
			 */
			CONST EDIT_FORM_AFTER_TITLE				= 'edit_form_after_title';
			
			/**
			 * @since 2.0
			 */
			CONST EDIT_LINK						= 'edit_link';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_LINK_CATEGORY_FORM				= 'edit_link_category_form';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_LINK_CATEGORY_FORM_FIELDS			= 'edit_link_category_form_fields';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_LINK_CATEGORY_FORM_PRE			= 'edit_link_category_form_pre';
			
			/**
			 * @since 1.5.2
			 */
			CONST EDIT_PAGE_FORM					= 'edit_page_form';
			
			/**
			 * @since 1.2.1
			 */
			CONST EDIT_POST						= 'edit_post';
			
			/**
			 * @since 2.5
			 */
			CONST EDIT_TAG_FORM					= 'edit_tag_form';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_TAG_FORM_FIELDS				= 'edit_tag_form_fields';
			
			/**
			 * @since 2.5
			 */
			CONST EDIT_TAG_FORM_PRE					= 'edit_tag_form_pre';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_TERM						= 'edit_term';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_TERMS					= 'edit_terms';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_TERM_TAXONOMIES				= 'edit_term_taxonomies';
			
			/**
			 * @since 2.9
			 */
			CONST EDIT_TERM_TAXONOMY				= 'edit_term_taxonomy';
			
			/**
			 * @since 2.0
			 */
			CONST EDIT_USER_PROFILE					= 'edit_user_profile';
			
			/**
			 * @since 2.7
			 */
			CONST EDIT_USER_PROFILE_UPDATE				= 'edit_user_profile_update';
			
			/**
			 * @since 2.3
			 */
			CONST EDIT_TAXONOMY__					= 'edit_{:taxonomy}';
		#::
		#:Edited:
			/**
			 * @since 2.2
			 */
			CONST EDITED_CATEGORY					= 'edited_category';
			
			/**
			 * @since 2.3
			 */
			CONST EDITED_TERM					= 'edited_term';
			
			/**
			 * @since 2.9
			 */
			CONST EDITED_TERMS					= 'edited_terms';
			
			/**
			 * @since 2.9
			 */
			CONST EDITED_TERM_TAXONOMIES				= 'edited_term_taxonomies';
			
			/**
			 * @since 2.9
			 */
			CONST EDITED_TERM_TAXONOMY				= 'edited_term_taxonomy';
			
			/**
			 * @since 2.3
			 */
			CONST EDITED_TAXONOMY__					= 'edited_{:taxonomy}';
			
			/**
			 * @since 2.9
			 */
			CONST END_FETCH_POST_THUMBNAIL_HTML			= 'end_fetch_post_thumbnail_html';
		#::
		#:Export:
			/**
			 * @since 3.5
			 */
			CONST EXPORT_FILTERS					= 'export_filters';
		
			/**
			 * @since 2.3
			 */
			CONST EXPORT_WP						= 'export_wp';
		#::
		#:Get:
			/**
			 * @since 2.1
			 */
			CONST GET_FOOTER					= 'get_footer';
			
			/**
			 * @since 2.1
			 */
			CONST GET_HEADER					= 'get_header';
			
			/**
			 * @since 2.7
			 */
			CONST GET_SEARCH_FORM					= 'get_search_form';
			
			/**
			 * @since 2.2
			 */
			CONST GET_SIDEBAR					= 'get_sidebar';
			
			/**
			 * @since 3.0
			 */
			CONST GET_TEMPLATE_PART_SLUG__				= 'get_template_part_{:slug}';
		#::
		#:Generate:
			/**
			 * @since 1.5.2
			 */
			CONST GENERATE_REWRITE_RULES				= 'generate_rewrite_rules';
		#::
		#:Grant:
			/**
			 * @since 3.0
			 */
			CONST GRANT_SUPER_ADMIN					= 'grant_super_admin';
		#::
		#:Granted:
			/**
			 * @since 3.0
			 */
			CONST GRANTED_SUPER_ADMIN				= 'granted_super_admin';
		#::
		#:HTTP:
			/**
			 * @since 2.8
			 */
			CONST HTTP_API_CURL					= 'http_api_curl';
			
			/**
			 * @since 2.8
			 */
			CONST HTTP_API_DEBUG					= 'http_api_debug';
		#::
		#:In:
			/**
			 * @since 2.5
			 */
			CONST IN_ADMIN_FOOTER					= 'in_admin_footer';
			
			/**
			 * @since 3.0
			 */
			CONST IN_ADMIN_HEADER					= 'in_admin_header';
			
			/**
			 * @since 2.8
			 */
			CONST IN_PLUGIN_UPDATE_MESSAGE_FILE__			= 'in_plugin_update_message-{:file}';
			
			/**
			 * @since 3.1
			 */
			CONST IN_THEME_UPDATE_MESSAGE_THEME_KEY__		= 'in_theme_update_message-{:themeKey}';
			
			/**
			 * @since 2.8
			 */
			CONST IN_WIDGET_FORM					= 'in_widget_form';
		#::
		#:Init:
			/**
			 * @since 1.5.2
			 */
			CONST INIT						= 'init';
		#::
		#:Install:
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGINS_PRE_TAB__				= 'install_plugins_pre_{:tab}';
			
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGINS_TABLE_HEADER			= 'install_plugins_table_header';
			
			/**
			 * @since 2.7
			 */
			CONST INSTALL_PLUGINS_TAB__				= 'install_plugins_{:tab}';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEMES_PRE_TAB__				= 'install_themes_pre_{:tab}';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEMES_TABLE_HEADER			= 'install_themes_table_header';
			
			/**
			 * @since 2.8
			 */
			CONST INSTALL_THEMES_TAB__				= 'install_themes_{:tab}';
		#::
		#:Load:
			/**
			 * @since 3.1
			 */
			CONST LOAD_CATEGORIES_PHP				= 'load-categories-php';
			
			/**
			 * @since 3.1
			 */
			CONST LOAD_EDIT_LINK_CATEGORIES_PHP			= 'load-edit-link-categories-php';
			
			/**
			 * @since 3.5
			 */
			CONST LOAD_IMPORTER_IMPORTER__				= 'load-importer-{:importer}';
			
			/**
			 * @since 3.1
			 */
			CONST LOAD_PAGE_NEW_PHP					= 'load-page-new-php';
			
			/**
			 * @since 3.1
			 */
			CONST LOAD_PAGE_PHP					= 'load-page-php';
			
			/**
			 * @since 2.8
			 */
			CONST LOAD_WIDGETS_PHP					= 'load-widgets-php';
			
			/**
			 * @since 2.1
			 */
			CONST LOAD_PAGENOW__					= 'load-{:pagenow}';
			
			/**
			 * @since 2.1
			 */
			CONST LOAD_PAGE_HOOK__					= 'load-{:pageHook}';
			
			/**
			 * @since 2.1
			 */
			CONST LOAD_PLUGIN_PAGE__				= 'load-{:pluginPage}';
			
			/**
			 * @since 2.3
			 */
			CONST LOAD_FEED_ENGINE					= 'load_feed_engine';
			
			/**
			 * @since 2.9
			 */
			CONST LOAD_TEXTDOMAIN					= 'load_textdomain';
		#::
		#:Login:
			/**
			 * @since 3.1
			 */
			CONST LOGIN_ENQUEUE_SCRIPTS				= 'login_enqueue_scripts';
			
			/**
			 * @since 3.1
			 */
			CONST LOGIN_FOOTER					= 'login_footer';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_FORM					= 'login_form';
			
			/**
			 * @since 2.8
			 */
			CONST LOGIN_FORM_ACTION__				= 'login_form_{:action}';
			
			/**
			 * @since 2.1
			 */
			CONST LOGIN_HEAD					= 'login_head';
			
			/**
			 * @since 3.2
			 */
			CONST LOGIN_INIT					= 'login_init';
		#::
		#:Loop:	
			/**
			 * @since 2.0
			 */
			CONST LOOP_END						= 'loop_end';
			
			/**
			 * @since 2.0
			 */
			CONST LOOP_START					= 'loop_start';
		#::
		#:Lost:
			/**
			 * @since 2.1
			 */
			CONST LOSTPASSWORD_FORM					= 'lostpassword_form';
			
			/**
			 * @since 2.1
			 */
			CONST LOSTPASSWORD_POST					= 'lostpassword_post';
			
			/**
			 * @since 1.5.2
			 */
			CONST LOST_PASSWORD					= 'lost_password';
		#::
		#:Make:
			/**
			 * @since 3.5
			 */
			CONST MAKE_DELETE_BLOG					= 'make_delete_blog';
			
			/**
			 * @since 3.0
			 */
			CONST MAKE_HAM_BLOG					= 'make_ham_blog';
			
			/**
			 * @since 3.0
			 */
			CONST MAKE_HAM_USER					= 'make_ham_user';
			
			/**
			 * @since 3.0
			 */
			CONST MAKE_SPAM_BLOG					= 'make_spam_blog';
			
			/**
			 * @since 3.0
			 */
			CONST MAKE_SPAM_USER					= 'make_spam_user';
			
			/**
			 * @since 3.5
			 */
			CONST MAKE_UNDELETE_BLOG				= 'make_undelete_blog';
		#::
		#:Manage:
			/**
			 * @since 2.8
			 */
			CONST MANAGE_COMMENTS_CUSTOM_COLUMN			= 'manage_comments_custom_column';
			
			/**
			 * @since 2.5
			 */
			CONST MANAGE_COMMENTS_NAV				= 'manage_comments_nav';
			
			/**
			 * @since 2.1
			 */
			CONST MANAGE_LINK_CUSTOM_COLUMN				= 'manage_link_custom_column';
			
			/**
			 * @since 2.5
			 */
			CONST MANAGE_MEDIA_CUSTOM_COLUMN			= 'manage_media_custom_column';
			
			/**
			 * @since 2.5
			 */
			CONST MANAGE_PAGES_CUSTOM_COLUMN			= 'manage_pages_custom_column';
			
			/**
			 * @since 3.1
			 */
			CONST MANAGE_PLUGINS_CUSTOM_COLUMN			= 'manage_plugins_custom_column';
			
			/**
			 * @since 1.5.2
			 */
			CONST MANAGE_POSTS_CUSTOM_COLUMN			= 'manage_posts_custom_column';
			
			/**
			 * @since 3.1
			 */
			CONST MANAGE_SITES_CUSTOM_COLUMN			= 'manage_sites_custom_column';
			
			/**
			 * @since 3.1
			 */
			CONST MANAGE_THEMES_CUSTOM_COLUMN			= 'manage_themes_custom_column';
			
			/**
			 * @since 3.1
			 */
			CONST MANAGE_POST_TYPE_POSTS_CUSTOM_COLUMN__		= 'manage_{:postType}_posts_custom_column';
		#::
		#:Mature:
			/**
			 * @since 3.1
			 */
			CONST MATURE_BLOG					= 'mature_blog';
		#::
		#:Media:
			/**
			 * @since 2.5
			 */
			CONST MEDIA_BUTTONS					= 'media_buttons';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_UPLOAD_TAB__				= 'media_upload_{:tab}';
			
			/**
			 * @since 2.5
			 */
			CONST MEDIA_UPLOAD_TYPE					= 'media_upload_{:type}';
		#::
		#:MU:
			/**
			 * @since 2.8
			 */
			CONST MUPLUGINS_LOADED					= 'muplugins_loaded';
			
			/**
			 * @since 3.0
			 */
			CONST MU_ACTIVITY_BOX_END				= 'mu_activity_box_end';
			
			/**
			 * @since 3.0
			 */
			CONST MU_RIGHTNOW_END					= 'mu_rightnow_end';
		#::
		#:My:
			/**
			 * @since 3.0
			 */
			CONST MYBLOGS_ALLBLOGS_OPTIONS				= 'myblogs_allblogs_options';
		#::
		#:Network:
			/**
			 * @since 3.1
			 */
			CONST NETWORK_ADMIN_EDIT_ACTION__			= 'network_admin_edit_{:action}';
			
			/**
			 * @since 3.1
			 */
			CONST NETWORK_ADMIN_MENU				= 'network_admin_menu';
			
			/**
			 * @since 3.1
			 */
			CONST NETWORK_ADMIN_NOTICES				= 'network_admin_notices';
			
			/**
			 * @since 3.1
			 */
			CONST NETWORK_SITE_USERS_AFTER_LIST_TABLE		= 'network_site_users_after_list_table';
		#::
		#:Orc:
			/**
			 * @since 3.0
			 */
			CONST OPML_HEAD						= 'opml_head';
		#::
		#:Parse:
			/**
			 * @since 1.5.2
			 */
			CONST PARSE_QUERY					= 'parse_query';
			
			/**
			 * @since 2.1
			 */
			CONST PARSE_REQUEST					= 'parse_request';
		#::
		#:Password:
			/**
			 * @since 1.5.2
			 */
			CONST PASSWORD_RESET					= 'password_reset';
		#::
		#:Permalink:
			/**
			 * @since 2.8
			 */
			CONST PERMALINK_STRUCTURE_CHANGED			= 'permalink_structure_changed';
		#::
		#:Personal:
			/**
			 * @since 2.7
			 */
			CONST PERSONAL_OPTIONS					= 'personal_options';
			
			/**
			 * @since 2.0
			 */
			CONST PERSONAL_OPTIONS_UPDATE				= 'personal_options_update';
		#::
		#:PHPMailer:
			/**
			 * @since 2.2
			 */
			CONST PHPMAILER_INIT					= 'phpmailer_init';
		#::
		#:Pingback:
			/**
			 * @since 1.5.2
			 */
			CONST PINGBACK_POST					= 'pingback_post';
		#::
		#:Plugins:
			/**
			 * @since 1.5.2
			 */
			CONST PLUGINS_LOADED					= 'plugins_loaded';
		#::
		#:Populate:
			/**
			 * @since 2.6
			 */
			CONST POPULATE_OPTIONS					= 'populate_options';
		#::
		#:Post:
			/**
			 * @since 2.6
			 */
			CONST POST_HTML_UPLOAD_UI				= 'post-html-upload-ui';
			
			/**
			 * @since 3.3
			 */
			CONST POST_PLUPLOAD_UPLOAD_UI				= 'post-plupload-upload-ui';
			
			/**
			 * @since 2.6
			 */
			CONST POST_UPLOAD_UI					= 'post-upload-ui';
			
			/**
			 * @since 2.3
			 */
			CONST POSTS_SELECTION					= 'posts_selection';
			
			/**
			 * @since 3.1
			 */
			CONST POST_COMMENT_STATUS_META_BOX_OPTIONS		= 'post_comment_status_meta_box-options';
			
			/**
			 * @since 3.0
			 */
			CONST POST_EDIT_FORM_TAG				= 'post_edit_form_tag';
			
			/**
			 * @since 2.9
			 */
			CONST POST_SUBMITBOX_MISC_ACTIONS			= 'post_submitbox_misc_actions';
			
			/**
			 * @since 2.7
			 */
			CONST POST_SUBMITBOX_START				= 'post_submitbox_start';
			
			/**
			 * @since 3.0
			 */
			CONST POST_UPDATED					= 'post_updated';
		#::
		#:Pre:
			/**
			 * @since 2.6
			 */
			CONST PRE_HTML_UPLOAD_UI				= 'pre-html-upload-ui';
			
			/**
			 * @since 3.3
			 */
			CONST PRE_PLUPLOAD_UPLOAD_UI				= 'pre-plupload-upload-ui';
			
			/**
			 * @since 2.6
			 */
			CONST PRE_UPLOAD_UI					= 'pre-upload-ui';
			
			/**
			 * @since 3.0
			 */
			CONST PREPROCESS_SIGNUP_FORM				= 'preprocess_signup_form';
			
			/**
			 * @since 2.8
			 */
			CONST PRE_COMMENT_ON_POST				= 'pre_comment_on_post';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_CURRENT_ACTIVE_PLUGINS			= 'pre_current_active_plugins';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_DELETE_SITE_OPTION_OPTION__			= 'pre_delete_site_option_{:option}';
			
			/**
			 * @since 3.1
			 */
			CONST PRE_GET_COMMENTS					= 'pre_get_comments';
			
			/**
			 * @since 2.0
			 */
			CONST PRE_GET_POSTS					= 'pre_get_posts';
			
			/**
			 * @since 2.0
			 */
			CONST PRE_PING						= 'pre_ping';
			
			/**
			 * @since 2.5
			 */
			CONST PRE_POST_UPDATE					= 'pre_post_update';
			
			/**
			 * @since 3.1
			 */
			CONST PRE_USER_QUERY					= 'pre_user_query';
			
			/**
			 * @since 3.0
			 */
			CONST PRE_USER_SEARCH					= 'pre_user_search';
		#::
		#:Print:
			/**
			 * @since 3.5
			 */
			CONST PRINT_MEDIA_TEMPLATES				= 'print_media_templates';
		#::
		#:Private:
			/**
			 * @since 1.5.2
			 */
			CONST PRIVATE_TO_PUBLISHED				= 'private_to_published';
		#::
		#:Profile:
			/**
			 * @since 2.0
			 */
			CONST PROFILE_PERSONAL_OPTIONS				= 'profile_personal_options';
			
			/**
			 * @since 2.0
			 */
			CONST PROFILE_UPDATE					= 'profile_update';
		#::
		#:Publish:
			/**
			 * @since 2.1
			 */
			CONST PUBLISH_PAGE					= 'publish_page';
			
			/**
			 * @since 1.2.1
			 */
			CONST PUBLISH_PHONE					= 'publish_phone';
			
			/**
			 * @since 1.2.1
			 */
			CONST PUBLISH_POST					= 'publish_post';
		#::
		#:Quick:
			/**
			 * @since 2.7
			 */
			CONST QUICK_EDIT_CUSTOM_BOX				= 'quick_edit_custom_box';
		#::
		#:RDF:
			/**
			 * @since 2.0
			 */
			CONST RDF_HEADER					= 'rdf_header';
			
			/**
			 * @since 2.0
			 */
			CONST RDF_ITEM						= 'rdf_item';
			
			/**
			 * @since 2.0
			 */
			CONST RDF_NS						= 'rdf_ns';
		#::
		#:Refresh:
			/**
			 * @since 3.4
			 */
			CONST REFRESH_BLOG_DETAILS				= 'refresh_blog_details';
		#::
		#:Register:
			/**
			 * @since 2.1
			 */
			CONST REGISTER_FORM					= 'register_form';
			
			/**
			 * @since 2.1
			 */
			CONST REGISTER_POST					= 'register_post';
			
			/**
			 * @since 3.0
			 */
			CONST REGISTER_SIDEBAR					= 'register_sidebar';
		#::
		#:Registered:
			/**
			 * @since 3.3
			 */
			CONST REGISTERED_POST_TYPE				= 'registered_post_type';
			
			/**
			 * @since 3.3
			 */
			CONST REGISTERED_TAXONOMY				= 'registered_taxonomy';
		#::
		#:Remove:
			/**
			 * @since 3.0
			 */
			CONST REMOVE_USER_FROM_BLOG				= 'remove_user_from_blog';
		#::
		#:Restrict:
			/**
			 * @since 3.5
			 */
			CONST RESTRICT_MANAGE_COMMENTS				= 'restrict_manage_comments';
			
			/**
			 * @since 2.1
			 */
			CONST RESTRICT_MANAGE_POSTS				= 'restrict_manage_posts';
			
			/**
			 * @since 3.5
			 */
			CONST RESTRICT_MANAGE_USERS				= 'restrict_manage_users';
		#::
		#:Retrieve:
			/**
			 * @since 1.5.2
			 */
			CONST RETRIEVE_PASSWORD					= 'retrieve_password';
			
			/**
			 * @since 2.5
			 */
			CONST RETRIEVE_PASSWORD_KEY				= 'retrieve_password_key';
		#::
		#:Revoke:
			/**
			 * @since 3.0
			 */
			CONST REVOKE_SUPER_ADMIN				= 'revoke_super_admin';
		#::
		#:Revoked:
			/**
			 * @since 3.0
			 */
			CONST REVOKED_SUPER_ADMIN				= 'revoked_super_admin';
		#::
		#:RightNow:
			/**
			 * @since 2.5
			 */
			CONST RIGHTNOW_END					= 'rightnow_end';
			
			/**
			 * @since 3.0
			 */
			CONST RIGHT_NOW_CONTENT_TABLE_END			= 'right_now_content_table_end';
			
			/**
			 * @since 3.0
			 */
			CONST RIGHT_NOW_DISCUSSION_TABLE_END			= 'right_now_discussion_table_end';
			
			/**
			 * @since 2.7
			 */
			CONST RIGHT_NOW_TABLE_END				= 'right_now_table_end';
		#::
		#:RSS:
			/**
			 * @since 2.8
			 */
			CONST RSS2_COMMENTS_NS					= 'rss2_comments_ns';
			
			/**
			 * @since 2.0
			 */
			CONST RSS2_HEAD						= 'rss2_head';
			
			/**
			 * @since 2.0
			 */
			CONST RSS2_ITEM						= 'rss2_item';
			
			/**
			 * @since 2.0
			 */
			CONST RSS2_NS						= 'rss2_ns';
			
			/**
			 * @since 2.0
			 */
			CONST RSS_HEAD						= 'rss_head';
			
			/**
			 * @since 2.0
			 */
			CONST RSS_ITEM						= 'rss_item';
		#::
		#:Sanitize:
			/**
			 * @since 2.0.11
			 */
			CONST SANITIZE_COMMENT_COOKIES				= 'sanitize_comment_cookies';
			
			/**
			 * @since 1.2.1
			 */
			CONST SANITIZE_TITLE					= 'sanitize_title';
		#::
		#:Save:
			/**
			 * @since 1.5.2
			 */
			CONST SAVE_POST						= 'save_post';
		#::
		#:Send:
			/**
			 * @since 2.1
			 */
			CONST SEND_HEADERS					= 'send_headers';
		#::
		#:Set:
			/**
			 * @since 2.5
			 */
			CONST SET_AUTH_COOKIE					= 'set_auth_cookie';
			
			/**
			 * @since 3.4
			 */
			CONST SET_COMMENT_COOKIES				= 'set_comment_cookies';
			
			/**
			 * @since 2.0.11
			 */
			CONST SET_CURRENT_USER					= 'set_current_user';
			
			/**
			 * @since 2.6
			 */
			CONST SET_LOGGED_IN_COOKIE				= 'set_logged_in_cookie';
			
			/**
			 * @since 2.8
			 */
			CONST SET_OBJECT_TERMS					= 'set_object_terms';
			
			/**
			 * @since 3.0
			 */
			CONST SET_SITE_TRANSIENT_TRANSIENT__			= 'set_site_transient_{:transient}';
			
			/**
			 * @since 3.0
			 */
			CONST SET_TRANSIENT_TRANSIENT__				= 'set_transient_{:transient}';
			
			/**
			 * @since 2.9
			 */
			CONST SET_USER_ROLE					= 'set_user_role';
		#::
		#:Setted:	
			/**
			 * @since 3.0
			 */
			CONST SETTED_SITE_TRANSIENT				= 'setted_site_transient';
			
			/**
			 * @since 3.0
			 */
			CONST SETTED_TRANSIENT					= 'setted_transient';
		#::
		#:Setup:
			/**
			 * @since 2.6
			 */
			CONST SETUP_THEME					= 'setup_theme';
		#::
		#:Show:
			/**
			 * @since 2.0
			 */
			CONST SHOW_USER_PROFILE					= 'show_user_profile';
		#::
		#:Shutdown:
			/**
			 * @since 1.2.1
			 */
			CONST SHUTDOWN						= 'shutdown';
		#::
		#:Sidebar:	
			/**
			 * @since 2.2
			 */
			CONST SIDEBAR_ADMIN_PAGE				= 'sidebar_admin_page';
			
			/**
			 * @since 2.2
			 */
			CONST SIDEBAR_ADMIN_SETUP				= 'sidebar_admin_setup';
		#::
		#:Signup:
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_BLOGFORM					= 'signup_blogform';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_EXTRA_FIELDS				= 'signup_extra_fields';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_FINISHED					= 'signup_finished';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_HEADER					= 'signup_header';
			
			/**
			 * @since 3.0
			 */
			CONST SIGNUP_HIDDEN_FIELDS				= 'signup_hidden_fields';
		#::
		#:Spam:
			/**
			 * @since 2.9
			 */
			CONST SPAM_COMMENT					= 'spam_comment';
		#::
		#:Spammed:
			/**
			 * @since 2.9
			 */
			CONST SPAMMED_COMMENT					= 'spammed_comment';
		#::
		#:Start:
			/**
			 * @since 3.4
			 */
			CONST START_PREVIEWING_THEME				= 'start_previewing_theme';
		#::
		#:Stop:
			/**
			 * @since 3.4
			 */
			CONST STOP_PREVIEWING_THEME				= 'stop_previewing_theme';
		#::
		#:Submit:
			/**
			 * @since 2.5
			 */
			CONST SUBMITLINK_BOX					= 'submitlink_box';
			
			/**
			 * @since 2.5
			 */
			CONST SUBMITPAGE_BOX					= 'submitpage_box';
			
			/**
			 * @since 2.5
			 */
			CONST SUBMITPOST_BOX					= 'submitpost_box';
		#::
		#:Switch:
			/**
			 * @since 3.0
			 */
			CONST SWITCH_BLOG					= 'switch_blog';
			
			/**
			 * @since 1.5.2
			 */
			CONST SWITCH_THEME					= 'switch_theme';
		#::
		#:Template:
			/**
			 * @since 1.5.2
			 */
			CONST TEMPLATE_REDIRECT					= 'template_redirect';
		#::
		#:The:
			/**
			 * @since 2.8
			 */
			CONST THE_POST						= 'the_post';
			
			/**
			 * @since 3.0
			 */
			CONST THE_WIDGET					= 'the_widget';
		#::
		#:Tool:
			/**
			 * @since 2.8
			 */
			CONST TOOL_BOX						= 'tool_box';
		#::
		#:Trackback:
			/**
			 * @since 1.2.1
			 */
			CONST TRACKBACK_POST					= 'trackback_post';
		#::
		#:Transition:
			/**
			 * @since 2.7
			 */
			CONST TRANSITION_COMMENT_STATUS				= 'transition_comment_status';
			
			/**
			 * @since 2.3
			 */
			CONST TRANSITION_POST_STATUS				= 'transition_post_status';
		#::
		#:Trash:
			/**
			 * @since 2.9
			 */
			CONST TRASH_COMMENT					= 'trash_comment';
			
			/**
			 * @since 2.9
			 */
			CONST TRASH_POST_COMMENTS				= 'trash_post_comments';
		#::
		#:Trashed:
			/**
			 * @since 2.9
			 */
			CONST TRASHED_COMMENT					= 'trashed_comment';
			
			/**
			 * @since 2.9
			 */
			CONST TRASHED_POST					= 'trashed_post';
			
			/**
			 * @since 2.9
			 */
			CONST TRASHED_POST_COMMENTS				= 'trashed_post_comments';
		#::
		#:Twenty:
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_CREDITS				= 'twentyeleven_credits';
			
			/**
			 * @since 3.2
			 */
			CONST TWENTYELEVEN_ENQUEUE_COLOR_SCHEME			= 'twentyeleven_enqueue_color_scheme';
			
			/**
			 * @since 3.5
			 */
			CONST TWENTYTWELVE_CREDITS				= 'twentytwelve_credits';
		#::
		#:UN\:
			/**
			 * @since 3.0
			 */
			CONST UNARCHIVE_BLOG					= 'unarchive_blog';
			
			/**
			 * @since 2.7
			 */
			CONST UNINSTALL_FILE__					= 'uninstall_{:file}';
			
			/**
			 * @since 3.0
			 */
			CONST UNLOAD_TEXTDOMAIN					= 'unload_textdomain';
			
			/**
			 * @since 3.1
			 */
			CONST UNMATURE_BLOG					= 'unmature_blog';
			
			/**
			 * @since 2.9
			 */
			CONST UNSPAMMED_COMMENT					= 'unspammed_comment';
			
			/**
			 * @since 2.9
			 */
			CONST UNSPAM_COMMENT					= 'unspam_comment';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASHED_COMMENT					= 'untrashed_comment';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASHED_POST					= 'untrashed_post';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASHED_POST_COMMENTS				= 'untrashed_post_comments';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASH_COMMENT					= 'untrash_comment';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASH_POST					= 'untrash_post';
			
			/**
			 * @since 2.9
			 */
			CONST UNTRASH_POST_COMMENTS				= 'untrash_post_comments';
		#::
		#:Update:
			/**
			 * @since 3.0
			 */
			CONST UPDATE_BLOG_PUBLIC				= 'update_blog_public';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATE_OPTION					= 'update_option';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_OPTION_OPTION__				= 'update_option_{:option}';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATE_POSTMETA					= 'update_postmeta';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_SITE_OPTION				= 'update_site_option';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_SITE_OPTION_OPTION__			= 'update_site_option_{:option}';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATE_USERMETA					= 'update_usermeta';
			
			/**
			 * @since 3.0
			 */
			CONST UPDATE_WPMU_OPTIONS				= 'update_wpmu_options';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATE_META_TYPE_META__				= 'update_{:metaType}_meta';
			
			/**
			 * @since 3.2
			 */
			CONST UPDATE_CORE_CUSTOM_ACTION__			= 'update-core-custom_{:action}';
			
			/**
			 * @since 2.8
			 */
			CONST UPDATE_CUSTOM_ACTION__				= 'update-custom_{:action}';
		#::
		#:Updated:
			/**
			 * @since 2.9
			 */
			CONST UPDATED_OPTION					= 'updated_option';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATED_POSTMETA					= 'updated_postmeta';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATED_USERMETA					= 'updated_usermeta';
			
			/**
			 * @since 2.9
			 */
			CONST UPDATED_META_TYPE_META__				= 'updated_{:meta_type}_meta';
		#::
		#:Upload:
			/**
			 * @since 3.5
			 */
			CONST UPLOAD_UI_OVER_QUOTA				= 'upload_ui_over_quota';
		#::
		#:User:
			/**
			 * @since 3.1
			 */
			CONST USER_ADMIN_MENU					= 'user_admin_menu';
			
			/**
			 * @since 3.1
			 */
			CONST USER_ADMIN_NOTICES				= 'user_admin_notices';
			
			/**
			 * @since 3.0
			 */
			CONST USER_EDIT_FORM_TAG				= 'user_edit_form_tag';
			
			/**
			 * @since 3.0
			 */
			CONST USER_NEW_FORM_TAG					= 'user_new_form_tag';
			
			/**
			 * @since 2.8
			 */
			CONST USER_PROFILE_UPDATE_ERRORS			= 'user_profile_update_errors';
			
			/**
			 * @since 1.5.2
			 */
			CONST USER_REGISTER					= 'user_register';
		#::
		#:Validate:
			/**
			 * @since 3.5
			 */
			CONST VALIDATE_PASSWORD_RESET				= 'validate_password_reset';
		#::
		#:Welcome:
			/**
			 * @since 3.5
			 */
			CONST WELCOME_PANEL					= 'welcome_panel';
		#::
		#:Widgets:
			/**
			 * @since 2.8
			 */
			CONST WIDGETS_PHP					= 'widgets-php';
			
			/**
			 * @since 3.0
			 */
			CONST WIDGETS_ADMIN_PAGE				= 'widgets_admin_page';
			
			/**
			 * @since 2.2
			 */
			CONST WIDGETS_INIT					= 'widgets_init';
		#::
		#:WP:
			/**
			 * @since 2.1
			 */
			CONST WP						= 'wp';
			
			/**
			 * @since 2.9
			 */
			CONST WP_MAIL_PHP					= 'wp-mail-php';
			
			/**
			 * @since 3.0
			 */
			CONST WPMUADMINEDIT					= 'wpmuadminedit';
			
			/**
			 * @since 3.0
			 */
			CONST WPMUADMINRESULT					= 'wpmuadminresult';
			
			/**
			 * @since 3.0
			 */
			CONST WPMUBLOGSACTION					= 'wpmublogsaction';
			
			/**
			 * @since 3.0
			 */
			CONST WPMUEDITBLOGACTION				= 'wpmueditblogaction';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_ACTIVATE_BLOG				= 'wpmu_activate_blog';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_ACTIVATE_USER				= 'wpmu_activate_user';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_BLOG_UPDATED					= 'wpmu_blog_updated';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_DELETE_USER					= 'wpmu_delete_user';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_NEW_BLOG					= 'wpmu_new_blog';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_NEW_USER					= 'wpmu_new_user';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_OPTIONS					= 'wpmu_options';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_UPDATE_BLOG_OPTIONS				= 'wpmu_update_blog_options';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_UPGRADE_PAGE					= 'wpmu_upgrade_page';
			
			/**
			 * @since 3.0
			 */
			CONST WPMU_UPGRADE_SITE					= 'wpmu_upgrade_site';
			
			/**
			 * @since 3.1
			 */
			CONST WP_AFTER_ADMIN_BAR_RENDER				= 'wp_after_admin_bar_render';
			
			/**
			 * @since 2.8
			 */
			CONST WP_AJAX_NOPRIV_ACTION__				= 'wp_ajax_nopriv_{:action}';
			
			/**
			 * @since 2.1
			 */
			CONST WP_AJAX_ACTION__					= 'wp_ajax_{:action}';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_AUTHENTICATE					= 'wp_authenticate';
			
			/**
			 * @since 3.1
			 */
			CONST WP_BEFORE_ADMIN_BAR_RENDER			= 'wp_before_admin_bar_render';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_BLACKLIST_CHECK				= 'wp_blacklist_check';
			
			/**
			 * @since 3.0
			 */
			CONST WP_CREATE_NAV_MENU				= 'wp_create_nav_menu';
			
			/**
			 * @since 2.5
			 */
			CONST WP_DASHBOARD_SETUP				= 'wp_dashboard_setup';
			
			/**
			 * @since 2.6
			 */
			CONST WP_DEFAULT_SCRIPTS				= 'wp_default_scripts';
			
			/**
			 * @since 2.6
			 */
			CONST WP_DEFAULT_STYLES					= 'wp_default_styles';
			
			/**
			 * @since 3.0
			 */
			CONST WP_DELETE_NAV_MENU				= 'wp_delete_nav_menu';
			
			/**
			 * @since 2.6
			 */
			CONST WP_DELETE_POST_REVISION				= 'wp_delete_post_revision';
			
			/**
			 * @since 3.5
			 */
			CONST WP_ENQUEUE_MEDIA					= 'wp_enqueue_media';
			
			/**
			 * @since 2.8
			 */
			CONST WP_ENQUEUE_SCRIPTS				= 'wp_enqueue_scripts';
			
			/**
			 * @since 3.0
			 */
			CONST WP_FEED_OPTIONS					= 'wp_feed_options';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_FOOTER						= 'wp_footer';
			
			/**
			 * @since 1.2.1
			 */
			CONST WP_HEAD						= 'wp_head';
			
			/**
			 * @since 2.8
			 */
			CONST WP_INSERT_COMMENT					= 'wp_insert_comment';
			
			/**
			 * @since 2.0
			 */
			CONST WP_INSERT_POST					= 'wp_insert_post';
			
			/**
			 * @since 3.0
			 */
			CONST WP_LOADED						= 'wp_loaded';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_LOGIN						= 'wp_login';
			
			/**
			 * @since 2.5
			 */
			CONST WP_LOGIN_FAILED					= 'wp_login_failed';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_LOGOUT						= 'wp_logout';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_META						= 'wp_meta';
			
			/**
			 * @since 3.1
			 */
			CONST WP_NETWORK_DASHBOARD_SETUP			= 'wp_network_dashboard_setup';
			
			/**
			 * @since 2.8
			 */
			CONST WP_PRINT_FOOTER_SCRIPTS				= 'wp_print_footer_scripts';
			
			/**
			 * @since 2.1
			 */
			CONST WP_PRINT_SCRIPTS					= 'wp_print_scripts';
			
			/**
			 * @since 2.6
			 */
			CONST WP_PRINT_STYLES					= 'wp_print_styles';
			
			/**
			 * @since 3.0
			 */
			CONST WP_REGISTER_SIDEBAR_WIDGET			= 'wp_register_sidebar_widget';
			
			/**
			 * @since 2.6
			 */
			CONST WP_RESTORE_POST_REVISION				= 'wp_restore_post_revision';
			
			/**
			 * @since 1.5.2
			 */
			CONST WP_SET_COMMENT_STATUS				= 'wp_set_comment_status';
			
			/**
			 * @since 3.3
			 */
			CONST WP_TRASH_POST					= 'wp_trash_post';
			
			/**
			 * @since 3.0
			 */
			CONST WP_UNREGISTER_SIDEBAR_WIDGET			= 'wp_unregister_sidebar_widget';
			
			/**
			 * @since 2.3
			 */
			CONST WP_UPDATE_COMMENT_COUNT				= 'wp_update_comment_count';
			
			/**
			 * @since 3.0
			 */
			CONST WP_UPDATE_NAV_MENU				= 'wp_update_nav_menu';
			
			/**
			 * @since 3.0
			 */
			CONST WP_UPDATE_NAV_MENU_ITEM				= 'wp_update_nav_menu_item';
			
			/**
			 * @since 3.1
			 */
			CONST WP_USER_DASHBOARD_SETUP				= 'wp_user_dashboard_setup';
		#::
		#:XMLRPC:
			/**
			 * @since 2.5
			 */
			CONST XMLRPC_CALL					= 'xmlrpc_call';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_BLOGGER_DELETEPOST		= 'xmlrpc_call_success_blogger_deletepost';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_BLOGGER_EDITPOST		= 'xmlrpc_call_success_blogger_editpost';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_BLOGGER_NEWPOST		= 'xmlrpc_call_success_blogger_newpost';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_MW_EDITPOST			= 'xmlrpc_call_success_mw_editpost';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_MW_NEWMEDIAOBJECT		= 'xmlrpc_call_success_mw_newmediaobject';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_MW_NEWPOST			= 'xmlrpc_call_success_mw_newpost';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_DELETECATEGORY		= 'xmlrpc_call_success_wp_deletecategory';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_DELETECOMMENT		= 'xmlrpc_call_success_wp_deletecomment';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_DELETEPAGE			= 'xmlrpc_call_success_wp_deletepage';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_EDITCOMMENT		= 'xmlrpc_call_success_wp_editcomment';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_NEWCATEGORY		= 'xmlrpc_call_success_wp_newcategory';
			
			/**
			 * @since 3.4
			 */
			CONST XMLRPC_CALL_SUCCESS_WP_NEWCOMMENT			= 'xmlrpc_call_success_wp_newcomment';
			
			/**
			 * @since 2.1
			 */
			CONST XMLRPC_PUBLISH_POST				= 'xmlrpc_publish_post';
			
			/**
			 * @since 3.5
			 */
			CONST XMLRPC_RSD_APIS					= 'xmlrpc_rsd_apis';
		#::
		#:_:
			/**
			 * @since 2.2
			 */
			CONST _ADMIN_MENU					= '_admin_menu';
			
			/**
			 * @since 3.3
			 */
			CONST _CORE_UPDATED_SUCCESSFULLY			= '_core_updated_successfully';
			
			/**
			 * @since 3.1
			 */
			CONST _NETWORK_ADMIN_MENU				= '_network_admin_menu';
			
			/**
			 * @since 3.1
			 */
			CONST _USER_ADMIN_MENU					= '_user_admin_menu';
			
			/**
			 * @since 2.6
			 */
			CONST _WP_PUT_POST_REVISION				= '_wp_put_post_revision';
		#::
		#:RUNTIME:
			/**
			 * @since 2.6
			 */
			CONST ACTION__						= '{:action}';
			
			/**
			 * @since 2.1
			 */
			CONST HOOK__						= '{:hook}';
			
			/**
			 * @since 2.3
			 */
			CONST NEW_STATUS_POST_TYPE__				= '{:newStatus}_{:postType}';
			
			/**
			 * @since 2.3
			 */
			CONST OLD_STATUS_TO_NEW_STATUS__			= '{:oldStatus}_to_{:newStatus}';
			
			/**
			 * @since 1.5.2
			 */
			CONST PAGE_HOOK__					= '{:pageHook}';
			
			/**
			 * @since 1.2.1
			 */
			CONST TAG__						= '{:tag}';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_ADD_FORM__				= '{:taxonomy}_add_form';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_ADD_FORM_FIELDS__			= '{:taxonomy}_add_form_fields';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_EDIT_FORM__				= '{:taxonomy}_edit_form';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_EDIT_FORM_FIELDS__			= '{:taxonomy}_edit_form_fields';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_PRE_ADD_FORM__				= '{:taxonomy}_pre_add_form';
			
			/**
			 * @since 3.0
			 */
			CONST TAXONOMY_PRE_EDIT_FORM__				= '{:taxonomy}_pre_edit_form';
		#::
	}