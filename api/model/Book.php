<?php


class Book
{
    private $bId;
    private $title;
    private $author;
    private $quantity;
    private $available;
    private $price;

    /**
     * Book constructor.
     * @param $title
     * @param $author
     * @param $quantity
     * @param $available
     * @param $price
     */
    public function __construct($title, $author, $quantity, $available, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->quantity = $quantity;
        $this->available = $available;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * @param mixed $bId
     */
    public function setBId($bId)
    {
        $this->bId = $bId;
    }
}