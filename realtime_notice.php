<div class="container">
    <div class="row">
        <?php
        include('connection.php');

        $noticesql = "SELECT * FROM `notice`";
        $noticequery = mysqli_query($con, $noticesql);

        // $noticefatch = mysqli_fetch_array($noticequery) ;



        while ($noticefatch = mysqli_fetch_array($noticequery)) {
            echo '<div class="col-md-6 p-1 mb-3">';
            echo '<ul class="list-group">';

            echo '<li class="list-group-item active" aria-current="true"> Date : ' . $noticefatch['date'];
            echo '</li>';
            echo '<li class="list-group-item list-group-item-warning " aria-current="true"> Subject : ' . $noticefatch['title'];
            echo '</li>';
            echo '<li class="list-group-item">' . $noticefatch['description'];
            echo '</li>';
            echo '</ul>';
            echo '</div>';
        }

        ?>


    </div>