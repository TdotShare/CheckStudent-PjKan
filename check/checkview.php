
     <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ACTIVITY</strong>
                            </div>
                            <div class="card-body">
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
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


