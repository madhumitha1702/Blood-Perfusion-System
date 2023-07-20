<?php
include "connection.php";
    $bid=$_GET['bid'];
	$sql = "delete from bloodinfo where bid='$bid'";
	if (mysqli_query($conn, $sql)) {
	$msg="You have deleted one blood sample.";
	header("location:../bloodinfo.php?msg=".$msg );
    } else {
    $error="Error deleting record: " . mysqli_error($conn);
    header("location:../bloodinfo.php?error=".$error );
    }
    mysqli_close($conn);
?>