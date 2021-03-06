<?php
/* *************************************************************************
 * File Name: Library/Exception.php
 * Author: wushuiyong
 * mail: wushuiyong@huamanshu.com
 * Created Time: Thu 23 Oct 2014 05:21:14 PM
 * ************************************************************************/
namespace Zan\Library;

class ZException extends \Exception {
    // 找不到类
    const NOT_FOUND_CLASS  = 100;
    // 找不到方法
    const NOT_FOUND_METHOD = 101;
    public function __construct($message = "", $code = 0) {
        if ($message instanceof Exception) {
            parent::__construct($message->getMessage(), $code);
        } else {
            $msg = sprintf("%s in %s:%s", $message, self::getMessage(), self::getLine());
            parent::__construct($msg, $code);
        }
    }

}
