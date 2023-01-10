<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class estimateProject extends Notification 
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
                    ->subject('New Estimate Request')
                    ->line('Project Details')
                    ->line('Date : ' . $this->info['date'])
                    ->line('Scope : ' . $this->info['scope'])
                    ->line('Type : ' . $this->info['type'])


                    ->line('Name : ' . $this->info['name'])
                    ->line('Email : ' . $this->info['email'])
                    ->line('Phone :' . $this->info['phone'])
                    ->line('Description :' . $this->info['description'])
            
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
