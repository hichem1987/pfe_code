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
class OneThemes_ONETheme_Model_System_Config_Source_Mainmenu_Menuanimation
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'show', 'label'=>Mage::helper('adminhtml')->__('Show/Hide')),
            array('value'=>'slide', 'label'=>Mage::helper('adminhtml')->__('Slide')),
            array('value'=>'fade', 'label'=>Mage::helper('adminhtml')->__('Fade')),
        );
    }

}
