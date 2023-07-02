


      
      <div class="container">
         <div class="row">
            <div class="m-box">
               <?php Flasher::flash(); ?>
            </div>
            <div class="col1-home">
               <table>
                     <tr>       
                           <th>Nama</th>
                           <th>No_Pegawai</th>
                           <th>Telpon</th>  
                           <th>Aksi</th>  
                     </tr>
                     <?php foreach($data['kryw'] as $peg) : ?>
                           <tr>         
                              <td><?= $peg['nama'] ?></td>
                              <td><?= $peg['no_peg'] ?></td>
                              <td><?= $peg['telp'] ?></td>
                              <td><a href="<?= BASEURL; ?> /home/detail/<?= $peg['id']?>"> detail</a></td>
                           </tr>
                  <?php endforeach; ?>
               </table>
            </div>

            <div class="col2-home">
              <h2>Skala Penilaian</h2>
              <div class="table_skala">
              <table>
                     <tr>       
                           <th>Keterangan</th>
                           <th>Nilai Bobot</th>
                     </tr>
                     <tr>
                        <td>Absensi</td>
                        <td>5</td>
                     </tr>
                     <tr>
                        <td>Profesional</td>
                        <td>4</td>
                     </tr>
                     <tr>
                        <td>Kerja Sama</td>
                        <td>3</td>
                     </tr>
                     <tr>
                        <td>Perilaku</td>
                        <td>2</td>
                     </tr>
                     <tr>
                        <td>Kebersihan</td>
                        <td>1</td>
                     </tr>
               </table>
              </div>
               
            </div>
         </div>
      </div>
     
         

