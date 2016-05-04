<?php
/**
 *
 * ------------------------------------------------------------------------------
 * @category     ONE
 * @package      ONE_Themes
 * ------------------------------------------------------------------------------
 * @copyright    Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license      GNU General Public License version 2 or later;
 * @author       nouthemes.com
 * @email        support.nouthemes.com
 * ------------------------------------------------------------------------------
 *
 */
?>
<?php
class OneThemes_Bakery_Block_Adminhtml_Support extends Mage_Adminhtml_Block_Template
{
    public function __construct()
    {
        parent::__construct();
        $this->setTemplate('bakery/support.phtml');
    }
}