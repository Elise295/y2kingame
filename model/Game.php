<?php
class Game
{
    private $gameId;
    private $categoryId;
    private $name;
    private $intro;
    private $price;
    private $detail;
    private $configuration;
    private $developer;
    private $releasedate;
    private $imgURL;

    public function getGameId()
    {
        return $this->gameId;
    }

    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getIntro()
    {
        return $this->intro;
    }

    public function setIntro($intro)
    {
        $this->intro = $intro;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getPriceFormat()
    {
        $formattedNumber = number_format($this->price) . 'đ';
        return $formattedNumber;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    public function getConfiguration()
    {
        return $this->configuration;
    }

    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDeveloper()
    {
        return $this->developer;
    }

    public function setDeveloper($developer)
    {
        $this->developer = $developer;
    }

    public function getReleaseDate()
    {
        return $this->releasedate;
    }

    public function getReleaseDateFormat()
    {
        $formattedDate = date("M jS, Y", strtotime($this->releasedate));
        return $formattedDate;
    }

    public function setReleaseDate($releasedate)
    {
        $this->releasedate = $releasedate;
    }

    public function getImgURL()
    {
        return $this->imgURL;
    }

    public function setImgURL($imgURL)
    {
        $this->imgURL = $imgURL;
    }
}

?>