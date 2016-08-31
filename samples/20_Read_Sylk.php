<?php

require __DIR__ . '/Header.php';

$filename = __DIR__ . '/templates/SylkTest.slk';
$callStartTime = microtime(true);
$spreadsheet = \PhpSpreadsheet\IOFactory::load($filename);
$helper->logRead('SYLK', $filename, $callStartTime);

// Save
$helper->write($spreadsheet, __FILE__);
