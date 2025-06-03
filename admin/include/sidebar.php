<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse"  aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-grid menu-icon" ></i>
        <span class="menu-title" >Dashboard</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">Control Panel</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/bus_company.php">Bus Company</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/bus.php">Bus</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/schedule.php">Schedule</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/route.php">Route</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/area.php">Area</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/seat.php">Seat</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/seatfare.php">Seatfare</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/counter.php">Counter</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/ticket.php">Ticket</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/ticket_details.php">Ticket Details</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/payment.php">Payment</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/user.php">User</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/admins.php">Admins</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/role.php">Role</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?= $baseurl ?>admin/role_access.php">Role_access</a></li>
          
        </ul>
      </div>
    </li>
  </ul>
</nav>