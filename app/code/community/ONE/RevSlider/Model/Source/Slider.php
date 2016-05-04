<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_RevSlider_Model_Source_Slider{
    public function toOptionArray(){
        $collection = Mage::getModel('revslider/slider')
            ->getCollection();
        $array = array();
        foreach ($collection as $slide){
            $array[] = array(
                'value' => $slide->getId(),
                'label' => $slide->getTitle()
            );
        }
        return $array;
    }
}
