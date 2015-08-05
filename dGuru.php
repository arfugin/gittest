<?php include"header_guru.php"; ?>


<?php
$query = "SELECT * FROM guru ORDER BY nip DESC";
$result= mysql_query($query);
$nr = mysql_num_rows($result);
if (isset($_GET['pn'])) {
$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']);
$pn = ereg_replace("[^0-9]", "", $_GET['pn']);
} else {
$pn = 1;
}
$itemsPerPage = 10;
$lastPage = ceil($nr / $itemsPerPage);
if ($pn < 1) {
$pn = 1;
} else if ($pn > $lastPage) {
$pn = $lastPage;
}
$centerPages = "";
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
$centerPages .= '&nbsp; <span
class="pagNumActive">' . $pn . '</span> &nbsp;';
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a>
&nbsp;';
} else if ($pn == $lastPage) {
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a>
&nbsp;';
$centerPages .= '&nbsp; <span
class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a>
&nbsp;';
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a>
&nbsp;';
$centerPages .= '&nbsp; <span
class="pagNumActive">' . $pn . '</span> &nbsp;';
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a>
&nbsp;';
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a>
&nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a>
&nbsp;';
$centerPages .= '&nbsp; <span
class="pagNumActive">' . $pn . '</span> &nbsp;';
$centerPages .= '&nbsp; <a href="' . $_SERVER
['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a>
&nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .
$itemsPerPage;
$query = "SELECT * FROM guru ORDER BY nip DESC $limit";
$result= mysql_query($query);

$paginationDisplay = ""; // Initialize the pagination output variable
if ($lastPage != "1"){
$paginationDisplay .= 'Page <strong>' . $pn . '</
strong> of ' . $lastPage. '&nbsp; &nbsp;  &nbsp; ';
if ($pn != 1) {
$previous = $pn - 1;
$paginationDisplay .= '&nbsp; <a href="' .
$_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> Back</
a> ';
}
$paginationDisplay .= '<span
class="paginationNumbers">' . $centerPages . '</span>';

if ($pn != $lastPage) {
$nextPage = $pn + 1;
$paginationDisplay .= '&nbsp; <a href="' .
$_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next</a> ';
}
}


?>


<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
				<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Tabel Guru</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" align='center'>
							<tr align='center'>
								<td width="20px"><b>No</b></td>
								<td width="50px"><b>NIP</b></td>
								<td width="100px"><b>NAMA</b></td>
								<td width="200px"><b>ALAMAT</b></td>
								<td width="200px"><b>JENIS KELAMIN</b></td>
								<td width="5px"><b>TELP</b></td>
								<td width="50px"><b>STATUS</b></td>
								<td width="70px"><b>AKSI</b></td>
							</tr>
							<?php
							$result= mysql_query($query);
							$i = 0;
							while ($data = mysql_fetch_array($result)) 
							{
							$no = ($i + 1);
							echo "
								<tr align='center'>
								<td>".$no."</td>
								<td>".$data['nip']."</td>
								<td>".$data['nama_guru']."</td>
								<td>".$data['alamat']."</td>
								<td>".$data['jenis_kelamin']."</td>
								<td>".$data['telp']."</td>
								<td>".$data['status']."</td>
								<td><a href=\"form_edit_guru.php?nip=".$data['nip']."\"><img src=\"css/images/b_edit.png\"></a></td>
								</tr>";
								
								$i++;
							}
							
							?>
						</table>
					</div>
					<!-- Table -->
					<div class="box1">
					<br/><p align="left">&nbsp;&nbsp;&nbsp;&nbsp;Jumlah Guru : <?php echo $nr; ?></p>
									<div id="a" align="center"><?php echo $paginationDisplay; ?></div><br/>
				</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Content -->
			<?php include"footer.php"; ?>
