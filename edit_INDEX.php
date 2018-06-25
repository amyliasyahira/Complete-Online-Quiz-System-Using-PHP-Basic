<?php
$id = $_GET["op"];
require_once 'edit_FRM.php';
$frmEdit = new frmEdit();
$frmEdit->editDescription($id);