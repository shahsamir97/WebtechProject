<?php
require_once "vendor/autoload.php";
include('session.php');
use App\classes\Register;

$result= (new App\classes\Register)->getregister();

if(isset($_GET['delete'])){
   $id= $_GET['id'];
  (new App\classes\Register)->delete($id);

}
?>
<html>
<head>
    <title>View Data</title>
    <h1 style="background: brown" align="center">Game Buddy</h1>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background: cyan">
<div class="container"  align="center">
<div class="nav ">
    <h3>Welcome <?php echo $login_session; ?>    </h3>
    <h3><a href = "logut.php" >Sign Out</a></h3>
</div>
</div>

<link rel="stylesheet" href="css/stylesheet.css">
<div class="container">
    <a href="index.php" style="background: antiquewhite">Add Data</a>
    <a href="view.php" style="background: antiquewhite">View Data</a>
</div>
<br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names" title="Type in a name" style="width: 300px; height: 50px; margin-left: 100px">

<table border="2px" id="myTable" style="margin-left: 100px">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Country</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php while
    ($data = mysqli_fetch_assoc($result)){?>


    <tr>
        <td>
            <?php echo $data['id']?>
        </td >
        <td contenteditable="true">   <?php echo $data['name']?></td>
        <td contenteditable="true">   <?php echo $data['country']?></td>
        <td contenteditable="true">   <?php echo $data['phone']?></td>
        <td contenteditable="true">   <?php echo $data['email']?></td>
        <td contenteditable="true">   <?php echo $data['password']?></td>
        <td><a href="edit.php?id= <?php echo $data['id']?>       </td >
">Edit</a></td>
        <td><a href="?delete=true&id=<?php echo $data['id']?>"onclick="return confirm('are you sure delete this data!!')">Delete</a></td>
    </tr>
<?php }?>
</table>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
