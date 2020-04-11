<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>NILAI</title>
</head>

<body bgcolor="#f8f9fa">
    <form action="proses.php" method="post">
        <br><label>NIM :</label>
        <br><input type="text" name="nim"></br>

        <br><label>Pilih Program Studi :</label></br>
        <select name="prodi">
            <option value="Teknik Informatika S1">Teknik Informatika S1</option>
            <option value="Sistem Informasi S1">Sistem Informasi S1</option>
            <option value="Teknik Informatika D3">Teknik Informatika D3</option>
        </select></br>

        <br><label>Nilai Tugas:</label></br>
        <input type="text" name="nilai_tugas">

        <br><label align="center">Nilai UTS:</label></br>
		<input type="text" name="nilai_uts">

        <br><label>Nilai UAS:</label></br>
		<input type="text" name="nilai_uas">
		<hr size="4"></hr>

        <label ><p align="right"><b><u>CATATAN KHUSUS :</u></b><p></label>
        <div>
            <p><input type="checkbox" name="catatan[]" value="Kehadiran >= 70%" />Kehadiran >= 70%</p>
            <p><input type="checkbox" name="catatan[]" value="Interaktif di kelas" />Interaktif Di Kelas</p>
            <p><input type="checkbox" name="catatan[]" value="Tidak Terlambat Mengumpulkan Tugas" />Tidak Terlambat Mengumpulkan Tugas</p>
        </div>
        <button class="btn btn-warning" type="submit" name="kirim">SIMPAN</button></center>
		<center><hr size="4"></hr></center>
	</form>
</body>

</html>