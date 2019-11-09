<?php 
    
    require 'koneksi.php';

    if (isset($_POST['submit'])) {
        
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $tmp_lahir = $_POST['tempat_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $hp_siswa = $_POST['hp_siswa'];
        $almt_siswa = $_POST['alamat_siswa'];
        $gol_darah = $_POST['gol_darah'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $almt_ortu = $_POST['alamat_ortu'];
        $hp_ortu = $_POST['hp_ortu'];
        $kerja_ayah = $_POST['kerja_ayah'];
        $kerja_ibu = $_POST['kerja_ibu'];
        $hasil_ortu = $_POST['penghasilan_ortu'];

        $query = "INSERT INTO peserta_pendaftar (nisn,nama,tempat_lahir,tgl_lahir,jenis_kelamin,agama,
                    no_hp_siswa,alamat_siswa,gol_darah,asal_sekolah,nama_ayah,nama_ibu,alamat_ortu,
                    no_hp_ortu,kerja_ayah,kerja_ibu,penghasilan_ortu) VALUES ('$nisn','$nama',
                    '$tmp_lahir','$tgl_lahir','$jk','$agama','$hp_siswa','$almt_siswa','$gol_darah',
                    '$asal_sekolah','$nama_ayah','$nama_ibu','$almt_ortu','$hp_ortu','$kerja_ayah',
                    '$kerja_ibu','$hasil_ortu')";
        $save = mysqli_query($koneksi,$query);
        if ($save) {
            ?>
                <script type='text/javascript' language='JavaScript'>
                    alert('Anda Berhasil Daftar. Login ke Menu Akun Untuk Memasukkan Nilai');
                </script>
            <?php
        }else{
            ?>
                <script type='text/javascript' language='JavaScript'>
                    alert('Anda Gagal Daftar. Silahkan Lengkapi Data');
                </script>
            <?php
        }
    }


 ?>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-caption">
                    <h2 class="page-title">Daftar Sekarang</h2>
                        <div class="page-breadcrumb">
                           <ol class="breadcrumb">
                                <li><a href="index.php" style="color: black;">Beranda</a></li>
                                <li class="active" style="color: orange;">Daftar Sekarang</li>
                            </ol>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class='row'>
            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="text-center" style="margin-top: 20px; margin-bottom: 20px;">
                <h1>Form Pendaftaran</h1>
                    <p> Please complete the form below. We'll do everything we can to respond to you as quickly as possible.</p>
                </div>
                    <form method='post' action=''>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <label class='control-label'>nisn*</label>
                                    <input type='text' name='nisn' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>nama*</label>
                                    <input type='text' name='nama' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tempat lahir*</label>
                                    <input type='text' name='tempat_lahir' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>jenis kelamin*</label>
                                    <select class='form-control' name='jenis_kelamin' required>
                                        <option value='Laki-Laki'>Laki-Laki</option>
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>tanggal lahir*</label>
                                        <div class='datepicker-center'>
                                            <div class='input-group date ' data-date='' data-date-format='yyyy-mm-dd'>
                                                <span class='input-group-addon'><i class='glyphicon glyphicon-calendar'></i></span>
                                                <input class='form-control' type='text' name='tgl_lahir' readonly='readonly'>
                                            </div>
                                        </div>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>agama*</label>
                                        <select class='form-control' name='agama' required>
                                            <option value='Islam'>Islam</option>
                                            <option value='Khatolik'>Khatolik</option>
                                            <option value='Protestan'>Protestan</option>
                                            <option value='Hindu'>Hindu</option>
                                            <option value='Budha'>Budha</option>
                                        </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No. HP Siswa*</label>
                                    <input type='tel' name='hp_siswa' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Siswa*</label>
                                    <textarea class='form-control' name='alamat_siswa' rows='6' placeholder='' required></textarea>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Gol. Darah</label>
                                        <select class='form-control' name='gol_darah'>
                                            <option value='A'>A</option>
                                            <option value='B'>B</option>
                                            <option value='AB'>AB</option>
                                            <option value='O'>O</option>
                                        </select>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Asal Sekolah*</label>
                                    <input type='text' name='asal_sekolah' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ayah*</label>
                                    <input type='text' name='nama_ayah' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Nama Ibu*</label>
                                    <input type='text' name='nama_ibu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Alamat Orang Tua*</label>
                                    <textarea class='form-control' name='alamat_ortu' rows='6' placeholder='' required></textarea>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>No. HP Orang Tua*</label>
                                    <input type='tel' name='hp_ortu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ayah*</label>
                                    <input type='text' name='kerja_ayah' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Pekerjaan Ibu*</label>
                                    <input type='text' name='kerja_ibu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-6'>
                                    <label class='control-label'>Penghasilan Orang Tua*</label>
                                    <input type='number' name='penghasilan_ortu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-12'>
                                    <button class="btn btn-success" type="submit" name="submit">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>