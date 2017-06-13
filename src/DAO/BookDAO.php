<?php

namespace Yekola\DAO;

use Doctrine\DBAL\Connection;
use Yekola\Domaine\Book;

class BookDAO extends DAO
{
    /**
     * Return a list of all books, sorted by book_title asc.
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from book order by book_title asc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $books[$bookId] = $this->buildDomainObject($row);
        }
        return $books;
    }

  public function findCategories() {
        $sql = "select book_id, book_category from book order by book_category asc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $categories = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $categories[$bookId] = $this->buildDomainObject($row);
        }
        return $categories;
    }


     /**

     * Returns an article matching the supplied id.

     *

     * @param integer $id

     *

     * @return \MicroCMS\Domain\Article|throws an exception if no matching article is found

     */

  /*  public function find($id) {

        $sql = "select * from t_article where art_id=?";

        $row = $this->getDb()->fetchAssoc($sql, array($id));


        if ($row)

            return $this->buildDomainObject($row);

        else

            throw new \Exception("No article matching id " . $id);

    }

    /**

     * Saves an article into the database.

     *

     * @param \MicroCMS\Domain\Article $article The article to save

     */

/*    public function save(Article $article) {

        $articleData = array(

            'art_title' => $article->getTitle(),

            'art_content' => $article->getContent(),

            );


        if ($article->getId()) {

            // The article has already been saved : update it

            $this->getDb()->update('t_article', $articleData, array('art_id' => $article->getId()));

        } else {

            // The article has never been saved : insert it

            $this->getDb()->insert('t_article', $articleData);

            // Get the id of the newly created article and set it on the entity.

            $id = $this->getDb()->lastInsertId();

            $article->setId($id);

        }

    }


    /**
     * Removes an article from the database.
     *
     * @param integer $id The article id.
     */
  /*  public function delete($id) {
        // Delete the article
        $this->getDb()->delete('t_article', array('art_id' => $id));
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \MicroCMS\Domain\Article
     */
    protected function buildDomainObject(array $row) {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setAuthor($row['book_author']);
        $book->setCategory($row['book_category']);
        $book->setEditor($row['book_editor']);
        $book->setDescription($row['book_description']);
        return $book;
    }
}
