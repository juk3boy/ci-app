<div class="container">
    <div class="row mt-3">

        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h4>Form Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>

                    <?php endif; ?>


                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama :</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="Nama Anda ...">
                            <small color="text-red"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="nrp">NRP :</label>
                            <input type="text" class="form-control" name="nrp" id="nrp" value="" aria-describedby="emailHelp" placeholder="NRP Anda ...">
                            die; ?>
                            <small><?= form_error('nrp'); ?></small>
                        </div>

                        <div class="form-group mt-2">
                            <label for="email">Email :</label>
                            <input type="text" class="form-control" name="email" id="email" value="" aria-describedby="emailHelp" placeholder="Email Anda ...">
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