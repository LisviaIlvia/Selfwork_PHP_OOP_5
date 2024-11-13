<?php

abstract class Categoria
{

    abstract function getMyCategory();
}

class Attualita extends Categoria
{
    function getMyCategory()
    {
        echo "Sono la categoria dell'Attualità!\n";
    }
}

class Sport extends Categoria
{
    function getMyCategory()
    {
        echo "Sono la categoria dello Sport!\n";
    }
}

class Gossip extends Categoria
{
    function getMyCategory()
    {
        echo "Sono la categoria del Gossip!\n";
    }
}

class Storia extends Categoria
{
    function getMyCategory()
    {
        echo "Sono la categoria della Storia!\n";
    }
}

$attualita = new Attualita();
$sport = new Sport();
$gossip = new Gossip();
$storia = new Storia();

$attualita->getMyCategory();
$sport->getMyCategory();
$gossip->getMyCategory();
$storia->getMyCategory();
