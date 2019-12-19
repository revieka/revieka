<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style >
    	.bt{
    		display: inline-block;
    	}
    </style>
  </head>
  <body>
    
    <?php 
include 'fun.php';
 $query = $conn->query("SELECT * FROM bedengan WHERE categori = 1"); ?>
<?php while($a = $query->fetch_array()) {?>
	<div class="content mt-3 " style="background-color: grey;">
		<div class="col-sm-4  bt">

			 <div class="bt">
				<img  src="admin/assets/img/kost/bedengan/<?= $a['foto'];?>" class="mt-3 bt"    width="300px" height="200px" /> <h5 class="card-title"><?= $a['nama_perumahan'];?></h5>
							    <h6 class="card-subtitle mb-2 text-muted"><?= $a['nama_perumahan'];?></h6>
							   <div class="card-text"  style="overflow: hidden; width:200px;hyphens: auto;height: 100px;">  <?= $a['deskripsi'];?>. </div>
							    <a  class="btn btn-success  as" href=" detail.php?id=<?= $a['perumhan_id'];?>"  >
							  <i class="fas fa-info-circle"></i>Lihat Full Detail
							</a> 
						</div>	 
					<div class="Price"><strong>Harga :</strong>Rp.<?= number_format($a['harga']);?></div>
						 <div class="ab">
							<p>  <a class="btn btn-secondary as "   href="Favorit.php?id_produk=<?= $a['id_produk'];?>"><i class="fas fa-shopping-cart"></i>Favorit</a> </p>
						</div>				 
							  
							 
			 <?php } ?>
			 

 

<!-- Modal -->
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

