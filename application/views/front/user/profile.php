
<?php include 'top.php';?>
<?php include 'navigator.php';?>
<?php foreach ($user_info as $row) { ?>
  


<div class="content-wrapper" style="min-height: 579px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url()?>/templates/back/dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['first_name'] ." ". $row['last_name']?></h3>

                <p class="text-muted text-center">User</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Date Joined</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Payement made</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>last login</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

               
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fa fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  <?php echo $row['education']; ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                <p class="text-muted"><?php echo $row['address_1'] . ",". $row['city']." ".$row['state']. " ".$row['country'].'.'?></p>

                <hr>


                <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  
                  <li class="nav-item"><a class="nav-lin " href="#activity" data-toggle="tab">Profile</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  
                  <!-- /.tab-pane -->
                
                  <!-- /.tab-pane -->

                  <div class=" active tab-pane" id="activity">
                    <form class="form-horizontal" id="profileUpdate" method="post" action="<?php echo base_url()?>/home/registration/update_info">
                      <div class="form-group">
                        <label for="first_name" class="col-sm-2 control-label">First Name</label>

                        <div class="col-sm-10">
                          <input class="form-control" name="first_name" id="first_name" value="<?php echo $row['first_name'];?>" placeholder="Input First Name" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="last_name" class="col-sm-2 control-label">Last Name</label>

                        <div class="col-sm-10">
                          <input class="form-control" name="last_name" value="<?php echo $row['last_name'];?>" id="inputName2" placeholder="Input Last Name" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                          <input class="form-control" name="email" disabled="disabled"  value="<?php echo $row['email'];?>"  id="inputEmail" placeholder="Email" type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="phone class="col-sm-2 control-label">Phone</label>

                        <div class="col-sm-10">
                          <input class="form-control" name="phone" disabled="disabled" value="<?php echo $row['phone'];?>" id="phone" placeholder="Input Last Name" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Address</label>

                        <div class="col-sm-10">
                          <textarea class="form-control" name="Address"  value="<?php echo $row['address_1'];?>" id="inputExperience" placeholder="Experience"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputqualification" class="col-sm-2 control-label">Educational Qualification</label>

                        <div class="col-sm-10">
                          <input class="form-control"  name="education"  value="<?php echo $row['education'];?>" id="inputqualification" placeholder="Bsc computer scince " type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputCity" class="col-sm-2 control-label">City</label>

                        <div class="col-sm-10">
                          <input class="form-control" name="city"  value="<?php echo $row['city'];?>" id="inputCity" placeholder="City" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputState" class="col-sm-2 control-label">State</label>

                        <div class="col-sm-10">
                          <input class="form-control" name ="state"  value="<?php echo $row['state'];?>" id="inputState" placeholder="State" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputState" class="col-sm-2 control-label">Country</label>

                        <div class="col-sm-10">
                          <input class="form-control" name ="country"  value="<?php echo $row['country'];?>" id="inputCountry" placeholder="Country" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php
}
   include "bottom.php";?>