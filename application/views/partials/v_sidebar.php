      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"><img src="<?php echo base_url();?>assets/img/logo.png" height="80px"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          
          <ul class="sidebar-menu">   
            <?php $name = $this->session->userdata('username'); ?>
            <?php  $menu = $this->db->query("SELECT * FROM users where username='$name'"); 
            foreach ($menu->result() as $key) { ?>
              <?php if ($this->session->userdata='username' && $key->level == '1') { ?>
              <li class="nav-item dropdown active">
                <a href="<?php echo base_url();?>dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>         
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Administrator</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url();?>users">Manajemen User</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Product</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="<?php echo base_url();?>product">Daftar Ketersedian Product</a></li>
                  <li><a class="nav-link" href="<?php echo base_url();?>pembelian">Pembelian Product</a></li>
                </ul>
              </li>              
              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>transaksi"><i class="fas fa-th-large"></i> <span>Transaksi Penjualan</span></a>
              </li>            
              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>laporan"><i class="far fa-file-alt"></i> <span>Laporan</span></a>
              </li>

            <?php } else if ($this->session->userdata='username' && $key->level == '2') { ?>
              <li class="nav-item dropdown active">
                <a href="<?php echo base_url();?>dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>

              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>laporan"><i class="far fa-file-alt"></i> <span>Laporan</span></a>
              </li>

            <?php } else if ($this->session->userdata='username' && $key->level == '3') { ?>
              <li class="nav-item dropdown active">
                <a href="<?php echo base_url();?>dashboard"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?php echo base_url();?>transaksi"><i class="fas fa-th-large"></i> <span>Transaksi Penjualan</span></a>
              </li>   
            <?php } } ?>
          </ul>
        </aside>
      </div>