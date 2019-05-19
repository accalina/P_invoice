  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#<?php if ($cart[0]['invoice']){ echo str_pad($cart[0]['invoice'], 6, '0', STR_PAD_LEFT); } else { redirect('addinvoice_detail?id='.$dbdata['id']); } ?></small>
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
            <i class="fa fa-globe"></i> <?= $userdata['corpName']?>, Inc.
            <small class="pull-right">Date: <?php echo date('d/m/Y');  ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong> <?= $userdata['corpName']?> </strong><br>
            <?= $userdata['corpAddr']?> <br>
            Phone: <?= $userdata['corpPhone']?><br>
            Email: <?= $userdata['corpEmail']?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?= $dbdata['nama'] ?></strong><br>
            <?= $dbdata['alamat']?><br>
            Phone: <?= $dbdata['telp']?><br>
            Email: <?= $dbdata['email']?>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Invoice #<?= str_pad($dbdata['id'], 6, '0', STR_PAD_LEFT);?></b><br>
          <br>
          <b>Payment Due:</b> <?= $dbdata['jatuhTempo']?><br>
          <b>Account:</b> <?= $dbdata['noAkun']?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
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
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="<?= base_url(); ?>/assets/dist/img/credit/visa.png" alt="Visa">
          <img src="<?= base_url(); ?>/assets/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?= base_url(); ?>/assets/dist/img/credit/american-express.png" alt="American Express">
          <img src="<?= base_url(); ?>/assets/dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Payment must be done before Due Date to avoid any extra charges
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due <?= $dbdata['jatuhTempo']?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>Rp. <?= number_format($cart[0]['surplus']) ?></td>
              </tr>
              <tr>
                <th>Paid: </th>
                <td>Rp. <?= number_format($cart[0]['deficit']) ?></td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>Rp. <?= number_format($cart[0]['total']) ?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->      
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>