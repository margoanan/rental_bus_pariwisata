<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Bus</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Bus</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('Bus/update'); ?>" method="post">
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
                                    <label for="nama_bus">Nomer Polisi</label>
                                    <input type="text" value="<?= $bus['nopol'] ?>" class="form-control" name="nopol" placeholder="nopol">
                                </div>

                                <div class="form-group">
                                    <label for="nama_bus">Nama Bus</label>
                                    <input type="text" value="<?= $bus['nama_bus'] ?>" class="form-control" name="nama_bus" placeholder="nama">
                                </div>

                                <div class="form-group">
                                    <label for="keadaan_bus">Keadaan Bus</label>
                                    <select name="keadaan_bus" id="keadaan_bus" class="form-control">
                                        <option value="">pilih keadaan</option>
                                        <option value="baik" <?php echo $inputs['keadaan_bus'] == "baik" ? "selected" : ""; ?>>Baik</option>
                                        <option value="buruk" <?php echo $inputs['keadaan_bus'] == "buruk" ? "selected" : ""; ?>>Buruk</option>
                                        <option value="dalam perbaikan" <?php echo $inputs['keadaan_bus'] == "dalam perbaikan" ? "selected" : ""; ?>>Dalam Perbaikan</option>
                                        value="<?= $bus['keadaan_bus'] ?>"
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="status_bus">Status Bus</label>
                                    <select name="status_bus" id="status_bus" class="form-control">
                                        <option value="">pilih status</option>
                                        <option value="masuk" <?php echo old('status_bus') == 'masuk' ? 'selected' : ''; ?>>Masuk</option>
                                        <option value="keluar" <?php echo old('status_bus') == 'keluar' ? 'selected' : ''; ?>>Keluar</option>
                                        value="<?= $bus['status_bus'] ?>"
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('bus'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
