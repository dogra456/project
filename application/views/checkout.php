
<div class="conatiner">
    <div class="card mt-4 table-responsive">
        <div class="card-header" style="background-color:floralwhite;">
            <h5 class="fs-5">PROCEED TO CHECKOUT :</h5>
        </div>
    
    <div class="card-body">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center fw-bold fs-5 text-dark mt-2 mb-3">COSTOMER DETAILS</div>
        <div class="card">
            <ul class="list-group list-group-flush text-uppercase fw-semibold fs-6">
                <?php 
  foreach($result_p as $shipping_row)
     {
        ?>
 
                <li class="list-group-item"><span class="spacing">Name : </span>
                <?= $shipping_row->fullname?></li>

                  <li class="list-group-item"><span class="spacing">Username : </span>
                <?= $shipping_row->username?></li>


               
                <li class="list-group-item"><span class="spacing">Address Line 1 : </span>
                   <?= $shipping_row->address?></li>
               
                <li class="list-group-item"><span class="spacing">Pincode: </span>
                   <?= $shipping_row->pin_code?></li>
               
                
                <li class="list-group-item"><span class="spacing">Phone : </span>+91 <?= $shipping_row->phone_number?></li>

                <li class="list-group-item"><span class="spacing">E Mail : </span>
                   <?= $shipping_row->email?></li>
               
            <?php } ?>
            </ul>
</div>
        </div>
        <div class="col-md-6">
            <table class="table caption-top">
                <caption class="text-center fw-bold fs-5 text-dark">CART DETAILS</caption>


                <thead>
                    <th></th>
                    <th>Product name</th>
                    <th>Product price</th>
                    <th></th>
                    <th>Quantity</th>
                    <th> Product Amount</th>
                </thead>
  <?php 
  $i=1;
  foreach($result_r as $row)
     {
        ?>
                <tbody style="font-size: 13px;">
                    <tr class="align-middle fw-semibold">
                    <th scope="row"><?= $i ?></th>
                   <td><?= $row->product_name?></td>
                    <td>&#x20B9; <?= $row->product_price?></td>
                    <td>&#x2718;</td>
                    <td><?= $row->qty?></td>
                    <td>&#x20B9; <?= $sub_total = $row->product_price*$row->qty?></td>
                    </tr>
  <?php
    $total = $sub_total + $total;
    $gst =$total*0.18;
    $grandtotal =$gst+$total;
    $i++;
    }
    ?>
                    <tr>
                        <table class="table table-success">
                        <tr>
                        <td>
                        <p class="fw-bold mb-0 fs-5">SUBTOTAL = &#x20B9; <?= $total ?></p>

                        <p class="fw-bold mb-0 fs-5 ">GST(%18)=<?=$gst?></p>
                        <p class="fw-bold mb-0 fs-5 ">Grand Total =<?= $grandtotal?></p>
                        </td>
                        </tr>
                        </table>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div>


    <div class="row">
         <div class="col-lg-6 ps-5 mt-2">   <a href="cart" class="btn btn-primary" role="button">Back</a>
         </div>

            <div class="col-lg-6 ps-5 mt-2">
             <form action="<?=base_url() ?>order" method="post">
             <input type="hidden" name="price" value="<?= $grandtotal ?>">
                <button class="btn btn-primary" type="submit" >confirm order</button>
             </div>   
             </form>
         </div>
       
    </div>



