<?php

namespace App\Apiconnect\Components\Firewall;

class Wrapper extends \App\Apiconnect\Components\Firewall
{
	public \Phalcon\Di\DiInterface $di;
	public function __construct(\App\Apiconnect\Models\Apps $appsModel, \App\Core\Components\Helper $helper, \App\Apiconnect\Models\Apps\Shop $appsShopModel)  
	{
		parent::__construct($appsModel, $helper, $appsShopModel);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		$this->di = $di;
	}
}