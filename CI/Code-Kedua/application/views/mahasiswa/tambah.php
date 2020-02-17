<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                        <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="Nim">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control" name="jurusan">
                                <?php foreach($jurusan as $key): ?>
                                    <option value="<?= $key ?>" 
                                    selected><?= $key ?>
                                <?php endforeach; ?>
                                </option>
                                <!--<option selected>--------</option>
                                <option value="kimia">Kimia</option>
                                <option value="informatika">Informatika</option>
                                <option value="mesin">Mesin</option>--> 
                            </select>                                
                        </div>
                        <button type="submit" name="submit" class="btn btn-ptimary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>