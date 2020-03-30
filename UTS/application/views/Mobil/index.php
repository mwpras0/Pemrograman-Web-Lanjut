<br><br>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-15">
            <h2>Data Mobil</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th>No</th>
                    <th>type</th>
                    <th>merk</th>
                    <th>no_plat</th>
                    <th>warna</th>
                    <th>tahun</th>
                    <th>harga</th>
                    <th>status</th>
                    <th>gambar</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i= 0; $i < count($data_mobil['data']); $i++) { ?>
                    
                    <tr>
                        <td> <?= $i+1 ?></td>
                        <td> <?= $data_mobil['data'][$i]['type'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['merk'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['no_plat'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['warna'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['tahun'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['harga'] ?></td>
                        <td> <?= $data_mobil['data'][$i]['status'] ?></td>
                        <td> <img src="<?= $data_mobil['data'][$i]['gambar'] ?>" height="130" width="200"></td>                        
                    </tr>
                    
                    <?php } ?>
                               
                </tbody>
            </table>
        </div>
    </div>
</div>