<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Mysql4_Css extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('revslider/css', 'id');
    }

    public function loadByRule(ONE_RevSlider_Model_Css $css, $rule){
        if (!$rule) return $css;

        $adapter = $this->_getReadAdapter();
        $bind = array('handle' => $rule);

        $select = $adapter->select()
            ->from($this->getMainTable(), array($this->getIdFieldName()))
            ->where('handle = :handle');

        $cssId = $adapter->fetchOne($select, $bind);

        if ($cssId){
            $css->load($cssId);
        }else{
            $css->setData(array());
        }

        return $css;
    }
}
