
<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="bg-warning" style="padding: 30px;">
      <div class="page-header">
        <header class="p-3 mb-2 bg-info text-white" style="padding-bottom: 30px;">
           <div class="text-danger" style = ''>
             <h1 class="event" id="title" style="cursor:pointer; font-size: 45px;">Electromenager</h1>
           </div>
        </header>
        <div class="text-danger" style = ''>
        <?php
          require_once "welcomeUser.php";
          welcomeUser($userName, $userFirstname); 
          ?>
        </div>
       </div>
        

    
