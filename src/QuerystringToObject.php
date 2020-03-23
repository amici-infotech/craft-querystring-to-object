<?php
namespace amici\QuerystringToObject;

use Craft;
use craft\base\Plugin;
use amici\QuerystringToObject\twigextensions\QuerystringToObjectTwigExtension;

class QuerystringToObject extends Plugin
{

	public static $app;
	public static $plugin;
	public $hasCpSection 		= false;
	public $hasCpSettings 		= false;
    public static $pluginHandle = 'querystring-to-object';
	public $schemaVersion 		= '1.0.0';
	public $minVersionRequired 	= '3.0.0';

	public function init()
	{
	    parent::init();
	    self::$plugin = $this;

	    Craft::$app->view->registerTwigExtension(new QuerystringToObjectTwigExtension());
	}

	protected function afterInstall()
	{

	}

	/*public function getCpNavItem()
	{
		$parent = parent::getCpNavItem();
		return $parent;
	}*/

	public function beforeUninstall(): bool
	{
		return true;
	}

}
?>