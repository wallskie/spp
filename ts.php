<?php 
session_start();
include '../koneksi.php';
include '../templates/sidebar.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Hapus siswa berdasarkan ID
if (isset($_GET['id_siswa'])) {
    $id_siswa = mysqli_real_escape_string($conn, $_GET['id_siswa']);
    $exec     = mysqli_query($conn, "DELETE FROM siswa WHERE id_siswa='$id_siswa'");
    $exec1    = mysqli_query($conn, "DELETE FROM pembayaran WHERE id_siswa='$id_siswa'");
    if ($exec && $exec1) {
        echo "<script>
            alert('Data siswa berhasil dihapus');
            document.location = 'editdatasiswa.php';
        </script>";
    } else {
        echo "<script>
            alert('Data siswa gagal dihapus');
            document.location = 'editdatasiswa.php';
        </script>";
    }
}

// Query untuk memperbarui data siswa
$sqlx = "SELECT siswa.*, angkatan.*, jurusan.*, kelas.* 
         FROM siswa
         INNER JOIN angkatan ON siswa.id_angkatan = angkatan.id_angkatan
         INNER JOIN jurusan ON siswa.id_jurusan = jurusan.id_jurusan
         INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";

$q = mysqli_query($conn, $sqlx);

// Debugging query jika gagal
if (!$q) {
    die("Query gagal: " . mysqli_error($conn));
}

while ($hasil = mysqli_fetch_array($q)) {
    $kelas = mysqli_real_escape_string($conn, $hasil['kelas']);
    $nama_kelas = mysqli_real_escape_string($conn, $hasil['nama_kelas']);
    $nisn = mysqli_real_escape_string($conn, $hasil['nisn']);

    $updates = "UPDATE siswatemp 
                SET kls$kelas = '$nama_kelas' 
                WHERE nisn = '$nisn'";
    $qupd = mysqli_query($conn, $updates);

    // Debugging jika ada error
    if (!$qupd) {
        echo "Gagal memperbarui: " . mysqli_error($conn);
    }
}
?>

<!-- Hoverable rows start -->
<section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hoverable rows</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table
                                rows
                                within a
                                <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                            </p>
                        </div>
                        <!-- table hover -->
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Tempat Tgl Lahir</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT siswa.*, angkatan.*, jurusan.*, kelas.* FROM siswa, angkatan, jurusan, kelas WHERE siswa.id_angkatan = angkatan.nama_angkatan AND siswa.id_jurusan = jurusan.id_jurusan AND siswa.id_kelas = kelas.id_kelas ORDER BY id_siswa";
                                    $exec = mysqli_query($conn, $query);
                                    while ($res = mysqli_fetch_assoc($exec)) :

                                    ?>
                                        <tr>
                                        <td><?= $res['nisn'] ?></td>
                                        <td><?= $res['nama'] ?></td>
                                        <td><?= $res['nama_angkatan'] ?></td>
                                        <td><?= $res['nama_jurusan'] ?></td>
                                        <td><?= $res['nama_kelas'] ?></td>
                                        <td><?= $res['alamat'] ?></td>
                                        <td><?= $res['jenis_kelamin'] ?></td>
                                        <td><?= $res['ttl'] ?></td>
                                        <td>
                                            <a href="editdatasiswa.php?id_siswa=<?= $res['id_siswa'] ?>" class="btn btn-sm btn-danger" onclick="return confirm ('Apakah yakin ingin menghapus data?')">Hapus</a>
                                            <a href="#" class="view_data btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" id="<?php echo $res['id_siswa']; ?>">Edit</a>
                                        </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hoverable rows end -->