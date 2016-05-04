<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Mysql4_Slide extends Mage_Core_Model_Mysql4_Abstract{
    public function _construct(){
        $this->_init('revslider/slide', 'id');
    }
}
