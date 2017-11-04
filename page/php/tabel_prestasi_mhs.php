<?php 
include 'koneksidb.php';
$sql		= "SELECT * FROM prestasi_mhs";
$hasil 		= mysql_query($sql);
?>
<table align="center">
	<tr>
		<th>No</th>
		<th>Nama Kegiatan</th>
		<th>Tempat</th>
		<th>Tanggal</th>
		<th>Tahun</th>
		<th>Penyelenggara</th>
		<th>Tingkat</th>
		<th>Prestasi yang Dicapai</th>
	</tr>
	<tr>
		<?php	
			$i=0;
			while($data=mysql_fetch_array($hasil))
			{         
				$i++;
		?>
			
		<td><?php echo $i;?></td>
		<td><?php echo $data['nama'];?></td>
		<td><?php echo $data['tempat'];?></td>		
		<td><?php echo $data['tgl'];?></td>
		<td><?php echo $data['thn'];?></td>
		<td><?php echo $data['host'];?></td>
		<td><?php echo $data['tingkat'];?></td>
		<td><?php echo $data['prestasi'];?></td>	
		
		<?php
			}
		?>
							
	</tr>
</table>