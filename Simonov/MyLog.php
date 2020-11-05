<?php
namespace Simonov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface{
    public function _log(string $str){
        $this->log[] = $str;
    }
    public static function log($str) {
        self::Instance()->_log($str);
    }
    public function _write(){
        foreach($this->log as $value) {
            echo $value;
        }
    }
    public static function write(){
        self::Instance()->_write();
    }
}