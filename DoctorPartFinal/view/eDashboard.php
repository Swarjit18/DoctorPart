<?php session_start();
if (count ($_SESSION)==0)
{
    header("location: ../view/eLogin.php");
} ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin PAGE</title>
   
    <style>




</style>
</head>
<body>

    <section>
    <h1>DASHBOARD<h1>
    
    <br><br>
    
    <form  method="get" action="../model/eShowProfile.php">
     <button class="button" type="submit">PROFILE</button>
     </form>
    
     </form>
     <form method="get" action="../view/eIndex.php">
     <button class="button" type="submit">SEARCHING</button>
     </form>
     <form method="get" action="../view/adminManageAccounts.php">
     <button class="button" type="submit">ACCOUNT</button>
     </form>
     <form method="get" action="../view/eLogout.php">
     <button class="button" type="submit">LOGOUT</button>
     </form>

    
    
</section>
<div>
<?php require "partial/footer.php"?>
</div>
</body>
</html>


