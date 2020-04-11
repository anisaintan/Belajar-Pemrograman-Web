<!Doctype html>
<html>
<head>
	<title>Kalkulator</title>
	<style>
         table{background:skyblue; padding:20px; border-radius:30px;}
         table input{width:100%; border:1px;}
         table tr td select{width:100%;}
        </style>
</head>
<body>
<?php
if (isset($_POST["submit"])){
	$satu = $_POST["satu"];
	$dua = $_POST["dua"];
	$operator = $_POST["operator"];

	if($operator == "+"){
		$hasil = $satu+$dua;
	}elseif($operator == "-"){
		$hasil = $satu-$dua;
	}elseif($operator == "x"){
		$hasil = $satu*$dua;
	}elseif($operator == "/"){
		$hasil = $satu/$dua;
	}else{
		echo "Pilih Operator";
	}	
}
?>

	<form method="post" action="">
		<table>
			<tr>
				<td>Kalkulator</td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="satu" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="dua" value=""></td>
			</tr>
			<tr>
				<td align="center" colspan="2">
					<select name="operator">
						<option align="center">- Pilih Operator -</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="x">x</option>
						<option value="/">/</option>
					</select>
				</td>
				</tr>
			<tr>
				<td><input type="reset" name="reset" value="C"></td>
				<td><input type="submit" name="submit" value="="></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="hasil" value=""></td>
			</tr>
	</form>
	<tr>
	<?php if(isset($_POST["submit"])){ ?>
		<td colspan="2"><input type="text" name="hasil" value="<?php echo $hasil ?>"></td>
	<?php } ?>
</tr>

</body>
</html>