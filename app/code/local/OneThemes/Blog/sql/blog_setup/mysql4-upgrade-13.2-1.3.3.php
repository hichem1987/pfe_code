<?php

$installer = $this;

$installer->startSetup();

$installer->run("
ALTER TABLE {$this->getTable('onethemes_blog')} ADD `thumbnailimage` varchar(255) NOT NULL DEFAULT '' AFTER `short_content`;
");

$installer->endSetup();
