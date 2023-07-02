<?php




class Tabel_Karyawan extends Controller 
{
   
    //method default
     public function index()
     {
          $data['judul'] = 'Karyawan';
          $data['kryw'] = $this->model('User_Pegawai')->getUser();
          $this->view('template/header',$data);
          $this->view('template/navbar');
          $this->view('tabel_karyawan/index',$data);
          $this->view('template/footer');
     }

    public function tambah()
    {
        if($this->model('User_Pegawai')->tambahData($_POST) > 0)
        {
            Flasher::setFlash("data berhasil ","ditambahkan", "success");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }else
        {
            Flasher::setFlash("data berhasil ","dihapus","danger");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }
        
    }

    public function getUbah()
    {
     
       //echo $_POST['id'];
    // echo $this->model('User_Pegawai')->getKaryawanById($_POST['id']);   
     echo json_encode($this->model('User_Pegawai')->getKaryawanById($_POST['id']));    
    }

    public function edit()
    {
        if($this->model('User_Pegawai')->editDataKaryawan($_POST) > 0)
        {
            Flasher::setFlash("data berhasil ","diubah", "success");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }else
        {
            Flasher::setFlash("data berhasil ","diubah","danger");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }
    }


    public function hapus($id)
    {
        if($this->model('User_Pegawai')->hapusData($id) > 0)
        {
            Flasher::setFlash("data berhasil ","dihapus", "success");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }else
        {
            Flasher::setFlash("data gagal ","dihapus","danger");
            header('Location:'. BASEURL . '/tabel_karyawan');
            exit;
        }
    }


}