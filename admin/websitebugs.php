<?php
session_start();

include('../includes/connection.php');

$id = $_SESSION["admin_id"];


if(! $id)
{
    header('location:admin.php');
}
else{

}
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Compalin System</title>

    <link rel="stylesheet" href="../css/index.css">
    <script>
    function show() {
        var x = document.getElementById("nav");
        if (x.className === "wrap") {
            x.className += " unwrap";
        } else {
            x.className = "wrap";
        }
    }
    </script>
</head>

<body>
    <header class="header">
        <a href="../index.php" class="logo">Welcome!</a>

        <div class="header-right">



            <a href="../index.php">Logout</a>

        </div>
        <br>
        <br>
        <img src="../images/logo.png" width="30px" height="30px" onclick="show()" />
        <nav id='nav' class="wrap">

            <div class="dropdown-content">
                <a href="users.php">Total Users</a>

                <a href="complains.php">Total complains</a>

                <a href="websitebugs.php">Website Bugs</a>
            </div>
    </header>



    <div class="new-complain">
    <form class="complainform">
            <center>
                <h3>All Complains of Website</h3>
                <?php
            
    
            $sql="SELECT * FROM bugs";
                        $query=mysqli_query($con,$sql);
                        $count=mysqli_num_rows($query);
                        ?>
            </center>
            
            <table style="width:100%">
                <tr>


                    <th>Bug Id</th>
                    <th>Message</th>
                    
                    
                </tr>
                <?php
                
                    while($row=mysqli_fetch_assoc($query))
                    {
                  echo"<tbody>";
      echo"<td>"; echo $row['bug_id']; echo"</td>";
      echo"<td>"; echo $row['message']; echo"</td>";
      
      
       
      echo"</tbody>";
                        

                    }


                

            ?>
            </table>
                
        </form>
    </div>
    </div>

</body>

</html>