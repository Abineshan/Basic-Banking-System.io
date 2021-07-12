<!--Customer Page-->
<?php
include_once('php/connection.php');
$query="select * from customer";
$result=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intial-scale=1.0">
	<link rel="stylesheet" href="css/ustyle.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Users</title>
</head>
<body>
    <!--Navigation Bar Starts-->
    <div class="nav">
        <div class="max-width">
            <div class="logo">
                <a href="#">Spark <span>Bank</span></a>
            </div>
            <ul class="menu">
                <li><a href="home">Home</a></li>
                <li class="hom">Customers</li>
                <li><a href="transaction">Transaction</a></li>
                <li><a href="history">History</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
    <!--Customers Section Starts-->
    <div class="table-container" style="margin-bottom: 50px;">
    <h1 class="heading">Bank's Customers</h1>
    <table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Account No</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($result->num_rows>0) {
            while($row=$result->fetch_assoc()) {
                echo "<tr><td data-label='First Name'>".$row["firstname"]."</td><td data-label='Last Name'>".$row["lastname"]."</td><td data-label='Account No'>".$row["acc_no"]."</td><td data-label='Contact'>".$row["email"]."</td><td data-label='Balance' style='color: #fff;font-weight: 800;'>".$row["current"]."</td></tr>";
            }
            echo "</tbody></table>";
        }
        else {
            echo "0 result";
        }
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>