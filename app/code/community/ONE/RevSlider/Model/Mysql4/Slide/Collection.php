<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Mysql4_Slide_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{
    public function _construct(){
        parent::_construct();
        $this->_init('revslider/slide');
    }

    public function addSliderFilter($slider){
        if ($slider instanceof ONE_RevSlider_Model_Slider && $slider->getId()){
            $this->addFieldToFilter('slider_id', array('eq' => $slider->getId()));
        }elseif (is_numeric($slider)){
            $this->addFieldToFilter('slider_id', array('eq' => $slider));
        }elseif (is_array($slider)){
            $this->addFieldToFilter('slider_id', array('in' => $slider));
        }
        return $this;
    }

    public function addIdsFilter($ids){
        if (!$ids) return $this;

        if (!is_array($ids)) $ids = array($ids);

        $this->addFieldToFilter('id', array('in' => $ids));

        return $this;
    }
}
