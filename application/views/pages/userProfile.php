
      <div class="content">
        <div class="row">
  
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">User Details</h5>
                <hr>
              </div>
              <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Full Name:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->firstname!=""){
                                    ?>
                                        <p><?=$userData->firstname.' '.$userData->middle_name.' '.$userData->lastname?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Email:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->user_email!=""){
                                    ?>
                                        <p class="text-warning"><?=$userData->user_email?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Connected Through:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->connection_type!=""){
                                    ?>
                                        <p class="text-success"><?=$userData->connection_type?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>API (User Id) :</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->user_id!=""){
                                    ?>
                                        <p class="text-success"><?=$userData->user_id?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Team Name:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($team_details->team_name!=""){
                                    ?>
                                        <p class="text-success"><?=$team_details->team_name?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Gender:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->sex!=""){
                                    ?>
                                        <p><?=$userData->sex?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>D.O.B:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->d_o_b!=""){
                                    ?>
                                        <p><?=date('d-m-Y',strtotime($userData->d_o_b))?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Contact No:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->contact_no!=""){
                                    ?>
                                        <p><?=$userData->contact_no?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Address:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->full_address!=""){
                                    ?>
                                        <p><?=$userData->full_address?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Country:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->country!=""){
                                    ?>
                                        <p><?=$userData->country?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>State:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->state!=""){
                                    ?>
                                        <p><?=$userData->state?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>City:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->city!=""){
                                    ?>
                                        <p><?=$userData->city?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Blood Group:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->blood_group!=""){
                                    ?>
                                        <p><?=$userData->blood_group?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Emergency Contact Person:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->emg_cont_name!=""){
                                    ?>
                                        <p><?=$userData->emg_cont_name?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Emergency Contact No:</label>
                        </div>
                        <div class="col-md-8">
                            <?php
                                if($userData->emg_cont_no!=""){
                                    ?>
                                        <p><?=$userData->emg_cont_no?></p>
                                    <?php
                                }else{
                                    echo '<p class="text-danger">Not Updated</p>';
                                }
                            
                            ?>
                            
                        </div>
                    </div>
                
                 
              </div>
            </div>
          </div>
        </div>
        
        
        <div class="row">
  
          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">User Activites</h5>
                <hr>
              </div>
              
            </div>
          </div>
        </div>
        <?php 
            if(count($userEvents)>0){
                $totalDistance=0;
                foreach($userEvents as $evt):
                   ?>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-user">
                          <div class="card-header">
                              <div class="row">
                                  <div class="col-md-3">
                                      <label>Activity Name</label>
                                      <h6 class="card-title"><?=$evt->event_name?></h6>
                                  </div>
                                  <div class="col-md-2">
                                      <label>Activity Date</label>
                                       <p><?=$evt->start_date?></p>
                                  </div>
                                  <div class="col-md-2">
                                      <label>Activity Category</label>
                                      <p><?=$evt->type?></p>
                                      
                                  </div>
                                  <div class="col-md-3">
                                      <label>Moving Time</label>
                                      <?php
                                      $evt->moving_time=(int)$evt->moving_time;
                                        $dt1 = new DateTime("@0");
                                          $dt2 = new DateTime("@$evt->moving_time");
                                        //   print() ;
                                      
                                      ?>
                                      <p><?=$dt1->diff($dt2)->format('%h h, %i mins and %s seconds')?></p>
                                      
                                  </div>
                                  <div class="col-md-2">
                                      <label>Distance Covered</label>
                                      <p><?=$evt->distance/1000?>km</p>
                                      
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <label>Elapsed Time : </label>
                                      <?php
                                      $evt->elapsed_time=(int)$evt->elapsed_time;
                                        $dt1 = new DateTime("@0");
                                          $dt2 = new DateTime("@$evt->elapsed_time");
                                        echo $dt1->diff($dt2)->format('%h h, %i mins and %s seconds');
                                      
                                      ?>
                                      
                                  </div>
                              </div>
                            
                            
                          </div>
                          
                        </div>
                      </div>
                    </div>
                   <?php
                   $totalDistance+=$evt->distance/1000;
                endforeach;
                
                
                echo '<div class="alert alert-success float-right"> Total Distance Covered: '.$totalDistance.' Km</div>';
            }else{
                echo '<div class="alert alert-warning">No Activity Found.</div>';
            }
        ?>
       
        
        
        
        
      </div>
      <script type="text/javascript">
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

      </script>
 