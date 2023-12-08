<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Data Vendor | Sistem HDS Digital</title>

    <?php include '../../layouts/title-logo.php'; ?>
    <?php include '../../layouts/datatables-css.php'; ?>
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
                                <h4 class="mb-sm-0">Data Vendor</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Vendor</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="vendor-tambah.php" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Tambah </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="model-datatables" class="table table-hover nowrap table-striped align-middle" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Vendor</th>
                                                    <th>Nama Vendor</th>
                                                    <th>Handphone</th>
                                                    <th>Alamat</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>VN001</td>
                                                    <td>CV. Andhara</td>
                                                    <td>081316210090</td>
                                                    <td>Kedawung, Cirebon</td>
                                                    <td>Kaos dan Jersey</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="vendor-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="vendor-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>VN002</td>
                                                    <td>CV. Mulyatama</td>
                                                    <td>0821156512145</td>
                                                    <td>Kesambi, Cirebon</td>
                                                    <td>Percetakan Spanduk</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="vendor-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="vendor-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>VN003</td>
                                                    <td>CV. Sultan</td>
                                                    <td>081356124545</td>
                                                    <td>Kesambi, Cirebon</td>
                                                    <td>ID Card, Stiker, dll.</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="vendor-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="vendor-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include '../../layouts/footer.php'; ?>

        </div>
    </div>

    <?php include '../../layouts/tema-custom.php'; ?>
    <?php include '../../layouts/title-js.php'; ?>
    <?php include '../../layouts/datatables-js.php'; ?>

    <script src="../../assets/js/pages/datatables.init.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>

</html>