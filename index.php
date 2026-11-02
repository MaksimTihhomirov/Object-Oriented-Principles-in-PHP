
<?php

class User
{
    public string $email = 'test@example.com';
    public bool $subscribed = false;

    public function update(array $attributes): void
    {
        $this->subscribed = $attributes['subscribed'];
    }
}

interface NewsletterProvider
{
    public function addToList(string $list, string $email): void;
}

class CampaignMonitorProvider implements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
        echo "Campaign Monitor: {$email} added to {$list}\n";
    }
}

class PostmarkProvider implements NewsletterProvider
{
    public function addToList(string $list, string $email): void
    {
        echo "Postmark: {$email} added to {$list}\n";
    }
}

class Newsletter
{
    public function subscribe(
        User $user,
        NewsletterProvider $provider
    ): bool {
        $provider->addToList('default', $user->email);

        $user->update(['subscribed' => true]);

        return true;
    }
}

$user = new User();
$newsletter = new Newsletter();

$newsletter->subscribe($user, new PostmarkProvider());

echo "\nSubscribed: " . ($user->subscribed ? 'Yes' : 'No');
