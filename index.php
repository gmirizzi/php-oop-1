<?php
class Movie
{
    private $title;
    private $genre;
    private $lang;
    private $duration;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function setGenre($_genre)
    {
        $this->genre = $_genre;
    }

    public function setLang($_lang)
    {
        $this->lang = $_lang;
    }

    public function setDuration($_duration)
    {
        $this->duration = $_duration;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getLang()
    {
        return $this->lang;
    }

    public function getDuration()
    {
        return $this->duration;
    }
}

$firstMovie = new Movie('Ritorno al futuro');
$firstMovie->setGenre('Fantasy');
$firstMovie->setLang('en');
$firstMovie->setDuration(120);

$secondMovie = new Movie('Cado dalle nubi');
$secondMovie->setGenre('Commedia');
$secondMovie->setLang('it');
$secondMovie->setDuration(90);
?>

<h2><?= $firstMovie->getTitle() ?></h2>
<ul>
    <li>Genere: <?= $firstMovie->getGenre() ?></li>
    <li>Language: <?= $firstMovie->getLang() ?></li>
    <li>Duarata: <?= $firstMovie->getDuration() . ' min'?></li>
</ul>

<h2><?= $secondMovie->getTitle() ?></h2>
<ul>
    <li>Genere: <?= $secondMovie->getGenre() ?></li>
    <li>Language: <?= $secondMovie->getLang() ?></li>
    <li>Duarata: <?= $secondMovie->getDuration() . ' min'?></li>
</ul>
