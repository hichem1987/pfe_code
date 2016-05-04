<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Block_Adminhtml_Widget_Renderer_Category
    extends Mage_Adminhtml_Block_Template
    implements Varien_Data_Form_Element_Renderer_Interface {

    protected $_element;

    public function __construct(){
        parent::__construct();
        $this->setTemplate('one/widget/category.phtml');
        $this->id = Mage::helper('core')->uniqHash('tree');
    }

    public function render(Varien_Data_Form_Element_Abstract $element){
        $this->setElement($element);
        return $this->toHtml();
    }

    public function setElement($element){
        $this->_element = $element;
    }

    public function getElement(){
        return $this->_element;
    }

    public function getCategoriesChooserUrl(){
        return $this->getUrl('onewidget/adminhtml_widget_instance/categories', array('_current' => true));
    }

    public function getSelectedCategories(){
        return (array)$this->_selectedCategories;
    }
}