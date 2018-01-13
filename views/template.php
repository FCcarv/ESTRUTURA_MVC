<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Meu Site</title>
</head>
<body>
	<h1>Este é o Topo</h1>
	<a href="<?=BASE_URL;?>">Home</a>
	<a href="<?=BASE_URL;?>galeria">Galeria</a>
	<hr/>

	<!-- chama as view galeria , e home , pra funcionar dentro da view template.  -->
	<?=$this->loadViewInTemplate($viewName, $viewData);?>
	
</body>
</html>