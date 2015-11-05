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

    <!-- Custom CSS -->
    <link href="assets/sb-admin-2.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
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
              <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
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
                    <h3 class="page-header">Dados do Pedido</h1>
                </div>
                <!-- /.col-lg-12 -->

            </div>
           
 <!-- /.row -->
            <div class="row">
                <div class="col-lg-6"> 
		    <div class="form-group">
			<label class="checkbox-inline">
                           <input type="checkbox">Inteira
                         </label>
		    </div>

		<div class="panel panel-default">
		     <div class="panel-body">
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
			<div class="form-group">
                            <label>Nome</label>
                                 <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                        </div>
			<div class="form-group">
                              <label>Tamanho</label>
                                   <label class="radio-inline">
                                       <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                    </label>
                                    <label class="radio-inline">
                                       <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                    </label>
                         </div>
		         <div class="form-group">
                               <label>Quantidade</label>
                               	  <input class="form-control" placeholder="">
                         </div>
                         <div class="form-group">
                              <label>Total</label>
                               	<input class="form-control" placeholder="">
                         </div>
			<button type="submit" class="btn btn-default">Incluir</button> 		    
			</div>
		 </div>
              </form>  
                </div> 
       <div class="col-lg-6"> 
		     <div class="form-group">
			<label class="checkbox-inline">
                           <input type="checkbox">Meia
                         </label>
		    </div>

		<div class="panel panel-default">
		     <div class="panel-body">
			<div class="form-group">
                               <div class="radio">
                                   <label>
                                       <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>2 Partes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                       <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">3 Partes
                                     </label>
                                </div>
			</div>
			<div class="form-group">
                            <label>Sabor 1</label>
                                 <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                        </div>
			<div class="form-group">
                            <label>Sabor 2</label>
                                 <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                        </div>
			<div class="form-group">
                            <label>Sabor 3</label>
                                 <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                        </div>
		         <div class="form-group">
                               <label>Quantidade</label>
                               	  <input class="form-control" placeholder="">
                         </div>
                         <div class="form-group">
                              <label>Total</label>
                               	<input class="form-control" placeholder="">
                         </div>
			<button type="submit" class="btn btn-default">Incluir</button> 		    
			</div>
		 </div>
              </form> 
                </div>
	</div>
	<div class="row">
	<div class="col-md-10">
	    <div class="panel panel-default">
		<div class="panel-heading">Lista de Pedidos</div>
			<div class="panel-body">
				<div class="table-responsive">
						<table class="table table-hover">
							<thead>
							<tr>
								<th>Item</th>
								<th>Quantidade</th>
								<th>Preço</th>
								<th>Total</th>
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

    <div class="col-md-2">
	<button type="submit" class="btn btn-default">Incluir Bebida</button>
    </div>

            <!-- /.row -->
           </div>
	
    
    </div>
	<div class="row">
		<div class="col-md-4">     
                       <form role="form" >
                           <div class="form-group">
                              <label>Forma de Pagamento</label>
                                 <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                 </select>
                            </div>
	        </div>
		<div class="col-md-4">
                            <div class="form-group">
                               <label>Desconto</label>
                               <input class="form-control" placeholder="">
                            </div>
		</div>
		<div class="col-md-4">
			    <div class="form-group">
                               <label>Entregador</label>
                               <input class="form-control" placeholder="">
                            </div>
			   </form>
                  </div>

		<div class="col-md-4">     
                       <form role="form">
                           <div class="form-group">
                              <label>Valor Total</label>
                              <input class="form-control">
                            </div>
	        </div>
		<div class="col-md-4">
                            <div class="form-group">
                               <label>Receber</label>
                               <input class="form-control" placeholder="">
                            </div>
		</div>
		<div class="col-md-4">
			    <div class="form-group">
                               <label>Troco</label>
                               <input class="form-control" placeholder="">
                            </div>
			   </form>
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
