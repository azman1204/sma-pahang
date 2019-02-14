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
