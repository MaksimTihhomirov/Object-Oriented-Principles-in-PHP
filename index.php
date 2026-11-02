
<?php

// Encapsulation: Restriction of access to an object's internals.

class Person
{
    public function __construct(
        public string $name,
        private string $email
    ) {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function job(): string
    {
        return 'Software Developer';
    }

    public function favoriteTeam(): string
    {
        return 'Real Madrid';
    }

    protected function thingsThatKeepUpAtNight(): string
    {
        return 'Bob is afraid of dying';
    }
}

$bob = new Person('Bob', 'bob@example.com');

echo "Name: " . $bob->name . PHP_EOL;
echo "Email: " . $bob->getEmail() . PHP_EOL;
echo "Job: " . $bob->job() . PHP_EOL;
echo "Favorite team: " . $bob->favoriteTeam() . PHP_EOL;
