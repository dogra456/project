<?php foreach($result_info as $row){ ?>
<div class="container p-3">
	<div class="row">
		<div class="col-lg-6">
			<div class="product-img">
				   <!-- Displaying product image dynamically -->
				<img src="<?= base_url()?>assets/img/<?= $row->product_img ?>" style="width: 100%; height: 450px;"  >
			</div>

		</div>
		<div class="col-lg-6">
				  <!-- Displaying product breadcrumb -->
				<h4><font color="#777">Home\T-Shirts \ Men's T-Shirts \Men's Printed T-Shirts\</font> </h4> 
				  <!-- Displaying product description -->
				<div><h1><?= $row->product_description ?></h1></div>
				   <!-- Displaying product name -->
				<div><h1><?= $row->product_name ?></h1></div>
				 <!-- Displaying product price -->
				<h2> <font color="gray"><del>₹499.00</del></font> <font color="#F2BB2F"><?=$row->product_price?></font></h2>
				<div>
					 <!-- Form for adding product to cart -->
					<form  method="post" action="<?=  base_url()?>cart">
						   <!-- Input for quantity selection -->
                        <input type="number" name="qty" style="width:80px;">
                          <!-- Hidden input for product ID -->
						<input type="hidden" name="last_id" value="<?= $row->product_id?>">
						   <!-- Submit button to add item to cart -->
						<input type="submit" value="Add to cart">
						
					</form>
					

				<!-- Additional product details -->
				<p><b>SKU:</b><font color="gray"> N/A</font></p>
       			<p><b>Categories:</b><font color="gray"> T-Shirts, Men's Printed T-Shirts, Men's T-Shirts</font></p>
  				 <p><b>Tag:</b> <font color="gray">Printed T-Shirts</font></p>
				</div>

				</div>
		</div>
	</div>
</div><?php } ?>