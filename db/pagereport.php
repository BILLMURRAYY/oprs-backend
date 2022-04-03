<!DOCTYPE html>
<?php include 'connect.php'; ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cs {
            width: 80%;
        }
    </style>

    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">


</head>

<body>
    <div class="cs">
        <table id="examples" class="display" style="width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name Send</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                // $result = $conn->prepare("SELECT * FROM department");
                // $result->execute(); //
                // $row = $result->fetch(PDO::FETCH_BOTH);
                $depart= 'หัวหน้าคณบดี';
                $result = "SELECT * FROM send_report 
                inner JOIN member
                on member.id = send_report.id_member_send
                inner join department
                on department.id = member.id_department
                WHERE department_receive LIKE '%$depart%'";
                $query = mysqli_query($conn, $result);

                $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
                echo "<pre>";
                print_R($rows);
                echo "</pre>";

                $count = 1;
                foreach($rows as $value){

                ?>

                <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $value['first_name']." ".$value['last_name'] ?></td>
                    <td><?php echo $value['departmentName'] ?></td>
                    <td><?php echo $value['date'] ?></td>
                    <td><button><a href="viewreport.php?id_report=<?php echo $value['id_report'] ?>&sendName=<?php echo $value['first_name']." ".$value['last_name'] ?>&id_member_send=<?php echo $value['id_member_send'] ?>">Detail</a></button></td>
                    <td><button><a href="#">Detail</a></button></td>
                </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name Send</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Detail</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>
    </div>



    <script>
        $(document).ready(function() {
            $('#examples').DataTable();
        });
    </script>
</body>

</html>