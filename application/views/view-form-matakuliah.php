<html>

    <head>
        <title>Form Input Matakuliah </title>
    </had>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() 
        ?>assets/css/stylebuku.css">
    <div id="form">
        <body>
            <center>
                    <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
                    <table>
                        <tr>
                            <th colspan="3">
                                <h2>Form Input Data</h2>
                            </th>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <th>Kode MTK</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="kode" id="kode" placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('kode'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th>Nama MTK</th>
                            <th>:</th>
                            <td>
                                <input type="text" name="nama" id="nama"placehorder="required">
                                <div class="col-sm-6 col-danger"> <?= form_error('nama'); ?></div>
                            </td>
                        </tr>
                        <tr>
                            <th>SKS</th>
                            <td>:</td>
                            <td>
                                <select name="sks" id="sks">
                                    <option value="">Pilih SKS</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <input type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </body>
    </div>

</html>
