<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Direction{
    public function toOptionArray(){
        return array(
            array('value'=>'horizontal', 'label'=>Mage::helper('onewidget')->__('Horizontal')),
            array('value'=>'vertical', 'label'=>Mage::helper('onewidget')->__('Vertical'))
        );
    }
}