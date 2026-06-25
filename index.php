<?php

require_once 'koneksi.php';

require_once 'Mahasiswa.php';
require_once 'MahasiswaMandiri.php';
require_once 'MahasiswaBidikmisi.php';
require_once 'MahasiswaPrestasi.php';

$queryMandiri = mysqli_query(
    $conn,
    "SELECT * FROM tabel_mahasiswa WHERE jenis_pembayaran='Mandiri'"
);

$queryBidikmisi = mysqli_query(
    $conn,
    "SELECT * FROM tabel_mahasiswa WHERE jenis_pembayaran='Bidikmisi'"
);

$queryPrestasi = mysqli_query(
    $conn,
    "SELECT * FROM tabel_mahasiswa WHERE jenis_pembayaran='Prestasi'"
);

$totalMahasiswa = mysqli_num_rows(
    mysqli_query($conn, "SELECT * FROM tabel_mahasiswa")
);

$totalMandiri = mysqli_num_rows($queryMandiri);
$totalBidikmisi = mysqli_num_rows($queryBidikmisi);
$totalPrestasi = mysqli_num_rows($queryPrestasi);

mysqli_data_seek($queryMandiri, 0);
mysqli_data_seek($queryBidikmisi, 0);
mysqli_data_seek($queryPrestasi, 0);

?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sistem Registrasi Pembayaran Kuliah</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container py-4">

    <div class="text-center mb-4">
        <h1 class="fw-bold">
            Sistem Registrasi Pembayaran Kuliah Mahasiswa
        </h1>

        <p class="text-muted">
            UAS Pemrograman Berorientasi Objek
        </p>
    </div>

    <!-- Statistik -->

    <div class="row mb-5">

        <div class="col-md-3 mb-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h6>Total Mahasiswa</h6>
                    <h2><?= $totalMahasiswa ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-primary shadow-sm">
                <div class="card-body text-center">
                    <h6>Mandiri</h6>
                    <h2><?= $totalMandiri ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-success shadow-sm">
                <div class="card-body text-center">
                    <h6>Bidikmisi</h6>
                    <h2><?= $totalBidikmisi ?></h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card border-warning shadow-sm">
                <div class="card-body text-center">
                    <h6>Prestasi</h6>
                    <h2><?= $totalPrestasi ?></h2>
                </div>
            </div>
        </div>

    </div>

    <!-- MANDIRI -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-primary text-white">
            Mahasiswa Mandiri
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Semester</th>
                        <th>Spesifikasi Akademik</th>
                        <th>Total Tagihan</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_assoc($queryMandiri)) : ?>

                    <?php

                    $mhs = new MahasiswaMandiri(
                        $row['id_mahasiswa'],
                        $row['nama_mahasiswa'],
                        $row['nim'],
                        $row['semester'],
                        $row['tarif_ukt_nominal'],
                        $row['golongan_ukt'],
                        $row['nama_wali']
                    );

                    ?>

                    <tr>

                        <td><?= $row['nama_mahasiswa'] ?></td>

                        <td><?= $row['nim'] ?></td>

                        <td><?= $row['semester'] ?></td>

                        <td><?= $mhs->tampilkanSpesifikasiAkademik() ?></td>

                        <td>
                            Rp <?= number_format($mhs->hitungTagihanSemester(),0,',','.') ?>
                        </td>

                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

    <!-- BIDIKMISI -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-success text-white">
            Mahasiswa Bidikmisi
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Semester</th>
                        <th>Spesifikasi Akademik</th>
                        <th>Total Tagihan</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_assoc($queryBidikmisi)) : ?>

                    <?php

                    $mhs = new MahasiswaBidikmisi(
                        $row['id_mahasiswa'],
                        $row['nama_mahasiswa'],
                        $row['nim'],
                        $row['semester'],
                        $row['tarif_ukt_nominal'],
                        $row['nomor_kip_kuliah'],
                        $row['dana_saku_subsidi']
                    );

                    ?>

                    <tr>

                        <td><?= $row['nama_mahasiswa'] ?></td>

                        <td><?= $row['nim'] ?></td>

                        <td><?= $row['semester'] ?></td>

                        <td><?= $mhs->tampilkanSpesifikasiAkademik() ?></td>

                        <td>
                            Rp <?= number_format($mhs->hitungTagihanSemester(),0,',','.') ?>
                        </td>

                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

    <!-- PRESTASI -->

    <div class="card shadow-sm mb-5">

        <div class="card-header bg-warning">
            Mahasiswa Prestasi
        </div>

        <div class="card-body table-responsive">

            <table class="table table-bordered table-striped">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Semester</th>
                        <th>Spesifikasi Akademik</th>
                        <th>Total Tagihan</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($row = mysqli_fetch_assoc($queryPrestasi)) : ?>

                    <?php

                    $mhs = new MahasiswaPrestasi(
                        $row['id_mahasiswa'],
                        $row['nama_mahasiswa'],
                        $row['nim'],
                        $row['semester'],
                        $row['tarif_ukt_nominal'],
                        $row['nama_instansi_beasiswa'],
                        $row['minimal_ipk_syarat']
                    );

                    ?>

                    <tr>

                        <td><?= $row['nama_mahasiswa'] ?></td>

                        <td><?= $row['nim'] ?></td>

                        <td><?= $row['semester'] ?></td>

                        <td><?= $mhs->tampilkanSpesifikasiAkademik() ?></td>

                        <td>
                            Rp <?= number_format($mhs->hitungTagihanSemester(),0,',','.') ?>
                        </td>

                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>