<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/af-2.2.2/b-1.5.1/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.2.1/dt-1.10.16/af-2.2.2/b-1.5.1/datatables.min.js"></script>
    </head>
    <body>
       
        <div id = "datatablestest" class = "container">
            
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name</th>
                        <th> Age</th>
                        <th> Doj</th>
                        <th> City</th>
                        <th> State</th>
                        <th> Department</th>  
                        <th> Action </th>
                    </tr>
                </thead>

                <tfoot>

                    <tr>
                        <th> ID </th>
                        <th> Name</th>
                        <th> Age</th>
                        <th> Doj</th>
                        <th> City</th>
                        <th> State</th>
                        <th> Department</th>  
                        <th> Action </th>
                    </tr>


                </tfoot>
            </table>
        </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myTable').DataTable( {


                "ajax": 'empjson',
                "columns": [
                    { "data": "emp_id" },
                    { "data": "emp_name" },
                    { "data": "emp_age" },
                    { "data": "emp_doj" },
                    { "data": "city_name" },
                    { "data": "state_name" },
                    { "data": "dept_name" },
                    { "defaultContent": "<button class='jedit'>Edit</button>"}
                
                ]
               
                
                
            } );
            $("#myTable").on('click','.jedit',function(){
                var currentRow=$(this).closest("tr");
                var col1=currentRow.find("td:eq(0)").html(); 
                var col2=currentRow.find("td:eq(1)").html();
                alert(col1+" "+col2);
            });
        } );
    </script>    
    </body>
</html>