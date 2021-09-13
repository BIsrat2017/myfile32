
<?php
session_start();

if(isset($_SESSION['valid']))
{

}
else
{
  //redirect to the login page
  echo "<script type='text/javascript'>window.top.location='https://doxsite.azurewebsites.net';</script>"; exit;
  //header('Location: /index.php'); exit; 
}    
?>


<?php
if(time() - $_SESSION['timestamp'] > 300) 
{ //subtract new timestamp from the old one
  echo"<script>alert('User Timeout Due to Innactivity');</script>";
  unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
  $_SESSION['valid'] = false;
  session_unset();
  session_destroy();
  echo "<script type='text/javascript'>window.top.location='https://doxsite.azurewebsites.net';</script>"; exit;
} 
else 
{
  $_SESSION['timestamp'] = time(); //set new timestamp
}
?>

<!-- CODE FOR DISCORD CHAT -->
<script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
new Crate
({
    server:'791199410393841685' ,
    channel:'791199410922979390' ,
    shard: 'https://e.widgetbot.io'    

    // ANOTHER VERSION
    //<iframe src="https://discord.com/widget?id=791199410393841685&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
})
  </script>

  <!-- CODE FOR DISCORD CHAT END -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  Dox
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->

  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
   <!-- <link href="../assets/css/login.css"  rel="stylesheet" /> -->  <!-- includes CSS FOR LOGIN PAGE -->
  <link href="../assets/css/table.css"  rel="stylesheet" /> <!--includes CSS FOR TABLE -->
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
      <img src="../assets/img/logo2.png" alt="logo" width="90" height="90"> <br>
        <a href="./dashboard.php" class="simple-text logo-mini">
        <h8><b>Dox</b></h8> 
        </a>
        <a href="./dashboard.php" class="simple-text logo-normal">
        <h8><b>Inc</b></h8> 
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="./dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./map.php">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li class="active ">
            <a href="./tables.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./calendar.php">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Calendar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <!-- AIR INDEX -->
          <div name="airvisual_widget" key="4qAofuySPzA9CZPLs"></div>
          <script type="text/javascript" src="https://www.airvisual.com/scripts/widget_v2.0.js"></script>
          <!-- AIR INDEX  END -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="https://www.google.com/search?q=site:https://doxsite.azurewebsites.net/" method="GET">
              <div class="input-group no-border">
                <input type="text" name="q" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Language</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a href="#googtrans(en|en)" class="lang-en lang-select dropdown-item" data-lang="en">English</a> 
                  <a href="#googtrans(en|es)" class="lang-en lang-select dropdown-item" data-lang="es">Español</a> 
                  <a href="#googtrans(en|fr)" class="lang-en lang-select dropdown-item" data-lang="fr">Français</a>
                  <a href="#googtrans(en|zh-CN)" class="lang-en lang-select dropdown-item" data-lang="zh-CN">中文</a>
                  <a href="#googtrans(en|ja)" class="lang-en lang-select dropdown-item" data-lang="ja">日本人</a> 
                </div>
              </li>            
              <!--START GOOGLE TRANSLATE -->
              <script type="text/javascript" src="../assets/css/google-translate1.js"></script>

              <script type="text/javascript">
                  function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
                  }

                  function triggerHtmlEvent(element, eventName) {
                    var event;
                    if (document.createEvent) {
                      event = document.createEvent('HTMLEvents');
                      event.initEvent(eventName, true, true);
                      element.dispatchEvent(event);
                    } else {
                      event = document.createEventObject();
                      event.eventType = eventName;
                      element.fireEvent('on' + event.eventType, event);
                    }
                  }

                  jQuery('.lang-select').click(function() {
                    var theLang = jQuery(this).attr('data-lang');
                    jQuery('.goog-te-combo').val(theLang);

                    window.location = jQuery(this).attr('href');
                    location.reload();
                  });
              </script>
              <script type="text/javascript" src="../assets/css/google-translate.txt"></script>
              <!--END GOOGLE TRANSLATE -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./userinfo.php">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
              <div class="card-body ">
                <div id="map"></div>
        <!-- START POPUP -->
      <div class="openBtn">
        <button class="openButton" onclick="openForm()"><strong>Add to Table</strong></button>
      </div>
      <div class="formPopup" id="popupForm">
        <div class="formContainer">
          <h3>Add to Table</h3>
            <form method="post" action="?action=add" enctype="multipart/form-data" >

              <input type="text" placeholder="shelter ID" required name="t_shelterID" id="t_shelterID"/></br>    
              <input type="text" placeholder="addressId" required  name="t_addressId" id="t_addressId"/></br>  
              <input type="text" placeholder="Shelter Name" required name="t_shelterName" id="t_shelterName"/></br>  
              <input type="text" placeholder="Phone"  required name="t_phonenum" id="t_phonenum"/></br>  
              <input type="text" placeholder="Fax" required name="t_faxNum" id="t_faxNum"/></br>  

              <input type="submit" class= "btn" name="submit" value="Submit" /> 
              <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button> 
              </form>  
        </div>
      </div>
        <script type="text/javascript"> 
            function closeForm() {
                document.getElementById("popupForm").style.display = "none";
            }

            function openForm() {
                document.getElementById("popupForm").style.display = "block";
            }
        </script> 
<?php  
/*Connect using SQL Server authentication.*/  
$serverName = "tcp:dox.database.windows.net,1433";  
$connectionOptions = array(  
    "Database" => "testDatabase",  
    "UID" => "UWBAdmin",  
    "PWD" => "UWBothell2020"  
);  
$conn = sqlsrv_connect($serverName, $connectionOptions);  
  
if ($conn === false)  
    {  
    die(print_r(sqlsrv_errors() , true));  
    }  
  
if (isset($_GET['action']))  
    {  
    if ($_GET['action'] == 'add')  
        {  
        /*Insert data.*/  
        $insertSql = "INSERT INTO empTable (shelterID,addressId,shelterName,phonenum,email)   
VALUES (?,?,?,?,?)";  
        $params = array(&$_POST['t_shelterID'],&$_POST['t_addressId'], &$_POST['t_shelterName'], &$_POST['t_phonenum'], &$_POST['t_faxNum']  
        );  
        $stmt = sqlsrv_query($conn, $insertSql, $params);  
        if ($stmt === false)  
            {  
            /*Handle the case of a duplicte e-mail address.*/  
            $errors = sqlsrv_errors();  
            if ($errors[0]['code'] == 2601)  
                {  
                echo "The primary ID you entered has already been used.</br>";  
                }  
  
            /*Die if other errors occurred.*/  
              else  
                {  
                die(print_r($errors, true));  
                }  
            }  
          else  
            {  
            echo "Registration complete.</br>";  
            }  
        }  
    }  
  
/*Display registered people.*/  

$sql = "SELECT * FROM shelter ORDER BY shelterID"; 
$stmt = sqlsrv_query($conn, $sql); 
if($stmt === false) 
{ 
die(print_r(sqlsrv_errors(), true)); 
} 
 
if(sqlsrv_has_rows($stmt)) 
{ 
  print("<table border='1px'>"); 
  print("<thead><tr>");

  print("<th>shelterID</th>"); 
  print("<th>addressId</th>"); 
  print("<th>shelterName</th>");
  print("<th>phonenum</th>"); 
  print("<th>faxNum</th>");

  print("<th>Edit</th>"); 
  print("<th>Delete</th>"); 

  print("</tr></thead>");


  while($row2 = sqlsrv_fetch_array($stmt)) 
  { 
  print("<tbody>");
  print("<tr>"); 
  print("<td><strong>".$row2['shelterID']."</strong></td>"); 
  //print("</tr>");
  
  //print("<tr>");
  print("<td>".$row2['addressId']."</td>"); 
  //print("</tr>");

  //print("<tr>");
  print("<td>".$row2['shelterName']."</td>"); 
  //print("</tr>");

  //print("<tr>");
  print("<td>".$row2['phonenum']."</td>");
  //print("</tr>");
  
  //print("<tr>");
  print("<td>".$row2['faxNum']."</td>"); 

  print('<td> <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
  <i class="now-ui-icons ui-2_settings-90"></i>
</button> </td>');
  print('<td> <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
  <i class="now-ui-icons ui-1_simple-remove"></i>
</button> </td>');

  //print('<td><input type="submit" name="Submit" value="Edit"></td>');
  //print('<td><input type="submit" name="Submit" value="Delete"></td>');
  
  print("</tr>");

  }

  print("</tbody>"); 

  print("</table>"); 
}
?>  


              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="./dashboard.php">
                  About Us
                </a>
              </li>
              <li>
                <a href="./dashboard.php">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="./dashboard.php" target="_blank">Dox</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!-- Control Center for Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initGoogleMaps();
    });
  </script>
</body>

</html>