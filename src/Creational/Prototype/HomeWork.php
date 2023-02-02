<?php

namespace App\Creational\Prototype;

class HomeWork
{
    private string $title;
    private string $content;
    private array $authors;
    private Homeworks $homeworks;

    public function __construct(string $title, string $content, Homeworks $homework)
    {
        $this->title = $title;
        $this->content = $content;
        $this->authors = [];
        $this->homeworks = $homework;
        $this->homeworks->addHomework($this);
    }

    public function addAuthor(string $name): void
    {
        $this->authors[] = $name;
    }

    public function getAuthors(): array
    {
        return $this->authors;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function __clone()
    {
        $this->title = 'Cópia do trabalho de: '.$this->title;
        $this->homeworks->addHomework($this);
        $this->authors = [];
    }
}
