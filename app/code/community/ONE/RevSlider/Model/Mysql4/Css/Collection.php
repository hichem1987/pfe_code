<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Mysql4_Css_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract{
    public function _construct(){
        parent::_construct();
        $this->_init('revslider/css');
    }

    public function toOptionArray(){
        $res = array();
        foreach ($this as $item) {
            $style = $item->getPrettyName();
            $res[] = array(
                'value' => $style,
                'label' => $style
            );
        }
        return $res;
    }
}
