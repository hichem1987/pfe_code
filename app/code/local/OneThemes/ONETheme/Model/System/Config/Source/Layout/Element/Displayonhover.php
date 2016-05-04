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
class OneThemes_ONETheme_Model_System_Config_Source_Layout_Element_Displayonhover
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'0', 'label'=>Mage::helper('adminhtml')->__('Don\'t Display')),
            array('value'=>'1', 'label'=>Mage::helper('adminhtml')->__('Display On Hover')),
            array('value'=>'2', 'label'=>Mage::helper('adminhtml')->__('Display'))
        );
    }

}