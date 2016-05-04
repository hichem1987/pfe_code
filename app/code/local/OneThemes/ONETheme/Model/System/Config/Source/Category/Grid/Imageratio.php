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
class OneThemes_ONETheme_Model_System_Config_Source_Category_Grid_Imageratio
{

    public function toOptionArray()
    {
        return array(
            array('value'=>'1:1', 'label'=>Mage::helper('adminhtml')->__('Square Rectangle')),
            array('value'=>'3:4', 'label'=>Mage::helper('adminhtml')->__('Horizontal Rectangle')),
            array('value'=>'4:3', 'label'=>Mage::helper('adminhtml')->__('Vertical Rectangle'))
        );
    }

}