<?php
/**
 * @category    ONE
 * @package     ONE_RevSlider
 * @copyright   Copyright (C) 2008-2014 nouthemes.com. All Rights Reserved.
 * @license     GNU General Public License version 2 or later
 * @author      nouthemes.com
 * @email       support.nouthemes.com
 */

$installer = $this;
$installer->startSetup();

$installer->getConnection()->addColumn(
    $installer->getTable('revslider/slider'),
    'status',
    'INT(4) NULL DEFAULT NULL COMMENT "Slider Status"'
);

$installer->endSetup();
