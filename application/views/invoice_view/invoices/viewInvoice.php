  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>Manager</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-address-card-o"></i> View Invoice List
            <small class="pull-right">Date: <?php echo date('d/m/Y');  ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
        <div class="col-sm-12">

          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Detail Invoice</h4>
                </div>
                <div class="modal-body">
                  <form id="detailform" method="get" action="trackinvoice">
                    <input type="text" name="id" id="vendorid" hidden="hidden">
                    <div class="form-group">
                      <label>Nama Vendor </label>
                      <input class="form-control" id="namavendor" type="text" readonly>
                      <label>Alamat</label>
                      <input class="form-control" id="alamatvendor" type="text" readonly>
                      <label>Telp</label>
                      <input class="form-control" id="telpvendor" type="text" readonly>
                      <label>Email</label>
                      <input class="form-control" id="emailvendor" type="text" readonly>
                      <label>Tanggal Jatuh Tempo</label>
                      <input class="form-control" id="jatuhtempo" type="text" readonly>
                      <label>Nomor Akun Vendor</label>
                      <input class="form-control" id="noakun" type="text" readonly>
                    </div>
                    <!-- <input class="btn btn-success" type="submit" value="Simpan data invoice"> -->
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  <a id="adddetail" href=""><button type="button" class="btn btn-success">Tambah Detail Invoice</button></a>
                  <button type="submit" form="detailform" class="btn btn-primary">Lihat Detail</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <button hidden type="button" id="infomodal" data-toggle="modal" data-target="#modal-default">View info</button>

          <h3>List Invoice</h3>
          <table class="well table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>No Akun</th>
                <th>Jatuh Tempo</th>
                <th>Nama Vendor</th>
                <th>Alamat Vendor</th>
                <th>Telp Vendor</th>                
                <th>Email Vendor</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($invoices as $key => $invoice): ?>
              <tr>                
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['noAkun']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['jatuhTempo']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['nama']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['alamat']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['telp']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$invoice['id']."','".$invoice['nama']."','".str_replace("\n"," ",$invoice['alamat'])."','".$invoice['telp']."','".$invoice['email']."','".$invoice['jatuhTempo']."','".$invoice['noAkun']."'" ?>)"> <?= $invoice['email']?> </a></td>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </div>
      </div>

    <script>
      function injectVendor(vendorid, nama, alamat, telp, email, tempo, noakun){
        $('#vendorid').val(vendorid);
        $('#namavendor').val(nama);
        $('#alamatvendor').val(alamat);
        $('#telpvendor').val(telp);
        $('#emailvendor').val(email);
        $('#jatuhtempo').val(tempo);
        $('#noakun').val(noakun);
        $('#adddetail').attr('href','addInvoice_detail?id='+vendorid)
        $('#infomodal').click()
      }
    </script>

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>