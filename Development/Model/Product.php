<?php

namespace Bluethink\Development\Model;

class Product extends \Magento\Catalog\Model\Product
{
public function getName()
{
     $changeNamebyPreference = $this->_getData('name') . ' modified by Preference';
     return $changeNamebyPreference;
}
}