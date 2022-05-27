@component('mail::message')
# You received a message on your Portfolio
Subject: {{ $data['subject'] }}
<br>
From: {{ $data['fullname'] }}
@endcomponent
