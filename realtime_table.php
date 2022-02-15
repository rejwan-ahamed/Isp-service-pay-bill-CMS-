<?php

session_start();

if (!isset($_SESSION['loggedn']) || $_SESSION['loggedn'] != true) {
    header("location: user_login.php");
    exit;
}

?>




<table class="w-full whitespace-no-wrap">
    <thead>
        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
            <th class="px-4 py-3">TRACKING ID</th>
            <th class="px-4 py-3">USER</th>
            <th class="px-4 py-3">TRX ID</th>
            <th class="px-4 py-3">METHOD</th>
            <th class="px-4 py-3">PACKAGE</th>
            <th class="px-4 py-3">AMOUNT</th>
            <th class="px-4 py-3">DATE</th>
            <th class="px-4 py-3">STATUS</th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

        <?php
        include('connection.php');

        $sesson_id = $_SESSION['phone'];

        $datab = "SELECT * FROM `user-data` WHERE user = '$sesson_id' ORDER BY sno DESC LIMIT 10 ";

        $querycon = mysqli_query($con, $datab);

        // $fetch = mysqli_fetch_array($querycon);



        while ($fetch = mysqli_fetch_array($querycon)) {

            if ($fetch['state'] == 'Paid') {
                $star = '<span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                           Paied
                                         </span>';
            } elseif ($fetch['state'] == 'Unpaid') {
                $star = '<span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                           Unpaied
                                         </span>';
            } elseif ($fetch['state'] == 'Proccessing') {
                $star = '<span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                           Proccessing
                                         </span>';
            } elseif ($fetch['state'] == '') {
                $star = '<span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700">
                                           Proccessing
                                         </span>';
            }

        ?>





            <tr class="text-gray-700 dark:text-gray-400">

                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['sno'] ?>
                </td>

                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['user'] ?>
                </td>
                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['trx'] ?>
                </td>
                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['methord'] ?>
                </td>
                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['package'] ?>
                </td>
                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['amount'] ?>
                </td>

                <td class="px-4 py-3 text-sm">
                    <?php echo $fetch['date'] ?>
                </td>
                <td class="px-4 py-3 text-sm">
                    <?php if (isset($star)) {
                        echo $star;
                    } ?>
                </td>
            </tr>

            <!-- <span class="badge rounded-pill bg-primary p-2">Verified</span> -->


        <?php
        }
        ?>











    </tbody>
</table>