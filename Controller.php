<?php

class Controller
{
    protected $db;
    function __construct($db){
        $this->db = $db;
    }

    function login_process($user, $pass) {
        $row = $this->db->prepare('SELECT * FROM user WHERE email=? AND password=md5(?)');
        $row->execute(array($user, $pass));
        $count = $row->rowCount();
        if($count > 0) {
            return $hasil = $row->fetch();
        }
        else {
            return 'gagal';
        }
    }

    function register_process($name, $email, $username, $phone, $password) 
    {
        $checker_email = $this->db->prepare("SELECT email FROM user WHERE email = ?");
        $checker_email->execute(array($email));
        $count = $checker_email->rowCount();
        if($count == 0) 
        {
            $sql = "INSERT INTO user (nama, username, email, password, no_hp) VALUES ('$name', '$username', '$email', md5('$password'), '$phone')";
            $row = $this->db->prepare($sql);

            return $row ->execute();
        }
        else 
        {
            return 'gagal';
        }
    }

    function tampil_data_id($tabel,$where,$id)
    {
        $row = $this->db->prepare("SELECT * FROM $tabel WHERE $where = ?");
        $row->execute(array($id));
        return $hasil = $row->fetch();
    }

    function tampil_data($tabel)
    {
        $row = $this->db->prepare("SELECT * FROM $tabel");
        $row->execute();
        return $hasil = $row->fetchAll();
    }

    function tampil_data_join($tabel1, $tabel2, $con1, $con2) 
    {
        $row = $this->db->prepare("SELECT * FROM $tabel1 JOIN $tabel2 ON $tabel1.$con1 = $tabel2.$con2 WHERE $tabel1.$con1 = $tabel2.$con2");
        $row->execute();
        return $hasil = $row->fetchAll();
    }

    function tambah_data($tabel,$data)
    {
        // buat array untuk isi values insert sumber kode 
        // http://thisinterestsme.com/pdo-prepared-multi-inserts/
        $rowsSQL = array();
        // buat bind param Prepared Statement
        $toBind = array();
        // list nama kolom
        $columnNames = array_keys($data[0]);
        // looping untuk mengambil isi dari kolom / values
        foreach($data as $arrayIndex => $row){
            $params = array();
            foreach($row as $columnName => $columnValue){
                $param = ":" . $columnName . $arrayIndex;
                $params[] = $param;
                $toBind[$param] = $columnValue;
            }
            $rowsSQL[] = "(" . implode(", ", $params) . ")";
        }
        $sql = "INSERT INTO $tabel (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);
        $row = $this->db->prepare($sql);
        //Bind our values.
        foreach($toBind as $param => $val){
            $row ->bindValue($param, $val);
        }
        //Execute our statement (i.e. insert the data).
        return $row ->execute();
    }

    function edit_data($tabel,$data,$where,$id)
    {
        // sumber kode 
        // https://stackoverflow.com/questions/23019219/creating-generic-update-function-using-php-mysql
        $setPart = array();
        foreach ($data as $key => $value)
        {
            $setPart[] = $key."=:".$key;
        }
        $sql = "UPDATE $tabel SET ".implode(', ', $setPart)." WHERE $where = :id";
        $row = $this->db->prepare($sql);
        //Bind our values.
        $row ->bindValue(':id',$id); // where
        foreach($data as $param => $val)
        {
            $row ->bindValue($param, $val);
        }
        return $row ->execute();
    }

    function hapus_data($tabel,$where,$id)
    {
        $sql = "DELETE FROM $tabel WHERE $where = ?";
        $row = $this->db->prepare($sql);
        return $row ->execute(array($id));
    }
}