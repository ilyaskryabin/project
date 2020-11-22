<?php
require 'c:WAPMBABY\www\1002project\Abstr.php';
require 'c:WAPMBABY\www\1002project\FileBox.php';
require 'c:WAPMBABY\www\1002project\DBbox.php';

use Classes\AbstractBox;
use Classes\FileBox;
use Classes\DBbox;


$file = new FileBox();

$file->setData('6', 'six');
$file->setData('7', 'seven');
$file->save();
//print_r($file->getData('7'));
$file->setData('7', 'seven');
$db = new DBbox();

$db->save();
$db->load();
//print_r($db->getData('7'));
$db->setData('tee', 'room');
$db->save();
$db->load();
print_r($db->getData('ilya'));
