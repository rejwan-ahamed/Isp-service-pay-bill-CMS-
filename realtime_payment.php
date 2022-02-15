<?php
include('connection.php');

                  $onholdsql = "SELECT * FROM `userdata_backup`";
                  $onholdquery = mysqli_query($con, $onholdsql);
                  $onholdata = mysqli_num_rows($onholdquery);
                  echo $onholdata;

                  ?>