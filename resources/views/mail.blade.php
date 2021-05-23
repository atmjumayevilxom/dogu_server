
<h1> {{ $name }}</h1>
Ismi <?php echo $_GET["name"]; ?><br>
<?php
$mobileno = $_GET["number"];
if (!preg_match ("/^[0-9]*$/", $mobileno) ){
    $ErrMsg = "Only numeric value is allowed.";

} else {
    Nomer: echo $mobileno;
}?>

