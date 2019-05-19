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
            <i class="fa fa-address-card-o"></i> Add New Invoice Detail
            <small class="pull-right">Date: <?php echo date('d/m/Y');  ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-sm-5">
          <form action="addInvoice_detail_engine" method="POST">
            <input type="text" value="<?= $vendor[0]['id']?>" name="vendorid" id="vendorid" hidden="hidden">
            <div class="form-group">
              <label>Activity</label>
              <input class="form-control" name="activity" type="text" placeholder="">
              <label>Description</label>
              <input class="form-control" name="desc" type="text" placeholder="">
              <label>Cost</label>
              <input class="form-control" name="cost" type="text" placeholder="">
            </div>
            <input class="btn btn-success" type="submit" value="Tambahkan Detail invoice">
          </form>
        </div>
        <div class="col-sm-6 col-sm-offset-1">
          <table class="table table-bordered">
            <tbody>
              <tr>
                <td class="bg-primary"> <center><b>Data Vendor</b></center> </td>
              </tr>
              <?php foreach ($vendor as $key => $row): ?>
              <tr>
                <td class="bg-info">
                  <b>Nama</b>
                  <?= $row['nama']?>
                </td>
              </tr>
              <tr>
                <td class="bg-info">
                  <b>Alamat</b>
                  <?= $row['alamat']?>
                </td>
              </tr>
              <tr>
                <td class="bg-info">
                  <b>Telp</b>
                  <?= $row['telp']?>
                </td>
              </tr>
              <tr>
                <td class="bg-info">
                  <b>Email</b>
                  <?= $row['email']?>
                </td>
              </tr>
              
              <?php endforeach?>
            </tbody>
          </table>
        </div>
      </div>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Activity</th>
            <th>Description</th>
            <th>Cost</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($cart as $key => $row):?>
          <tr>
            <td><?= $key + 1?></td>
            <td><?= $row['activity']?></td>
            <td><?= $row['description']?></td>
            <td>Rp. <?= number_format($row['harga'])?></td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>

    <script>
      function injectVendor(vendorid, nama, alamat, telp, email){
        $('#vendorid').val(vendorid);
        $('#namavendor').val(nama);
        $('#alamatvendor').val(alamat);
        $('#telpvendor').val(telp);
        $('#emailvendor').val(email);
      }
    </script>

    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>