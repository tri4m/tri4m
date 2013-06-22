<?PHP
	NAMESPACE tri4m\Wp;
	
	CLASS __const_Global EXTENDS \ILLI\Core\Std\ConstantCollection
	{
		#:Admin:
			CONST	ADMIN_PAGE_NOW		= 'pagenow';
			CONST	ADMIN_POST_TYPE		= 'post_type';
			CONST	ADMIN_ALLOWED_POST_TAGS	= 'allowedposttags';
			CONST	ADMIN_ALLOWED_TAGS	= 'allowedtags';
		#::
		
		#:Browser:
			CONST	BROWSER_IS_CHROME	= 'is_chrome';
			CONST	BROWSER_IS_GECKO	= 'is_gecko';
			CONST	BROWSER_IS_IE		= 'is_IE';
			CONST	BROWSER_IS_IPHONE	= 'is_iphone';
			CONST	BROWSER_IS_LYNX		= 'is_lynx';
			CONST	BROWSER_IS_MAC_IE	= 'is_macIE';
			CONST	BROWSER_IS_NS4		= 'is_NS4';
			CONST	BROWSER_IS_OPERA	= 'is_opera';
			CONST	BROWSER_IS_SAFARI	= 'is_safari';
			CONST	BROWSER_IS_WIN_IE	= 'is_winIE';
		#::
		
		#:Loop:
			CONST	LOOP_AUTHOR_DATA	= 'authordata';
			CONST	LOOP_CURRENT_DAY	= 'currentday';
			CONST	LOOP_CURRENT_MONTH	= 'currentmonth';
			CONST	LOOP_MULTI_PAGE		= 'multipage';
			CONST	LOOP_NUM_PAGES		= 'numpages';
			CONST	LOOP_PAGE		= 'page';
			CONST	LOOP_PAGES		= 'pages';
			CONST	LOOP_POST		= 'post';
			CONST	LOOP_MORE		= 'more';
		#::
		
		#:Misc:
			CONST	WP			= 'wp';
			CONST	WP_LOCALE		= 'wp_locale';
			CONST	WP_QUERY		= 'wp_query';
			CONST	WP_REWRITE		= 'wp_rewrite';
			CONST	WPDB			= 'wpdb';
		#::
		
		#:Server:
			CONST	SERVER_IS_APACHE	= 'is_apache';
			CONST	SERVER_IS_IIS		= 'is_IIS';
			CONST	SERVER_IS_IIS7		= 'is_IIS7';
		#::
		
		#:Version:
			CONST	VERSION_MANIFEST	= 'manifest_version';
			CONST	VERSION_REQ_PHP		= 'required_php_version';
			CONST	VERSION_REQ_MYSQL	= 'required_mysql_version';
			CONST	VERSION_TINY_MCE	= 'tinymce_version';
			CONST	VERSION_WP		= 'wp_version';
			CONST	VERSION_WP_DB		= 'wp_db_version';
		#::
	}