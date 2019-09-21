<?php
/*
Autor: PHABLO H REIS
Contato:admmicroreisinformatica@gmail.com
versão: 0.1
*/
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("display_errors", 1 );

	if(isset($_POST['somar'])) {

		$a = $_POST['m1'];
		$n1 = $_POST['m1']*'0.05';

		$b = $_POST['m2'];
		$n2 = $_POST['m2']*'0.10';

		$c = $_POST['m3'];
		$n3 = $_POST['m3']*'0.25';

		$d = $_POST['m4'];
		$n4 = $_POST['m4']*'0.50';

		$e = $_POST['m5'];
		$n5 = $_POST['m5']*'1.00';

		$f = $_POST['m6'];
		$n6 = $_POST['m6']*'2.00';

		$g = $_POST['m7'];
		$n7 = $_POST['m7']*'5.00';

		$h = $_POST['m8'];
		$n8 = $_POST['m8']*'10.00';

		$i = $_POST['m9'];
		$n9 = $_POST['m9']*'20.00';

		$j = $_POST['m10'];
		$n10 = $_POST['m10']*'50.00';

		$l = $_POST['m11'];
		$n11 = $_POST['m11']*'100.00';

		$res = $n1+$n2+$n3+$n4+$n5+$n6+$n7+$n8+$n9+$n10+$n11;
	}else{

		$erro = "Algo não esta correto nas operações";	
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	 <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		html{
			padding: 1%;
			margin: auto;
		}
		.divdir{
			padding: 3px;
			margin-top: 3px
		}
		.input-group{
			margin-top: 5px;
			margin-bottom: 5px;
		}

	</style>
</head>
<body>
<div class="jumbotron text-center">
  <h2>Contador de notas e moedas</h2>
  </div>


<div align="center">
	
	<div class="alert alert-danger alert-dismissible fade show col-lg-4 text-left" role="alert">
		<h6 class="alert-heading ">Atenção!</h6>
  <?php echo $erro; ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="divdir"></div>
	<form method="Post">
		<input type="hidden" name="somar" value="0">
		

		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 0,05&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m1" value="<?php echo $a; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n1, 2, ',', '.'); ?>" class="form-control" >
		</div>
		

		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 0,10&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m2" value="<?php echo $b; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n2, 2, ',', '.'); ?>" class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 0,25&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m3" value="<?php echo $c; ?>"  class="form-control" >
				<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n3, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 0,50&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m4" value="<?php echo $d; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n4, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 1,00&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m5" value="<?php echo $e; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n5, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 2,00&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m6" value="<?php echo $f; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n6, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 5,00&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
		<input type="number" name="m7" value="<?php echo $g; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n7, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 10,00&nbsp;&nbsp;</span></div>
		<input type="number" name="m8" value="<?php echo $h; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n8, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 20,00&nbsp;&nbsp;</span></div>
		<input type="number" name="m9" value="<?php echo $i; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n9, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 50,00&nbsp;&nbsp;</span></div>
		<input type="number" name="m10" value="<?php echo $j; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n10, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$ 100,00</span></div>
		<input type="number" name="m11" value="<?php echo $l; ?>"  class="form-control" >
		<div class="input-group-append"><span class="input-group-text">R$ </span></div>
		<input type="text" disabled="" value="<?php echo number_format($n11, 2, ',', '.'); ?>"  class="form-control" >
		</div>


		<div class="input-group col-lg-4">
		<div class="input-group-prepend"><span class="input-group-text">R$</span></div>
		<input type="text" disabled="" class="form-control" aria-label="Quantia" value="<?php echo number_format($res, 2, ',', '.'); ?>">
		</div>


		<div class="divdir"></div>
		<div align="center" class="input-group col-lg-4">
		<input class="btn btn-primary btn-lg" type="submit" name="submit" value="calcular">

		</div>
	</form>
</DIV>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
