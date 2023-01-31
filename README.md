# Aruba Instant On Captive Portal with SMS and Email Verification

The captive portal web server can be setup using the instructions given [here](https://gist.github.com/nasirhafeez/d47c9d68742227a23f1011455a190490). It uses Twilio Verify for for SMS verification and additionally uses Twilio SendGrid for email verification.

The following actions are required to use the code given in this repo:

Rename the `.env.example` file to `.env` and set the values of the given project-wide environment variables in it.

*Install Composer*

Use [this](https://getcomposer.org/download/) link to install Composer. Then run `php composer.phar install` to install the packages given in `composer.json`.