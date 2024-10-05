<div style="background: #21222D;">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <!-- Logo -->
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo5.png" width="100px"></a>
      </div>
      <div class="col-lg-6 col-sm-6">
        <!-- Middle Navigation Items -->
        <nav class="navbar navbar-expand-sm p-0">
          <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Shop All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Men's T-shirts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Women's T-shirts</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="col-lg-3 col-sm-6">
        <!-- Icons and Additional Content -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <?php if ($this->session->userdata('user_id')): ?>
              <a class="nav-link text-light" href="<?= base_url()?>login/logout">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i> Rs.25000/-
                Logout
              </a>
            <?php else: ?>
              <a class="nav-link text-light" href="<?= base_url() ?>login">
                <lord-icon src="https://cdn.lordicon.com/kthelypq.json" trigger="hover" colors="primary:#ffffff" style="padding-top: 5px;"></lord-icon>
              </a>
            <?php endif; ?>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="<?= base_url()?>cart">
              <lord-icon src="https://cdn.lordicon.com/mfmkufkr.json" trigger="hover" colors="primary:#ffffff" style="padding-top: 5px;"></lord-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
