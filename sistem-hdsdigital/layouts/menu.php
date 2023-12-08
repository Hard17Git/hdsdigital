<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard.php">
                        <i class="ri-dashboard-line"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuMasterData" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuMasterData">
                        <i class="ri-database-line"></i> <span data-key="t-master">Master</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuMasterData">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="view/MasterKaryawan/karyawan.php" class="nav-link" data-key="t-data-karyawan"> Data Karyawan </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDaftarHarga/daftar-harga.php" class="nav-link" data-key="t-data-kategori"> Data Daftar Harga </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDataCustomer/customer.php" class="nav-link" data-key="t-data-customer"> Data Customer / Client</a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDataVendor/vendor.php" class="nav-link" data-key="t-data-vendor"> Data Supplier / Vendor </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDataPersentaseBonus/persentase-bonus.php" class="nav-link" data-key="t-data-persentase"> Data Persentase Bonus Project </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDataPersetujuan/persetujuan.php" class="nav-link" data-key="t-data-persentase"> Data Persetujuan Pengguna Baru </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterDataPengguna/pengguna.php" class="nav-link" data-key="t-data-pengguna"> Data Pengguna Aplikasi </a>
                            </li>
                            <li class="nav-item">
                                <a href="view/MasterMonitoringAplikasi/monitoring-aplikasi.php" class="nav-link" data-key="t-data-monitoring-aplikasi"> Data Monitoring Aplikasi </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuKeuangan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuKeuangan">
                        <i class="ri-currency-line"></i> <span data-key="t-keuangan">Keuangan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuKeuangan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-pemasukan"> Data Pemasukan </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-pengeluaran"> Data Pengeluaran </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-pengeluaran"> Data Hutang Pihutang </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-rekap-keuangan"> Data Rekap Keuangan </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuMonitoringProject" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuMonitoringProject">
                        <i class="ri-phone-find-line"></i> <span data-key="t-monitoring">Monitoring</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuMonitoringProject">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-project-masuk"> Data Project Masuk </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-project-followup"> Data Project Follow-up </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-project-proses"> Data Project Proses </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-project-selesai"> Data Project Selesai </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-rekap-project"> Data Rekap Project </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-exchange-dollar-line"></i> <span data-key="t-transaksi">Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-calendar-check-line"></i> <span data-key="t-jadwal">Jadwal</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuLaporan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuLaporan">
                        <i class="ri-file-paper-2-line"></i> <span data-key="t-laporan">Laporan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuLaporan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-laporan-pemasukan"> Laporan Pemasukan </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-laporan-pengeluaran"> Laporan Pengeluaran </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-laporan-project"> Laporan Project </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#menuDataCMS" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuDataCMS">
                        <i class="ri-earth-line"></i> <span data-key="t-cms">CMS</span>
                    </a>
                    <div class="collapse menu-dropdown" id="menuDataCMS">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-home"> Data Home </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-about"> Data About </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-product"> Data Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-portfolio"> Data Portfolio </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-data-contact"> Data Contact</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <i class="ri-user-shared-line"></i> <span data-key="t-komplain-customer">Komplain Customer</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>