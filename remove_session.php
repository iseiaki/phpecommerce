<?php
session_start();
session_unset();

// destroy the session
session_destroy();
$url='http://localhost/ecommerce/admin.php';
echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

?>