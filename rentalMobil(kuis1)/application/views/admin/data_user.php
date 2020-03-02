<div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Data Customer</h1>
        </div>

        <a href="<?= base_url('admin/data_user/tambah_user')?>" class="btn btn-primary mb-3"> <i class="fas fa-plus"></i>  Tambah Data</a>
        <?= $this->session->flashdata('pesan') ?>
        <table class="table table table-hover table-striped table-bordered" id="data_table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                    <th>No. Telp</th>
                    <th>No. KTP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     
                    $no=1;
                    foreach($user as $mb) : 
                        if($mb->level==2) :
                    ?>                    
                        <tr>
                            <td><?= $no++?></td>
                            <td><?= $mb->nama?></td>
                            <td><?= $mb->email?></td>
                            <td><?= $mb->alamat?></td>
                            <td><?= $mb->gender?></td>
                            <td><?= $mb->no_telp?></td>
                            <td><?= $mb->no_ktp?></td>
                            <td>
                                <div class="input-group-append">
                                <a href="<?= base_url('admin/data_user/delete_user/').$mb->id_user?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                <a href="<?= base_url('admin/data_user/edit_user/').$mb->id_user?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endif?>
                    <?php endforeach; ?>
            </tbody>

        </table>
    </section>
</div>