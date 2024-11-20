<?php 
session_start();
include '../koneksi.php';
include '../templates/sidebar.php';
?>

<body>
    <script src="..assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="../assets/compiled/svg/logo.svg" alt="Logo" srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                role="img" class="iconify iconify--system-uicons" width="20" height="20"
                                preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
                                role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li class="sidebar-item" aria-expanded="false">
                            <a href="../dashboard_admin.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="sidebar-title">Forms &amp; Tables</li>
                        <li class="sidebar-item ">
                            <a href="../admin/dt_siswa.php" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Data-data SPP</span>
                            </a>
                            
                            <ul class="submenu active">
                                
                                <li class="submenu-item  active">
                                  <a href="./admin/dt_siswa.php" class="submenu-link">Data Siswa</a>
                                    
                                </li>
                                
                                <li class="submenu-item  ">
                                    <a href="dt_kelas.php" class="submenu-link">Data Kelas</a>
                                    
                                </li>
                                
                                <li class="submenu-item  ">
                                    <a href="kenaikan_kelas.php" class="submenu-link">Kenaikan Kelas</a>
                                    
                                </li>
                                
                                <li class="submenu-item  ">
                                    <a href="form-element-radio.html" class="submenu-link">Radio</a>
                                    
                                </li>
                                
                                <li class="submenu-item  ">
                                    <a href="form-element-checkbox.html" class="submenu-link">Checkbox</a>
                                    
                                </li>
                                
                                <li class="submenu-item  ">
                                    <a href="form-element-textarea.html" class="submenu-link">Textarea</a>
                                    
                                </li>
                                
                            </ul>
                            

                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading" style="display: flex; justify-content: space-between; align-items: center; padding: 10px;">
          <h3>Aplikasi Pembayaran SPP</h3>
          <a href="logout.php" class="btn" style="
              display: inline-flex;
              align-items: center;
              gap: 8px;
              padding: 8px 16px;
              font-size: 1rem;
              color: #fff;
              background-color: #dc3545;
              border: none;
              border-radius: 5px;
              text-decoration: none;
              transition: background-color 0.3s ease;">
              <i data-feather="log-out" style="stroke-width: 2;"></i> Logout
          </a>
        </div>
        <div class="welcome-message">
            <p>Selamat datang, <strong><?php echo $_SESSION['nama_admin']; ?></strong>! Anda telah berhasil masuk ke Admin Dashboard Aplikasi Pembayaran SPP.</p>
        </div>
      <!-- Hoverable rows start -->
      <section class="section">
          <div class="row" id="table-hover-row">
              <div class="col-12">
                  <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                          <h3 class="card-title mb-0">Daftar Kenaikan Kelas</h3>
                      </div>
                      <div class="card-content">
                          <!-- table hover -->
                          <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="text-center">
                                    <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                    <th>Kelas</th>
                                    <th>Kelas Sekarang</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT siswa.*, angkatan.*, kelas.*, siswatemp.* FROM siswa, angkatan, kelas, siswatemp WHERE siswa.id_angkatan = angkatan.nama_angkatan AND siswa.id_kelas = kelas.id_kelas AND siswatemp.nisn = siswa.nisn";
                                    $exec = mysqli_query($conn, $query);
                                    while ($res = mysqli_fetch_assoc($exec)) {

                                    ?>
                                      <tr class="text-center">
                                        <td><?= $res['nisn'] ?></td>
                                        <td><?= $res['nama'] ?></td>
                                        <td><?= $res['nama_angkatan'] ?></td>
                                        <td><?= $res['nama_kelas'] ?></td>
                                        <td><?= $res['kelas'] ?></td>
                                        <td><?= $res['alamat'] ?></td>
                                        <td>
                                            <?php
                                            $idku = $res['id_siswa'];
                                            if ($res['kelas'] == "12") {
                                            ?>

                                            <button type="button" class="btn btn-sm btn-secondary" disabled>Kelas 12</button>

                                            <?php } ?>
                                            <?php
                                            //cek naik kelas berapa
                                            if ($res['kelas'] == "10") {

                                            ?>
                                            <a href=# class="view_data btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#myModal" id=<?=$idku; ?>>Naik Kelas 11</a>
                                            <?php } ?>
                                            <?php if ($res['kelas'] == "11") {

                                            ?>
                                            <a href=# class="view_data btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#myModal" id=<?=$idku; ?>>Naik Kelas 12</a>
                                            <?php } ?>
                                        </td>
                                      </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- footer -->
      <?php include '../templates/footer.php'; ?>
    <!-- Hoverable rows end -->
    </div>
        <script src="../assets/static/js/components/dark.js"></script>
    <script src="../assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/compiled/js/app.js"></script>
</body>
