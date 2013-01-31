<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    {{ Asset::container('bootstrapper')->styles(); }}
	{{ Asset::styles(); }}
</head>

<body>
	
	<div id="header">
		
		{{ HTML::link('sobrenos', 'Sobre nós')}} 
		{{ HTML::link('solucoes', 'Soluções')}}
		{{ HTML::link('contato', 'Contato')}}

	</div>

	<div id="content">

		@yield('banner')
		@yield('conteudo')

	</div>

    <div id="footer"></div>

    <div id="inside_footer">

        Todos os direitos reservados. Copyright &copy; 2013.

    </div>

</body>

</html>