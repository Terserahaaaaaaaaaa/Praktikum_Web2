<?php
// Definisikan kelas Dosen
class Dosen {
    //atribut
    public $nama;
    public $nip;
    public $mataKuliah;

    //konstruktor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama        : $this->nama <br> NIP         : $this->nip <br> Mata Kuliah : $this->mataKuliah";
    }
}

//instansiasi objek dari kelas Dosen
$dosen = new Dosen("Fatimah Azzahra", "987654321", "Pemrograman Web");

// Tampilkan informasi dosen
echo $dosen->tampilkanDosen();
?>