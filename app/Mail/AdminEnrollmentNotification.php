<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminEnrollmentNotification extends Mailable
{
    use Queueable, SerializesModels;
     
    protected $course;
    protected $user;


    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($course, $user)
    {
        $this->course = $course;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
public function build()
{
    return $this->from('noreply@example.com')
                ->subject('New Enrollment')
                ->markdown('email.enrollment_notification')
                ->with([
                    'courseName' => $this->course->title, // Replace with your actual course name variable
                    'userName' => $this->user->fname, // Replace with your actual course price variable
                ]);
}
}