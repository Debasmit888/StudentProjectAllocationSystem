<nav class="navbar" style="background-color: #d3d3d3;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="dashboard.php"><?php echo PROJECT_NAME; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="dashboard.php">Home</a></li>
        <li><a href="create-project.php">Project</a></li>
        <li><a href="create-student.php">Student</a></li>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="user.php">Add User</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="fa fa-user"></span> Logout[<?php echo $_SESSION['user']; ?>]</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- <i class="fa fa-home"></i>
<i class="fa fa-book"></i>
<i class="fa fa-users"></i> -->
<!-- <i class="fa fa-cog"></i>  -->