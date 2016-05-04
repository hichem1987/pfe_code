<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Mysql4_Animation extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('revslider/animation', 'id');
    }

    public function loadByName(ONE_RevSlider_Model_Animation $animation, $name){
        if (!$name) return $animation;

        $adapter = $this->_getReadAdapter();
        $bind = array('name' => $name);

        $select = $adapter->select()
            ->from($this->getMainTable(), array($this->getIdFieldName()))
            ->where('name = :name');

        $animationId = $adapter->fetchOne($select, $bind);

        if ($animationId){
            $animation->load($animationId);
        }else{
            $animation->setData(array());
        }

        return $animation;
    }
}
