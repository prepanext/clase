<meta name="viewport" content="width=device-width, initial-scale=1">
<html>
<head>
<?php
$enlace =  $_GET["media"] ;
$pagina_inicio =  'https://www.slideshare.net/mobile/slideshow/embed_code/key/'.$enlace.'/';
?>
<style>
body {
  margin: 0;
}
</style>
</head>
<body>
<div><iframe src=<?php echo $pagina_inicio;  ?> frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
</div>
</body>
</html>
