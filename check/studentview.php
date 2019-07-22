
    
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Student</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr align="center">
                                            <th>#</th>
                                            <th>รหัสนักศึกษา</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>สาขาวิชา</th>
                                            <th>คณะ</th>
                                            <th>หน่วยกิตที่มี</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sqli = "SELECT * FROM student ORDER BY id ASC";
                                            $query = mysqli_query( $con, $sqli);
                                             while($rowx = mysqli_fetch_array( $query, MYSQLI_ASSOC)) {

                                               // @$i++;  
                                               ?>
                                        <tr>
                                            <td class="avatar" align="center">
                                                        <div class="round-img">
                                                            <a href="#"><img width="50" class="rounded-circle" src="images/avatar/test.svg" alt=""></a>
                                                        </div>
                                            </td>
                                            <td align="center"><?php echo $rowx['id']; ?></td>
                                            <td align="center"><?php echo $rowx['lname'].' '.$rowx['fname']; ?></td>
                                            <td align="center"><?php echo $rowx['major']; ?></td>
                                            <td><?php echo $rowx['faculty']; ?></td>
                                            <td><?php echo $rowx['point']; ?></td>
                                        
                                            
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


