      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Product</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url();?>dasboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Administrator</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url();?>product">Manajemen Product</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <h4><div class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Add Product</a></div></a>
                   <label></h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                        <tr>
                          <th style="text-align:center;">No</th>
                          <th style="text-align:center;">Kode Produk</th>
                          <th style="text-align:center;">Nama Produk</th>
                          <th style="text-align:center;">Kategori</th>
                          <th style="text-align:center;">Harga</th>
                          <th style="text-align:center;">Stok</th>
                          <th style="text-align:center;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $no=0;
                            foreach ($product->result_array() as $a):
                                $no++;
                                $id=$a['product_id'];
                                $nm=$a['product_nama'];
                                $category=$a['product_category'];
                                $harga=$a['product_harga'];                     
                                $stok=$a['product_stok'];
                        ?>
                        <tr>
                          <td style="text-align:center;"><?php echo $no;?></td>
                          <td><?php echo $id;?></td>
                          <td><?php echo $nm;?></td>
                          <td><?php echo $category;?></td>
                          <td style="text-align:right;"><?php $value = number_format($harga); echo 'Rp '.$value; ?></td>
                          <td style="text-align:right;"><?php $value = number_format($stok); echo $value; ?></td>
                          <td style="text-align:center;"> 
                              <a class="btn btn-xs btn-warning" href="#modalEditProduct<?php echo $id?>" data-toggle="modal" title="Edit">Edit</a>
                              <a class="btn btn-xs btn-danger" href="#modalHapusProduct<?php echo $id?>" data-toggle="modal" title="Hapus">Hapus</a>
                          </td>
                        </tr>
                        <?php endforeach;?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>

          <!-- ============ MODAL ADD =============== -->
            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="myModalLabel">Add Product</h3>
            </div>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'product/add_product'?>" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Product</label>
                        <div class="col-xs-9">
                            <input name="namaproduct" class="form-control" type="text" placeholder="Nama product..." required>
                        </div>
                    </div>
          
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Kategori</label>
                        <div class="col-xs-9">
                             <select name="category" class="form-control" style="width:280px; data-live-search="true" title="Pilih category" data-width="100%" placeholder="Pilih category" required>
                                <option>PC</option>
                                <option>Laptop</option>
                                <option>Notebook</option>
                                <option>Smartphone</option>
                             </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" class="form-control" type="number" placeholder="Harga ..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Stok</label>
                        <div class="col-xs-9">
                            <input name="stok" class="form-control" type="number" placeholder="Stok...">
                        </div>
                      </div>        
                    </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
           </div>

              <!-- ============ MODAL EDIT =============== -->
              <?php
                foreach ($product->result_array() as $a) {
                  $no++;
                  $id=$a['product_id'];
                  $nm=$a['product_nama'];
                  $category=$a['product_category'];
                  $harga=$a['product_harga'];                     
                  $stok=$a['product_stok'];
                ?>
                <div id="modalEditProduct<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Product</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'product/edit_product'?>">
                        <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Kode Product</label>
                            <div class="col-xs-9">
                                <input name="kodeproduct" class="form-control" type="text" value="<?php echo $id;?>" placeholder="Kode product..." readonly>
                            </div>
                        </div>
            
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Product</label>
                            <div class="col-xs-9">
                                <input name="namaproduct" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Nama product..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >category</label>
                            <div class="col-xs-9">
                                 <select name="category" class="form-control" data-live-search="true" title="Pilih category" data-width="100%" placeholder="Pilih category"  required>
                                    <option><?php echo $category; ?></option>
                                    <option>PC</option>
                                    <option>Laptop</option>
                                    <option>Notebook</option>
                                    <option>Smartphone</option>
                                 </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Harga</label>
                            <div class="col-xs-9">
                                <input name="harga" class="form-control" type="number" value="<?php echo $harga;?>" placeholder="Harga ..." required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-xs-3" >Stok</label>
                            <div class="col-xs-9">
                                <input name="stok" class="form-control" type="number" value="<?php echo $stok;?>" placeholder="Stok..." >
                            </div>
                        </div>



                    </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <?php } ?>

                <!-- ============ MODAL HAPUS =============== -->
                <?php
                  foreach ($product->result_array() as $a) {
                    $no++;
                    $id=$a['product_id'];
                    $nm=$a['product_nama'];
                    $category=$a['product_category'];
                    $harga=$a['product_harga'];                     
                    $stok=$a['product_stok'];
                ?>
                <div id="modalHapusProduct<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus Product</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'product/delete_product'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data Product ini..?</p>
                            <input name="id" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-primary">Hapus</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
                <?php } ?>