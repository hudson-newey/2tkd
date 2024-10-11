<?php
/**
 * Table Definition for represents
 */
require_once 'vendor/autoload.php';
use DB;

class DataObjects_Represents extends DB 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'represents';                      // table name
    public $represents_id;                   // int(20)  not_null primary_key unsigned auto_increment
    public $name;                            // string(30)  not_null unique_key
    public $active;                          // int(1)  not_null
    public $last_updated;                    // datetime(19)  not_null binary

    /* Static get */
    function staticGet($k,$v=NULL) { return DB::staticGet('DataObjects_Represents',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
