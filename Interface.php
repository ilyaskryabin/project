<?php
namespace Classes;
interface iBox
{
    public function setData($key, $value);
    public function getData($key);
    public function save();
    public function load();
}