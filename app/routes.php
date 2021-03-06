<?php

$routes = array(
    'home'    => array('url' => '/', 'template' => 'home.html.twig'), // home page
    'books'   => array('url' => 'books', 'template' => 'books.html.twig'),
    'contact' => array('url' => 'contact', 'template' => 'contact.html.twig'),
    'about'   => array('url' => 'about', 'template' => 'about.html.twig'),
    'schooling' => array('url' => 'schooling', 'template' => 'schooling.html.twig'),
    'success_story' => array('url' => 'success_story', 'template' => 'success_story.html.twig'),
    'sos'    => array('url' => 'sos', 'template' => 'sos.html.twig'),
    'forum'  => array('url' => 'forum', 'template' => 'forum.html.twig'),
    // ...
);

foreach ($routes as $routeName => $data) {
    $app->get($data['url'], function() use($app, $data) {
        return $app['twig']->render($data['template']);
    })->bind($routeName);
}

$app->get('/books', "Yekola\Controller\BookController::bookAction")->bind('books');
$app->get('/books/{bookCategory}', "Yekola\Controller\BookController::bookCategoryAction")->
bind('bookCategory');

/*$app->get('/books/{category}', function() use($app) {
  return $app['twig']->render('test.html.twig');
});*/
