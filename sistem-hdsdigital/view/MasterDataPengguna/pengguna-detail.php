<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Detail Pengguna | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Detail Pengguna</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="pengguna.php">Pengguna</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div>
                                        <div class="flex-shrink-0 avatar-md mx-auto mt-4">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="../../assets/images/karyawan/hardian.png" alt="" height="100px" />
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-1">Hardian Maulana</h5>
                                            <p class="text-muted">Aktif</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">Nama Depan</span></th>
                                                        <td>Hardian</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Nama Belakang</span></th>
                                                        <td>Maulana</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Email</span></th>
                                                        <td>hardian.maulana1738@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">User Level</span></th>
                                                        <td>Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Status Akun</span></th>
                                                        <td>Aktif</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Bergabung</span></th>
                                                        <td>1 November 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Disetujui</span></th>
                                                        <td>2 November 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Perubahan Profile</span></th>
                                                        <td>7 November 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Perubahan Password</span></th>
                                                        <td>7 November 2023</td>
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
            </div>

            <?php include '../../layouts/footer.php'; ?>

        </div>
    </div>

    <?php include '../../layouts/tema-custom.php'; ?>
    <?php include '../../layouts/title-js.php'; ?>

    <script src="../../assets/js/app.js"></script>
</body>

</html>