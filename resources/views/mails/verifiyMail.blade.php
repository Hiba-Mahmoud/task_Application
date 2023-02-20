@component('mail::message')
# Introduction

<p>your reset code is : {{$otp}}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
