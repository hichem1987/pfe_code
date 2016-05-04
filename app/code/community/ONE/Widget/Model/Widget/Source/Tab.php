<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Tab{
    public function toOptionArray(){
        return array(
            array('value' => 'none', 'label' => Mage::helper('onewidget')->__('None')),
            array('value' => 'categories', 'label' => Mage::helper('onewidget')->__('Categories')),
            array('value' => 'collections', 'label' => Mage::helper('onewidget')->__('Collections'))
        );
    }
}
