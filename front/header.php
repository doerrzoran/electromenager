
<!DOCTYPE html>
<html> 
    <head>
        <link rel="stylesheet" type="text/css" href="../Assets/css/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="bg-warning img-fluid" style="background-size: 100%; padding: 30px; background-image: url('https://cdn-g8hn2yqg.files-simplefileupload.com/static/blobs/proxy/eyJfcmFpbHMiOnsibWVzc2FnZSI6IkJBaHBBM041QVE9PSIsImV4cCI6bnVsbCwicHVyIjoiYmxvYl9pZCJ9fQ==--e24f422fc0d881a0d3056ecebf3a51d35ccd196a/istockphoto-535698335-1024x1024.jpg');">
        <header class="page-header p-3 mb-2 bg-info text-white" style="padding-bottom: 30px; border-radius: 15px;">
           <div class="text-danger" style = ''>
             <h1 class="event" id="title" style="cursor:pointer; font-size: 45px;">Electromenager</h1>
           </div>
        </header>
        <div class="text-danger conn" style = "text-align: right; font-size: 20px; background-color: #FFFACD; border-radius: 15px; margin-left: 75%;">
        <?php
          require_once "welcomeUser.php";
          welcomeUser($userName, $userFirstname); 
          ?>
        </div>

