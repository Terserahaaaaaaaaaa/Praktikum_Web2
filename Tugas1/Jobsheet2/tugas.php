<?php
// 1. Membuat class Mahasiswa
class Mahasiswa {
    // Atribut 
    private $nama;
    private $nim;
    private $jurusan;

    // Konstruktor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

// 2. encapsulation
    // Getter untuk nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk jurusan
    public function getJurusan() {
        return $this->jurusan;
    }

    // Setter untuk jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Menampilkan data Mahasiswa
    public function TampilkanData() {
        return "Nama: " . $this->getNama() . " <br> NIM: " . $this->getNim() . "<br>  Jurusan: " . $this->getJurusan();
    }
}

// 3. Membuat class Pengguna1
class Pengguna1 {
    protected $nama;

    // Konstruktor
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode get
    public function getNama() {
        return $this->nama;
    }
}


// Membuat class Dosen yang mewarisi Pengguna1
class Dosen extends Pengguna1 {
    private $matakuliah;

    // Konstruktor
    public function __construct($nama, $matakuliah) {
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }

    // Getter untuk matakuliah
    public function getMatakuliah() {
        return $this->matakuliah;
    }

    public function tampilkanDataDosen() {
        echo "Nama: " . $this->getNama() . "<br>";
        echo "Mata Kuliah: " . $this->getMataKuliah() . "<br>";
    }
}


// 4. polymorphism 
class pengguna2 {
    //metode akses fitur
    public function aksesFitur() {
        echo "fitur pengguna";
    }
}
    
// Membuat class Mahasiswa1 yang mewarisi Pengguna2
class Mahasiswa1 extends Pengguna2 {
    public function aksesFitur() {
        echo "Mahasiswa dapat mengakses fitur perkuliahan";
    }
}

// Membuat class Dosen2 yang mewarisi Pengguna2
class Dosen2 extends Pengguna2 {
    public function aksesFitur() {
        echo "Dosen dapat mengakses fitur kampus";
    }
}


// 5. Membuat abstract class penggunaAbs
abstract class penggunaAbs {
    abstract public function aksesFitur();
}

//membuat class mahasiswa2 yang mewarisi penggunaAbs
class Mahasiswa2 extends PenggunaAbs {
    public function aksesFitur() {
        echo "Mahasiswa dapat mengakses portal akademik<br>";
    }
}
// Membuat class dosen3 yang mewarisi penggunaAbs
class dosen3 extends penggunaAbs {
    public function aksesFitur() {
        echo "Dosen dapat mengakses fitur spesial";
    }
}



// 1.Instansiasi objek dari class Mahasiswa
echo "Data Mahasiswa :";
$mahasiswa1 = new Mahasiswa("Fatimah Azzahra", "230102081", "Teknik Informatika");
echo $mahasiswa1->TampilkanData();
echo "<br><br>";


//2 encapsulation demontrasi akses ke atribut menggunakan getter dan setter
echo "Data Mahasiswa Setelah diubah: <br>";
$mahasiswa1->setNama("Fatma");
$mahasiswa1->setNim("230102088");
$mahasiswa1->setJurusan("Teknik Komputer");
echo $mahasiswa1->TampilkanData();
echo "<br><br>";

//3. instansial objek dan tampilkan data dosen inheritance
echo "Data Dosen :";
$dosen = new Dosen("Nabila", "Matematika");
echo $dosen->TampilkanDataDosen();
echo "<br><br>";

//4. polymorphism instansial  objek
echo "instansi objek dari class dosen dan mahasiswa<br>";
$mahasiswa1 = new Mahasiswa1();
$dosen = new Dosen2();
$mahasiswa1->aksesFitur();
echo "<br>";
$dosen->aksesFitur();

//5. abstrak demonstrasi dengan memanggil metode akses fitur()
echo "Demonstrasikan dengan memanggil metode aksesFitur()<br>";
$mahasiswa1 = new Mahasiswa2();
$dosen = new dosen3();
echo "<br>";
$mahasiswa1->aksesFitur();
$dosen->aksesFitur();

?>