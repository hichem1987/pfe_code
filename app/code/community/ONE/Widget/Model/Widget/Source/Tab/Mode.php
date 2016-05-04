<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Tab_Mode{
    public function toOptionArray(){
        return array(
            array('value' => 'latest', 'label' => Mage::helper('onewidget')->__('Latest Products')),
            array('value' => 'new', 'label' => Mage::helper('onewidget')->__('New Products')),
            array('value' => 'bestsell', 'label' => Mage::helper('onewidget')->__('Best Sell Products')),
            array('value' => 'mostviewed', 'label' => Mage::helper('onewidget')->__('Most Viewed Products')),
            //array('value' => 'specificed', 'label' => Mage::helper('onewidget')->__('Specified Products')),
            array('value' => 'random', 'label' => Mage::helper('onewidget')->__('Random Products')),
            //array('value' => 'related', 'label' => Mage::helper('onewidget')->__('Related Products')),
            //array('value' => 'up', 'label' => Mage::helper('onewidget')->__('Up-sell Products')),
            //array('value' => 'cross', 'label' => Mage::helper('onewidget')->__('Cross-sell Products')),
            array('value' => 'discount', 'label' => Mage::helper('onewidget')->__('Discount Products')),
            array('value' => 'rating', 'label' => Mage::helper('onewidget')->__('Top Rated Products'))
        );
    }
}
