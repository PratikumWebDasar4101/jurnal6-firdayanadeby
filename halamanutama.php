<!DOCTYPE html>
<html>
<head>
	<title>halamanutama.php</title>
</head>
<body>
<TABLE>
	<form>
		<tr>
			<td> nim </td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td> nama </td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td> kelas </td>
			<td>:</td>
			<td>
				<input type="radio" name="01">01
				<input type="radio" name="02">02
				<input type="radio" name="03">03
				<input type="radio" name="04">04
			</td>
		</tr>
		<tr>
			<td> jenis kelamin </td>
			<td>:</td>
			<td>
				<input type="radio" name="laki-laki">laki-laki
				<input type="radio" name="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td> Hobi </td>
			<td>:</td>
			<td>
				<input type="checkbox" name="badminton">badminton
				<input type="checkbox" name="tenis">tenis
				<input type="checkbox" name="renang">renang
				<input type="checkbox" name="bersepeda">bersepeda
			</td>
		</tr>
		<tr>
			<td> fakultas </td>
			<td>:</td>
			<td>
			<select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
				<option value="FRI">FRI</option>
			</select>
			</td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td>:</td>
			<td><textarea rows="5" cols="40" name="Alamat"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</form>
</body>
</TABLE>
</html>