<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <title>Tambah Data Karyawan | Sistem HDS Digital</title>

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
                                <h4 class="mb-sm-0">Tambah Data Karyawan</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../../dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="karyawan.php">Karyawan</a></li>
                                        <li class="breadcrumb-item active">Tambah</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Data Karyawan</h4>
                                        <div class="flex-shrink-0">
                                            <div class="form-check form-switch form-switch-right form-switch-md">
                                                <i class="ri-contacts-fill fs-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="row gy-3">
                                                <div class="col-xxl-6 col-md-12">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <div class="profile-user position-relative d-inline-block mx-auto">
                                                                <img src="../../assets/images/hdsdigital/default-foto.jpg" class="rounded-circle avatar-xl img-thumbnail user-profile-image" alt="user-profile-image">
                                                                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                                    <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                                    <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-light text-body">
                                                                            <i class="ri-camera-fill"></i>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="kode_karyawan" class="form-label">Kode Karyawan<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="kode_karyawan" placeholder="Masukan kode karyawan">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="nama_karyawan" class="form-label">Nama Karyawan<span class="text-danger fs-16">*</span></label>
                                                        <input type="text" class="form-control" id="nama_karyawan" placeholder="Masukan nama karyawan">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin<span class="text-danger fs-16">*</span></label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected>- Pilih Jenis Kelamin -</option>
                                                            <option value="Laki-laki">Laki-laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
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
                                                        <label for="status_karyawan" class="form-label">Status Karyawan<span class="text-danger fs-16">*</span></label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected >- Pilih Status Karyawan -</option>
                                                            <option value="Aktif">Aktif</option>
                                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                                        </select>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Detail Karyawan</h4>
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
                                                        <label for="jabatan" class="form-label">Jabatan</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected >- Pilih Jabatan -</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="email" class="form-label">Email<span class="text-danger fs-16">*</span></label>
                                                        <div class="form-icon right">
                                                            <input type="email" class="form-control form-control-icon" id="email" placeholder="example@gmail.com">
                                                            <i class="ri-mail-unread-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="alamat" class="form-label">Alamat</label>
                                                        <textarea class="form-control" id="alamat" rows="3" placeholder="Masukan alamat"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan tempat lahir">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukan tanggal lahir">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="agama" class="form-label">Agama</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected >- Pilih Agama -</option>
                                                            <option value="Islam">Islam</option>
                                                            <option value="Kristen">Kristen</option>
                                                            <option value="Budha">Budha</option>
                                                            <option value="Khatolik">Khatolik</option>
                                                            <option value="Hindu">Hindu</option>
                                                            <option value="Lainnya">Lainnya</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="status_pernikahan" class="form-label">Status Pernikahan</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option class="text-muted" selected >- Pilih Status Pernikahan -</option>
                                                            <option value="Menikah">Menikah</option>
                                                            <option value="Belum Menikah">Belum Menikah</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="tanggal_bergabung" class="form-label">Tanggal Bergabung<span class="text-danger fs-16">*</span></label>
                                                        <input type="date" class="form-control" id="tanggal_bergabung" placeholder="Masukan tanggal bergabung">
                                                    </div>
                                                </div>
                                                <div class="col-xxl-6 col-md-12">
                                                    <div>
                                                        <label for="masa_kerja" class="form-label">Masa Kerja</label>
                                                        <input type="text" class="form-control" id="masa_kerja" placeholder="Masa Kerja" disabled>
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