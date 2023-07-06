<?php

class Mahasiswa_model
{
  private $table = 'mahasiswa';
  private $db;
  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }
  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }
  public function tambahDataMahasiswa()
  {
    $query = "INSERT INTO mahasiswa
                VALUES
              ('', :nama, :nim, :email, :prodi)";
    $this->db->query($query);
    $this->db->bind('nama', $_POST['nama']);
    $this->db->bind('nim', $_POST['nrp']);
    $this->db->bind('email', $_POST['email']);
    $this->db->bind('prodi', $_POST['prodi']);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id=:id";
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }
  public function ubahDataMahasiswa()
  {
    $query = "UPDATE mahasiswa SET
              nama = :nama,
              nrp = :nim,
              email = :email,
              jurusan = :prodi
              WHERE id = :id";
    $this->db->query($query);
    $this->db->bind('nama', $_POST['nama']);
    $this->db->bind('nim', $_POST['nrp']);
    $this->db->bind('email', $_POST['email']);
    $this->db->bind('prodi', $_POST['prodi']);
    $this->db->bind('id', $_POST['id']);
    $this->db->execute();
    return $this->db->rowCount();
  }
}
