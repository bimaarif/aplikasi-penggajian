<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
</div>


<div class="card" style="width:60%; margin-bottom:100px;">
        <div class="card-body">
            <form  action="<?php echo base_url('admin/potonganGaji/tambahDataAksi'); ?>" enctype="multipart/form-data" method="POST">
                  <div class="form-group">
                      <label>Jenis Potongan</label>
                      <input type="text" name="potongan" class="form-control">
                      <?php echo form_error('potongan','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Jumlah Potongan</label>
                      <input type="number" name="jml_potongan" class="form-control">
                      <?php echo form_error('jml_potongan','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  
                  <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>


</div>