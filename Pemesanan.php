<?php
session_start();
require 'phpkoneksi.php';
class Pesan{
    private $nama;
    private $email;
    private $jasa;
    private $tanggal;
    private $basisdata;
    function __construct($email=null,$nama=null,$jasa=null, $tanggal=null){
        $this->basisdata = new DbConnection();
        $this->nama=$nama;
        $this->email=$email;
        $this->jasa=$jasa;
        $this->tanggal=$tanggal;
        // $this->archive=$archive;
    }

    public function Buatpesan(){
        $id_user = $_SESSION['id_user'];
        $sql='INSERT INTO penyedia_jasa (id_vendor,id_user,tanggal_pemesanan) VALUES (?,?,?)';
        
        $statement = $this->basisdata->database->prepare($sql);

        if($statement->execute([$this->jasa, $id_user,$this->tanggal])){
            header('Location: Pemesananform.php?pesan=data berhasil dimasukkan');
        }else{
            echo 'gagal';
        }
        
    }

    public function daftarUser(){
        $sql = 'SELECT user.nama, COUNT(archive.user) AS jumlahdata
        FROM user
        LEFT JOIN archive ON user.id_user = archive.user
        GROUP BY user.nama;';
        $statement = $this->basisdata->database->prepare($sql);
        if($statement->execute()){
            $dataUser = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $dataUser;
    }

    public function hapusUser($id_user){
        $sql = 'DELETE FROM user WHERE id_user = ?';
        $statement = $this->basisdata->database->prepare($sql);
        $statement->execute([$id_user]);
    }
    public function auth($username,$password){
        $sql = 'SELECT * from user_nabe where nama_user=:usr and password=:pwd limit 1';
        $statement = $this->basisdata->database->prepare($sql);
        $statement->bindParam(':usr',$username,PDO::PARAM_STR);
        $statement->bindParam(':pwd',$password,PDO::PARAM_STR);
        $statement->execute();
        $data = $statement->fetch();
        return $data;
    }
}

?>