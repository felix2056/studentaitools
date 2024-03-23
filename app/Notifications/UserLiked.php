<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserLiked extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The user who liked the post.
     *
     * @var \App\Models\User
     */
    protected $liker;

    /**
     * The post that was liked.
     *
     * @var \App\Models\Post
     */
    protected $post;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\User  $liker
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function __construct($liker, $post)
    {
        $this->liker = $liker;
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
            ->line($this->liker->first_name . ' liked your post.')
            ->action('View Post', route('profile.show', ['username' => $notifiable->username, 'post' => $this->post->id]))
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
            'user_id' => $this->liker->id,
            'post_id' => $this->post->id,
            'avatar' => $this->liker->avatar,
            'url' => route('profile.show', ['username' => $notifiable->username, 'post' => $this->post->id]),
            'name' => $this->liker->full_name,
            'message' => 'Liked your post.',
            'action' => 'liked',
        ];
    }
}
