<div class="container">
    <div class="row mt-3 justify-content-center">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header text-center">
                    <h4>Form Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>

                    <?php endif; ?>


                    <form action="<?= base_url('mahasiswa/tambah')?>" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input name="nama" id="nama" type="text" class="form-control"  value="" placeholder="Nama Anda ...">
                            <small color="text-red"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="nrp">NRP :</label>
                            <input name="nrp" id="nrp" type="text" class="form-control" value="" aria-describedby="emailHelp" placeholder="NRP Anda ...">
                            <small><?= form_error('nrp'); ?></small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="email">Email :</label>
                            <input name="email" id="email" type="text" class="form-control" value="" aria-describedby="emailHelp" placeholder="Email Anda ...">
                            <small><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4 float-end">Tambah Data</button>
                    </form>
                    
                </div>
            </div>


        </div>
    </div>


</div>