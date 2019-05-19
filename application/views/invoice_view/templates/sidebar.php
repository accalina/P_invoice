<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <!-- <img src="<?= base_url(); ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
          <img src=" <?= $userdata['userpic']?> " class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php print_r($userdata['username']);  ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview <?php if ($page == 'track'){echo "active";}?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($subpage == 'track'){echo 'class="active"';}?>><a href="<?= base_url(); ?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          </ul>
        </li>

        <li class="treeview <?php if ($page == 'invoice'){echo "active";}?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Invoice</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($subpage == 'addinvoice'){echo 'class="active"';}?>><a href="addInvoice"><i class="fa fa-circle-o"></i> Create new Invoice </a></li>
            <li <?php if ($subpage == 'viewinvoice'){echo 'class="active"';}?>><a href="viewInvoice"><i class="fa fa-circle-o"></i> View Invoice List </a></li>
          </ul>
        </li>

        <li class="treeview <?php if ($page == 'vendor'){echo "active";}?>">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Vendor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?php if ($subpage == 'addvendor'){echo 'class="active"';}?>><a href="addVendors"><i class="fa fa-circle-o"></i> Manage Vendor </a></li>
          </ul>
        </li>

        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>