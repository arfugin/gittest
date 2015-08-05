<?php
session_start();
include "connect_db_sman_3_waeapo.php";
if ( !isset($_SESSION['logged-in']) || $_SESSION['logged-in'] !== true) {
header('Location: index.php');
exit;
} else { 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="homepage_admin.php"><img src = "css/images/logo.png"></a></h1>
			<div id="top-navigation">
				<strong>
				<?php
				echo "Welcome, ".$_SESSION['username'].""; }?>
				</strong><span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="homepage_admin.php"><span>Home</span></a></li>
			    <li><a href="dGuru.php"><span>Guru</span></a></li>
			    <li><a href="insert_Guru.php" class="active"><span>Insert</span></a></li>
			    <li><a href="#"><span>Search</span></a></li>
			    <li><a href="#"><span>Help</span></a></li>
			</ul>
		</div>
		<!-- End Main Nav -->
	</div>
</div>
<!-- End Header -->

<!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			<div id="content">
				
								<!-- Box -->
							<div class="box">
				<div class="box-head">
						<h2>Insert Guru</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Insert' method = 'POST' action='insert_data_guru.php'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr align='center'>
									<td><p align="left"><label>NIP</label></p></td>
									<td><input type="text" name="nip" size="20%" class="field size1"/></td>
							</tr>
							<tr>
									<td><p align="left"><label>Nama Guru</label></p></td>
									<td><input type="text" name="nama_guru" size="20%" class="field size1"/></td>
							</tr>
							<tr>		
									<td><p align="left"><label>Alamat</label></p></td><td><input type="text" name="alamat" size="20%" class="field size1"/></td>
							</tr>
							<tr>
									<td><p align="left"><label>Jenis Kelamin</label></p></td><td>
															<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
															<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
							</tr>
							<tr>
									<td><p align="left"><label>Telp</label></p></td><td><input type="text" name="telp" size="20%" class="field size1"/></td>
							</tr>

							<tr>
									<td><p align="left"><label>Status</label></p></td><td><select name="status" class="field size1"> 
										<option value="0">Pilih Status</option> 
										<option value="Active">Active</option>
										<option value="Not-Active">Not-Active</option> </select></td>
							</tr>
						</table>
						</center>
					</div>
					<br><br><br>
						<div class="buttons">
						<input type="submit" class="button" value="Simpan">
						<input type='button' value='Kembali' onclick='self.history.back();'>
						<input type="reset" value="Batal">
						</div>
					</form>
					
				</div>
				<!-- End Box -->

				
				
			</div>
			<!-- End Content -->
<?php include"footer.php";?>