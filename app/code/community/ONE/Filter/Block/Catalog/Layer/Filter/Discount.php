<?php
/**
 * @category    ONE
 * @package     ONE_Filter
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

class ONE_Filter_Block_Catalog_Layer_Filter_Discount extends Mage_Catalog_Block_Layer_Filter_Abstract{
    public function __construct(){
        parent::__construct();
        $this->_filterModelName = 'onefilter/layer_filter_discount';
    }
}
