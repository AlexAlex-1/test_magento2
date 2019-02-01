<?php
 
namespace vendor\plugCopyright\Plugin;
 
class Product
{
    public function afterGetCopyright()
    {
	return 'Customized copyright!';
    }
}
