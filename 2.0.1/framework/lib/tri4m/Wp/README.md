tri4m\Wp
=====
```PHP
<?PHP
	NAMESPACE tri4m\Wp
	{
		USE tri4m\Wp\__type_Theme;
		USE tri4m\Wp\Theme;
		USE tri4m\Wp\Error;
	
		try
		{
			require_once $_SERVER['DOCUMENT_ROOT'].'/dev/tri4m/bootload.php';
			
			$theme = new Theme(new __type_Theme(
			[
				__type_Theme::themeUri	=> get_template_directory_uri(),
				__type_Theme::themePath	=> dirname(__DIR__),
				__type_Theme::wpIncUri	=> includes_url(),
				__type_Theme::wpIncPath	=> ABSPATH . WPINC,
				__type_Theme::versionId	=> 1,
				__type_Theme::version	=> '0.0.1',
				__type_Theme::slug	=> 'tri4m',
				__type_Theme::name	=> 'tri4mTiger',
				__type_Theme::fullName	=> 'tri4m tijger',
				__type_Theme::debug	=> TRUE
			]));
		}
		catch(\Exception $E)
		{
			Error::add($E->toTrack()->asText());
		}
	}
```