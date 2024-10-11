<?php
/**
 * Table Definition for competitors_seq
 */
require_once 'vendor/autoload.php';
use DB;

class DataObjects_Competitors_seq extends DB 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'competitors_seq';                 // table name
    public $id;                              // int(10)  not_null primary_key unsigned auto_increment

    /* Static get */
    function staticGet($k,$v=NULL) { return DB::staticGet('DataObjects_Competitors_seq',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
