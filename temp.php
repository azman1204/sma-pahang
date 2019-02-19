<?php
include '_dbconnect1.php';
// clean $_GET dan $_POST data
// $_POST['alamat'] = "Puchong's";
// $_POST['nama'] = ['azman', 'John']; // <input type='text' name='nama[]'>
// $_GET['nama'] = "azman's";
$ori_post = $_POST; // ori = data sebelum clean
$ori_get = $_GET;

if (!isset($noescape)) {
    echo 'escape data';
    foreach ($_GET as $key => $val) {
        $_GET[$key] = mysqli_real_escape_string($connx, $val);
    }

    foreach ($_POST as $key => $val) {
        // kes array dalam array
        if(is_array($_POST[$key])) {
            $arr = [];
            foreach($val as $val2) {
                $arr[] = mysqli_real_escape_string($connx, $val2);
            }
            $_POST[$key] = $arr;
        } else {
            $_POST[$key] = mysqli_real_escape_string($connx, $val);
        }
    }
}

function getOriPost() {
    global $ori_post;
    return $ori_post;
}

function getOriGet() {
    global $ori_get;
    return $ori_get;
}
