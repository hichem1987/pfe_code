<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Block_Adminhtml_Slider_Import_Form extends Mage_Adminhtml_Block_Widget_Form{
    protected function _prepareForm(){
        $form = new Varien_Data_Form(array(
            'id' => 'edit_form',
            'action' => $this->getUrl('*/*/importPost'),
            'method' => 'post',
            'enctype' => 'multipart/form-data'
        ));

        $fieldset = $form->addFieldset('info_fieldset', array('legend' => Mage::helper('revslider')->__('Import Settings')));
        $fieldset->addField('file', 'file', array(
            'name'  => 'file',
            'label' => Mage::helper('revslider')->__('Zip File'),
            'note'  => Mage::helper('revslider')->__('Support zip file exported from Wordpress Revolution Slider & Magento ONE Revolution Slider')
        ));

        $form->setUseContainer(true);
        $this->setForm($form);
        return parent::_prepareForm();
    }
}
