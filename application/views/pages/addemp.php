<html>
    <head>
        <title> Add New Employee </title>
</head>

    <body>

<div id="addEmp" class="container">
<form name="addNew" id="addNew" method="POST" action="insertEmp">
    <table align="center" class="table-bordered" >
        <thead>
            <tr> <td colspan="2">Add a New Employee </td> </tr>
        </thead>
        <tbody>
            <tr>
                <td> Name </td>
                <td> <input type="text" name="ename" id="ename"> </td>
            </tr>

            <tr> 
                <td> Age </td>
                <td> <input type="number" name="eage" id="eage"> </td>
            </tr>
            <tr>
                <td> City </td>
                <td> 
                    <select name="ecity" id="ecity">
                    <?php
                    foreach ($cities as $city){
                        echo "<option value=" . $city['city_id'] . " > " . $city['city_name'] . "</option> ";
                    }

                    ?>
                    </select>
                        
                </td>
     
            </tr>
            <tr> 
                <td> Department </td>
                <td> 
                    <select name="edep" id="edep">
                        <?php
                            foreach ($departments as $department){
                                echo "<option value=".$department['dept_id']." >" . $department['dept_name']. "</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Sex </td>
                <td> 
                    <select name="esex" id="esex">
                            <option value="M" > Male </option>
                            <option value="F" > Female </option>
                    </select>        
                </td>
            </tr>
            <tr>
                <td  align="left">
                <button type="submit" name="sub" > Submit </button> </td>
                <td> <label id="op" name="op"> </td>
            </tr>
        </tbody>
        
    </table>
</form>
</div>
                        </body>
</html>