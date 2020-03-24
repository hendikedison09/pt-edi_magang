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
            <div>
                
                <div><p>Jumlah uang yang diterima sebesar Rp : ____________________________________________________________________</p>

                    <p style="font-weight: bold;">Terbilang : </p>

                    <p>Bukti Cek No : CA 202475</p>

                    <p style="font-weight: bold;">Pengeluaran Untuk Keperluan / Kegiatan:</p>

                    <p>1 _______________________________________________________________________    RP______________________</p>
                    <p>2 _______________________________________________________________________    RP______________________</p>
                    <p>3 _______________________________________________________________________    RP______________________</p>
                    <p>4 _______________________________________________________________________    RP______________________</p>
                    <p>5 _______________________________________________________________________    RP______________________</p>
                    
                    <p style="text-align: right;">Jumlah</p>
                        
                        <p style="font-weight: bold;">Terbilang : </p>
                
                </div>


            
        
            <div><p>Penyesuaian Beban Anggaran,Otorisasi No : _______________________________________________________________________________________________________</p>
            <div><p>Kategori Biaya : _____________________________________________________________________________________________________________________________________</p>
            </div>
            
 
 <!-- <div style=" width: 40px; border: 1px solid; padding: 15px; margin: 10px;">
     <p>fn hd</p>
 </div> -->
<div class="row">

   <div class="col-xs-6 col-md-4"><div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;"><p style="text-align: right; padding:-5px; width: 100px;">Proyek :</p></div></div>

   <div class="col-xs-4 col-md-2"></div>

   <div class="col-xs-4 col-md-2"><div style=" width: 10px; border: 1px solid; padding: 10px; margin: 9px; height: 40px;"><p style="text-align: right; width: 110px;">Non Proyek :</p></div></div>

</div>

<div class="row">

  <div class="col-xs-6 col-md-4"><div style=" width: 40px; border: 1px solid; padding: 4px; margin: 20px; height: 30px;"><p style="text-align: right; padding:-5px; width: 100px;">Budget :</p></div></div>
  <div class="col-xs-4 col-md-2"></div>

<div class="col-xs-4 col-md-2"><div style=" width: 10px; border: 1px solid; padding: 10px; margin: 9px; height: 40px;"><p style="text-align: right; width: 110px;">Non Budget :</p></div></div>

</div>

            <table border="2" style="width: 1000px; text-align: center;">
            <tr>
                <th style="margin:40px;width: 200px;">Kabag Perancangan Keuangan</th>
                <th style="margin:40px;">Kabag. Perbendaharaan</th>
                <th style="margin:40px;width: 150px;">Mengetahui Kepala Divisi</th>
                <th style="margin:40px;">Pemohon</th>
                </tr>
                <tr>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                   
                </tr>
            </table>
            <br>    
           <table border="2" style="width: 1000px; text-align: center;">
            <tr>
                <th style="margin:40px; width: 200px;">Surabaya Penerima Uang/Cek,</th>
                <th style="margin:40px;">Direktur Utama</th>
                <th style="margin:40px;">Direktur Keuangan</th>
                <th style="margin:40px;">Kadiv Pendukung</th>
                <th style="margin:40px;">Kadiv Keuangan</th>
                </tr>
                <tr>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                    <td style="padding: 60px;"></td>
                     <td style="padding: 60px;"></td>
                   
                </tr>
            </table>
            <br>
            <p style="color: white;">kdkddk</p>
            
        </div>

    </div>
</body>
</html>
<!-- <script>
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




 -->