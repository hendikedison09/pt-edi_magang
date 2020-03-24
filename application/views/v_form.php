<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        span{
            border-bottom: 1px solid;
        }
        .kegiatan {
            border-bottom: 1px solid;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5"><img style="height: auto; float:center;" src="<?=base_url()?>assets/img/capture.png" alt="" class="gmbr"></div>
            
            <div class="col-md-7" >
                <h4 style="text-align: center; margin-top: 50px;">
                    PT. EDI INDONESIA <br> FORMULIR PENGELUARAN KAS KECIL
                </h4>          
                <p style="text-align: right;">Tanggal
                    <span><?php  echo date("d-M-y") . "<br>"; ?></span>
                </p> 
            </div> 
                <br> 
                <br> 
                <br>

            <div class="col-md-5">
                <p>Bukti Kas No. : <span> <?php  echo $no_bukti ?> </span> </p>
            </div>
            <div class="col-md-7"></div>       
            
            <div class="ket.">
                <h4>Pengeluaran Untuk Keperluan / Kegiatan :</h4>
            </div>
                <br>
                <br>

                    <table style="border-collapse:collapse; width: 100%; height:100%;" action="">
                        <?php $no=1; ?>
                        <?php foreach ($data_input as $di ) : ?>
                            <tr>    
                                <td><?= $no ?>.</td>
                                <td><?= $di->kegiatan ?></td>
                                <td></td>
                                <td>Rp</td>
                                <td style="text-align: right;"><?= $di->jumlah ?></td>
                            </tr>
                        <?php $no++; ?>
                        <?php endforeach; ?>
                            <tr>
                                <td colspan="2"></td>
                                <td>Jumlah </td>
                                <td>Rp</td>
                                <td border="1" style="text-align: right; border-style:solid;" id="nominal"><?=$nambah?></td>
                                <td></td>
                            </tr> 
        
                    </table>

                <br>
                <br>
            <div class="col-md-12"> 
                <p style="border-style: solid; height: 50px; color: black;" id="terbilang">
                Terbilang : 
                    <?= to_word($nambah)?>rupiah
                </p>
            </div>

            
        
            <div><p>Penyesuaian Beban Anggaran,Otorisasi No : _____________________________</p>
            <div><p>Kategori Biaya : __________________________________________________________</p>
            </div>
            <table border="2" style="width: 1000px; text-align: center;">
            <tr>
                <th style="margin:40px;">Kadiv Keuangan</th>
                <th style="margin:40px;">Kabag Perbendaharaan</th>
                <th style="margin:40px;">Kabag Perencanaan Keuangan</th>
                <th style="margin:40px;">Kepala Devisi</th>
                <th style="margin:40px;">Pemohon</th>
                </tr>
                <tr>
                    <td style="padding: 60px;"></td>
                    <td style="text-align: center; vertical-align: bottom;"> Ita Ristanti</td>
                    <td style="text-align: center; vertical-align: bottom;"> Dedi Yuhendra</td>
                    <td style="text-align: center; vertical-align: bottom;"> Imam Ashari</td>
                    <td style="text-align: center; vertical-align: bottom;"> Didik Ali MH</td>
                </tr>
            </table>
            <br>
            <div style="float: right;">
                <p>Surabaya,<br> Penerima Uang</p>
                <br>
                <br>
                <p style="text-align: center;">Ajeng Setyorini</p>

            </div>
        </div>

    </div>
</body>
</html>
<script>
    function terbilang(){

        var bilangan=document.getElementById("nominal").value;
        var kalimat="<?=$nambah?>";
        var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
        var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
        var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
        var panjang_bilangan = bilangan.length;

    /* pengujian panjang bilangan */
    if(panjang_bilangan > 15){
        kalimat = "Diluar Batas";
    }else{
        /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
        for(i = 1; i <= panjang_bilangan; i++) {
            angka[i] = bilangan.substr(-(i),1);
        }
         
        var i = 1;
        var j = 0;
         
        /* mulai proses iterasi terhadap array angka */
        while(i <= panjang_bilangan){
            subkalimat = "";
            kata1 = "";
            kata2 = "";
            kata3 = "";
             
            /* untuk Ratusan */
            if(angka[i+2] != "0"){
                if(angka[i+2] == "1"){
                    kata1 = "Seratus";
                }else{
                    kata1 = kata[angka[i+2]] + " Ratus";
                }
            }
             
            /* untuk Puluhan atau Belasan */
            if(angka[i+1] != "0"){
                if(angka[i+1] == "1"){
                    if(angka[i] == "0"){
                        kata2 = "Sepuluh";
                    }else if(angka[i] == "1"){
                        kata2 = "Sebelas";
                    }else{
                        kata2 = kata[angka[i]] + " Belas";
                    }
                }else{
                    kata2 = kata[angka[i+1]] + " Puluh";
                }
            }
             
            /* untuk Satuan */
            if (angka[i] != "0"){
                if (angka[i+1] != "1"){
                    kata3 = kata[angka[i]];
                }
            }
             
            /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
            if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
                subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
            }
             
            /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
            kalimat = subkalimat + kalimat;
            i = i + 3;
            j = j + 1;
        }
         
        /* mengganti Satu Ribu jadi Seribu jika diperlukan */
        if ((angka[5] == "0") && (angka[6] == "0")){
            kalimat = kalimat.replace("Satu Ribu","Seribu");
        }
    }
    document.getElementById("terbilang").innerHTML=kalimat;
}

        // date = null;
        //     setInterval(() => {
        //         date = moment(new Date())
        //         $('span#tanggal').html(date.format('D[-]MMM[-]YY'));
        //     }, 100);

		window.print();

</script>




