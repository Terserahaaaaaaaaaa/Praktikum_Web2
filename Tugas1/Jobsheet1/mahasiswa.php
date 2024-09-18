<?php
//membuat class mahasiswa
class mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
//konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

// menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama <br> NIM: $this->nim <br> Jurusan : $this->jurusan.";
    }

// mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

// mengubah nilai atribut nim dengan metode setter
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}

//instansiasi objek dari class mahasiswa
$Mahasiswa = new mahasiswa("Fatimah Azzahra", "230102081", "Komputer dan Bisnis");

//tampilkan data mahasiswa sebelum diubah
echo "Data Mahasiswa Awal:<br>";
echo $Mahasiswa->tampilkanData();
echo "<br><br>";

//ubah jurusan
$Mahasiswa->updateJurusan("Hukum");

//ubah nim menggunakan methode setter
$Mahasiswa->setNim("123456789");

//menampilkan data mahasiswa setelah diubah
echo "Data Mahasiswa Setelah Diubah:<br>";
echo $Mahasiswa->tampilkanData();
?>


