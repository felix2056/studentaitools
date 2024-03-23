<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserAccepted extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The user who accepted to be friends.
     *
     * @var \App\Models\User
     */
    protected $accepter;

    /**
     * Create a new notification instance.
     */
    public function __construct($accepter)
    {
        $this->accepter = $accepter;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->greeting('Hey, ' . $notifiable->first_name . '!')
            ->line($this->accepter->full_name . ' accepted your friend request.')
            ->action('View Profile', route('profile.show', ['username' => $this->accepter->username]))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'user_id' => $this->accepter->id,
            'avatar' => $this->accepter->avatar,
            'url' => route('profile.show', ['username' => $this->accepter->username, 'tab' => 'friends']),
            'name' => $this->accepter->full_name,
            'message' => 'accepted your friend request.',
            'action' => 'accepted',
        ];
    }
}
