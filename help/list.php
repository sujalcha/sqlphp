<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
      <link rel=¨stylesheet¨ type=¨text/css¨ href=¨..\css\[file_name].css¨>
<link rel="stylesheet" href="css/bootstrap.min.css">
<style type="text/css">
    
button {
    border: none;
    background: #3a7999;
    color: #f2f2f2;
    padding: 10px;
    font-size: 18px;
    border-radius: 5px;
    position: relative;
    box-sizing: border-box;
    transition: all 500ms ease; 
}
button:before {
    content:'';
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0px;
    height: 42px;
    background: red;
    border-radius: 5px;
    transition: all 2s ease;
}

button:hover:before {
    width: 100%;
}

</style>
</head>
<body>
    <button >Hover Me</button>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Employees Details</h2>
                        <a href="test.html" class="btn btn-success pull-right">Add New Employee</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "conn.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM firsttable";
                    if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>firstname</th>";
                                        echo "<th>lastname</th>";
                                        echo "<th>email</th>";
                                        echo "<th>pnumber</th>";
                                        echo "<th>actions</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['firstname'] . "</td>";
                                        echo "<td>" . $row['lastname'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";
                                         echo "<td>" . $row['pnumber'] . "</td>";
                                        echo "<td>";
                                            echo "<a type='button' class='btn btn-success btn-sm' href='read.php?id=". $row['id'] ."' title='View Record' >Read</a>";
                                            echo "<a type='button' class='btn btn-info btn-sm' href='update.php?id=". $row['id'] ."' title='Update Record' >Update</a>";
                                            echo "<a type='button' class='btn btn-danger btn-sm' href='delete.php?id=". $row['id'] ."' title='Delete Record' >Delete</a>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>        
        </div>
    </div>

    
<script src="js/bootstrap.min.js"></script>
</body>
</html>