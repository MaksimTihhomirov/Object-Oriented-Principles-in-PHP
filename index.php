
<?php

// Inheritance

class Notification
{
    public function __construct(
        public string $message
    ) {}

    public function send(): void
    {
        echo "Show pop up flash message: {$this->message}\n";
    }
}

class EmailNotification extends Notification
{
    public function send(): void
    {
        echo "Fire off an email notification: {$this->message}\n";
    }
}

$notification = new EmailNotification('Here is my notification');
$notification->send();

echo "\n";

// Abstract Classes

class User
{
    public function __construct(
        public int $postsCount = 0
    ) {}
}

abstract class Achievement
{
    public function __construct(
        public string $name,
        public string $description,
        public string $icon
    ) {}

    abstract public function qualifier(User $user): bool;
}

class FirstPostAchievement extends Achievement
{
    public function qualifier(User $user): bool
    {
        return $user->postsCount >= 1;
    }
}

$user = new User(1);

$firstPost = new FirstPostAchievement(
    'First Post',
    'Create your first post',
    'star'
);

echo "Achievement: {$firstPost->name}\n";

echo $firstPost->qualifier($user)
    ? "Achievement unlocked!\n"
    : "Achievement locked!\n";
