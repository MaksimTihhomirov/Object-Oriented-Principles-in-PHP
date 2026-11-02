
<?php

interface CanBeLiked
{
    public function like(): void;

    public function isLiked(): bool;
}

class Comment implements CanBeLiked
{
    private bool $liked = false;

    public function like(): void
    {
        $this->liked = true;

        echo "Like the comment\n";
    }

    public function isLiked(): bool
    {
        return $this->liked;
    }
}

class Thread implements CanBeLiked
{
    private bool $liked = false;

    public function like(): void
    {
        $this->liked = true;

        echo "Like the thread\n";
    }

    public function isLiked(): bool
    {
        return $this->liked;
    }
}

class PerformLike
{
    public function handle(CanBeLiked $model): void
    {
        if ($model->isLiked()) {
            return;
        }

        $model->like();
    }
}

$performLike = new PerformLike();

$performLike->handle(new Comment());
$performLike->handle(new Thread());
