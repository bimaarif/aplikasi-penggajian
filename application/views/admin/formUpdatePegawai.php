<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
</div>


    <div class="card" style="width:60%; margin-bottom:100px;">
        <div class="card-body">
            <?php foreach($pegawai as $p): ?>
            <form  action="<?php echo base_url('admin/dataPegawai/updateDataAksi'); ?>" enctype="multipart/form-data" method="POST">
                  <div class="form-group">
                      <label>NIK</label>
                      <input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai ?>">
                      <input type="text" name="nik" class="form-control" value="<?php echo $p->nik ?>">
                      <?php echo form_error('nik','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Nama Pegawai</label>
                      <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $p->nama_pegawai ?>">
                      <?php echo form_error('nama_pegawai','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" value="<?php echo $p->username ?>">
                      <?php echo form_error('username','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" name="password" class="form-control" value="<?php echo $p->password ?>">
                      <?php echo form_error('password','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Jenis kelamin</label>
                      <select name="jenis_kelamin" class="form-control">
                          <option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                      </select>
                      <?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Jabatan</label>
                      <select name="jabatan" class="form-control">
                          <option value="<?php echo $p->jabatan ?>"><?php echo $p->jabatan ?>
                          <?php foreach ($jabatan as $j) :?>
                          <option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
                          <?php endforeach; ?>
                      </select>
                      <?php echo form_error('jabatan','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Tanggal Masuk</label>
                      <input type="date" name="tanggal_masuk" class="form-control" value="<?php echo $p->tanggal_masuk ?>">
                      <?php echo form_error('tanggal_masuk','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Status</label>
                      <select name="status" class="form-control">
                          <option value="<?php echo $p->status ?>"><?php echo $p->status ?></option>
                          <option value="Pegawai Tetap">pegawai tetap</option>
                          <option value="Pegawai Tidak tetap">Pegawai tidak tetap</option>
                      </select>
                      <?php echo form_error('status','<div class="text-small text-danger"></div>'); ?>
                  </div>

                  <div class="form-group">
                      <label>Foto</label>
                      <input type="file" name="photo" class="form-control">
                  </div>

                  <div class="form-group">
                      <label>Hak Akses</label>
                      <select name="hak_akses" class="form-control">
                            <option value="<?php echo $p->hak_akses ?>">
                                <?php if($p->hak_akses == '1'){
                                    echo "Admin";
                                }else{
                                    echo "pegawai";
                                }?>
                            </option>
                            <option value="1">admin</option>
                            <option value="2">Pegawai</option>
                      </select>
                  </div>

                  <button type="submit" class="btn btn-success">Submit</button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>

</div>