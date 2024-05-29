<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Bus</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Bus</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Bus/store'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label for="nopol">Nomer Polisi</label>
                                    <input type="text" class="form-control" name="nopol" placeholder="Nomer Polisi" value="<?php echo old('nopol'); ?>">
                                    <?php if (isset($errors['nopol'])) { ?>
                                        <p class="text-danger"><?php echo $errors['nopol']; ?></p>
                                    <?php } ?>
                                </div>

                                <div class="form-group">
                                    <label for="nama_bus">Nama Bus</label>
                                    <input type="text" class="form-control" name="nama_bus" placeholder="Nama Bus" value="<?php echo old('nama_bus'); ?>">
                                    <?php if (isset($errors['nama_bus'])) { ?>
                                        <p class="text-danger"><?php echo $errors['nama_bus']; ?></p>
                                    <?php } ?>
                                </div>



                                <div class="form-group">
                                    <label for="keadaan_bus">Keadaan Bus</label>
                                    <select name="keadaan_bus" id="keadaan_bus" class="form-control">
                                        <option value="">pilih keadaan</option>
                                        <option value="baik" <?php echo $inputs['keadaan_bus'] == "baik" ? "selected" : ""; ?>>Baik</option>
                                        <option value="buruk" <?php echo $inputs['keadaan_bus'] == "buruk" ? "selected" : ""; ?>>Buruk</option>
                                        <option value="dalam perbaikan" <?php echo $inputs['keadaan_bus'] == "dalam perbaikan" ? "selected" : ""; ?>>Dalam Perbaikan</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="status_bus">Status Bus</label>
                                    <select name="status_bus" id="status_bus" class="form-control">
                                        <option value="">pilih status</option>
                                        <option value="masuk" <?php echo old('status_bus') == 'masuk' ? 'selected' : ''; ?>>Masuk</option>
                                        <option value="keluar" <?php echo old('status_bus') == 'keluar' ? 'selected' : ''; ?>>Keluar</option>
                                    </select>
                                    <?php if (isset($errors['status_bus'])) { ?>
                                        <p class="text-danger"><?php echo $errors['status_bus']; ?></p>
                                    <?php } ?>
                                </div>


                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('bus'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
