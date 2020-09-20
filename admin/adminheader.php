<?php include ("../proses/connect.php");
session_start();
if (isset($_SESSION['logged']))
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surya Galuh - Admin</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

      <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>

    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../ckeditor/contents.css"></script>
 </head> 
    <body>
     <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_page.php">Admin Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li><a href="admininputtipsdaninfo.php"><i class="fa fa-tasks"></i> Input Tips & Info</a></li>
                    <li><a href="admininputbarang.php"><i class="fa fa-table"></i> Input Suku Cadang</a></li>
                    <li><a href="adminlistkomentar.php"><i class="fa fa-comments"></i> List Komentar</a></li>
                    <li><a href="adminlistuser.php"><i class="fa fa-user"></i> List User</a></li>
                </ul>
                <li>
                <ul class="nav navbar-nav navbar-right navbar-user">
                          <li class="divider"></li>
                            <li><a href="../proses/logout.php"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                    </div>
                    </nav>
                    </div>
    
                    </body>
                    
                    </html>
<?php 
}
else
{ 
die ("'<script>alert('Maaf hanya admin yang dapet mengakses'); window.location = '../index.php'</script>'");
}
?>