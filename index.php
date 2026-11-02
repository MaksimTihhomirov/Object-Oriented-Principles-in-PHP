
<?php

class User
{
    public string $email {
        get => str_replace('@', '(at)', $this->email);

        set {
            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                throw new InvalidArgumentException('Email must be valid.');
            }

            $this->email = $value;
        }
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function updateEmail(string $email): void
    {
        $this->email = $email;
    }
}

$user = new User('jeffrey@laracasts.com');

$user->updateEmail('max@example.com');

echo $user->email;
