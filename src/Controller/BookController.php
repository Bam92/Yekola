<?php


namespace Yekola\Controller;


use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Yekola\Domaine\Book;


class BookController {

  public function bookAction (Application $app) {
    $books = $app['dao.book']->findAll();
    return $app['twig']->render('books.html.twig', array('books' => $books));
  }

  public function bookCategoryAction ($bookCategory, Application $app) {
    $books = $app['dao.book']->findAllByCategory($bookCategory);
    return $app['twig']->render('booksCategory.html.twig', array('books' => $books));
  }

}
