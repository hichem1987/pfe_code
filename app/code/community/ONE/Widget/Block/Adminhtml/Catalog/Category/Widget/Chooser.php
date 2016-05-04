<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Block_Adminhtml_Catalog_Category_Widget_Chooser extends Mage_Adminhtml_Block_Catalog_Category_Widget_Chooser{
    public function __construct(){
        parent::__construct();
        $this->setTemplate('one/widget/catalog/category/widget/tree.phtml');
        $this->_withProductCount = false;
    }

    public function getLoadTreeUrl($expanded=null){
        return $this->getUrl('adminhtml/catalog_category_widget/categoriesJson', array(
            '_current'=>true,
            'uniq_id' => $this->getId(),
            'use_massaction' => $this->getUseMassaction()
        ));
    }
}