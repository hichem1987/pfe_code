<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Responsive{
    public function toOptionArray(){
        return array(
            array('value'=>'width', 'label'=>Mage::helper('onewidget')->__('By Width')),
            array('value'=>'breakpoint', 'label'=>Mage::helper('onewidget')->__('By Breakpoints'))
        );
    }
}