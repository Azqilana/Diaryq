<!DOCTYPE html>
<html>
<head>
	<title>Buat Akun</title>
</head>
<body>
	<form action="pd.php" method="POST">
		<table>
			<h1>Buat Akun Baru</h1>
			<tr>
				<td>Nama Panjang</td>
				<td><input class="fd" type="text" name="nama_panjang"  required></td>
				<td>Nama Pena</td>
				<td><input type="text" name="nama_pena" placeholder="Cth:Azqilana" required></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"required></td>
				<td>Tempat Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" placeholder="Jln Tgh Ibrahim Al-Khalidy" required></td>
				<td>Alamat E-Mail</td>
				<td><input type="email" name="email" placeholder="Cth:Azqilana@azqilana.com"required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><select name="jenis_kelamin" required>
					<option>Laki-Laki</option>
					<option>Perempuan</option>
				</select></td>
				<td>Hobi</td>
				<td><input type="text" name="hobi" placeholder="Main bola"></td>
			</tr>
			<tr>
				<td>Nomor Telephon</td>
				<td><input type="number" type="tel" name="nomor_telephon" placeholder="08123456789" required></td>
				<td>Nomor WhatsApp</td>
				<td><input type="number" type="tel" name="nomor_whatsapp" placeholder="08123456789" required></td>
			</tr>
			<tr>
				<td><input type="submit" value="Daftar" name="daftar" /></td>
			</tr>
		</table>
		
	</form>
</body>

</html>