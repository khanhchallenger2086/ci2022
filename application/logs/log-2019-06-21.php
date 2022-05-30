<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-06-21 08:58:40 --> Query error: Table 'vietnamd_ghe.ci_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `ci_sessions`
WHERE `id` = 'fm0g8v6ce3oq4u2q3mqhokvajmqddji3'
ERROR - 2019-06-21 08:58:40 --> Query error: Unknown column 'is_show_product_top' in 'where clause' - Invalid query: SELECT *
FROM `product_category`
WHERE `status` = 1
AND `is_show_product_top` = 1
ORDER BY `product_category`.`id` DESC
 LIMIT 2
ERROR - 2019-06-21 08:58:40 --> Query error: Table 'vietnamd_ghe.ci_sessions' doesn't exist - Invalid query: INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES ('fm0g8v6ce3oq4u2q3mqhokvajmqddji3', '127.0.0.1', 1561082320, '__ci_last_regenerate|i:1561082320;')
