<!DOCTYPE html>
<html>
<head>
	<title>Real Estate Co</title>
	
	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- image on tab -->
	<link rel="icon" href="./img/Flat Gradient Social Media Icons/16/500px icon.png">

	<!-- Bootstrap -->
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Style sheet -->
	<link href="./css/stylesheet.css" rel="stylesheet" type="text/css">

	<!-- React CDN -->
	<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
	<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <!-- Search Tab-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


	<style type="text/css" media="screen">

    /*style for background image*/
		.img::before {
			background-image: url(img/architecture-beautiful-exterior-106399.jpg);
			background-size: cover;
			content: "";
			display: block;
			position: absolute;
			width: 100%;
			height: 250px;
			z-index: -2;
			opacity: 0.25;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center; 
		}

    /*Search Bar*/
    /*https://bootsnipp.com/snippets/featured/awesome-search-box*/
    /*body,html{*/
      /*height: 100%;*/
      /*width: 100%;*/
      /*margin: 0;*/
      /*padding: 0;*/
      /*background: #e74c3c !important;*/
    /*}*/

    .searchbar{
      margin-bottom: auto;
      margin-top: auto;
      height: 60px;
      background-color: #353b48;
      border-radius: 30px;
      padding: 10px;
    }

    .search_input{
      color: white;
      border: 0;
      outline: 0;
      background: none;
      width: 0;
      /*caret-color:transparent;*/
      line-height: 40px;
      transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
      padding: 0 10px;
      width: 450px;
      /*caret-color:red;*/
      transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
      background: white;
      color: #e74c3c;
    }

    .search_icon{
      height: 40px;
      width: 40px;
      float: right;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      color:white;
    }
	</style>

</head>
<body style="background-color: #748686">

	<nav class="navbar navbar-expand-lg navbar-light justify-content-center img" style="height: 250px;">
		<div>

			<ul class="nav" style="font-family: 'Roboto', sans-serif; color: black; text-shadow: 1px 1px 2px #FFFFFF;">
        <li class="nav nav-tabs">
          <a class="nav-link" href="#">
            <img src="img/Flat Gradient Social Media Icons/64/500px icon.png" alt="Company Logo also link home" style="height: 35px">
          </a>
        </li>
				<li class="nav nav-tabs">
					<a class="nav-link" href="index.php" style="color: black"><h4>Real Estate Co</h4></a>
				</li>
				<li class="nav nav-tabs">
					<a onclick="clicked(this.id)" id="buy" name="buy" class="nav-link" href="#" style="color: black;"><h4>Buy</h4></a>
				</li>
				<li class="nav nav-tabs">
					<a onclick="clicked(this.id)" id="rent" name="rent" class="nav-link" href="#" style="color: black;"><h4>Rent</h4></a>
				</li>
				<li class="nav nav-tabs">
					<a class="nav-link" href="#" style="color: black;"><h4>Sold</h4></a>
				</li>
        <li class="nav nav-tabs">
          <a class="nav-link" href="#" style="color: black;"><h4>Login</h4></a>
        </li>
        <li class="nav nav-tabs">
          <a class="nav-link" href="#" style="color: black;"><h4>Join Us</h4></a>
        </li>
			</ul>
      <br>
      <form action="./mydb/search.db.php" method="POST" role="form" data-toggle="validator">
        <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="search" placeholder="Search by State, Suburb or Postcode" required>
              <a class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>
      </form>
		</div>

		<br>
	</nav>


<script type="text/javascript">
	function clicked(clicked_id) {
 		if (clicked_id === 'buy') {
 			// console.log('cunt');
 			// var value = 1
 			// document.getElementById('searcBar').innerHTML = value

 			

 		}else if (clicked_id === 'rent') {
 			// console.log('shit');
 			// var value = 0
 			// document.getElementById('searcBar').innerHTML = value


 		} else {
 			//e console.log('nothing clicked');
 		}
	}
</script>


<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="./js/jquery-3.3.1.min.js"><\/script>')</script>

<!-- Bootstrap validators -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/1000hz-bootstrap-validator.js"></script>
<script src="./js/popper.js"></script>
<script src="./js/bootstrap.js"></script>

</body>
</html>