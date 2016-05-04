<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Parallax_Image_Size{
    public function toOptionArray(){
        $types[] = array('value' => 'cover',    'label' => Mage::helper('onewidget')->__('cover'));
        $types[] = array('value' => 'contain',   'label' => Mage::helper('onewidget')->__('contain'));

        return $types;
    }
}