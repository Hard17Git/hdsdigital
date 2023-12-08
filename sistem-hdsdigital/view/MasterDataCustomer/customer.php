<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Data Customer | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Data Customer</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Customer</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-body p-0">
                                        <div class="alert alert-warning border-0 m-0 d-flex align-items-center" role="alert">
                                            <i data-feather="alert-triangle" class="text-warning me-2 icon-sm"></i>
                                            <div class="flex-grow-1 text-truncate">
                                                <marquee behavior="" direction="">Type customer <b>HDS DIGITAL</b>, Platinum total order lebih dari 100 kali, Gold total order 50-100 kali, Silver total order kurang dari 50 kali. Nikmati banyak keuntungan dengan menjadi customer Gold dan Platinum.</marquee>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="model-datatables" class="table table-hover nowrap table-striped align-middle" style="width:100%">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Kode Customer</th>
                                                    <th>Nama Customer</th>
                                                    <th>Handphone</th>
                                                    <th>Alamat</th>
                                                    <th>Type Customer</th>
                                                    <th>Total Order</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>CS001</td>
                                                    <td>Siti Anisa</td>
                                                    <td>081376001280</td>
                                                    <td>Sumber, Cirebon</td>
                                                    <td><span class="badge badge-soft-success">Platinum</span></td>
                                                    <td>137</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="customer-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>CS002</td>
                                                    <td>Hilman Fazrika</td>
                                                    <td>085812454545</td>
                                                    <td>Plumbon, Cirebon</td>
                                                    <td><span class="badge badge-soft-warning">Gold</span></td>
                                                    <td>61</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="customer-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>CS003</td>
                                                    <td>Malik Irsyad</td>
                                                    <td>081209002189</td>
                                                    <td>Kedawung, Cirebon</td>
                                                    <td><span class="badge badge-soft-dark">Silver</span></td>
                                                    <td>25</td>
                                                    <td>
                                                        <div class="dropdown d-inline-block">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="customer-detail.php" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> Detail</a></li>
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