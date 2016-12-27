     
<html>
<head>
<title>Navbar</title>
</head>

<body>

	 <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Water Supply</a>
    </div>
       
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Operator</a></li>
      <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-user"></span> Administrator</a></li>
    </ul>
  </div>
</nav>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Operator Login</h4>
      </div>
      <div class="modal-body">
      <form method="post">
          <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-primary" id="ologin">Login</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" align="center">Admin Login</h4>
      </div>
      <div class="modal-body">
    <form method="post">
      <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" name="username2" class="form-control" id="username2">
      </div>
      
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" name="password2" class="form-control" id="password2">
      </div>
      
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
      <button type="submit" class="btn btn-primary" id="admin">Login</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>




