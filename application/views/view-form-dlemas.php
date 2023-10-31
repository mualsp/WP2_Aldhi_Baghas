<html>
    <head>
        <title>Form Input Di-Lemas</title>
        <link rel="icon" href="assets/image/B.jpg" type="image" sizes="16x16">
    </head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() 
    ?>assets/css/styledlemas.css">
    <div id="form">
        <body>
            <center>
                    <form action="<?= base_url('dlemas/cetak'); ?>" method="post">
                    <table>
                        <div class="head">
                            <hgroup>
                                    <h1>Form Input <br>Di-Lemas</br></h1>
                                </th>
                            </hgroup>
                        </div>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <th>:</th>
                            <td>
                                <input type="text" name="namasiswa" id="namasiswa"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('namasiswa'); ?></div>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>NIS</td>
                            <th>:</th>
                            <td>
                                <input type="text" name="kode" id="kode" placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('kode'); ?></div>
                            </td>
                        </tr>
                            <td>Kelas</td>
                            <th>:</th>
                            <td>
                                <input type="text" name="kelas" id="kelas"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('kelas'); ?></div>
                            </td>
                        </tr>
                        </tr>
                            <td>Tanggal lahir</td>
                            <th>:</th>
                            <td>
                                <input type="date" name="tgllahir" id="tgllahir"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('tgllahir'); ?></div>
                            </td>
                        </tr>
                        </tr>
                            <td>Tempat lahir</td>
                            <th>:</th>
                            <td>
                                <input type="text" name="tmptlahir" id="tmptlahir"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('tmptlahir'); ?></div>
                            </td>
                        </tr>
                        </tr>
                            <td>Alamat</td>
                            <th>:</th>
                            <td>
                                <input type="text" name="alamat" id="alamat"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('alamat'); ?></div>
                            </td>
                        </tr>
                        </tr>
                            <td>Jenis Kelamin</td>
                            <th>:</th>
                            <td>
                                <input type="radio" name="jk" value="Laki-laki">laki-laki
                                <br><input type="radio" name="jk" value="Perempuan">perempuan
                                <?= form_error('jk'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select name="agama" id="agama">
                                    <option value="">Pilih Agama</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Khonghucu">Khonghucu</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" value=" Input " class="submit">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <hr>
                            </td>
                        </tr>
                    </table>
                 </form>
            </center>
        </body>
    </div>
</html>