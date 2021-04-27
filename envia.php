<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'contato', 'Contato123@','contato');

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtCPF = $_POST['txtCPF'];
$txtCEP = $_POST['txtCEP'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldCPF`, `fldCEP`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtCPF', '$txtCEP')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Seus dados foram enviados.";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>