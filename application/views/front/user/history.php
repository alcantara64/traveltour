<?php include 'top.php';?>
<?php include 'navigator.php';?>
<div class="content-wrapper" style="min-height: 579px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment History</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">payment history</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Payment History</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input name="table_search" class="form-control float-right" placeholder="Search" type="text">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <tbody><tr>
                    <th>S/N</th>
                    <th>Tour Name</th>
                    <th>Tour status</th>
                    <th>Date paid</th>
                    <th>Tour description</th>
                  </tr>
                  <?php 
                   $i = 1;
                  foreach($user_info as $row ){?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $this->Crud_model->get_type_name_by_id('tour',$row['tour_id'],'title');; ?></td>
                    <td><?php $status = $this->Crud_model->get_type_name_by_id('tour',$row['tour_id'],'status');
                     if($status ==0){
                      $display = "stopped";
                    }
                     elseif($status ==1)
                     {
                      $display = "running";
                     }
                     else{
                      $display = "not available";
                     }
                     echo $display;
                    ?></td>
                    <td><span class="tag tag-success"><?php echo $this->db->get_where('subscription',array('user_id' => $row['user_id']))->row()->timestamp;
                    
                    ?></span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <?php $i++; } ?>
                </tbody></table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
   <?php include "bottom.php";?>