<div style="background: #21222D;">
  <div class="container" >
  <div class="row"> 
    <div class="col-lg-12 pt-2 col-sm-6 ">
      <nav class="navbar navbar-expand-sm ">
        <div class="col-lg-4 col-sm-2">
          <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo5.png"width="100px"></a>
          <button class="navbar-toggler bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          <div class="collapse navbar-collapse col-lg-4 pt-2 col-sm-6" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item  me-auto">
                <a class="nav-link" href="#">
                  <li class="nav-item dropdown ">
                    <a class="nav-link  text-light ms-auto " href="#">
                      Shop All
                    </a>
                  </li>
                </a>
              </li>
           
              <li class="nav-item">
                <a class="nav-link " href="#">
                  <li class="nav-item ">
                    <a class="nav-link  text-light" href="#" >Men's  t-shirts </a>
                  
                  </li>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?=base_url() ?>cart">
                  <li class="nav-item">
                    <a class="nav-link  text-light" href="#" role="button" data-bs-toggle="dropdown"  style="text: #A3A7ED ;">Women's t-shirts</a>
                  </li>
                </a>
              </li>
          </div>

          <div class="collapse navbar-collapse col-lg-4 pt-2 col-sm-6" id="mynavbar">

                           <!-- New Accessories Category -->
              <li class="nav-item ">
                <a class="nav-link"   href="#" data-bs-toggle="">
                  <?php 
                  if ($this->session->userdata('user_id')) {
                    ?>
                    <a style="text-decoration: none;" class="text-light" href="<?= base_url()?>login/logout">
                      <lord-icon
                          src="https://cdn.lordicon.com/whtfgdfm.json"
                           trigger="hover"
                    colors="primary:#4be1ec,secondary:#ffffff"
                            
                          style="width:54px;height:46px">
    
                      </lord-icon>
                    </a>
                   <?php 
                  }
             else{
                ?>
              </a>
                <a style="  text-decoration: none;" class="text-light nav-item" href="<?= base_url() ?>login">
            <lord-icon
                    src="https://cdn.lordicon.com/lhwyshcs.json"
                    trigger="hover"
                    colors="primary:#4be1ec,secondary:#ffffff"
                    style="width:54px;height:46px">
    </lord-icon>
             </a>
               <?php } ?>
                <a class="nav-links" href="<?= base_url()?>cart">

                      <lord-icon
                        src="https://cdn.lordicon.com/guothkao.json"
                        trigger="hover"
                        stroke="bold"
                        colors="primary:#4be1ec,secondary:#ffffff"
                        style="width:54px;height:46px">
                       </lord-icon>
                 </a>
              </li>
               
              <!-- End of New Accessories Category -->
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>
</div>


