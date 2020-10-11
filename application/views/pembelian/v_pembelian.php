      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Pembelian</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?php echo base_url();?>dasboard">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Administrator</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url();?>pembelian">Manajemen pembelian</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <h4><div class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Add Pembelian</a></div></a>
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
                          <th style="text-align:center">No</th>
                          <th style="text-align:center">Nama Produk</th>
                          <th style="text-align:center">Kategori</th>
                          <th style="text-align:center">Kuantitas</th>
                          <th style="text-align:center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $no=0;
                            foreach ($pembelian->result_array() as $a):
                                $no++;
                                $id=$a['pembelian_id'];
                                $nm=$a['pembelian_nama'];
                                $category=$a['pembelian_category'];             
                                $kuantitas=$a['pembelian_kuantitas'];
                        ?>
                        <tr>
                          <td style="text-align:center;"><?php echo $no;?></td>
                          <td><?php echo $nm;?></td>
                          <td><?php echo $category;?></td>
                          <td style="text-align:right"><?php $value=number_format($kuantitas); echo $value; ?></td>
                          <td style="text-align:center"> 
                              <a class="btn btn-xs btn-warning" href="#modalEditpembelian<?php echo $id?>" data-toggle="modal" title="Edit">Edit</a>
                              <a class="btn btn-xs btn-danger" href="#modalHapuspembelian<?php echo $id?>" data-toggle="modal" title="Hapus">Hapus</a>
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
                <h3 class="modal-title" id="myModalLabel">Add Pembelian</h3>
            </div>
           <form class="form-horizontal" method="post" action="<?php echo base_url().'pembelian/add_pembelian'?>" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama Product</label>
                        <div class="col-xs-9">
                            <input name="namapembelian" class="form-control" type="text" placeholder="Nama pembelian..." required>
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
                        <label class="control-label col-xs-3" >Jumlah kuantitas</label>
                        <div class="col-xs-9">
                            <input name="kuantitas" class="form-control" type="number" placeholder="kuantitas...">
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
                foreach ($pembelian->result_array() as $a) {
                  $no++;
                  $id=$a['pembelian_id'];
                  $nm=$a['pembelian_nama'];
                  $category=$a['pembelian_category'];           
                  $kuantitas=$a['pembelian_kuantitas'];
                ?>
                <div id="modalEditpembelian<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Edit Pembelian</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'pembelian/edit_pembelian'?>">
                        <div class="modal-body">

                        <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            
                        <div class="form-group">
                            <label class="control-label col-xs-3" >Nama Product</label>
                            <div class="col-xs-9">
                                <input name="namapembelian" class="form-control" type="text" value="<?php echo $nm;?>" placeholder="Nama pembelian..." required>
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
                            <label class="control-label col-xs-3" >kuantitas</label>
                            <div class="col-xs-9">
                                <input name="kuantitas" class="form-control" type="number" value="<?php echo $kuantitas;?>" placeholder="kuantitas..." >
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
                  foreach ($pembelian->result_array() as $a) {
                    $no++;
                    $id=$a['pembelian_id'];
                    $nm=$a['pembelian_nama'];
                    $category=$a['pembelian_category'];              
                    $kuantitas=$a['pembelian_kuantitas'];
                ?>
                <div id="modalHapuspembelian<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus pembelian</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'pembelian/delete_pembelian'?>">
                        <div class="modal-body">
                            <p>Yakin mau menghapus data pembelian ini..?</p>
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