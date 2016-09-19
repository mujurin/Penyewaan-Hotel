<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Admin Menu</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">List Member</a></li>
    <li><a data-toggle="tab" href="#menu2">List Host</a></li>
    <li><a data-toggle="tab" href="#menu3">List Order</a></li>
    <li><a data-toggle="tab" href="#menu4">List Comment</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
     <p>Welcome , you are logged in as admin , you can remove and view the details of any content in this application.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
            <iframe width="1140" height="550" scroling="no" src="daftar_member_admin.php"></iframe>
    </div>
    <div id="menu2" class="tab-pane fade">
      <iframe width="1140" height="550" scroling="no" src="daftar_tuan_admin.php"></iframe>
    </div>
    <div id="menu3" class="tab-pane fade">
      <iframe width="1140" height="550" scroling="no" src="daftar_pesan_admin.php"></iframe>
    </div>
    <div id="menu4" class="tab-pane fade">
      <iframe width="1140" height="550" scroling="no" src="lihat_komen.php"></iframe>
    </div>
  </div>
</div>

</body>
</html>