<?php
/* *************************************************************************
 * File Name: Model.php
 * Author: wushuiyong
 * mail: wushuiyong@huamanshu.com
 * Created Time: Sun 02 Nov 2014 06:24:26 PM
 * ************************************************************************/
namespace Zan\Library;

class Model {
    protected $db;
    protected $table;
    public function __construct($type = 'zmongo') {
        // $this->db = new Model\ZMysqli();
    }

    public static function getInstance($type = 'mysqli') {
        $model = 'Zan\Library\Model\\' . ucwords($type);
        return $model::getInstance();
    }



    public function __call($func, $params) {
        if (method_exists($this->db, $func)) {
            return call_user_func_array(array($this->db, $func), $params);
        }
        // trigger_error('')
    }

}