<center class="pt-5" data-aos="zoom-in-up"><h1>Our Collection</h1></center>
<!-- banner end -->
<div class="container">
	<div class="row pt-5">
    <?php foreach($result_product as $row): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 mt-2" data-aos="zoom-in-down">
                <div class="scar zoom" >
                <a  href="<?= base_url()?>product/productinfo/<?= $row->product_id?>" style="text-decoration: none;">
                    <img src="assets/img2/product/<?= $row->product_img ?>" width="100%" height="250px">
                  <!--   <div class="m4a1">
                        <div class="box2">
                            <div class="row">
                                <div class="col-4">
                                    <a href="<?= base_url() ?>cart" style="color: black;"><i class="fa-solid fa-cart-shopping"></i></a>
                                </div>
                                <div class="col-4">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="col-4">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="text-center text-dark ">
                        <h4><?= $row->product_name ?></h4>
                        <span><h5><i class="fa-solid fa-indian-rupee-sign"></i><?= $row->product_price ?></h5></span>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</div>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


