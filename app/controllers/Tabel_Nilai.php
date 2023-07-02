<?php




class Tabel_Nilai extends Controller {
   
    //method default
     public function index()
     {
          $data['judul'] = ' Nilai Karyawan';
          $this->view('template/header',$data);
          $this->view('template/navbar');
          $this->view('tabel_nilai/index');
          $this->view('template/footer');
           }
 }