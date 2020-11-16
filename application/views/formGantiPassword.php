<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
</div>

<div class="card" style="width:60%; margin-bottom:100px;">
        <div class="card-body">
            <form  action="<?php echo base_url('GantiPassword/gantiPasswordAksi'); ?>" enctype="multipart/form-data" method="POST">
                  <div class="form-group">
                      <label>Password Baru</label>
                      <input type="password" name="passBaru" class="form-control">
                      <?php echo form_error('passBaru','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Ulangi Password</label>
                      <input type="password" name="ulangPass" class="form-control">
                      <?php echo form_error('ulangPass','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  
                  <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

</div>


</div>