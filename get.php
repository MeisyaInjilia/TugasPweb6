<html>
<title>Pemrograman Web</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Forms Data Diri!</title>
  </head>
  <body>
  	<div class="container">
      <h2 class="alert alert-primary text-center mt-5"> Data Diri Pembeli Ikan Hias</h2>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<body>
<form method="GET" action="get.php">
	<tr class="form-group">
		<label>Nama Lengkap</label>
		<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Anda">
	</tr>
	<tr class="form-group">
		<label>Umur</label>
		<input type="text" name="umur" class="form-control" placeholder="Masukan Umur Anda">
	</tr>
	<tr class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat">
	</tr>
	 <tr class="form-group">
		<label>Jenis Ikan</label>
		<select name="ji" class="form-control">
			<option>Ikan Nila</option>
			<option>Ikan Cupang</option>
			<option>Ikan Arwana</option>
			<option>Ikan Patin</option>
			<option>Ikan Koki</option>
		</select>
	</tr>
	<tr class="form-group">
	 	<label>Jenis Pengiriman</label>
	 	<select name="jp" class="form-control">
	 		<option>COD</option>
	 		<option>Datang ke Toko</option>
	 	</select>
	 </tr>
	<tr>
	  		<td><input type="submit" name="kirim" value="PROSES" class="form-control"></td>
	</tr>


</form>
     <?php
     if ($_GET)
     	{
     		echo 'Nama : ' .$_GET['nama'];
     		echo '<br>';
     		echo 'Umur : ' .$_GET['umur'];
     		echo '<br>';
     		echo 'Alamat : ' .$_GET['alamat'];
     		echo '<br>';
     		echo 'Jenis Ikan : ' .$_GET['ji'];
     		echo '<br>';
     		echo 'Jenis Pengiriman : ' .$_GET['jp'];
     		echo '<br>';
     	}
  
?>
</body>
</html>