<?php
/**
 * @category    ONE
 * @package     ONE_Filter
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Filter_Model_Layer_Filter_Discount extends Mage_Catalog_Model_Layer_Filter_Abstract{
    protected $_resource;

    public function _construct(){
        parent::_construct();
        $this->_requestVar = 'discount';
    }

    public function getName(){
        return Mage::helper('onefilter')->__('Promotion');
    }

    /**
     * @return ONE_Filter_Model_Resource_Catalog_Layer_Filter_Discount
     */
    protected function _getResource(){
        if (is_null($this->_resource)){
            $this->_resource = Mage::getResourceModel('onefilter/layer_filter_discount');
        }
        return $this->_resource;
    }

    public function apply(Zend_Controller_Request_Abstract $request, $filterBlock){
        $value = $request->getParam($this->_requestVar);

        if (!$value || is_array($value)) return $this;

        $this->_getResource()->applyFilterToCollection($this, $value);
        $this->getLayer()->getState()->addFilter($this->_createItem('Discount', $value));
        $this->_items = array();

        return $this;
    }

    protected function _getItemsData(){
        $data = $this->_getResource()->getCount($this);

        if (isset($data['count']) && $data['count'] > 0){
            return array(
                array(
                    'label' => Mage::helper('onefilter')->__('Discount'),
                    'value' => 1,
                    'count' => (int)$data['count']
                )
            );
        }else{
            if (!Mage::getStoreConfigFlag('onefilter/discount/show_empty')){
                return array(
                    array(
                        'label' => Mage::helper('onefilter')->__('Discount'),
                        'value' => 1,
                        'count' => 0
                    )
                );
            }else{
                return array();
            }
        }
    }
}
