<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Persentase Bonus | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Persentase Bonus</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Persentase</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="persentase-bonus-dokumen.php" class="btn btn-outline-primary waves-effect waves-light"><i class="ri-file-copy-2-fill align-bottom me-1"></i> Dokumen </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="model-datatables" class="table table-hover nowrap table-striped align-middle" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Persentase</th>
                                                    <th>Keterangan</th>
                                                    <th>Kategori</th>
                                                    <th>Persentase Bonus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>PS-MDP</td>
                                                    <td>Mendapatkan Project</td>
                                                    <td>Bonus Karyawan</td>
                                                    <td>5%</td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>PS-MGP</td>
                                                    <td>Mengerjakan Project</td>
                                                    <td>Bonus Karyawan</td>
                                                    <td>15%</td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>PS-MDGP</td>
                                                    <td>Mendapatkan dan Mengerjakan Project</td>
                                                    <td>Bonus Karyawan</td>
                                                    <td>20%</td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>PS-TDK</td>
                                                    <td>Transfortasi Dalam Kota</td>
                                                    <td>Transfortasi Karyawan</td>
                                                    <td>5% - Maks 15.000</td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>PS-TLK</td>
                                                    <td>Transfortasi Luar Kota</td>
                                                    <td>Transfortasi Karyawan</td>
                                                    <td>10% - Maks 30.000</td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>PS-LNY</td>
                                                    <td>Lainnya (MGP lebih dari 1 Orang)</td>
                                                    <td>Bonus Karyawan</td>
                                                    <td>3% (Optional)</td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>PS-LKY</td>
                                                    <td>Luar Karyawan Yang Mendapatkan Project</td>
                                                    <td>Bonus Luar Karyawan</td>
                                                    <td>10% (Optional)</td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>PS-DCP</td>
                                                    <td>Diskon atau Cashback Customer Platinum</td>
                                                    <td>Customer</td>
                                                    <td>5% (Optional) - Maks 100.000</td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>PS-DCG</td>
                                                    <td>Diskon atau Cashback Customer Gold</td>
                                                    <td>Customer</td>
                                                    <td>3% (Optional) - Maks 50.000</td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>PS-DCS</td>
                                                    <td>Bonus Customer Silver</td>
                                                    <td>Customer</td>
                                                    <td>Souvenir HDS</td>
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