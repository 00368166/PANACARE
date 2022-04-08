<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    DB::table('message')->where('id', 1)->delete();
}
?>
