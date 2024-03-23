<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserPosted extends Notification implements ShouldQueue
{
    use Queueable;

     /**
     * The user who is following.
     *
     * @var \App\Models\User
     */
    protected $following;

    /**
     * The post that was created.
     *
     * @var \App\Models\Post
     */
    protected $post;

    /**
     * Create a new notification instance.
     */
    public function __construct($following, $post)
    {
        $this->following = $following;
        $this->post = $post;
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
            ->line($this->following->first_name . ' made a new post.')
            ->action('View Post', route('profile.show', ['username' => $this->following->username, 'post' => $this->post->id]))
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
            'user_id' => $this->following->id,
            'post_id' => $this->post->id,
            'avatar' => $this->following->avatar,
            'url' => route('profile.show', ['username' => $this->following->username, 'post' => $this->post->id]),
            'name' => $this->following->full_name,
            'message' => 'Made a new post.',
            'action' => 'posted',
        ];
    }
}
