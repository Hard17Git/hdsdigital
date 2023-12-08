<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Detail Persetujuan | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Detail Persetujuan</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="persetujuan.php">Persetujuan</a></li>
                                        <li class="breadcrumb-item active">Detail</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">Nama Depan</span></th>
                                                        <td>Diki</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Nama Belakang</span></th>
                                                        <td>Nurholis</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Email</span></th>
                                                        <td>dikinurholis@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">User Level</span></th>
                                                        <td>Admin</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Status Persetujuan</span></th>
                                                        <td><span class="badge badge-soft-warning">Menunggu</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="mt-4">
                                            <div>
                                                <a href="javascript:void(0);" class="btn btn-success"><i class="ri-check-double-line align-bottom me-1"></i> Setujui </a>
                                                <a href="javascript:void(0);" class="btn btn-danger"><i class="ri-close-line align-bottom me-1"></i> Tolak </a>
                                            </div>
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