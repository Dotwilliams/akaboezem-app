<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MebmerSubscribedNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $subscriptionData;

    /**
     * Create a new notification instance.
     */
    public function __construct($subscriptionData)
    {
        $this->subscriptionData = $subscriptionData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
        //'mail',
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toDatabase(object $notifiable)
    {
        $subscriptionDetails = $this->subscriptionData;

        return [
            'user_id' => $notifiable->id,
            'title' => 'New Subscription',
            'message' => "Thank you for subscribing, your subscription expires on {$subscriptionDetails['exp_date']}!",
        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
