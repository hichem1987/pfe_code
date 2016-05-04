<?php
/**
 * @category    ONE
 * @package     ONE_Filter
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Filter_Helper_Data extends Mage_Core_Helper_Abstract{
    public function getConfig($path=null){
        if ($path) return Mage::getStoreConfig($path);
        else{
            $module = Mage::app()->getRequest()->getModuleName();
            $bar    = $this->getConfig('onefilter/general/bar');
            return Mage::helper('core')->jsonEncode(
                array(
                    'mainDOM'   => trim($this->getConfig("onefilter/{$module}/main_selector")),
                    'layerDOM'  => trim($this->getConfig("onefilter/{$module}/layer_selector")),
                    'enable'    => (bool)$this->getConfig("onefilter/{$module}/enable"),
                    'bar'       => (bool)$bar
                )
            );
        }
    }

    public function isPriceEnable(){
        $module = Mage::app()->getRequest()->getModuleName();
        return $this->getConfig("onefilter/{$module}/price");
    }
}
