<?php

if (!class_exists('OneThemes_Blog_Block_Product_ToolbarCommon')) {
    if (Mage::helper('blog')->isMobileInstalled()) {
        class OneThemes_Blog_Block_Product_ToolbarCommon extends OneThemes_Mobile_Block_Catalog_Product_List_Toolbar
        {
        }
    } else {
        class OneThemes_Blog_Block_Product_ToolbarCommon extends Mage_Catalog_Block_Product_List_Toolbar
        {
        }
    }
}