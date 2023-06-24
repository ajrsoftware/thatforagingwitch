<?php

$context = Timber::context();
$context['posts'] = new Timber\PostQuery();

$templates = ['templates/index.twig'];

if (is_home()) {
    array_unshift($templates, 'front-page.twig', 'home.twig');
}

Timber::render($templates, $context);
