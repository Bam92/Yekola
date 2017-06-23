<?php

namespace Yekola\Domaine;

class Ask4Help
{
    /**
     * Asker id.
     *
     * @var integer
     */
    private $id;

    /**
     * Asker first name.
     *
     * @var string
     */
    private $f_Name;

    /**
     * Asker name.
     *
     * @var string
     */
    private $name;

    /**
     * Asker country.
     *
     * @var string
     */
    private $country;

    /**
     * Asker city.
     *
     * @var string
     */
    private $city;

    /**
     * Asker adress.
     * @var string
     */
    private $adress;

    /**
     * Asker tutor name.
     * @var string
     */
    private $n_Tutor;

    /**
     * Asker tutor phone.
     * @var string
     */
    private $p_Tutor;

    /**
     * Asker message.
     * @var string
     */
    private $message;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function getEditor() {
        return $this->editor;
    }

    public function setEditor($editor) {
        $this->editor = $editor;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }
}
