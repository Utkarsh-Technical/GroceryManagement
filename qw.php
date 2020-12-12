<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
            <div class="modal-body" >
                <div class="">
                    <div class="mb-3 card">

                    <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-focus">
                                <div class="menu-header-image opacity-3"
                                     style="background-image: url('assets/images/dropdown-header/city4.jpg');"></div>
                                <div class="menu-header-content btn-pane-right">
                                    <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                        <div class="avatar-icon rounded"><img
                                                src="assets/images/avatars/12.jpg"
                                                alt="Avatar 5"></div>
                                    </div>
                                    <div><h5 class="menu-header-title"><?php echo $row['C_Name'];?></h5><h6
                                            class="menu-header-subtitle"><i class="fas fa-map-marker-alt"><?php echo $row['C_Address'];?> 
                                        </i>
                                       </h6></div>
                                    <div class="menu-header-btn-pane">
                                        <button class="ladda-button btn btn-pill btn-dark"
                                                data-style="slide-right"><span
                                                class="ladda-label">Print</span><span
                                                class="ladda-spinner"></span></button>
                                    </div>
                                </div>
                                </div>
                                </div>
                </div>
                <div class="profile-table table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Items_Id</th>
                        <th>Items</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                    </thead>
                        <tbody>
                            <?php
                                                        include "../config.php";
                                                        $a= $row['Order_id'];
                                                        $sql = "Select * From Items_R where Order_id = $a";
                                                        $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                                                        
                                                        while($row = mysqli_fetch_assoc($result)){
                                                    ?>
                                                <tr>
                                                    <th scope="row"><?php echo $row['Items_id'];?></th>
                                                    <td><?php echo $row['Items'];?></td>
                                                    <td><?php echo $row['Quantity'];?>kg</td>
                                                    <td>₹ <?php echo $row['Price'];?></td>
                                                </tr>
                                            <?php  } ?>
                 </tbody>
              </table>
            </div>
            </div>
            </div>
               
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Order Placed</button>
            </div>
          </div>
        </div>
   
      </div>