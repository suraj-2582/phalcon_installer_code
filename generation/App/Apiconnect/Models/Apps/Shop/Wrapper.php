<?php

namespace App\Apiconnect\Models\Apps\Shop;

class Wrapper extends \App\Apiconnect\Models\Apps\Shop
{

	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function addApp(?array $shopData = null, \App\Apiconnect\Models\Apps $appModel = NULL) : string | bool 
	{
		
		$appModel = $appModel ?? $this->getDi()->getObjectManager()->get(\App\Apiconnect\Models\Apps::class);
		return parent::addApp($shopData, $appModel);
		
	}
	public function addShop(?array $shopDetail = null, array $uniqueKeys = array (
), bool $partialUpdate = false, \App\Apiconnect\Models\Apps\CedcommerceAppShops $cedAppShops = NULL, \App\Apiconnect\Models\Apps\Shop $shop = NULL) : array 
	{
		
		$cedAppShops = $cedAppShops ?? $this->getDi()->getObjectManager()->get(\App\Apiconnect\Models\Apps\CedcommerceAppShops::class);
		$shop = $shop ?? $this->getDi()->getObjectManager()->create(\App\Apiconnect\Models\Apps\Shop::class);
		return parent::addShop($shopDetail, $uniqueKeys, $partialUpdate, $cedAppShops, $shop);
		
	}
	public function encryptWithAES(?string $data = null, \App\Core\Components\KeyManager $km = NULL) : string 
	{
		
		$km = $km ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\KeyManager::class);
		return parent::encryptWithAES($data, $km);
		
	}
	public function decryptWithAES( $data = null, \App\Core\Components\KeyManager $km = NULL)  
	{
		
		$km = $km ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\KeyManager::class);
		parent::decryptWithAES($data, $km);
		
	}
}