<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">
                        <h2 class="page-title">Update Data Pribadi Anda</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <!--li><a href="index.html"></a></li>
                                <li class="active">Service Single</li-->
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                    <h1>Biodata Peserta</h1>
                    <p> Please complete the form below.</p>
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
                                    <input type='text' name='tmpt_lhir' placeholder='' class='form-control' required>
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
                                                <input class='form-control' type='text' name='tgl_regis' readonly='readonly'>
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
                                    <label class='control-label'>Alamat Siswa*</label>
                                    <textarea class='form-control' name='almt_siswa' rows='6' placeholder='' required></textarea>
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
                                    <textarea class='form-control' name='almt_ortu' rows='6' placeholder='' required></textarea>
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
                                <div class='col-md-6'>
                                    <label class='control-label'>No. HP Orang Tua*</label>
                                    <input type='tel' name='hp_ortu' placeholder='' class='form-control' required>
                                </div>
                                <div class='col-md-12'>
                                    <div class='form-group'>
                                    <input name='singlebutton' class='btn btn-success' type='submit' value='Daftar'>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>     
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidenav">
                        <ul class="listnone">
                            <li> <a href='?' class="active">Biodata</a></li>
                            <li> <a href='?page=input'>Input Nilai Rapor</a></li>
                            <li> <a href='?page=ubah'>Ubah Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>