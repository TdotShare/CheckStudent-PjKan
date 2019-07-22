
    
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
                                            <th width="10">ลำดับ</th>
                                            <th width="30%">ผู้ใช้</th>
                                            <th>ชื่อ</th>
                                            <th width="10%">ติดต่อ</th>
                                            <th width="20%">ระดับ</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sqli = "SELECT * FROM user ORDER BY id ASC";
                                            $query = mysqli_query( $con, $sqli);
                                             while($rowx = mysqli_fetch_array( $query, MYSQLI_ASSOC)) {

                                                @$i++;  
                                               ?>
                                        <tr>
                                            <td align="center"><?php echo $i; ?></td>
                                            <td align="center"><?php echo $rowx['user']; ?></td>
                                            <td align="center"><?php echo $rowx['name']; ?></td>
                                            <td align="center"><?php echo $rowx['phone']; ?></td>
                                            <td align="center"><?php $st = $rowx['position'];

                                            if ($st == 3){  echo "สูงสุด(ผู้ดูแล)";}
                                                if ($st == 2){  echo "ผู้ใช้(อาจารย์)";}
                                                    if ($st == 1){  echo "สตาฟ";}

                                                 ?></td>
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


