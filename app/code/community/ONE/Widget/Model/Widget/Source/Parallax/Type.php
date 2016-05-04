<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Parallax_Type{
    public function toOptionArray(){
        $types[] = array('value' => 'image', 'label' => Mage::helper('onewidget')->__('Image'));
        $types[] = array('value' => 'video', 'label' => Mage::helper('onewidget')->__('Video Service'));
        $types[] = array('value' => 'file', 'label' => Mage::helper('onewidget')->__('Video File'));

        return $types;
    }
}
