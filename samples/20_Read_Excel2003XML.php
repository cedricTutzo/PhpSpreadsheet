<?php

require __DIR__ . '/Header.php';

$filename = __DIR__ . '/templates/Excel2003XMLTest.xml';
$callStartTime = microtime(true);
$spreadsheet = \PhpSpreadsheet\IOFactory::load($filename);
$helper->logRead('Excel2003XML', $filename, $callStartTime);

// Save
$helper->write($spreadsheet, __FILE__);
