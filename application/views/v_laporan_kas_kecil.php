<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"crossorigin="anonymous">

        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img style="height: auto; float:center;" src="<?=base_url()?>assets/img/capture.png" alt="" class="gmbr">
                </div>
        
                <div class="col-md-7">
                    <h4 style="text-align: center; margin-right: 200px; margin-top: 50px;">
                        PT. EDI INDONESIA
                        <br> FORMULIR PENGELUARAN BANK
                    </h4>
                    <br>
                    <br>
                    <!-- <p style="float:right; text-align: center; border: 2px solid ; width: 25%;">Tanggal
                        <?= $tgl ?>
                    </p> -->
                    <br>
                    <br>
                </div>
                <br>
        
                <div class="row">
                    <br>
                    <br>
                    <div class="col-md-12">
                        <p>Mohon diberikan uang muka sebesar Rp
                            <?= rupiah($tambah) ?>
                        </p>
        
                        <p style="font-weight: bold; border: 2px solid ; width: 100%; "> Terbilang :
                            <?=  to_word($tambah) ?> rupiah
        
                        <p>
                            Bukti Cek No : <?= $bukti_cek->bukti_cek ?> 
                        </p>
        
                        <p style="font-weight: bold;">Pengeluaran Untuk Keperluan / Kegiatan: </p>
        
                    </div>
        
                    <div class="col-md-10">
                        <p>1. Isi Kas Kecil
                            <?= $laporan_kas_kecil->k_saldo ?>
                        </p>
                        <p>2.
                            ______________________________________________________________________________________________________________
                        </p>
                        <p>3.
                            ______________________________________________________________________________________________________________
                        </p>
                        <p>4.
                            ______________________________________________________________________________________________________________
                        </p>
                        <p>5.
                            ______________________________________________________________________________________________________________
                        </p>
                        <p style="text-align: right; word-spacing:5px; ">Jumlah</p>
                    </div>
        
                    <div class="col-md-2" style="text-align: left; ">
                        <p>
            
                            Rp. <?= rupiah($tambah) ?>
                
                        </p>
                        <p>RP.______________________</p>
                        <p>RP.______________________</p>
                        <p>RP.______________________</p>
                        <p>RP.______________________</p>
                        <p style="border: 2px solid ;">
                            Rp. <?= rupiah($tambah); ?>
                        </p>
                    </div>
        
                    <div class="col-md-12">
                    <p style="font-weight: bold; border: 2px solid ; width: 100%; "> Terbilang :
                            <?=  to_word($tambah) ?> rupiah
                        <p>Penyesuaian Beban Anggaran,Otorisasi No :
                            ____________________________________________________________________________________________________________________________
                        </p>
                        <p>Kategori Biaya :
                            __________________________________________________________________________________________________________________________________________________________
                        </p>
                    </div>
        
                    <div class="col-md-6">
                        <div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
                            <p style="text-align: right; padding:-5px; width: 100px;">Proyek :</p>
                        </div>
        
                        <div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
                            <p style="text-align: right; padding:-5px; width: 100px;">Budget :</p>
                        </div>
        
                    </div>
        
                    <div class="col-md-6">
                        <div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
                            <p style="text-align: right; margin-left: 25px; width: 110px;">Non Proyek :</p>
                        </div>
                        <div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;">
                            <p style="text-align: right; margin-left: 25px; width: 110px; ">Non Budget :</p>
                        </div>
                    </div>
        
                    <div>
        
        
                        <div class="row">
        
                            <div class="col-xs-6 col-md-4">
        
                            </div>
                            <div class="col-xs-4 col-md-2"></div>
        
                            <div class="col-xs-4 col-md-2">
        
                            </div>
        
                        </div>
        
                        <table border="2" style="width: 1000px; text-align: center;">
                            <tr>
                                <th style="margin:40px;width: 200px; text-align: center;">Surabaya,
                                    <br>Penerima Uang/Cek,</th>
                                <th style="margin:40px;width: 200px;">Kadep Keuangan</th>
                                <th style="margin:40px;width: 200px;">Kepala Divisi</th>
                                <th style="margin:40px;width: 200px;">Pemohon</th>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: bottom;">Ajeng Setyorini</td>
                                <td style="padding: 60px;" </td> <td style="text-align: center; vertical-align: bottom;">Imam
                                    Ashari</td>
                                <td style="text-align: center; vertical-align: bottom;">Didik Ali Mukti H</td>
        
                            </tr>
                        </table>
                        <br>
                        <table border="2" style="width: 1000px;">
                            <tr style="text-align: center;">
                                <th style="margin:40px;width: 200px;" colspan="4">Menyetujui</th>
                            </tr>
                            <tr>
                                <th style="margin:40px;width: 200px; text-align: center;">Direktur Utama</th>
                                <th style="margin:40px;width: 200px; text-align: center;">Direktur Keuangan dan Pendukung</th>
                                <th style="margin:40px;width: 200px; text-align: center;">Direktur Komersial</th>
                                <th style="margin:40px;width: 200px; text-align: center;">Kadiv Keuangan</th>
                            </tr>
                            <tr>
                                <td style="text-align: center; vertical-align: bottom;">E.Helmi Wantono</td>
                                <td style="text-align: center; vertical-align: bottom;">Elon Manurung</td>
                                <td style="text-align: center; vertical-align: bottom;">Yan Budi Santoso</td>
                                <td style="padding: 60px;"></td>
                            </tr>
                        </table>
                        <br>
        
                    </div>
                </div>
        
            </div>
        </div>
