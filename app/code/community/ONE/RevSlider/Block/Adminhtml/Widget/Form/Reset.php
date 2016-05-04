<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Block_Adminhtml_Widget_Form_Reset
    extends Mage_Adminhtml_Block_Widget
    implements Varien_Data_Form_Element_Renderer_Interface{

    public function __construct(){
        parent::__construct();
        $this->setTemplate('one/revslider/widget/form/reset.phtml');
    }

    public function render(Varien_Data_Form_Element_Abstract $element){
        return $this->toHtml();
    }

    protected function _prepareLayout(){
        $this->setChild('resetBtn', $this->getLayout()->createBlock('adminhtml/widget_button', '', array(
            'id'        => 'resetScaleBtn',
            'label'     => Mage::helper('revslider')->__('Reset'),
            'type'      => 'button',
            'onclick'   => 'revLayer.resetScale()'
        )));

        return parent::_prepareLayout();
    }
}
