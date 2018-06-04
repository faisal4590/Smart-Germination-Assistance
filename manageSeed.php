<?php
/**
 * Created by PhpStorm.
 * User: faisal
 * Date: 6/2/2018
 * Time: 11:27 PM
 */
?>

<html>
<head>
    <title>Manage Germination</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/navigation.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/singUp.css">
    <link rel="stylesheet" href="css/manageSeed.css">

</head>
<body>

<?php
include 'navbar.php';
?>

<div class="container box" style="margin-top: 140px;">
    <h1 align="center">Track your germination progress.</h1>
    <br />
    <div class="table-responsive">
        <br />
        <div align="right">
            <button type="button" name="add" id="add" class="btn btn-info">Add</button>
        </div>
        <br />
        <div id="alert_message"></div>
        <table id="user_data" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>seed name</th>
                <th>plant date and time</th>
                <th>temperature</th>
                <th>moisture</th>
                <th>humidity</th>
                <th>light</th>
                <th>pH</th>
                <th></th>
            </tr>
            </thead>
        </table>
    </div>
</div>


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


</body>
</html>

<script type="text/javascript" language="javascript" >
    $(document).ready(function(){

        fetch_data();

        function fetch_data()
        {
            var dataTable = $('#user_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" : [],
                "ajax" : {
                    url:"fetch.php",
                    type:"POST"
                }
            });
        }

        function update_data(id, column_name, value)
        {
            $.ajax({
                url:"update.php",
                method:"POST",
                data:{id:id, column_name:column_name, value:value},
                success:function(data)
                {
                    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                    $('#user_data').DataTable().destroy();
                    fetch_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
        }

        $(document).on('blur', '.update', function(){
            var id = $(this).data("id");
            var column_name = $(this).data("column");
            var value = $(this).text();
            update_data(id, column_name, value);
        });

        $('#add').click(function(){
            var html = '<tr>';
            html += '<td contenteditable id="data1"></td>';
            html += '<td contenteditable ><input type="datetime-local" id="data2"/></td>';
            html += '<td contenteditable id="data4"></td>';
            html += '<td contenteditable id="data5"></td>';
            html += '<td contenteditable id="data6"></td>';
            html += '<td contenteditable id="data7"></td>';
            html += '<td contenteditable id="data8"></td>';
            html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
            html += '</tr>';
            $('#user_data tbody').prepend(html);
        });

        $(document).on('click', '#insert', function(){
            var seedName = $('#data1').text();
            var plantDate = $('#data2').val();
            console.log(plantDate + "Hello");

            var temperature = $('#data4').text();
            var moisture = $('#data5').text();
            var humidity = $('#data6').text();
            var light = $('#data7').text();
            var ph = $('#data8').text();

            if(seedName != '' && plantDate != '' && temperature != ''
                && moisture != ''&& humidity != ''&& light != ''&& ph != '')
            {
                $.ajax({
                    url:"insert.php",
                    method:"POST",
                    data:{seedName:seedName, plantDate:plantDate,
                        temperature:temperature,moisture:moisture, humidity:humidity, light:light, ph:ph},
                    success:function(data)
                    {
                        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function(){
                    $('#alert_message').html('');
                }, 5000);
            }
            else
            {
                alert("all fields is required");
            }
        });

        $(document).on('click', '.delete', function(){
            var id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                        $('#user_data').DataTable().destroy();
                        fetch_data();
                    }
                });
                setInterval(function(){
                    $('#alert_message').html('');
                }, 5000);
            }
        });
    });
</script>

