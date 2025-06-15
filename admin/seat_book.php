<?php include 'include/header.php';?>
    <!-- partial:partials/_navbar.html -->
<?php include 'include/topbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <?php include 'include/sidebar.php';?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Seat Book</h4>
                            <a href="<?= $baseurl?>admin/seat_book_create.php" class="btn btn-primary float-right">Add New</a>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Vehicle Id</th>
                                        <th>Schedule Id</th>
                                        <th>Customer Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Transaction Id</th>
                                        <th>Currency</th>
                                        <th>Total Amount</th>
                                        <th>Total Seat</th>
                                        <th>Other Charge</th>
                                        <th>Cupon Code</th>
                                        <th>Discount</th>
                                        <th>Status</th>
                                        <th>Request Cancel</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $data=$mysqli->common_select('seat_book');
                                        if(!$data['error']){
                                            foreach($data['data'] as $i=>$d){
                                    ?>
                                            <tr>
                                                <td><?= ++$i ?></td>
                                                <td><?= $d->vehicle_id ?></td>
                                                <td><?= $d->schedule_id?></td>
                                                <td><?= $d->customer_id?></td>
                                                <td><?= $d->name?></td>
                                                <td><?= $d->email?></td>
                                                <td><?= $d->phone?></td>
                                                <td><?= $d->address?></td>
                                                <td><?= $d->transaction_id?></td>
                                                <td><?= $d->currency?></td>
                                                <td><?= $d->total_amount?></td>
                                                <td><?= $d->total_seat?></td>
                                                <td><?= $d->other_charge?></td>
                                                <td><?= $d->coupon_code?></td>
                                                <td><?= $d->discount?></td>
                                                <td><?= $d->status?></td>
                                                <td><?= $d->request_cancel?></td>
                                                <td>
                                                    <a href="<?= $baseurl?>admin/seat_book_edit.php?id=<?= $d->id ?>" class="btn btn-info btn-xs" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="<?= $baseurl?>admin/seat_book_delete.php?id=<?= $d->id ?>" class="btn btn-danger btn-xs" title="Delete">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                    <?php    }
                                        }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>

              </div>
            </div>
          </div>
          
          
          

<?php include 'include/footer.php';?>