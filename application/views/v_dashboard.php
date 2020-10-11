      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total PC</h4>
                  </div>
                  <div class="card-body">
                    <?php foreach ($cat_pc->result() as $key) { ?>
                      <?php echo $key->stok; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Laptop</h4>
                  </div>
                  <div class="card-body">
                    <?php foreach ($cat_laptop->result() as $key) { ?>
                      <?php echo $key->stok; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Notebook</h4>
                  </div>
                  <div class="card-body">
                    <?php foreach ($cat_notebook->result() as $key) { ?>
                      <?php echo $key->stok; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Smartphone</h4>
                  </div>
                  <div class="card-body">
                    <?php foreach ($cat_smartphone->result() as $key) { ?>
                      <?php echo $key->stok; ?>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Jumlah All Product</h4>
                </div>
                <div class="card-body">
                  <?php  
                    foreach ($all->result() as $key) { 
                      $btn = '';
                        if ($key->product_category == 'PC') {
                          $btn = 'progress-bar bg-success';
                        } else if ($key->product_category == 'Laptop') {
                          $btn = 'progress-bar bg-danger';
                        } else if ($key->product_category == 'Notebook') {
                          $btn = 'progress-bar bg-info';
                        } else if ($key->product_category == 'Smartphone') {
                          $btn = 'progress-bar bg-warning';
                        }
                  ?>
                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted"><?php echo $key->product_stok; ?></div>
                    <div class="font-weight-bold mb-1"><?php echo $key->product_nama; ?></div>
                    <div class="progress" data-height="8">
                      <div class="<?php echo $btn; ?>" role="progressbar" data-color="red" data-width="<?php echo $key->product_stok; ?>%" aria-valuenow="<?php echo $key->product_stok; ?>" aria-valuemin="0" aria-valuemax="1000"></div>
                    </div>
                  </div>
                  <?php } ?>

                  <!-- <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">1,880</div>
                    <div class="font-weight-bold mb-1">Facebook</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">1,521</div>
                    <div class="font-weight-bold mb-1">Bing</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">884</div>
                    <div class="font-weight-bold mb-1">Yahoo</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">473</div>
                    <div class="font-weight-bold mb-1">Kodinger</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" data-width="28%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>

                  <div class="mb-4">
                    <div class="text-small float-right font-weight-bold text-muted">418</div>
                    <div class="font-weight-bold mb-1">Multinity</div>
                    <div class="progress" data-height="3">
                      <div class="progress-bar" role="progressbar" data-width="20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>