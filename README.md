<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Events & Listeners

Easiest way to define is
- Events: Event mean something is happened. For example - A user is recently registered your website. So, you can say that NewUserEvent is occurred.
- Listeners: If an Event is occurred, you want to do something. So, Listener listen if any Event is occurred then do the jobs what you want to do. Example - you want to send notification to admin about newly registered user.


So in this application I want to sent mail notification to admin if a user subscribes our any website event ( example: Newsletter event ).

### Step - 1
- Setup Mailtrap for catch mail. So configure your mailing configuration in .env file.
### Step - 2
- Create a view for Newsletter email subscription form. My case - index.blade.php
- Create a controller for working with Newsletter related things. My case - NewsletterController.php
### Step - 3
- Create a migration for saving user email. My case - subscribers.

Now the main parts begin...

### Step - 4
- Create an event called NewsletterSubscriberEvent
- Create a listener called NewsletterSubscriberListener
### Step - 5
- Create a post route associate with a method for submit form data. My case - route is subscribe, method is store.
- Then in your controller create that method and into the method called your event after validation.
### Step - 6
- Now go to that event and receive that email through constructor.
- Now go to listener which is declared for that event. In that listener you will find a method called handler. Then receive your event through parameter. And insert your data to your database.
- Then send a mail to that mail address using Mail facade.
- Now create a mail class to send a message for email notification. My case NewsletterSubscribeMail.
- In mail class you will find a method called build. Which will return a view. You can customize that view. My case mail.message which has simple h1 tag with a text.
### Last step
- Register your event and listener to EventServiceProvider which is located at app/Providers directory. You will find an array called listen where you have to register your event and listener.
- Boom!!! Everything will work like you desired. :)
