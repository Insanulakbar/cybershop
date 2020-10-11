      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi Penjualan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url();?>dasboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Administrator</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url();?>transaksi">Transaksi Penjualan</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
                <form action="<?php echo base_url(); ?>transaksi" method="post"> 
                  <div class="card">
                    <div class="card-header">
                      <h4>Input product yang diinginkan</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Pilih Product</label>
                        <select  data-placeholder="product_name" id="product_name" name="product_name" class="form-control" width="100%">
                          <option>Pilih Product</option>
                          <?php $product_name = $this->db->query("SELECT * FROM tbl_product"); 
                            foreach ($product_name->result() as $key) { ?>
                          <option value="<?php echo $key->product_nama; ?>"><?php echo $key->product_nama; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pilih jumlah product</label>
                        <input type="number" name="kuantitas" id="kuantitas" class="form-control">
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              
              <div class="col">
                <div class="card-body">
                  <div class="table-responsive" width='100%'>
                    <table class="table table-striped">
                      <thead>
                        <?php foreach ($transaksi->result() as $key) { ?>
                        <h3><?php 
                            $value = number_format($key->product_harga * $kuantitas);
                            echo "Product : ".$key->product_nama;
                            echo "<br>";
                            echo "Total Pembayaran : ".'Rp '.$value;
                            echo "<br>";
                          ?></h3>
                        <?php } ?>
                      </thead>
                    </table>
                  </div>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                  <tr>
                    <th style="text-align:center">No</th>
                    <th style="text-align:center">Kode Produk</th>
                    <th style="text-align:center">Nama Produk</t>
                    <th style="text-align:center">Kategori</th>
                    <th style="text-align:center">Kuantias</th>
                    <th style="text-align:center">Harga</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; foreach ($transaksi->result() as $key) { ?>
                  <tr>
                    <td style="text-align:center"><?php echo $no++; ?></td>
                    <td><?php echo $key->product_id; ?></td>
                    <td><?php echo $key->product_nama; ?></td>
                    <td><?php echo $key->product_category; ?></td>
                    <td style="text-align:center"><?php $value=number_format($kuantitas); echo $value ?></td>
                    <td style="text-align:center"><?php 
                          $value = number_format($key->product_harga * $kuantitas); 
                          echo 'Rp '.$value;
                        ?>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>