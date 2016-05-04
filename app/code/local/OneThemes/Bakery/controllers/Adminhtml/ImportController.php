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
class OneThemes_Bakery_Adminhtml_ImportController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction() {
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/bakery/"));
    }
    public function blocksAction() {
        $config = Mage::helper('bakery')->getCfg('install/overwrite_blocks');
        Mage::getSingleton('bakery/import_cms')->importCmsItems('cms/block', 'blocks', $config);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/bakery/"));
    }
    public function pagesAction() {
        $config = Mage::helper('bakery')->getCfg('install/overwrite_pages');
        Mage::getSingleton('bakery/import_cms')->importCmsItems('cms/page', 'pages', $config);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/bakery/"));
    }
    public function widgetsAction() {
        Mage::getSingleton('bakery/import_cms')->importWidgetItems('widget/widget_instance', 'widgets', false);
        $this->getResponse()->setRedirect($this->getUrl("adminhtml/system_config/edit/section/bakery/"));
    }
}
