<head>
	<title>Silakan Reservasi</title>
</head>

<body>
	<center>
		<br><br>
		<form method="post" action="<?php echo base_url(); ?>index.php/Reservasi/cetak">
			<table>
				<tr>
					<th colspan="3">Silakan Reservasi</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>NIK</th>
					<th>:</th>
					<td> <input type="text" name="nik" id="nik"> </td>
				</tr>
				<tr>
					<th>Nama Lengkap</th>
					<th>:</th>
					<td> <input type="text" name="nama" id="nama"> </td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<th>:</td>
					<td> <input type="radio" name="jkelamin" value="Laki-laki" />Laki-laki<br />
						<input type="radio" name="jkelamin" value="Perempuan" checked />Perempuan<br />
					</td>
				</tr>
				<tr>
					<th>Alamat</th>
					<th>:</th>
					<td><textarea name="alamat" id="alamat"></textarea></td>
				</tr>
				<tr>
					<th>Tipe</th>
					<td>:</td>
					<td>
						<select name="tipe" id="tipe">
							<option value="">Pilih Tipe Kamar</option>
							<option value="Standar Room">Standar Room</option>
							<option value="Superior Room">Superior Room</option>
							<option value="Deluxe Room">Deluxe Room</option>
							<option value="Twin Room">Twin Room</option>
							<option value="Single Room">Single Room</option>
							<option value="Double Room">Double Room</option>
							<option value="Family Room">Family Room</option>
							<option value="Junior Suit">Junior Suit</option>
						</select>
					</td>
				</tr>
				<tr>
					<th>Tanggal Check-In</th>
					<th>:</th>
					<td> <input type="text" name="tgl" id="tgl"> </td>
				</tr>
				<tr>
					<th>Lama Inap</th>
					<th>:</th>
					<td> <input type="text" name="lama" id="lama"> </td>
				</tr>
				<tr>
					<td colspan="3" align="center"> <input class="simpan" type="submit" value="Simpan">
					</td>
				</tr>
			</table>
		</form>
		<br>
	</center>
</body>