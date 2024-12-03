@component('mail::message')
# Welcome to Our Application!

Hi {{ $user->first_name }} {{ $user->last_name }},

Your account has been created.

**Your Credentials:**
* **Email:** {{ $user->email }}
* **Password:** {{ $password }}

**Please click the link below to set a new password:**
{{ url('password/reset') }}?token={{ $token }}

Best regards,
The Team
@endcomponent