<?php
$id = $_GET["op"];
require_once 'delete_FRM.php';
$frmDelete = new frmDelete();
$frmDelete->confirmDelete($id);