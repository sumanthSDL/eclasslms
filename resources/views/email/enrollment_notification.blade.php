@component('mail::message')
    # New Enrollment

    A new user has enrolled in a course. Here are the details:

    Course: {{ $courseName }}
    Name: {{ $userName }}

    Thank you,
    Admin Team
@endcomponent
