<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */
class ONE_Widget_Block_Adminhtml_Widget_Renderer_Attribute_Option extends Mage_Adminhtml_Block_Template{
    public function prepareElementHtml(Varien_Data_Form_Element_Abstract $element){
        $targetId = $this->getFieldsetId().'_'.$this->getConfig('target');
        $block = $this->getLayout()->createBlock('onewidget/adminhtml_widget_renderer_depend', '', array(
            'target' => $targetId,
            'url' => $this->getUrl('onewidget/adminhtml_widget_attribute/option'),
            'me' => $element->getHtmlId(),
            'value' => implode(',', (array)$element->getValue())
        ));
        $element->setData('after_element_html', $block->toHtml());
        return $element;
    }
}