<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tambah Pegawai</title>
    <!-- css -->
    <?php $this->load->view('include/base_css'); ?>
  </head>
  <body id="page-top">
    <!-- navbar -->
    <?php $this->load->view('include/base_nav'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      <!-- Basic Card Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Pegawai</h6>
        </div>
        <div class="card-body">             
            <div class="card-body">
                <form method="post" action="<?php echo base_url('pegawai/tambahpegawai') ?>">
                <div class="form-group row">
                  <div class="col-sm-6 mb-2 mb-sm-0">
                    <input type="text" class="form-control pull-left" name="namefront" required="" placeholder="Nama Depan">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class=" form-control" name="nameback" required="" placeholder="Nama Belakang">
                  </div>
                  <?php echo form_error('name'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                <div class="form-group row">
                  <input type="email" class="form-control form-control" required="" placeholder="Email Address" name="email" value="<?php echo set_value('email') ?>">
                  <?php echo form_error('email'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                <div class="form-group row">
                  <input type="number" class="form-control form-control" required="" placeholder="Nomor HP" name="no_hp" value="<?php echo set_value('no_hp') ?>">
                  <?php echo form_error('no_hp'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                 <div class="form-group row">
                  <label>Alamat</label>
                  <textarea type="text" class="form-control form-control" required="" placeholder="Alamat" name="alamat"> </textarea>
                  <?php echo form_error('no_hp'),'<small class="text-danger pl-3">','</small>'; ?>
                </div>
                 <div class="form-group row">
                  <select class="form-control" name="kelamin" required>
                    <option value="" selected disabled="">-Pilih Kelamin-</option>
                    <option value="Laki-Laki" >Laki-Laki</option>
                    <option value="Prempuan" >Prempuan</option>
                  </select>
                </div>
                <a class="btn btn-default" href="<?php echo base_url('pegawai') ?>"> Kembali</a>
                <button type="submit" class="btn btn-primary ">
                  Tambah Pegawai
                </button> 
              </form>
          </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->
  <!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

  <!-- Footer -->
  <?php $this->load->view('include/base_footer'); ?>
  <!-- End of Footer -->
<?php $this->load->view('include/base_js'); ?>
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
            </div>
          </div>
        </div>
        </div>
</body>
</html>