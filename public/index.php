<?php
require __DIR__ . '/../vendor/autoload.php';
$products = ['lait', 'miel', 'oeufs', 'chocolat', 'canelle'];

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/Views');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['products'=>$products]); // sorte de require de la page index.html.twig

