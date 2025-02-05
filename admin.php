<?php
/*
    Martial Arts Tournament System (MATS)
    Copyright (C) 2015 David Ball (davidmichaelball @ gmail . com) and Ruth Schulz

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
*/
require_once('tournament_settings.php');
require 'vendor/autoload.php';
use Smarty\Smarty;
use DB;
$smarty = new Smarty;
require 'loginlogout.php';
if ($user_access != "admin") {
	$smarty->display('denied.tpl');
	exit;
}
$smarty->assign('current_menu', "Admin");

require 'configDB.php';
require 'utility.php';

echo "<br><br><br><br>";

$smarty->append('sections', array(
      	  'ID'				=> 0,
          'NAME'        => "Complete",
          'DATE'		=> " ",
          'PART'		=> " "
       )); 	

$sections = DB::factory('sections');
$sections->tournament_id = $active_tournament->tournament_id;
$sections->find();

while($sections->fetch()) {

      $smarty->append('sections', array(
      	  'ID'				=> $sections->section_id,
          'NAME'        => $sections->name,
          'DATE'		=> $sections->date,
          'PART'		=> $sections->part
       )); 	
}

$smarty->display('admin.tpl');

?>
