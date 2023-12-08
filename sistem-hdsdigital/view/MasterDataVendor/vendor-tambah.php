<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Tambah Data Vendor | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Tambah Data Vendor</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="vendor.php">Vendor</a></li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Data Vendor</h4>
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
                                                        <label for="kode_vendor" class="form-label">Kode Vendor<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="kode_vendor" placeholder="Masukan kode vendor">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="nama_vendor" class="form-label">Nama Vendor<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="nama_vendor" placeholder="Masukan nama vendor">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="nomer_handphone" class="form-label"> Handphone<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="nomer_handphone" placeholder="Masukan nomer handphone">
                                                    </div>
                                                </div>
                                                <div align="center">
                                                    <div>
                                                        <div class="col-xxl-6 col-md-11">
                                                            <div class="form-check form-check-success">
                                                                <input class="form-check-input fs-16" type="checkbox" id=""> &nbsp;
                                                                <label class="form-check-label text-muted" for=""> <img src="../../assets/images/wa.png" height="22px"> &nbsp; WhatsApp </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="alamat" class="form-label">Alamat<span class="text-danger fs-16">*</span></label>
                                                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukan alamat"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="keterangan" class="form-label">Keterangan<span class="text-danger fs-16">*</span></label>
                                                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukan Keterangan"></textarea>
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