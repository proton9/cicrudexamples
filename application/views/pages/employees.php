<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>jquery.tablesorter.js"> 
    </script>    
   

    <title>Employees</title>
    
</head>
<body >
<div class="align-items-center ">
    <table align="center" class="table-bordered" name="employeelist" id="employeelist" width="80%">
        <thead class="list-group">
            <tr>
                <th id="eidpk"> ID </th>
                <th > Name </th>
                <th > Age </th>
                <th > Doj </th>
                <th > City </th>
                <th > State </th>
                <th > Department</th>
                <th > Actions </th>
            </tr>
        </thead>
    <tbody>
    <?php 
                foreach ($emps as $iemployee){
                    echo "<tr> <td> ".$iemployee['emp_id']. " </td>";
                    echo "<td> ".$iemployee['emp_name']. " </td>";
                    echo "<td> ".$iemployee['emp_age']. " </td>";
                    echo "<td> ".$iemployee['emp_doj']. " </td>";
                    echo "<td> ".$iemployee['city_name']. " </td>";
                    echo "<td> ".$iemployee['state_name']. " </td>";
                    echo "<td> ".$iemployee['dept_name']. " </td>";
                   // echo "<td> ".$iemployee['avg(sal.total_salary)']. " </td>"; 
                   echo "<td> <a href=''>update </a> <a href=''> delete </a> ";                
                    echo "</tr>";
               }
        ?>
            
    
    </tbody>
    </table>
    <script>
   $(document).ready(function() 
    { 
        $("#employeelist").tablesorter(); 
    }); 
    </script>
</div>
<br/>
<br/>

</body>

</html>

