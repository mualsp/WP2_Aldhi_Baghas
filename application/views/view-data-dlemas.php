<html>
        <head>
            <title>Tampil Data D-lemas</title>
            <link rel="icon" href="assets/image/B.jpg" type="image" sizes="16x16">
        </head>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url() 
            ?>assets/css/styledlemas.css">
            <div id="form">
                <body>
                    <center>
                        <table>
                        <div class="head">
                            <hgroup>
                                    <h1>Tampil Data <br>Di-Lemas !</br></h1>
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
                                <?= $namasiswa; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>NIS</td>
                                <th>:</th>
                                <td>
                                <?= $kode; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelas</td>
                                <th>:</th>
                                <td>
                                <?= $kelas; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal lahir</td>
                                <th>:</th>
                                <td>
                                <?= $tgllahir; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat lahir</td>
                                <th>:</th>
                                <td>
                                <?= $tmptlahir; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <th>:</th>
                                <td>
                                <?= $alamat; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <?= $jk; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                    <td>:</td>
                                    <td>
                                    <?= $agama; ?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" align="center">
                                    <a href="<?= base_url('dlemas'); 
                                    ?>"><input type="button" value="Kembali"class="Submit"</a>
                                </td>
                            </tr>
                        </table>
                    </center>
                </body>
            </div>
</html>
