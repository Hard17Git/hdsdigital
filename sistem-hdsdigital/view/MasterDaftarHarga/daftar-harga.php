<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Daftar Harga | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Daftar Harga</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboar.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Daftar Harga</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="daftar-harga-tambah.php" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Tambah </a>&nbsp;&nbsp;
                                    <a href="#" class="btn btn-soft-primary"><i class="ri-equalizer-fill align-bottom me-1"></i> Filter </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="model-datatables" class="table table-hover nowrap table-striped align-middle" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Produk</th>
                                                    <th>Nama Produk</th>
                                                    <th>Kategori</th>
                                                    <th>Range Harga</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>AD001</td>
                                                    <td>Spanduk</td>
                                                    <td>Advertising</td>
                                                    <td>Mulai dari 25.000 per meter</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="daftar-harga-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="daftar-harga-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>KN001</td>
                                                    <td>T-Shirt</td>
                                                    <td>Konveksi</td>
                                                    <td>Mulai dari 75.000 s/d 150.000</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="daftar-harga-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="daftar-harga-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>IT001</td>
                                                    <td>Service Laptop</td>
                                                    <td>IT Solutions</td>
                                                    <td>Mulai dari 50.000</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="daftar-harga-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="daftar-harga-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php include '../../layouts/datatables-js.php'; ?>

    <script src="../../assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="../../assets/js/app.js"></script>
</body>

</html>