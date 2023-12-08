<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Tambah Daftar Harga | Sistem HDS Digital</title>

    <?php include '../../layouts/title-logo.php'; ?>
    <?php include '../../layouts/title-css.php'; ?>

</head>

<body>
    <div id="layout-wrapper">

        <?php include '../../layouts/header2.php'; ?>
        <?php include '../../layouts/menu2.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Tambah Daftar Harga</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="daftar-harga.php">Daftar Harga</a></li>
                                        <li class="breadcrumb-item active">Tambah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Daftar Harga</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                                <i class="ri-menu-add-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="kode_produk" class="form-label">Kode Produk<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="kode_produk" placeholder="Masukan kode produk">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="nama_produk" class="form-label">Nama Produk<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="nama_produk" placeholder="Masukan nama produk">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="jenis_kelamin" class="form-label">Kategori<span class="text-danger fs-16">*</span></label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected>- Pilih Kategori -</option>
                                                            <option value="Advertising">Advertising</option>
                                                            <option value="Konveksi">Konveksi</option>
                                                            <option value="IT Solutions">IT Solutions</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="range_harga" class="form-label"> Range Harga<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="range_harga" placeholder="Masukan range harga">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12 mt-4">
                                                    <div>
                                                        <a href="javascript:void(0);" class="btn btn-success"><i class="ri-save-3-line align-bottom me-1"></i> Simpan </a>
                                                        <button type="reset" class="btn btn-warning"><i class="ri-delete-back-line align-bottom me-1"></i> Reset </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php include '../../layouts/footer.php'; ?>

        </div>
    </div>

    <?php include '../../layouts/tema-custom.php'; ?>
    <?php include '../../layouts/title-js.php'; ?>

    <script src="../../assets/js/app.js"></script>
</body>

</html>