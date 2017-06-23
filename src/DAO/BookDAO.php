<?php

namespace Yekola\DAO;

use Doctrine\DBAL\Connection;
use Yekola\Domaine\Book;

class BookDAO extends DAO
{
    /**
     * Return a list of all recently added books, sorted by book_date asc.
     *
     * @return array A list of all books.
     */
    public function findAll() {
        $sql = "select * from book order by book_date asc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $books = array();
        foreach ($result as $row) {
            $bookId = $row['book_id'];
            $books[$bookId] = $this->buildDomainObject($row);
        }
        return $books;
    }

     /**
         * Return a list of all books for a category, sorted by book_title.
         *
         * @param string $bookCategory The books category.
         *
         * @return array A list of all books for the category.
         */
        public function findAllByCategory($bookCategory) {
            $sql = "select * from book where book_category=? order by book_title";
            $result = $this->getDb()->fetchAll($sql, array($bookCategory));

            // Convert query result to an array of domain objects
            $books = array();
            foreach ($result as $row) {
                $bookId = $row['book_id'];
                $books[$bookId] = $this->buildDomainObject($row);
            }

            return $books;
        }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \Yekoal\Domain\Book
     */
    protected function buildDomainObject(array $row) {
        $book = new Book();
        $book->setId($row['book_id']);
        $book->setTitle($row['book_title']);
        $book->setAuthor($row['book_author']);
        $book->setCategory($row['book_category']);
        $book->setEditor($row['book_editor']);
        $book->setDescription($row['book_description']);
        //$book->setDescription($row['book_illustration']);
        return $book;
    }
}
