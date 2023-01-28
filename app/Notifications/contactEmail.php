<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class contactEmail extends Notification
{
    use Queueable;
    private $info;
    

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($info)
    {
        $this->info = $info;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)

        ->subject('New Contact Request')
        ->line('Contact Details')

        ->line('Name : ' . $this->info['name'])
        ->line('Email : ' . $this->info['email'])
        ->line('Phone :' . $this->info['phone'])
        ->line('Subject :' . $this->info['subject'])
        ->line('Website  :' . $this->info['website'])
        ->line('message  :' . $this->info['message'])

        ->line('Only for Admin');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
