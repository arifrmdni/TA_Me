<?php

class User_Pegawai{

  private $table = 'karyawan';
  private $db;


  public function __construct()
  {
    $this->db = new Database;
  }

  
  public function getUser()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->ResultSet();
  }

  public function tambahData($data)
  {
    $query =  "INSERT into karyawan
                VALUES
                ('',:nama,:no_peg,:telp)";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('no_peg', $data['no_peg']);
    $this->db->bind('telp', $data['telp']);
  

    $this->db->execute();
    return $this->db->rowCount();
    
  }

  public function getKaryawanById($id)
  {
    $this->db->query('SELECT * FROM karyawan WHERE id=:id' );
    $this->db->bind('id', $id);
    return $this->db->single();
  }



  public function hapusData($id)
  {
    $query = "DELETE FROM karyawan WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();

    return $this->db->rowCount();

  }

  public function editDataKaryawan($data)
  {
    $query =  "UPDATE karyawan SET
                nama = :nama, 
                no_peg = :no_peg, 
                telp = :telp  
               WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('no_peg', $data['no_peg']);
    $this->db->bind('telp', $data['telp']);
    $this->db->bind('id', $data['id']);
  

    $this->db->execute();
    return $this->db->rowCount();
    
  }
}