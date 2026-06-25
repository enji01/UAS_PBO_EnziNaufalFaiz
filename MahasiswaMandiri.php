<?php

require_once 'Mahasiswa.php';

class MahasiswaMandiri extends Mahasiswa
{
    protected $golonganUkt;
    protected $namaWali;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarif_ukt_nominal,
        $golonganUkt,
        $namaWali
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarif_ukt_nominal
        );

        $this->golonganUkt = $golonganUkt;
        $this->namaWali = $namaWali;
    }

    public function getDataMandiri($conn)
    {
        $query = "
            SELECT *
            FROM tabel_mahasiswa
            WHERE jenis_pembayaran = 'Mandiri'
        ";

        return mysqli_query($conn, $query);
    }

    public function hitungTagihanSemester() {}

    public function tampilkanSpesifikasiAkademik() {}
}