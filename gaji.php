<?php
class Gaji extends Database
{
    //menampilkan Semua Data
 
    public function index()
{
    $data_gaji = mysqli_query($this->koneksi,
    "select gaji.gaji_id, gaji.karyawan_id, gaji.gaji_pokok,
    karyawan.karyawan_nama from gaji inner join karyawan on
    gaji.karyawan_id = karyawan.karyawan_id");

        return $data_gaji;
}

public function create($karyawan_id1,$gaji_pokok1)
{
    mysqli_query($this->koneksi, "insert into gaji values
    (null,'$karyawan_id1', '$gaji_pokok1')");
}

    public function edit($gaji_id) {
        $data_gaji = mysqli_query($this->koneksi,
        "select gaji.gaji_id, gaji.karyawan_id, gaji.gaji_pokok,
        karyawan.karyawan_nama from gaji inner join karyawan on
        gaji.karyawan_id = karyawan.karyawan_id where gaji.gaji_id='$gaji_id1'");

        return $data_gaji;
    }

    public function update($gaji_id1, $karyawan_id1, $gaji_pokok1) {
        mysqli_query($this->koneksi, "update gaji set karyawan_id ='$karyawan_id1', 
        gaji_pokok='$gaji_pokok1' where gaji_id='$gaji_id1'");
        
    }
    
    public function delete($gaji_id1)
    {
        mysqli_query($this->koneksi, "delete from gaji where gaji_id=' $gaji_id1'");
    }



}

