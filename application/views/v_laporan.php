<h3>PT. ELECTRONIC DATA INTERCHANGE INDONESIA</h3>
LAPORAN KAS KECIL OPERASIONAL <br>
<?php  echo "Periode " . date("d M Y") . "<br>"; ?>
<div class="row clearfix">
    <div class="col-md-8">
        <div class="card">
            <div class="body">

                <table class="table table-hover" border="1" style="border-collapse:collapse; width: 100%; height: 20px;"
                    action="">
                    <tr>
                        <th>Tanggal</th>
                        <th>No.bukti</th>
                        <th>Kegiatan</th>
                        <th>Jumlah</th>
                        <th>Saldo Kas Kecil</th>
                    </tr><br>
                    <?php $no=1; ?>
                    <?php foreach ($detail as $di ) : ?>
                    <tr>
                        <td style="text-align: center;"><?= tgl_indo($di->tgl) ?></td>
                        <td style="text-align: center;"><?= $di->no_bukti ?></td>
                        <td><?= $di->kegiatan ?></td>
                        <td style="text-align: right;"><?= rupiah($di->jumlah) ?></td>
                        <td style="text-align: right;"><?= rupiah($di->saldo_kas_kecil) ?></td>
                    </tr>
                    <?php $no++; ?>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="6" style=""> <br></td>
                    </tr>
                    <tr style="text-align: right;">
                        <td colspan="3"></td>
                        <td> <?php echo rupiah($tambah) ?> </td>
                        <td> <?= rupiah($di->saldo_kas_kecil) ?> </td>
                    </tr>
                </table>
                <br>
            </div>
        </div>
    </div>
</div>

<table style="width: 100%; text-align: center;">
    <tr>
        <th>Dibuat oleh,</th>
        <th></th>
        <th>Disetujui oleh, </th>
    </tr>

    <tr>
        <td style="text-decoration: underline;"> <br> <br> <br> Ajeng S</td>
        <td style="text-decoration: underline;"> <br> <br> <br> Ita Ristiani</td>
        <td style="text-decoration: underline;"> <br> <br> <br> Didik Ali Mukti H</td>
    </tr>
    <tr>
        <td>kasir</td>
        <td>Kepala Bagian Perbendaharaan</td>
        <td>Manager Kantor Regional Jawa Timur-Bali</td>
    </tr>
</table>

<script>
    window.print();
</script>