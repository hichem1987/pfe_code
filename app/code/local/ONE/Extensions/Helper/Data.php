<?php
/**
 * @category    ONE
 * @package     ONE_Extensions
 * @copyright   Copyright (C) 2008-2013 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */
class ONE_Extensions_Helper_Data extends Mage_Core_Helper_Abstract{
    public function loadJsLibs($libs=array()){
        if (is_string($libs)) $libs = array($libs);
        $head = Mage::getSingleton('core/layout')->getBlock('head')->setCanLoadExtJs(true);
        foreach ($libs as $lib){
            switch ($lib){
                case 'jscolor':
                    $head->addJs('jscolor/jscolor.js');
                    break;
                case 'codemirror':
                    $head->addJs('bakery/codemirror/codemirror.js')
                        ->addJs('bakery/codemirror/mode/css.js')
                        ->addItem('js_css', 'bakery/codemirror/codemirror.css');
                    break;
                case 'browser':
                    $head->addJs('lib/flex.js')
                        ->addJs('lib/FABridge.js')
                        ->addJs('mage/adminhtml/flexuploader.js')
                        ->addJs('bakery/browser.js')
                        ->addJs('prototype/window.js')
                        ->addItem('js_css', 'prototype/windows/themes/default.css');
                    if (version_compare(Mage::getVersion(), '1.7.0.0') < 0){
                        $head->addItem('js_css', 'prototype/windows/themes/magento.css');
                    }else{
                        $head->addItem('skin_css', 'lib/prototype/windows/themes/magento.css');
                    }
                    break;
            }
        }
    }

    public function getExtensionInfo($name){
        $id = $name . '_INFO';
        $cache = Mage::app()->getCache()->load($id);
        if ($cache == null){
            $info = Mage::getConfig()->getNode()->modules->$name;
            if ($info && $info->active) $cache = '1';
            else $cache = '0';
            Mage::app()->getCache()->save($cache, $id, array('CONFIG'), 60*60*24*30);
        }
        return $cache;
    }
}