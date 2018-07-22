<?php $page = basename($_SERVER['SCRIPT_NAME']);


?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="images/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $_SESSION["fullname"]; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>


    <ul class='sidebar-menu'>
      <li class='header'>Navigations</li>
      <li <?php if($page =='index.php') echo 'class=active';?>><a href='index'><i class='fa fa-home'></i> <span>Dashboard </span></a></li>

      <li <?php if($page =='view-admin.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
        <a href='#'><i class='fa fa-user'></i> <span> Admin</span>
          <span class='pull-right-container'>
            <i class='fa fa-angle-left pull-right'></i>
          </span>
        </a>
        <ul class='treeview-menu'>
          <li><a href='.add-admin' data-toggle='modal' data-target='.add-admin' data-backdrop='static' data-keyboard='false'><span class='fa fa-plus'> </span>Add Admin</a></li>
          <li><a href='view-admin'><span class='fa fa-eye'> </span>Manage Admin</a></li>
        </ul>
      </li>

      <li <?php if($page =='view-products.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
        <a href='#'><i class='fa fa-cart-plus'></i> <span> Products</span>
          <span class='pull-right-container'>
            <i class='fa fa-angle-left pull-right'></i>
          </span>
        </a>
        <ul class='treeview-menu'>
         <li><a href='.add-product' data-toggle='modal' data-target='.add-product' data-backdrop='static' data-keyboard='false'><span class='fa fa-plus'> </span>Add Product</a></li>

         <li><a href='view-product'><span class='fa fa-eye'> </span>View Product</a></li>

       </ul>
     </li>



     <li <?php if($page =='view-shipping-agent.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
      <a href='#'><i class='fa fa-ship'></i> <span> Shipping Agents</span>
        <span class='pull-right-container'>
          <i class='fa fa-angle-left pull-right'></i>
        </span>
      </a>
      <ul class='treeview-menu'>
       <li><a href='.add-agent' data-toggle='modal' data-target='.add-agent' data-backdrop='static' data-keyboard='false'><span class='fa fa-user'> </span>Add Shipping Agent</a></li>

       <li><a href='view-shipment-agent'><span class='fa fa-ship'> </span>View Shipment Agent</a></li>

     </ul>
   </li>


   <li <?php if($page =='view-supplier.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
    <a href='#'><i class='fa fa-truck'></i> <span> Supplier</span>
      <span class='pull-right-container'>
        <i class='fa fa-angle-left pull-right'></i>
      </span>
    </a>
    <ul class='treeview-menu'>
     <li><a href='.add-supplier' data-toggle='modal' data-target='.add-supplier' data-backdrop='static' data-keyboard='false'><span class='fa fa-truck'> </span>Add Supplier</a></li>

     <li><a href='view-supplier'><span class='fa fa-eye'> </span>View Supplier</a></li>

   </ul>
 </li>


 <li <?php if($page =='view-shipping.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
  <a href='#'><i class='fa fa-money'></i> <span> Shipping Records</span>
    <span class='pull-right-container'>
      <i class='fa fa-angle-left pull-right'></i>
    </span>
  </a>
  <ul class='treeview-menu'>
   <li><a href='.add-pfi' data-toggle='modal' data-target='.add-pfi' data-backdrop='static' data-keyboard='false'><span class='fa fa-money'> </span> Add Shipping Record</a></li>

   <li><a href='view-shipping'><span class='fa fa-eye'> </span>View Shipping Records</a></li>

 </ul>
</li>


 <li <?php if($page =='view-shipping.php') echo 'class=active treeview'; else echo 'class=treeview';?>>
  <a href='#'><i class='fa fa-building'></i> <span> Port Stations </span>
    <span class='pull-right-container'>
      <i class='fa fa-angle-left pull-right'></i>
    </span>
  </a>
  <ul class='treeview-menu'>
   <li><a href='.add-port-station' data-toggle='modal' data-target='.add-port-station' data-backdrop='static' data-keyboard='false'><span class='fa fa-money'> </span> Add Port Station</a></li>

   <li><a href='view-shipping'><span class='fa fa-eye'> </span>View Port Stations</a></li>

 </ul>
</li>

</ul>
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>