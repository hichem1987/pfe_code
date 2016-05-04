<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Animate_Type{
    public function toOptionArray(){
        return array(
            array('value' => 'effect-zoomOut', 'label' => Mage::helper('onewidget')->__('Zoom Out')),
            array('value' => 'effect-zoomIn', 'label' => Mage::helper('onewidget')->__('Zoom In')),
            //array('value' => 'effect-slideBottom', 'label' => Mage::helper('onewidget')->__('Slide Bottom')),
            array('value' => 'effect-bounceIn', 'label' => Mage::helper('onewidget')->__('Bounce In')),
            array('value' => 'effect-bounceInRight', 'label' => Mage::helper('onewidget')->__('Bounce In Right')),
            //array('value' => 'effect-bounceInUp', 'label' => Mage::helper('onewidget')->__('Bounce In Up')),
            //array('value' => 'effect-bounceInDown', 'label' => Mage::helper('onewidget')->__('Bounce In Down')),
            array('value' => 'effect-pageTop', 'label' => Mage::helper('onewidget')->__('Page Top')),
            //array('value' => 'effect-pageTopBack', 'label' => Mage::helper('onewidget')->__('Page Top Back')),
            array('value' => 'effect-pageBottom', 'label' => Mage::helper('onewidget')->__('Page Bottom')),
            array('value' => 'effect-starwars', 'label' => Mage::helper('onewidget')->__('Star Wars')),
            array('value' => 'effect-pageLeft', 'label' => Mage::helper('onewidget')->__('Page Left')),
            array('value' => 'effect-pageRight', 'label' => Mage::helper('onewidget')->__('Page Right'))
        );
    }
}
