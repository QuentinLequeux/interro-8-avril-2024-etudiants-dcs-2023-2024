<?php

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jiris</title>
    <link rel="stylesheet"
          href="<?= public_path('css/app.css') ?>">
</head>
<body>
<a class="sr-only"
   href="#main-menu">Aller au menu principal</a>
<div class="container mx-auto flex flex-col-reverse gap-6">
    <main class="flex flex-col gap-4">
        <h1 class="font-bold text-2xl">
            Cr&eacute;ation de compte
        </h1>
        <form method="post" action="/register" <?php csrf_token() ?> <?php method('store'); ?>>
            <label for="email">
                Adresse email&nbsp;:
            </label>
            <input type="email" id="email" placeholder="example@example.com">
            <label for="password">
                Mot de passe&nbsp;:
            </label>
            <input type="password" id="password" placeholder="********">
            <label for="password">
                Réecrire votre Mot de passe&nbsp;:
            </label>
            <input type="password" id="password" placeholder="********">
            <button type="submit">
                Connexion
            </button>
        </form>
    </main>
    <?php
    component('navigations.main'); ?>
</div>
</body>
</html>