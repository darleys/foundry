<?php
class AI_DB {
    //self::$DBCON = mysql_connect($dbconf['host'] . ':' . $dbconf['port'], $dbconf['login'], $dbconf['password'], true);
    //mysql_select_db($dbconf['database'], self::$DBCON);
    public static $modal;

    public function setModal($modal) {
        echo "*****************<br>";
        echo $modal;
        echo "*****************<br>";
        self::$modal=$modal;
    }
    public function _add($data) {

        echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>".$data[0]."~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~@".self::$modal ."~~~~~";

    }

    public function _fetch($args) {
        $dbRules = $args[0];
//        echo "~~  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~<br>".$data."~~~~~~~~~~~~~~~~~~~".$modal."~~~~~~~~~~~~~";
        $dbstmt = "SELECT ";
        $inc=0;
        foreach($dbRules as $dbRule) {
            if($inc==0) {
                $dbstmt .= $dbRule." FROM ".self::$modal;
                $inc=null;
            }else {
                $dbstmt .= " ".$dbRule;
            }
        }
        echo $dbstmt;
    }
}

