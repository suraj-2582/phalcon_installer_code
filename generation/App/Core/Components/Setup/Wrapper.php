<?php

namespace App\Core\Components\Setup;

class Wrapper extends \App\Core\Components\Setup
{

	public function __construct(\App\Core\Models\BaseMongo $baseMongo)  
	{
		parent::__construct($baseMongo);
	}
	public function setDi(\Phalcon\Di\DiInterface $di)  : void 
	{
		parent::setDi($di);
	}
	public function upgradeAction(bool $verbose = false, \App\Core\Components\Routing\RouteParser $rp = NULL) : array 
	{
		
		$rp = $rp ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Routing\RouteParser::class);
		return parent::upgradeAction($verbose, $rp);
		
	}
	public function buildAclAction(bool $buildChildAcl = true, \App\Core\Models\Acl\Role $roleModel = NULL, \App\Core\Models\Resource $resourceModel = NULL) : void 
	{
		
		$roleModel = $roleModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Acl\Role::class);
		$resourceModel = $resourceModel ?? $this->getDi()->getObjectManager()->get(\App\Core\Models\Resource::class);
		parent::buildAclAction($buildChildAcl, $roleModel, $resourceModel);
		
	}
	public function addRoutes( &$db = null, ?string &$hash = null, ?array &$resourcesToBeInserted = null, ?array &$resourcesToBeDeleted = null, \App\Core\Components\Routing\RouteParser $rp = NULL) : array 
	{
		
		$rp = $rp ?? $this->getDi()->getObjectManager()->get(\App\Core\Components\Routing\RouteParser::class);
		return parent::addRoutes($db, $hash, $resourcesToBeInserted, $resourcesToBeDeleted, $rp);
		
	}
}