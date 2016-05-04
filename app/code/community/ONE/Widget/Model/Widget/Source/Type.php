<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Type{
    public function toOptionArray(){
        $types = array(
            array('value' => 'product', 'label' => Mage::helper('onewidget')->__('Product')),
            array('value' => 'block', 'label' => Mage::helper('onewidget')->__('Block')),
            array('value' => 'attribute', 'label' => Mage::helper('onewidget')->__('Attribute')),
            array('value' => 'category', 'label' => Mage::helper('onewidget')->__('Category'))
        );

        return $types;
    }
}
