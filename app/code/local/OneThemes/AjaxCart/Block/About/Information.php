<?php
/**
 *
 * ------------------------------------------------------------------------------
 * @category     ONE
 * @package      ONE_AjaxCart
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
class OneThemes_AjaxCart_Block_About_Information extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {		
	$html = $this->_getHeaderHtml($element);		
	$html.= $this->_getFieldHtml($element);        
        $html .= $this->_getFooterHtml($element);
        return $html;
    }   
    protected function _getFieldHtml($fieldset)
    {
	$content = 'Ajax Cart version : 2.0.0<br/>Author : <a href="http://www.http://nouthemes.com/" title="Magento Themes">http://nouthemes.com/</a><br />Copyright &copy; 2011- http://nouthemes.com/';
	return $content;
    }
}