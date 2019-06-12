<?php
	session_start();
	include_once 'dbh.inc.php';
	function alert($msg){
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
	}
	//alert("WE ARE HERE, ABOUT TO APPLY");
	$session = mysqli_real_escape_string($conn, $_POST['session']);
	$desire_department = mysqli_real_escape_string($conn, $_POST['desire_department']);
	$form_no = "SPTSR/LAF/19-20/";	
	$surname = mysqli_real_escape_string($conn, $_POST['surname']);
	$othername = mysqli_real_escape_string($conn, $_POST['othername']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$home_address = mysqli_real_escape_string($conn, $_POST['home_address']);
	$office_address = mysqli_real_escape_string($conn, $_POST['office_address']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
	
	$religion = mysqli_real_escape_string($conn, $_POST['religion']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $marital = mysqli_real_escape_string($conn, $_POST['marital']);
    $spouse_name = mysqli_real_escape_string($conn, $_POST['spouse_name']);
    $referee_name = mysqli_real_escape_string($conn, $_POST['referee_name']);
    $referee_address = mysqli_real_escape_string($conn, $_POST['referee_address']);
    $referee_position = mysqli_real_escape_string($conn, $_POST['referee_position']);
    $referee_phone = mysqli_real_escape_string($conn, $_POST['referee_phone']);
    $kin_details = mysqli_real_escape_string($conn, $_POST['kin_details']);

	// check if input characters are correct
	if (!preg_match("/^[a-zA-Z]*$/", $surname) || !preg_match("/^[a-zA-Z]*$/", $othername)){
		echo "<script>alert('Error: Invalid Name Entered !!!'); history.back();</script>";
		exit();
	} else {
		$check = "SELECT * FROM applied_lecturers WHERE email='$email' AND session='$session'";
		$result = mysqli_query($conn, $check);
		if (mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			//echo "<pre>" ,print_r($result, TRUE),"</pre>";
			//echo "<pre>" ,print_r($row, TRUE),"</pre>";
			echo "<script>alert('Error: This lecturer has applied to lecture at this session SPTSR Program!!!'); history.back();</script>";
			exit();
		} else {
			//insert the data into database
			$sql = "INSERT INTO applied_lecturers (session, desire_department,surname, othername, email, phone, home_address,office_address, position, dob, religion,nationality,state,gender,marital,spouse_name,referee_name,referee_address,referee_position,referee_phone,kin_details,form_no) VALUES ('$session','$desire_department','$surname', '$othername', '$email', '$phone', '$home_address', '$office_address','$position', '$dob', '$religion','$nationality','$state', '$gender', '$marital', '$spouse_name', '$referee_name', '$referee_address', '$referee_position', '$referee_phone','$kin_details','$form_no')";
			$insquery= mysqli_query($conn, $sql);
			echo "<pre>" ,print_r($insquery, TRUE),"</pre>";
			if ($insquery){
				echo "<script>alert('Application Successful !!!'); window.location.href='../index.html';</script>";
			}else{
				echo '<script>alert("ERROR: '.mysqli_error($conn).'"); history.back();</script>';
				exit();
			}
		}
	}	
?>

