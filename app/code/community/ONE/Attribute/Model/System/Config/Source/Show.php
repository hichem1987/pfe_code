<?php
/**
 * @category    ONE
 * @package     ONE_Attribute
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */
class ONE_Attribute_Model_System_Config_Source_Show{
    public function toOptionArray(){
        return array(
            array('value' => 0, 'label' => Mage::helper('oneattribute')->__('Not show')),
            array('value' => 2, 'label' => Mage::helper('oneattribute')->__('Replace')),
            array('value' => 3, 'label' => Mage::helper('oneattribute')->__('Show all'))
        );
    }
}