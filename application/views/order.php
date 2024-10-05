<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> 
<div class="card-header" style="background-color:floralwhite;">
    <div class="row">
      <div class="col-6"><h5>Order Details :</h5></div>
    </div>
  </div>
  <div class="card-body table-responsive">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">customer id</th>
      <th scope="col">Order Id</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Date</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    </tr>
    <?php 
      $i=1;
       foreach($result as $row)
          {
             ?>
       <tbody>
         <tr class="align-middle">
           <th scope="row"><?= $i ?></th>
           <td><?= $row->user_id ?></td>
           <td><?= $row->order_id ?></td>
           <td>Rs.<?= $row->total_price ?></td>
           <td><?= $row->order_date ?></td>
           <td><a href="<?= base_url() ?>order_item?order_id=<?= $row->order_id ?>">View Details</a></td>    
         </tr>
       <?php
          $i++;
          }
        
          ?>
  </tbody>
</table>
