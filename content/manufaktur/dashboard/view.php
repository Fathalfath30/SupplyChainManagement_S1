<?php
/*
 //
 //    ______    _   _           _  __      _   _     ____   ___
 //   |  ____|  | | | |         | |/ _|    | | | |   |___ \ / _ \
 //   | |__ __ _| |_| |__   __ _| | |_ __ _| |_| |__   __) | | | |
 //   |  __/ _` | __| '_ \ / _` | |  _/ _` | __| '_ \ |__ <| | | |
 //   | | | (_| | |_| | | | (_| | | || (_| | |_| | | |___) | |_| |
 //   |_|  \__,_|\__|_| |_|\__,_|_|_| \__,_|\__|_| |_|____/ \___/
 //
 // Licensed under GNU General Public License v3.0
 // http://www.gnu.org/licenses/gpl-3.0.txt
 // Written by Fathalfath30. Email : fathalfath30@gmail.com
 // Follow me on GithHub : https://github.com/Fathalfath30
 //
*/
include 'system/App_data.php';
?>
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="panel panel-visible" id="spy2">
            <div class="panel-heading">
                <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Jadwal Produksi
                </div>
            </div>
            <div class="panel-body pn">
                <table class="table table-bordered table-hover" id="dataTables" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Tanggal Pembuatan</th>
                        <th>Mesin</th>
                        <th>Status</th>
                        <th>Kondisi</th>
                        <th>Estimasi Selesai</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ( $i = 0; $i < count($data['JADWAL_PRODUKSI']); $i++ ) {
                        $X = $data['JADWAL_PRODUKSI'][$i];
                        $color = 'black';
                        switch ( strtolower($X['KONDISI']) ) {
                            case 'excellent':
                                $color = 'green';
                                break;
                            case 'good':
                                $color = 'blue';
                                break;
                            case 'bad':
                                $color = 'red';
                                break;
                        }
                        ?>
                        <tr>
                            <td><?php echo $X['TANGGAL_BUAT'] ?></td>
                            <td><?php echo $X['MESIN'] ?></td>
                            <td><?php echo $X['STATUS'] ?></td>
                            <td style='color:<?php echo $color ?>'><?php echo $X['KONDISI'] ?></td>
                            <td><?php echo $X['ESTIMASI'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="panel panel-visible" id="spy2">
            <div class="panel-heading">
                <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Data Pemesanan Bahan Baku
                </div>
            </div>
            <div class="panel-body pn">
                <table class="table table-bordered table-hover" id="data-pesanan" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Supplier</th>
                        <th>Tanggal Pesan</th>
                        <th>Stok</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ( $i = 0; $i < count($data['PO_BAHAN_BAKU']); $i++ ) {
                        $X = $data['PO_BAHAN_BAKU'][$i];
                        ?>
                        <tr>
                            <td><?php echo $X['SUPPLIER'] ?></td>
                            <td><?php echo $X['TANGGAL_PESAN'] ?></td>
                            <td><?php echo $X['STOCK'] ?></td>
                            <td><?php echo $X['T_HARGA'] ?></td>
                            <td style='color:<?php echo $X['COLOR'] ?>'><?php echo $X['STATUS'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="panel panel-visible" id="spy2">
            <div class="panel-heading">
                <div class="panel-title hidden-xs">
                    <span class="glyphicon glyphicon-tasks"></span>Data Pemesanan Bahan Baku
                </div>
            </div>
            <div class="panel-body pn">
                <table class="table table-bordered table-hover" id="data-distributor" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Distributor</th>
                        <th>Tanggal Pesan</th>
                        <th>Stok</th>
                        <th>Estimasi Selesai</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    for ( $i = 0; $i < count($data['PO_DISTRIBUTOR']); $i++ ) {
                        $X = $data['PO_DISTRIBUTOR'][$i];
                        ?>
                        <tr>
                            <td><?php echo $X['DISTRIBUTOR'] ?></td>
                            <td><?php echo $X['TANGGAL'] ?></td>
                            <td><?php echo $X['STOCK'] ?></td>
                            <td><?php echo $X['ESTIMASI'] ?></td>
                            <td style='color:<?php echo $X['COLOR'] ?>'><?php echo $X['STATUS'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
