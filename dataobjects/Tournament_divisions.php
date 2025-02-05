<?php
/**
 * Table Definition for tournament_divisions
 */
require_once 'vendor/autoload.php';
use DB;

class DataObjects_Tournament_divisions extends DB 
{
    ###START_AUTOCODE
    /* the code below is auto generated do not remove the above tag */

    public $__table = 'tournament_divisions';            // table name
    public $tournament_id;                   // int(20)  not_null
    public $division_id;                     // int(20)  not_null
    public $section_id;                      // int(6)  not_null

    /* Static get */
    function staticGet($k,$v=NULL) { return DB::staticGet('DataObjects_Tournament_divisions',$k,$v); }

    /* the code above is auto generated do not remove the tag below */
    ###END_AUTOCODE
}
