<?php
/**
 * @category    ONE
 * @package     ONE_Attribute
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */
class ONE_Attribute_Model_Observer {
    public function updateLayout(){
        Mage::helper('oneext')->loadJsLibs('browser');
    }
}