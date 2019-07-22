
<!-- Content -->
        <div class="content">
            <center>
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $count_student; ?></span></div>
                                            <div class="stat-heading">รายชื่อในระบบ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-5">
                                        <i class="pe-7s-user"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php  ?></span></div>
                                            <div class="stat-heading">เช็คเวลาสำเร็จ</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="fa fa-dribbble"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">20</span></div>
                                            <div class="stat-heading">กิจกกรรม</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
               
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">รายการเช็คล่าสุด 5 รายการ </h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                   
                                                    <th class="avatar">โปรไฟล์</th>
                                                    <th>รหัส</th>
                                                     <th class="serial">กิจกกรม</th>
                                                    <th>เวลา</th>
                                                    <th>ผล</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                        <?php
                                            $sqli = "SELECT * FROM record ORDER BY id DESC LIMIT 5";
                                            $query = mysqli_query( $con, $sqli);
                                             while($rowx = mysqli_fetch_array( $query, MYSQLI_ASSOC)) {

                                              // @$i++;  
                                               ?>

                                                <tr>
                                                    <!-- <td class="serial"><?php echo $i; ?></td> -->
                                                    <td class="avatar">
                                                        <div class="round-img">
                                                            <a href="#"><img width="50" class="rounded-circle" src="images/avatar/test.svg" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $rowx['student_id']; ?></td>

                                                    <td><?php $nameactivity = $rowx['activity_id'];
                                                    $sql = "SELECT title FROM activitys WHERE id = '$nameactivity'";
                                                    $qq = mysqli_query($con,$sql);
                                                    $result = mysqli_fetch_assoc($qq);
                                                    echo $result['title']; ?>
                                                        
                                                    </td>
                                                   
                                                    <td><span class="name"><?php echo $rowx['time']; ?></span></td>
                                                    <td>
                                                        <?php $status = $rowx['results']; 
                                                        if ($status == 1 ) { ?>
                                                            <span class="badge badge-complete">ผ่าน</span>
                                                             <?php } 
                                                        if ($status == 2 ) { ?>
                                                            <span class="badge badge-danger">เกินเวลา</span>
                                                             <?php } ?>

                                                    
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                                  

                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                    </div>

                </div>
                <!-- /.orders -->
          
              </div></center></div>