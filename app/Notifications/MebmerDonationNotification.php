<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MebmerDonationNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $donationData;

    /**
     * Create a new notification instance.
     */
    public function __construct($donationData)
    {
        $this->donationData = $donationData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
        // mail
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
     * Get the mail representation of the notification toDatabase.
     */
    public function toDatabase(object $notifiable)
    {
        $donationDetails = $this->donationData;

        return [
            'user_id' => $notifiable->id,
            'title' => 'New Donation',
            'message' => "Thank you for Your Donation, We Really Do Appreciate Your Kind Gesture Towards The Development Of AkABOEZEM !",
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
