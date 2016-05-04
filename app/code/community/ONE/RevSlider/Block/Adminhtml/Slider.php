<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Block_Adminhtml_Slider extends Mage_Adminhtml_Block_Widget_Grid_Container{
    public function __construct(){
        $this->_headerText = Mage::helper('revslider')->__('ONE Revolution Slider');
        $this->_blockGroup = 'revslider';
        $this->_controller = 'adminhtml_slider';
        parent::__construct();
        if ($this->_isAllowedAction('add')){
            $this->_updateButton('add', 'label', Mage::helper('revslider')->__('Add New Slider'));
        }else{
            $this->_removeButton('add');
        }
    }

    protected function _isAllowedAction($action){
        //return Mage::getSingleton('admin/session')->isAllowed('revslider/slider/' . $action);
        return true;
    }
}
