<?php
 
namespace vendor\plugCrumb\Plugin;
 
class Product
{
	public function beforeAddCrumb(\Magento\Theme\Block\Html\Breadcrumbs $subject, $crumbName, $crumbInfo){
		$crumbInfo['label'] = ('!'.$crumbInfo['label']);
		return [$crumbName, $crumbInfo];
	}
}
