      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                  <li class="active">
                      <a class="" href="<?=base_url()?>admin/dashboard">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>Clients</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?=base_url()?>admin/customers/customer_list">Clients List</a></li>
                          <li><a class="" href="<?=base_url()?>admin/customers/add_customers">New Client</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-gear"></i>
                          <span>Settings</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                           <li><a class="" href="<?=base_url()?>admin/templates/template_list">Edit Template</a></li>
                      </ul>
                  </li>


              </ul>

              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->