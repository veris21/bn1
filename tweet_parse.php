<?php
include "curl.php";

// if($_POST['submit']!=''){
//   $query = $_POST['sel'];
//   print_r($query);
//   die;
// }else {
//   $query = "#BN1_BABEL2016";
// }
//
// $t = $connection->get("search/tweets",
// [
//     "q" => "'".$query."'",
//     "result_type" => "recent",
//     "count" => "100"
// ]);


$t = $connection->get("search/tweets",
[
    "q" => "#BN1_BABEL2016",
    "result_type" => "recent",
    "count" => "100"
]);

$t_kritik = $connection->get("search/tweets",
[
    "q" => "#BN1_BABEL2016+#KRITIK",
    "result_type" => "recent",
    "count" => "100"
]);

$t_saran = $connection->get("search/tweets",
[
    "q" => "#BN1_BABEL2016+#SARAN",
    "result_type" => "recent",
    "count" => "100"
]);

$t_lapor = $connection->get("search/tweets",
[
    "q" => "#BN1_BABEL2016+#PELAPORAN",
    "result_type" => "recent",
    "count" => "100"
]);

?>
