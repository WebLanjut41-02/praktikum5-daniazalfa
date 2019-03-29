<h3>Data Lowongan Pekerjaan</h3>

<div class="container">
<table border="1" class="table"  class="thead-light">
	<thead class="thead-dark">
	<tr>
		
		<th>nama</th>
		<th>nim</th>
		<th>tgl_lahir</th>
		<th>ipk</th>
		<th>kelas</th>
	</tr>
</thead>

	<?php
	$n=1;
	foreach($result as $r) {
		?>
	<tr>
		
		<td><?php echo $r->nama ?></td>
		<td><?php echo $r->nim ?></td>
		<td><?php echo $r->tgl_lahir ?></td>
		<td><?php echo $r->ipk ?></td>
		<td><?php echo $r->kelas ?></td>
	</tr>
	<?php
		$n++;
		}
	?>
</table><br>
</div>