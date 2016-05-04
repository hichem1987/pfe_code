<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Parallax_Overlay{
    public function toOptionArray(){
        $types[] = array('value' => 'none', 'label' => Mage::helper('onewidget')->__('None'));
        $types[] = array('value' => Mage::getBaseUrl('js').'bakery/images/gridtile.png', 'label' => Mage::helper('onewidget')->__('2 x 2 Black'));
        $types[] = array('value' => Mage::getBaseUrl('js').'bakery/images/gridtile_white.png', 'label' => Mage::helper('onewidget')->__('2 x 2 White'));
        $types[] = array('value' => Mage::getBaseUrl('js').'bakery/images/gridtile_3x3.png', 'label' => Mage::helper('onewidget')->__('3 x 3 Black'));
        $types[] = array('value' => Mage::getBaseUrl('js').'bakery/images/gridtile_3x3_white.png', 'label' => Mage::helper('onewidget')->__('3 x 3 White'));

        return $types;
    }
}
