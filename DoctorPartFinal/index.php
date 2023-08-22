
<!DOCTYPE html>

<html lang="en">
<style>
    body {
    background-color: orange;
    }
	
          
   
</style>

<head>
     <section>
        <h1>Doctor Portal</h1>
    </section>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home |</a>
            <?php if(isset($_SESSION['key'])){
                echo'<a  href="view/eLogout.php">| Logout |</a> ';
                echo'<a href="view/eDashboard.php">| Dashboard |</a>';
            }
            else{
                echo '<a href="view/eLogin.php">| Login |</a> ';
                echo '<a href="view/eRegistration.php">| Registration |</a>';
                
            } ?>
        </nav>
    </header>


    
</body>
</html>