<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_CollectionController extends Mage_Core_Controller_Front_Action{
    public function getAction(){
        //if (!$this->_validateFormKey()) return null;
        if (!$this->getRequest()->isPost()) return null;

        $type   = $this->getRequest()->getPost('type');
        $value  = $this->getRequest()->getPost('value');

        if (!$type && !$value) return null;

        $limit      = $this->getRequest()->getPost('limit', 10);
        $carousel   = $this->getRequest()->getPost('carousel', 0);
        $column     = $this->getRequest()->getPost('column', 4);
        $row        = $this->getRequest()->getPost('row', 1);
        $cid        = $this->getRequest()->getPost('cid');
        $template   = $this->getRequest()->getPost('template', 'one/widget/collection.phtml');

        /* @var $helper ONE_Widget_Helper_Data */
        $helper = Mage::helper('onewidget');
        /* @var $block ONE_Widget_Block_Widget_Collection */
        $block = $this->getLayout()->createBlock('onewidget/widget_collection');
        $params = array();

        if ($cid){
            $params['category_ids'] = explode(',', $cid);
        }

        $block->setTemplate($template);
        $block->setData(array(
            'row'           => $row,
            'column'        => $column,
            'carousel'      => $carousel,
            'collection'    => $helper->getProductCollection($type, $value, $params, $limit)
        ));

        return $this->getResponse()->setBody($block->toHtml());
    }
}
