<!-- Begin Page Content -->
<div class="container-fluid" style="margin-bottom:100px">

<!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title; ?></h1>
        </div>

        <?php echo $this->session->flashdata('pesan'); ?>

        <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('admin/dataPegawai/tambahData') ?>"><i class="fas fa-plus"></i> Tambah Pegawai</a>
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Nama Pegawai</th>
                    <th class="text-center">Jenis kelamin</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Tanggal Masuk</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Hak Akses</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>  
                <?php $no=1; foreach($pegawai as $p): ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $p->nik ?></td>
                        <td><?php echo $p->nama_pegawai ?></td>
                        <td><?php echo $p->jenis_kelamin ?></td>
                        <td><?php echo $p->jabatan ?></td>
                        <td>
                            <?php 
                                $date = date_create($p->tanggal_masuk);
                                echo date_format($date, 'd F Y'); 
                            ?>
                        </td>
                        <td><?php echo $p->status ?></td>
                        <td><img src="<?php echo base_url().'assets/photo/'.$p->photo ?>" width="50px"></td>
                            <?php if($p->hak_akses == '1') { ?>
                                <td>Admin</td>
                            <?php }else{ ?>
                                <td>Pegawai</td>
                            <?php } ?>
                        <td>
                            <center>
                            <a class="btn btn-sm btn-primary" href="<?php echo base_url('admin/dataPegawai/updateData/'.$p->id_pegawai); ?>"><i class="fas fa-edit"></i></a>

                            <a onclick="return confirm('yakin hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPegawai/deleteData/'.$p->id_pegawai); ?>"><i class="fas fa-trash"></i></a>
                            </center>
                        </td>
                    </tr>        
                <?php endforeach; ?>
                </tbody>
            </table>
</div>        