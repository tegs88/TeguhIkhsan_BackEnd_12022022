<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url().'nasabah' ?>>Nasabah <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url().'transaksi' ?>>Transaksi</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url().'point' ?>>Point</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href=<?php echo base_url().'report' ?>>Report</a>
      </li>
    </ul>
  </div>
</nav>
	<?php	if(isset($_view) && $_view)
	    $this->load->view($_view);
	?>
	</body>
</html>
