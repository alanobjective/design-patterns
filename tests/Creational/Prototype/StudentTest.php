<?php

namespace Test\App\Creational\Prototype;

use App\Creational\Prototype\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    private Student $student;

    /** @before */
    public function start(): void
    {
        $this->student = new Student();
    }

    public function test_CreateHomeWork_ShouldReturnExpectedData(): void
    {
        $expectedTitle = 'Test HomeWork';
        $expectedContent = 'This is the content of HomeWork';
        $expectedAuthors = ['Alan'];

        $homework = $this->student->makeHomework($expectedTitle, $expectedContent, $expectedAuthors[0]);

        $this->assertEquals($homework->getTitle(), $expectedTitle);
        $this->assertEquals($homework->getContent(), $expectedContent);
        $this->assertEquals($homework->getAuthors(), $expectedAuthors);
    }

    public function test_CloneHomeWork_ShouldReturnExpectedData(): void
    {
        $expectedTitle = 'Cloned HomeWork';
        $expectedContent = 'This is the content of cloned HomeWork';
        $expectedAuthors = ['Alan'];

        $homework = $this->student->makeHomework($expectedTitle, $expectedContent, $expectedAuthors[0]);

        $this->assertEquals($homework->getTitle(), $expectedTitle);
        $this->assertEquals($homework->getContent(), $expectedContent);
        $this->assertEquals($homework->getAuthors(), $expectedAuthors);

        $clonedHomework = $this->student->cloneHomework($homework, $expectedClonedAuthor = 'Clone');

        $this->assertEquals($clonedHomework->getTitle(), 'Cópia do trabalho de: '.$expectedTitle);
        $this->assertEquals($clonedHomework->getContent(), $expectedContent);
        $this->assertEquals($clonedHomework->getAuthors(), [$expectedClonedAuthor]);
    }
}
