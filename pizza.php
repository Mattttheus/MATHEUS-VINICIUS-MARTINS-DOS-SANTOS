<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PIZZARIA</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
  <div class="logo">
	<p><b>MARTINI PIZZARIA</b></p></div>

 <nav class="menu">
	
    <ul>
		<li><a href="#">Produtos</a>

                <ul><li><a href="#">Sucos</a></li>
			         <li><a href="#">Pizza Salgada</a></li>
			        <li><a href="#">Pizza Doce</a></li>
			       <li><a href="#">Esfiha</a></li>
				   <li><a href="#">Vinhos</a></li>
		      </ul>
        </li>
		<li><a href="#">Pedidos</a>
		        <ul>
		          	<li><a href="#">Numero Do Pedido </a></li>
			        <li><a href="#">Tempo De Entrega</a></li>

		         </ul>
	    </li>
		<li><a href="#">contato</a></li>
	</ul>
</nav>
<div class="box">
	<form action="">
		<fieldset>
			<legend><b>FAÇA SEU PEDIDO</b></legend>
			<br>
			  
			<div class ="inputBox">
				
			    <input type="text" nome="nome" id="nome" class="inputUser"required>
				     <label for="nome"><b> Nome completo</b></label>

			</div>
			<br><br>
			<div class ="inputBox">
				
			    <input type="email" nome="email" id="email" class="inputUser"required>
				     <label for="email"><b>Email</b></label>
				    

			</div>
			<br><br>
			<div class ="inputBox">
				
			    <input type="tel" nome="telefone" id="telefone" class="inputUser"required>
				     <label for="telefone"><b>Telefone</b></label>
			</div>
			<br><br>
			<p>Forma de pagamento</p>
			<input type="radio"id ="cartao"nome="credito"value="cartao"require>
			<label for="cartao">Cartao de credito</label>

			<input type="radio"id ="pix"nome="credito"value="pix"require>
			<label for="pix">PIX</label>

			<input type="radio"id ="debito"nome="debito"value="debito"require>
			<label for="debito">Debito</label>

			<input type="radio"id ="dinheiro"nome="dinheiro"value="dinheiro"require>
			<label for="dinheiro">Dinheiro</label>
			<br><br>
			<div class ="inputBox">
			
			    <input type="date" nome="data" id="data" class="inputUser"required>
				     <label for="data"><b>Data</b></label>

			</div>
			<br><br>
			<div class ="inputBox">
				
			    <input type="text" nome="cidade" id="cidade" class="inputUser"required>
				     <label for="cidade"><b>Cidade</b></label>

			</div>
			<br><br>
			<div class ="inputBox">
				
			    <input type="text" nome="endereco" id="endereco" class="inputUser"required>
				     <label for="endereco"><b>Endereço</b></label>

			</div>
			<br><br>
			<input type="submit"nome="submit"id="submit">


			

		</fieldset>
	</form>
</div>
<div class="layte">
	<img src="p.png">
</div>
<div class="promo">
	<p><b>PROMOÇOES</b></p>
</div>
<div class="Produto">
<p><b>COMBO</b></p>
<img src="img01.jpg">

</div>
<div class="Produto-1">

<p><b>PIZZA GRANDE</b></p>	
<img src="img02.jpg">

</div>
<div class="Produto2">

<p><b>RODIZIO</b></p>
<img src="img03.jpg">
</div>
<div class="Produto3">

<p><b>ESFIHA</b></p>

<img src="img04.jpg">

</div>	
<div class="rodape">
	

<ul>
		<li><a href="#">Produtos</a>

                <ul><li><a href="#">Sucos</a></li>
			         <li><a href="#">Pizza Salgada</a></li>
			        <li><a href="#">Pizza Doce</a></li>
			       <li><a href="#">Esfiha</a></li>
		      </ul>
        </li>
		<li><a href="#">Pedidos</a>
		        <ul>
		          	<li><a href="#">Numero Do Pedido </a></li>
			        <li><a href="#">Tempo De entrega</a></li>

		         </ul>
	    </li>
		<li><a href="#">contato</a></li>
	</ul> 
	<img src="clarity.jpg">
	<p><b>Tel (11) 4605-6897  Email :pizzariamartinini@gmail.com </b></p>
	<br> 
</div>
</body>	

</html>	