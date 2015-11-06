<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Pizzaria</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">

</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li ><a href="#works">Cliente</a></li>
                 <li ><a href="#about">Pedido</a></li>
                 <li ><a href="#partners">Nota</a></li>
		 <li ><a href="#partners">Funcionários</a></li>
                 <li ><a href="#partners">Pizza</a></li>
		 <li ><a href="#partners">Bebidas</a></li>
		 <li ><a href="#partners">Relatórios</a></li>
                 <li ><a href="#contact">Logout</a></li>
              </ul>


            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<!-- works -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Manter Pizza</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>
     
<!-- Right -->
          <div class="row">
                   <div class="col-lg-6">
			<div class="col-lg-6">
				 <!-- form -->
				 <form role="form">
					<div class="form-group">
                                		<label>Categoria</label>
                                 		<select class="form-control">
                                     		<option>1</option>
                                     		<option>2</option>
                                     		<option>3</option>
                                     		<option>4</option>
                                     		<option>5</option>
                                 		</select>
                            		</div>
			</div>
			

		<div class="col-lg-12">
			<div class="form-group">
                             <label>Nome</label>
                             <input class="form-control" placeholder="">
                          </div>
		</div>

		<div class="col-lg-12">
			<div class="form-group">
                               <label>Ingredientes</label>
                               <textarea class="form-control" rows="3"></textarea>
                          </div>
		</div>

		<div class="col-lg-9">
                                 <label>Tamanho</label>
                                 <label class="radio-inline">
                                 <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1</label>
                                 <label class="radio-inline">
                                 <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2</label>
                                 <label class="radio-inline">
                                 <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3</label>
		</div>

		<div class="col-lg-3">
			<div class="form-group">
                               	<label>Valor</label>
                               	<input class="form-control" placeholder="">
                        </div>
		</div>

		
		<div class="col-lg-12">
			<button type="submit" class="btn btn-default">Salvar</button>
                	<button type="reset" class="btn btn-default">Limpar</button>
			<button type="reset" class="btn btn-default">Cancelar</button>

<br>
<br>		</div>
	      <!-- /form -->
              </form>
	</div>

<!-- Left -->

 	<div class="col-lg-6">
		<label>Pesquisar</label>
			  <div class="form-group input-group">
                             <input type="text" class="form-control">
                             <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                </button>
                             </span>
                          </div>
			<div class="panel panel-default">
				<div class="panel-heading">Lista de Pizzas </div>
			   		<div class="panel-body">
						<div class="table-responsive">
						<table class="table">
							<thead>
							<tr>
								<th>Categoria</th>
								<th>Nome</th>
								<th>Tamanho</th>
								<th>Valor</th>
								<th></th>
								<th></th>
							</tr>
							</thead>
						<tbody>
							<tr>
								<td>Natalia Oliveira</td>
								<td>20356565</td>
								<td>968534524</td>
								<td>Rua Dr. Satamini 291</td>
								<td><a href="www.google.com"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></td>
								<td><a href="www.google.com"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
							</tr>
							<tr>
								<td>Alex Santos</td>
								<td>85988912</td>
								<td>8745210</td>
								<td>Rua Santa Inês, 1234</td>
								<td> <a href="www.google.com"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></td>
								<td> <a href="www.google.com"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
							</tr>
							<tr>
								<td>Nino</td>
								<td>32651000</td>
								<td>78851090</td>
								<td>Rua São Clemente, 32</td>
								<td> <a href="www.google.com"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></td>

								<td> <a href="www.google.com"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a></td>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    </div>
     
</div>
<!-- works -->

<footer class="footer">
  <div class="container">
    <p class="text-muted">Place sticky footer content here.</p>
  </div>
</footer>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

<!-- jquery mobile -->
<script src="assets/mobile/touchSwipe.min.js"></script>
<script src="assets/respond/respond.js"></script>

<!-- gallery -->
<script src="assets/gallery/jquery.blueimp-gallery.min.js"></script>

<!-- custom script -->
<script src="assets/script.js"></script>

</body>
</html>
