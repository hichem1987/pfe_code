<?php
/**
 * @category    ONE
 * @package     ONE_Widget
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Widget_Model_Widget_Source_Parallax_Image_Repeat{
    public function toOptionArray(){
        $types[] = array('value' => 'no-repeat',    'label' => 'no-repeat');
        $types[] = array('value' => 'repeat',       'label' => 'repeat');
        $types[] = array('value' => 'repeat-x',     'label' => 'repeat-x');
        $types[] = array('value' => 'repeat-y',     'label' => 'repeat-y');

        return $types;
    }
}