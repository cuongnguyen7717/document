<?php
require_once 'db_conn.php';
// Tim Kiems
if (isset($_GET['sbm']) && !empty($_GET['batdau'])&& !empty($_GET['ketthuc'])) {
    $batdau = $_GET['batdau'];
    $ketthuc = $_GET['ketthuc'];
    $sql_query="SELECT * FROM document WHERE date BETWEEN '$batdau' AND '$ketthuc';";
    $query = mysqli_query($links, $sql);
    $total_prd = mysqli_num_rows($query);
} 

if (isset($_POST['All'])) {
    unset($_POST['sbm']);
}
?>
