<?php
/**
 *
 * ------------------------------------------------------------------------------
 * @category     ONE
 * @package      ONE_Newsletter
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
class ONE_Newsletter_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getCfgEnable()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/enable');
    }
    public function getCfgWidth()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/width');
    }
    public function getCfgHeight()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/height');
    }
    public function getCfgBackgroundColor()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/background_color');
    }
    public function getCfgBackgroundImage()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/background_image');
    }
    public function getCfgIntro()
    {
        return Mage::getStoreConfig('onenewsletter/display_options/intro');
    }
}