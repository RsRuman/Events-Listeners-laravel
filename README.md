<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Events & Listeners

Easiest way to define is
- Events: Event mean something is happened. For example - A user is recently registered your website. So, you can say that NewUserEvent is occurred.
- Listeners: If an Event is occurred, you want to do something. So, Listener listen if any Event is occurred then do the jobs what you want to do. Example - you want to send notification to admin about newly registered user.


So in this application I want to sent mail notification to admin if a user subscribes our any website event ( example: Newsletter event ).

### Step - 1
- Setup Mailtrap for catch mail. So configure your mailing configuration in .env file.

