<?php
    require __DIR__ . '/vendor/autoload.php';

    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader);

    $data = file_get_contents(__DIR__ . "/contents.json");
    $data = json_decode($data, true);
    echo $twig->render('index.html.twig', [
        'data' => $data,
    ]);