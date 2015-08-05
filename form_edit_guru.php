<?php include"header.php";
$edit_guru = mysql_query("select * from guru where nip = '$_GET[nip]'");
$row = mysql_fetch_array($edit_guru);
?>
			<!-- Content -->
			<div id="content">
				
								<!-- Box -->
							<div class="box">
				<div class="box-head">
						<h2>Update Guru</h2>
					</div>
					<!-- End Box Head -->
					<br><br>
					<form name='Update' method = 'POST' action='update_data_guru.php'>
						
						<!-- Form -->
						<div class="form">
							<center>
							<table border="0">
							<tr align='center'>
									<td><p align="left"><label>NIP</label></p></td>
									<td><input type="text" disabled="disable" name="nip" size="20%" value="<?php echo $row["nip"];?>"class="field size1"/></td>
							</tr>
							<tr>
									<td><p align="left"><label>Nama Guru</label></p></td>
									<td><input type="text" name="nama_guru" size="20%" value="<?php echo $row["nama_guru"];?>" class="field size1"/></td>
							</tr>
							<tr>		
									<td><p align="left"><label>Alamat</label></p></td><td><input type="text" name="alamat" size="20%" value="<?php echo $row["alamat"];?>" class="field size1"/></td>
							</tr>
							<tr>
									<td><p align="left"><label>Jenis Kelamin</label></p></td> <td>
															<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
															<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan </td>
							</tr>
							<tr>
									<td><p align="left"><label>Telp</label></p></td><td><input type="text" name="telp" size="20%" value="<?php echo $row["telp"];?>" class="field size1"/></td>
							</tr>

							<tr>
									<td><p align="left"><label>Status</label></p> </td>
									<td><select name="status" class="field size1"> 
										<option value="0">Pilih Status</option> 
										<option value="Active">Active</option>
										<option value="Not-Active">Not-Active</option> </select></td>
							</tr>
						</table>
						</center>
					</div>
					<br><br><br>
						<div class="buttons">
						<input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
						<input type="submit" value="Save">
						<input type='button' value='Batalkan' onclick='self.history.back();'>
						</div>
					</form>
					
				</div>
				<!-- End Box -->

				
				
			</div>
			<!-- End Content -->
<?php include"footer.php";?>