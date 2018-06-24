
<?php include 'top.php';?>
<?php include 'navigator.php';?>
<div class="content-wrapper" style="min-height: 579px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php $user_id = $current_user_id; if(!empty($current_tour_id) || !empty($current_user_id) ){ echo
                 $this->db->query('select count(*) as totalrecord from subscription where user_id = "'.$user_id.'"')->row()->totalrecord;
                  }else{
                    echo 0;
                  }
                ?></h3>

                <p>Subscribed tours</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo  $this->db->where('user_id',$current_user_id)->count_all('travels');?><sup style="font-size: 20px"></sup></h3>
                <p>Total Travels</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php $tour_id = $current_tour_id; $user_id = $current_user_id; if(!empty($current_tour_id) || !empty($current_user_id) ){ echo
                 $this->db->query('select count(*) as totalrecord from subscription where user_id = "'.$user_id.'" and tour_id = "'.$tour_id.'"')->row()->totalrecord;
                  }else{
                    echo 0;
                  }
                ?></h3>
                 
                <p>No of subcription for current tour</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Days left</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">
                  <i class="fa fa-bus mr-1"></i>
                 Current Tour
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">View</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Description</a>
                  </li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
          
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
         <?php
          
          $current_tour_draws = $this->db->get_where('draw',array('tour_id' => $current_tour_id, ))->result_array();
          foreach ($current_tour_draws as $row) {
            # code...
          
          ?>
            <!-- Map card -->
            <div class="card bg-primary-gradient">
              <div class="card-header no-border">
                <h3 class="card-title">
                  <i class="fa fa-map-marker mr-1"></i>
                  Draws
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" data-toggle="tooltip" title="Date range">
                    <i class="fa fa-calendar"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                 <h3><?php echo $row['address'] .', '.$row['venue'].','.$row['address'];?>.</h3>
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
             <?php } ?>
             
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
  

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'bottom.php'?>