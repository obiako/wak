<?php
include_once('backend/db_function.php');

$funObj = new dbFunction();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'add_frog') {

    $hatch_date = date('Y-m-d', strtotime($_POST['hatch_date']));
    $frog_details = ['weight' => (string)filter_input(INPUT_POST, 'weight'), 'colour' => (string)filter_input(INPUT_POST, 'colour'), 'hatch_date' => $hatch_date, 'description' => (string)filter_input(INPUT_POST, 'description')];

    $res = $funObj->createFrog($frog_details);

    if ($res) {

        header("location:index.php");
    } else {

        echo "<script>alert($res)</script>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['type'] == 'get_frog') {

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $res = $funObj->getFrog($id);
    echo json_encode($res);

}
if (isset($_POST['type']) && $_POST['type'] == 'update_frog') {
//    $funObj = new dbFunction();
    $hatch_date = date('Y-m-d', strtotime($_POST['hatch_date']));
    $frog_details = ['id' => filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT), 'weight' => (string)filter_input(INPUT_POST, 'weight'), 'colour' => (string)filter_input(INPUT_POST, 'colour'), 'hatch_date' => $hatch_date, 'description' => (string)filter_input(INPUT_POST, 'description')];

    $res = $funObj->updateFrog($frog_details);

    if ($res) {

        header("location:index.php");
    } else {

        echo "<script>alert($res)</script>";
    }
}
if (isset($_GET['type']) && $_GET['type'] == 'delete_frog') {
//    $funObj = new dbFunction();
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $res = $funObj->deleteFrog($id);
    if ($res) {

        echo true;
    } else {

        echo false;
    }
}