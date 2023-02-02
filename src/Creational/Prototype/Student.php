<?php

namespace App\Creational\Prototype;

class Student
{
    private Homeworks $homeworks;

    public function __construct()
    {
        $this->homeworks = new Homeworks();
    }

    public function makeHomework(string $title, string $content, string $author): HomeWork
    {
        $homeWork = new HomeWork($title, $content, $this->homeworks);
        $homeWork->addAuthor($author);
        return $homeWork;
    }

    public function cloneHomework(HomeWork $homeWork, string $author): HomeWork
    {
        $clonedHomework = clone $homeWork;
        $clonedHomework->addAuthor($author);
        return $clonedHomework;
    }
}
