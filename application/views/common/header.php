<nav class="navbar navbar-expand-lg "   data-aos="zoom-out-down" style="background: #21222D;" >

  <div class="container ">
          <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo5.png"width="100px" ></a>
    
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link "  href="#" style="color: #40B1BC;">Shop ALL</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " style="color: #40B1BC;" href="#" >Men's  t-shirts </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " style="color: #40B1BC;" href="#" >Women's  t-shirts </a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item ">
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
        <li class="nav-item ">
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
        </li>
 
      </ul>
      
    </div>
  </div>
</nav>