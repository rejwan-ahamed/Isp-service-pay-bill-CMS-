<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-primary">Payment on hold</span>

    <?php

    include('connection.php');

    $show = "SELECT * FROM `userdata_backup` WHERE 1";
    $showquery = mysqli_query($con, $show);
    $shownum = mysqli_num_rows($showquery);



    ?>
    <span class="badge bg-primary rounded-pill"><?php
                                                echo $shownum;

                                                ?></span>
</h4>


<!-- order loop -->

<?php

include('connection.php');

$sql = "SELECT * FROM `userdata_backup`";
$query = mysqli_query($con, $sql);

// $dataf = mysqli_fetch_array($query);

// $numrow = mysqli_num_rows($query);

if ($numrow = mysqli_num_rows($query) > 0) {
    while ($dataf = mysqli_fetch_array($query)) {



        echo '<div class = "my-3">';

        echo '<div class="card" style="width: 18rem;">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">TRACKING ID : ' . $dataf['sno'];
        echo '</h5>';
        echo '</div>';
        echo '<ul class="list-group list-group-flush">';
        echo '<li class="list-group-item">USER : ' . $dataf['user'];
        echo '</li>';
        echo '<li class="list-group-item">TRX : ' . $dataf['trx'];
        echo '</li>';
        echo '<li class="list-group-item">METHORD : ' . $dataf['methord'];
        echo '</li>';
        echo '<li class="list-group-item">PACKAGE : '  . $dataf['package'];
        echo '</li>';
        echo '<li class="list-group-item">AMOUNT'  . $dataf['amount'];
        echo '</li>';
        echo '<li class="list-group-item">DATE' . $dataf['date'];
        echo '</li>';
        echo '</ul>';
        echo '<div class="card-body">';
        echo '<form action="payment_onhold.php" method = "POST">';


        echo '<input type="hidden" class="btn btn-danger" name = "ids" value =' . $dataf["sno"] . '>';
        echo '<input type="submit" name ="views" class="btn btn-danger" value = "View">';
        echo '<input type="submit" class="btn btn-info mx-2" value = "Finish">';

        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}

?>

<?php
if (isset($_POST['views'])) {
    $sele = "SELECT * FROM `userdata_backup` WHERE sno = {$_POST['ids']}";

    $results = mysqli_query($con, $sele);
    $resfetch = mysqli_fetch_array($results);
}
?>


<?php

if (isset($_POST['update'])) {

    include('connection.php');



    $Trxid = $_POST['trxids'];
    $status1 = $_POST['status'];
    $track = $_POST['tracking'];



    //  $update2 = "UPDATE `user-data` SET `state`='$status1' WHERE trx = '$Trxid' ";

    $update_sql = "UPDATE `user-data` SET `state`='$status1' WHERE trx = '$Trxid' ";
    // $update_sql1 = "UPDATE `userdata_backup` SET `state`='$status1' WHERE trx = $Trxid";

    $up_query = mysqli_query($con, $update_sql);




    if ($up_query) {
        $sucess = '<div class="alert alert-success" role="alert">
    payment status hasbeen updated
  </div>';
    } else {
        // echo "error";
    }

    //    delet data

    $del = "DELETE FROM `userdata_backup` WHERE sno =$track";

    $delquery = mysqli_query($con, $del);
}
?>

<div>
    <?php
    if (isset($sucess)) {
        echo  $sucess;
    }
    ?>
</div>