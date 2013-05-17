<?PHP
	NAMESPACE tri4m\Wp\Wtf\PostType;
	USE ILLI\Core\Std\Def\__const_Type;
	
	CLASS __type_UpdateMsg EXTENDS \ILLI\Core\Std\Def\ADVTuple
	{
		CONST updatedPreview		= 0x00;
		CONST customFieldUpdated	= 0x01;
		CONST customFieldDeleted	= 0x02;
		CONST updated			= 0x03;
		CONST restored			= 0x04;
		CONST published			= 0x05;
		CONST saved			= 0x06;
		CONST submitted			= 0x07;
		CONST sheduled			= 0x08;
		CONST draftUpdated		= 0x09;
		
		public function __construct(array $__setup = [])
		{
			parent::__construct
			(
				[
					self::updatedPreview		=> [__const_Type::SPL_STRING],
					self::customFieldUpdated	=> [__const_Type::SPL_STRING],
					self::customFieldDeleted	=> [__const_Type::SPL_STRING],
					self::updated			=> [__const_Type::SPL_STRING],
					self::restored			=> [__const_Type::SPL_STRING],
					self::published			=> [__const_Type::SPL_STRING],
					self::saved			=> [__const_Type::SPL_STRING],
					self::submitted			=> [__const_Type::SPL_STRING],
					self::sheduled			=> [__const_Type::SPL_STRING],
					self::draftUpdated		=> [__const_Type::SPL_STRING],
				],
				parent::mergeOffsetValues($__setup, [
					self::updatedPreview		=> '{:singular} updated. <a href="{:permalink}">View {:singular}</a>',
					self::customFieldUpdated	=> 'Custom field updated.',
					self::customFieldDeleted	=> 'Custom field deleted.',
					self::updated			=> '{:singular} updated.',
					self::restored			=> '{:singular} restored to revision from {:revision}.',
					self::published			=> '{:singular} published. <a href="{:permalink}">View {:singular}</a>',
					self::saved			=> '{:singular} saved.',
					self::submitted			=> '{:singular} submitted. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
					self::sheduled			=> '{:singular} sheduled for: <strong>{:date}</strong>. <a href="{:permalink}" target="_blank">Preview {:singular}</a>',
					self::draftUpdated		=> '{:singular} draft updated. <a href="{:preview}" target="_blank">Preview {:singular}</a>',
				])
			);
		}
	}