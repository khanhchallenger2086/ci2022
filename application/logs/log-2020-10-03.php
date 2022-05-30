<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-03 17:41:23 --> Unable to connect to the database
ERROR - 2020-10-03 17:41:23 --> Severity: error --> Exception: Call to a member function real_escape_string() on bool C:\xampp73.2\htdocs\phuong\system\database\drivers\mysqli\mysqli_driver.php 391
ERROR - 2020-10-03 18:56:17 --> Query error: Unknown column 'cid' in 'where clause' - Invalid query: SELECT *
FROM `ads_category`
WHERE `pid` = 0
AND `cid` != 5
ORDER BY `ads_category`.`id` DESC
