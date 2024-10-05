
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 text-center border rounded bg-light my-5">
                    <h1>CART</h1>
                </div>
                <div class="col-md-12">
                    <table class="table" width="100%" >
                        <thead>
                            <tr class="text-center">
                                <th scope="col">S.NO</th>
                                <th scope="col">product image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">quantity</th>
                                <th scope="col">total price</th>
                                <th scope="col" colspan="2">UPDATE</th>
                            </tr>
                        </thead>
                        <?php
                        $i = 1;
                        $total = 0;
                        foreach ($result as $row) { ?>
                        <tbody>
                            <tr class="text-center">
                                <th><?= $i ?></th>
                                <th scope="row">
                                    <img src="<?=base_url()?>assets/img/<?= $row->product_img ?>" style="height: 100px;">
                                </th>
                                <td><?= $row->product_name ?></td>
                                <td>
                                    <i class="fa-solid fa-indian-rupee-sign"></i><?php echo $row->product_price ?>
                                </td>
                                <td>
                                    <p class="old_qty"><?= $row->qty ?></p>
                                </td>
                                <td>
                                    <form action="<?= base_url() ?>cart/save_qty" method="POST">
                                        <input type="number" class="form-control new_qty" name="new_qty" style="display: none;" value="<?= $row->qty ?>">
                                    
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <?php
                                        $sub_total = $row->product_price * $row->qty ;
                                        echo $sub_total;
                                    ?>
                                </td>
                                
                                <td>

                                    <input type="hidden" name="product_id" value="<?=$row->product_id ?>">
                                    <button type="button" class="btn btn-success edit-btn">Edit</button>
                                    <button type="submit" name="save_qty" style="display: none;" class="btn btn-primary save">Save</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?=base_url() ?>cart/delete" method="post">
                                    <input type="hidden" name="product_id" value="<?= $row->product_id ?>">
                                    <button type="submit" class="btn btn-danger delete">Delete</button>
                                </form>
                        
                            </td>
                        </tr>
                    </tbody>
                    <?php
                    $total = $sub_total + $total;
                    $i++;
                    }
                    ?>
                    <tr>
                        <td colspan="4" style="text-align: center"><h1>GRAND TOTAL = <?php echo $total ;?></h1></td>
                        <td colspan="4" class="text-end">
                                <a href="<?=base_url('checkout') ?>"><button type="submit" class="btn btn-danger">Checkout</button></a>
                                
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
    
            <script type="text/javascript">
    $(document).ready(function(){
        $(".edit-btn").click(function(){
            var row = $(this).closest("tr");
            row.find(".edit").hide();
            row.find(".edit-btn").hide();
            row.find(".old_qty").hide();
            row.find(".delete").hide();
            row.find(".save").show();
            row.find(".new_qty").show();
        });
    });
</script>
