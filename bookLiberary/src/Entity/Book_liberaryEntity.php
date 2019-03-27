<?php
namespace Drupal\bookLiberary\Entity;

class Book_liberaryEntity
{
    
    private $tagsId;

    protected $title;
    protected $description;
    protected $image;
    protected $authors;
    protected $price;


    
    public function getTagsId()
    {
        return $this->tagsId;
    }

    public function setTitle($title)
    {
        $this->title=$title;
        return $this;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setDescription($description)
    {
        $this->description=$description;
        return $this;
    }


    public function getDescription()
    {
        return $this->description;
    }

    // public function setImage($image)
    // {
    //     $this->image=$image;
    //     return $this;
    // }
    // public function getImage()
    // {
    //     return $this->image;
    // }

    public function setAuthors($authors)
    {
        $this->authors=$authors;
        return $this;
    }

    public function getAuthor()
    {
        return $this->authors;
    }


    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price)
    {
        $this->price=$price;
        return $this;
    }
            
}
