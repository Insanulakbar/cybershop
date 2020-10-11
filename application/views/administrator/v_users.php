      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Users</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Administrator</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url();?>users">Manajemen Users</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <h4><div class="btn btn-sm btn-success" data-toggle="modal" data-target="#largeModal"><span class="fa fa-plus"></span> Add Users</a></div></a>
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
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Hak Akses</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $no=0;
                            foreach ($users->result_array() as $a):
                              $no++;
                              $id=$a['id'];
                              $name=$a['name'];
                              $username=$a['username'];
                              $password=$a['password'];
                              $level=$a['level'];
                          ?>
                          <tr>
                            <td style="text-align:center;"><?php echo $no;?></td>
                            <td><?php echo $name;?></td>
                            <td><?php echo $username;?></td>
                            <td><?php echo $password;?></td>
                            <td><?php 
                                if ($level == '1') {
                                  echo 'Admin';
                                } else if ($level == '2') {
                                  echo 'Pimpinan';
                                } else if ($level == '3') {
                                  echo 'Kasir';
                                }
                                ?>
                            </td>
                            <td>
                              <a class="btn btn-xs btn-danger" href="#modalHapusUsers<?php echo $id?>" data-toggle="modal" title="Hapus">Hapus</a>
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
                <h3 class="modal-title" id="myModalLabel">Add Users</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'auth/proses_register'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="name" class="form-control" type="text" placeholder="Input Nama..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-9">
                            <input name="username" class="form-control" type="text" placeholder="Input Username..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-9">
                            <input name="password" class="form-control" type="password" placeholder="Input Password..." style="width:280px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Hak Akses</label>
                        <div class="col-xs-9">
                            <select name="level" class="form-control" style="width:280px;" required>
                                <option value="1">Admin</option>
                                <option value="2">Pimpinan</option>
                                <option value="3">Kasir</option>
                            </select>
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

            <!-- ============ MODAL HAPUS =============== -->
                <?php
                    foreach ($users->result_array() as $a) {
                        $id=$a['id'];
                        $name=$a['name'];
                        $username=$a['username'];
                        $password=$a['password'];
                        $level=$a['level'];
                    ?>
                <div id="modalHapusUsers<?php echo $id?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="myModalLabel">Hapus Pengguna</h3>
                    </div>
                    <form class="form-horizontal" method="post" action="<?php echo base_url().'users/delete_users'?>">
                        <div class="modal-body">
                            <p>Apakah anda yakin akan menghapus pengguna <b><?php echo $name;?></b> ?</p>
                                    <input name="kode" type="hidden" value="<?php echo $id; ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
                </div>
                </div>
            <?php
        }
        ?>