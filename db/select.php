<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../plugin/css/adminlte.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../plugin/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>

<body>
    <form method="get" action="">
        <div class="col-md-2 text-dark">
        <div class="form-group">
            <label>Multiple</label>
            <select name="selcet[]" class="select2 " multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                <option value="1">Alabama</option>
                <option value="2">Alaska</option>
                <option value="3">California</option>
                <option value="4">Delaware</option>
                <option value="5">Tennessee</option>
                <option value="6">Texas</option>
                <option value="7">Washington</option>
                <option value="8">Washington</option>
                <option value="9">Washington</option>
                <option value="10">Washington</option>
                <option value="11">Washington</option>
                <option value="12">Washington</option>
                <option value="13">Washington</option>
                <option value="14">Washington</option>
                <option value="15">Washington</option>
            </select>
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
    </div>

    <?php
    echo "<pre>";
    echo print_r($_GET);
    echo "</pre>";
    ?>

    <!-- jQuery -->
    <script src="../plugin/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../plugin/select2/js/select2.full.min.js"></script>

    <!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
</body>

</html>