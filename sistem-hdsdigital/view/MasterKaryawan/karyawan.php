<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Data Karyawan | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Data Karyawan</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Karyawan</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="karyawan-tambah.php" class="btn btn-success"><i class="ri-add-line align-bottom me-1"></i> Tambah </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="model-datatables" class="table table-hover nowrap table-striped align-middle" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Foto</th>
                                                    <th>Kode Karyawan</th>
                                                    <th>Nama Karyawan</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Handphone</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>
                                                        <img class="rounded-circle header-profile-user" src="../../assets/images/karyawan/hardian.png" alt="Foto Hardian">
                                                    </td>
                                                    <td>23031703980001</td>
                                                    <td>Hardian Maulana</td>
                                                    <td>Laki-laki</td>
                                                    <td>08156411130</td>
                                                    <td><span class="badge badge-soft-success">Aktif</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="karyawan-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
                                                                <li><a href="karyawan-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="karyawan-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>
                                                        <img class="rounded-circle header-profile-user" src="../../assets/images/karyawan/diki.png" alt="Foto Diki">
                                                    </td>
                                                    <td>23030808990002</td>
                                                    <td>Diki Nurholis</td>
                                                    <td>Laki-laki</td>
                                                    <td>081320229940</td>
                                                    <td><span class="badge badge-soft-success">Aktif</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="karyawan-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
                                                                <li><a href="karyawan-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="karyawan-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>
                                                        <img class="rounded-circle header-profile-user" src="../../assets/images/karyawan/syafiq.png" alt="Foto Syafiq">
                                                    </td>
                                                    <td>23031908200003</td>
                                                    <td>Syafiq Muhafiddzin</td>
                                                    <td>Laki-laki</td>
                                                    <td>083148388083</td>
                                                    <td><span class="badge badge-soft-success">Aktif</span></td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="karyawan-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
                                                                <li><a href="karyawan-edit.php" class="dropdown-item"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                                <li><a href="karyawan-hapus.php" class="dropdown-item"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Hapus</a></li>
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