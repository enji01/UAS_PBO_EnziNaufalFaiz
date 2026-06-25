<?php

require_once 'Mahasiswa.php';

class MahasiswaBidikmisi extends Mahasiswa
{
    protected $nomorKipKuliah;
    protected $danaSakuSubsidi;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarif_ukt_nominal,
        $nomorKipKuliah,
        $danaSakuSubsidi
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarif_ukt_nominal
        );

        $this->nomorKipKuliah = $nomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    public function getDataBidikmisi($conn)
    {
        $query = "
            SELECT *
            FROM tabel_mahasiswa
            WHERE jenis_pembayaran = 'Bidikmisi'
        ";

        return mysqli_query($conn, $query);
    }

    public function hitungTagihanSemester() {}

    public function tampilkanSpesifikasiAkademik() {}
}