<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */
class ONE_Widget_Model_Widget_Source_Block{
    public function toOptionArray(){
        $collection = Mage::getResourceModel('cms/block_collection')->load();
        $blocks = array();
        foreach ($collection as $item){
            $blocks[] = array(
                'value' => $item->getIdentifier(),
                'label' => $item->getTitle()
            );
        }
        return $blocks;
    }
}