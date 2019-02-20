<?php
include '_dbconnect1.php';
include 'class/Html.php';

$sql = "SELECT * FROM m3_kod_agama ORDER BY agama_ket";

if(isset($_POST['submit'])) {
    var_dump($_POST);
}
?>

<form method="post" action="">
<?php
echo Html::dropdown('agama', $sql, 'agama_ket', 'agama_id', '02');
echo Html::dropdown('bangsa', $sql, 'agama_ket', 'agama_id', '02');
?>
<input type='submit' name='submit'>
</form>

<hr>

<?php
$sql = "SELECT * FROM m5_kod_subjek";
echo Html::dropdown('subjek', $sql, ['subjek_ket', 'subjek_kod'], 'subjek_kod');
