
    
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">ACTIVITY</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th>รหัสกิจกรรม</th>
                                            <th>ชื่อกิจกรรม</th>
                                            <th width="30%">รายละเอียด</th>
                                            <th>หน่วยกิต</th>
                                            <th>เวลาเข้ากิจกรรม</th>
                                            <th>เวลาเลิกกิจกรรม</th>
                                            <th>โดย</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sqli = "SELECT * FROM activitys ORDER BY id ASC";
                                            $query = mysqli_query( $con, $sqli);
                                             while($rowx = mysqli_fetch_array( $query, MYSQLI_ASSOC)) {

                                              // @$i++;  
                                               ?>
                                        <tr>
                                            <td align="center"><?php echo $rowx['id']; ?></td>
                                            <th><?php echo $rowx['title']; ?></th>
                                            <td><?php echo $rowx['detail']; ?></td>
                                            <td align="center"><?php echo $rowx['point']; ?></td>
                                            <td><?php echo $rowx['time_start']; ?></td>
                                            <td><?php echo $rowx['time_stop']; ?></td>
                                            <td><?php $nameuser = $rowx['user_id'];
                                                    $sql = "SELECT name FROM user WHERE id = '$nameuser'";
                                                    $qq = mysqli_query($con,$sql);
                                                    $result = mysqli_fetch_assoc($qq);
                                                    echo $result['name']; ?></td>
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


