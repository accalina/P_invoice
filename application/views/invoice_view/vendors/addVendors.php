  
  <script src="https://unpkg.com/vue"></script>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vendor
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
            <i class="fa fa-address-card-o"></i> {{ title }}
            <small class="pull-right">Date: <?php echo date('d/m/Y');  ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>

      <div class="row">
        <div class="col-sm-4">
          <form id="vendorform" action="addVendors_engine" method="POST">
            <h3>Tambah Vendor</h3>
            <input type="text" value="" name="vendorid" id="vendorid" hidden="hidden">
            <div class="form-group">
              <label>Nama Vendor </label>
              <input class="form-control" id="namavendor" name="namavendor" type="text" value="">
              <label>Alamat</label>
              <input class="form-control" id="alamatvendor" name="alamatvendor" type="text" value="">
              <label>Telp</label>
              <input class="form-control" id="telpvendor" name="telpvendor" type="text" value="">
              <label>Email</label>
              <input class="form-control" id="emailvendor" name="emailvendor" type="text" value="">
            </div>
            <hr>
            <input v-if="type=='insert'" class="btn btn-success" type="submit" value="Simpan data Vendor">
            <input v-if="type=='update'" class="btn btn-primary" type="submit" value="Update data Vendor">
            <button v-if="type=='update'" @click="addVendor()" class="btn btn-warning" type="button">Clear and add New</button>
          </form>
        </div>
        <div class="col-sm-7 col-sm-offset-1">
          <h3>List Vendor</h3>
          <table class="well table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Nama Vendor</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($vendors as $key => $vendor): ?>
              <tr>
                <td> <a @click = updateVendor() onclick="injectVendor(<?= "'".$vendor['id']."','".$vendor['nama']."','".str_replace("\n"," ",$vendor['alamat'])."','".$vendor['telp']."','".$vendor['email']."'" ?>)"> <?= $vendor['nama']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$vendor['id']."','".$vendor['nama']."','".str_replace("\n"," ",$vendor['alamat'])."','".$vendor['telp']."','".$vendor['email']."'" ?>)"> <?= substr($vendor['alamat'],0,20).'...'?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$vendor['id']."','".$vendor['nama']."','".str_replace("\n"," ",$vendor['alamat'])."','".$vendor['telp']."','".$vendor['email']."'" ?>)"> <?= $vendor['telp']?> </a></td>
                <td> <a onclick="injectVendor(<?= "'".$vendor['id']."','".$vendor['nama']."','".str_replace("\n"," ",$vendor['alamat'])."','".$vendor['telp']."','".$vendor['email']."'" ?>)"> <?= $vendor['email']?> </a></td>
                <td> <a class="btn btn-danger" href="deleteVendors_engine?vendorid=<?= $vendor['id']?>"> Delete</a> </td>
              </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>

  <script>
    function injectVendor(vendorid, nama, alamat, telp, email){
      $('#vendorid').val(vendorid);
      $('#namavendor').val(nama);
      $('#alamatvendor').val(alamat);
      $('#telpvendor').val(telp);
      $('#emailvendor').val(email);
    }

    app = new Vue({
      el: '.content-wrapper',
      data: {
        "title": "Add New Vendor",
        "type": "insert"
      },
      methods: {
        addVendor : function(){
          this.title = "Add New Vendor",
          this.type = "insert"
          $('#vendorid').val('');
          $('#namavendor').val('');
          $('#alamatvendor').val('');
          $('#telpvendor').val('');
          $('#emailvendor').val('');
          $('#vendorform').attr('action',"addVendors_engine");
        },
        updateVendor : function(){
          this.title = "Update Vendor",
          this.type = "update"
          $('#vendorform').attr('action',"updateVendors_engine");
        }
      }
    })
  </script>