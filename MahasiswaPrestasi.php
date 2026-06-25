<?php

require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa
{
    protected $namaInstansiBeasiswa;
    protected $minimalIpkSyarat;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarif_ukt_nominal,
        $namaInstansiBeasiswa,
        $minimalIpkSyarat
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarif_ukt_nominal
        );

        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    public function getDataPrestasi($conn)
    {
        $query = "
            SELECT *
            FROM tabel_mahasiswa
            WHERE jenis_pembayaran = 'Prestasi'
        ";

        return mysqli_query($conn, $query);
    }

    public function hitungTagihanSemester()
    {
        return $this->tarif_ukt_nominal * 0.25;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "
            Instansi Beasiswa : {$this->namaInstansiBeasiswa}<br>
            Minimal IPK : {$this->minimalIpkSyarat}
        ";
    }
}