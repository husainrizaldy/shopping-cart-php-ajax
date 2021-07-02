<?php
session_start();
include 'config/connect.php';

$result = mysqli_query($conn, "SELECT * FROM em_product");
$output = '';
if (mysqli_num_rows($result) > 0) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		$output .='
		<div class="col-md-3 mb-3">
			<div class="card">
			<img src="content/'.$row["image"].'" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title">'.$row["name"].'</h5>
					<p>Price : <strong>'.number_format($row['price'],2,',','.').'</strong></p>';

	if (empty($_SESSION['username'])) {
		$output .='<button class="btn btn-block btn-info"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i> Detail</button>';
	} else {
		$output .='
		<input type="text" name="quantity" id="quantity' . $row["id_product"] .'" class="form-control mb-2" value="1">
		<input type="hidden" name="hidden_name" id="name'.$row["id_product"].'" value="'.$row["name"].'" class="form-control">
		<input type="hidden" name="hidden_price" id="price'.$row["id_product"].'" value="'.$row["price"].'" class="form-control">
		<button class="btn btn-block btn-info add_to_cart" name="add_to_cart" id="'.$row["id_product"].'"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i> Add to cart</button>';
	}
		$output .='
				</div>
			</div>
		</div>';
		}
} else {
	$output .='
	<div class="alert alert-danger" role="alert">
	  <h4 class="alert-heading">Stok Kosong!</h4>
	  <p>Produk sedang kosong, harap menunggu dilain waktu</p>
	</div>';
}
echo $output;