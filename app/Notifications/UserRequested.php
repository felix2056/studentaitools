<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRequested extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The user who requested to be friends.
     *
     * @var \App\Models\User
     */
    protected $requester;

    /**
     * Create a new notification instance.
     */
    public function __construct($requester)
    {
        $this->requester = $requester;
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
            ->line($this->requester->full_name . ' wants to be friends with you.')
            ->action('View Profile', route('profile.show', ['username' => $this->requester->username]))
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
            'user_id' => $this->requester->id,
            'avatar' => $this->requester->avatar,
            'url' => route('profile.show', ['username' => $this->requester->username]),
            'name' => $this->requester->full_name,
            'message' => 'wants to be friends with you.',
            'action' => 'requested',
        ];
    }
}
