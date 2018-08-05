!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Employee Managment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
<style type="text/css">
	#add-body{
		background-color:#daeaf2
  }
</style>
</head>
<body id="add-body">
	<nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top ">
		<div class="container">
			<a href="homepage.php" class="navbar-brand">Employee Managment</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="add.php" class="nav-link">Add Employee</a>
					</li>
					<li class="nav-item">
						<a href="details.php" class="nav-link">Employee Details</a>
					</li>
					<li class="nav-item">
						<a href="delete.php" class="nav-link">Delete Employee details</a>
					</li>
					<li class="nav-item">
						<a href="update.php" class="nav-link">Update Employee details</a>
					</li>
					<li class="nav-item">
						<a href="search.php" class="nav-link">Search Employee details</a>
					</li><li class="nav-item">
						<a href="logout.php" class="nav-link">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--header-->
	<h1 class="display-3 text-center mt-5" ><b>Employee Managment</b></h1>

<!--Employee Form-->

  <form id="contact" class="py-3" name="form1" method="post" action="emp.php">
      <div class="container">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <div class="card p-4">
              <div class="card-body">
                <h3 class="text-center">Enter the Employee details</h3>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="name" type="text" id="name" class="form-control" placeholder=" Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="age" type="text" id="age" class="form-control" placeholder="Age">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="location" type="text" id="location" class="form-control" placeholder="location">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input name="salary" type="text" id="salary" class="form-control" placeholder="Salary">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Save" class="btn btn-outline-info btn-block">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

</body>
</html>
