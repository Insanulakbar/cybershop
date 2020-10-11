      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Administrator</a></div>
              <div class="breadcrumb-item"><a href="<?php echo base_url();?>laporan">Laporan</a></div>
            </div>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                   <h4></h4>
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
                      <table class="table table-striped" width="100%">
                        <thead>
                          <tr>
                            <th style="text-align:center;">No</th>
                            <th style="text-align:center;">Laporan</th>
                            <th style="text-align:center;">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="text-align:center;">1</td>
                            <td>Laporan Stok PC</td>
                            <td style="text-align:center;">
                              <a class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url();?>laporan/export_pc"><span class="fa fa-file-pdf"></span> Export PDF</a>
                            </td>
                          </tr>

                           <tr>
                            <td style="text-align:center;">2</td>
                            <td>Laporan Stok Laptop</td>
                            <td style="text-align:center;">
                              <a class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url();?>laporan/export_laptop"><span class="fa fa-file-pdf"></span> Export PDF</a>
                            </td>
                          </tr>

                           <tr>
                            <td style="text-align:center;">3</td>
                            <td>Laporan Stok Notebook</td>
                            <td style="text-align:center;">
                              <a class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url();?>laporan/export_notebook"><span class="fa fa-file-pdf"></span> Export PDF</a>
                            </td>
                          </tr>

                          <tr>
                            <td style="text-align:center;">4</td>
                            <td>Laporan Stok Smartphone</td>
                            <td style="text-align:center;">
                              <a class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url();?>laporan/export_smartphone"><span class="fa fa-file-pdf"></span> Export PDF</a>
                            </td>
                          </tr>

                          <tr>
                            <td style="text-align:center;">5</td>
                            <td>Laporan Stok Keseluruhan</td>
                            <td style="text-align:center;">
                              <a class="btn btn-sm btn-danger" target="_blank" href="<?php echo base_url();?>laporan/export_pdf"><span class="fa fa-file-pdf"></span> Export PDF</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
      </div>