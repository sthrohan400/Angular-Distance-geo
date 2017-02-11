<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     <div class="user-panel">
        <div class="pull-left image">
          <img src="/Backend_asset/dist/img/avatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
          <p>{{--ucwords($user['name'])--}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
  </div>

  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">

    <li class="active treeview">
        <a href="{{url('/dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

        </a>

    </li>


    <li class="treeview">
        <a href="">
            <i class="fa fa-keyboard-o"></i>
            <span> API</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
      </a>
      <ul class="treeview-menu">
     
         <li class="treeview">
         <a href="">
           <i class="fa fa-graph"></i>
           <span> Forex Api</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
         </span>
             </a>
       
       
             <ul class="treeview-menu"> 
      <li class="treeview">


           <a href="{{url('/admin/web/country')}}">
            <i class="fa fa-plus"></i> <span>Country</span>

        </a>

     </li> 
     <li class="treeview">


           <a href="{{url('/admin/web/conversion')}}">
            <i class="fa fa-plus"></i> <span>Currency Conversion</span>

        </a>

     </li>
     </ul> 
  </li>



</ul>
</li>



<li class=" treeview">
<a href="{{url('#')}}">
        <i class="fa fa-bars"></i> <span> Forex API  </span>

    </a>

</li>










</ul>



</section>
<!-- /.sidebar -->
</aside>