<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Detail Data Karyawan | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Detail Data Karyawan</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="karyawan.php">Karyawan</a></li>
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
                                            <p class="text-muted">08156411130</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">Kode Karyawan</span></th>
                                                        <td>23031703980001</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Nama Karyawan</span></th>
                                                        <td>Hardian Maulana</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Jenis Kelamin</span></th>
                                                        <td>Laki-laki</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Handphone</span></th>
                                                        <td>
                                                            08156411130 <br>
                                                            <div align="left">
                                                                <div class="col-lg-11 col-md-11 mt-2">
                                                                    <div class="form-check form-check-success">
                                                                        <input class="form-check-input fs-14" type="checkbox" id="" disabled checked>&nbsp;
                                                                        <label class="form-check-label text-muted" for=""> <img src="../../assets/images/wa.png" height="20px"> WhatsApp </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Status Karyawan</span></th>
                                                        <td>Aktif</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Jabatan</span></th>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Email</span></th>
                                                        <td>hardian.maulana1738@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Alamat</span></th>
                                                        <td>Kesambi, Cirebon</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tempat Lahir</span></th>
                                                        <td>Kuningan</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Lahir</span></th>
                                                        <td>17 Maret 1998</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Agama</span></th>
                                                        <td>Islam</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Status Pernikahan</span></th>
                                                        <td>Belum Menikah</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Tanggal Bergabung</span></th>
                                                        <td>1 Maret 2023</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Masa Kerja</span></th>
                                                        <td>7 Bulan</td>
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