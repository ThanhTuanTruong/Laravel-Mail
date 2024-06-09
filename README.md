## Laravel 10: Sending Emails with Envelopes

## Setting up a Test Mailbox
There are lots of options out there for testing the sending and receiving of emails. The one I commonly use is Mailtrap.io but there are many other options available. To name a couple you have Amazon SES and Mailgun. As I use mailtrap, I will be using it for the remainder of the guide.

Before we are able to start sending emails, we need to configure our test email environment to work with Laravel. This will be done in our .env file. Thankfully, Mailtrap provides you with all the necessary credentials out of the box. We just need to select “Laravel 9+” from the drop down. Note: To get your unfiltered password you would click on “Show Credentials”

![image](https://github.com/ThanhTuanTruong/Laravel-Mail/assets/30792959/2161f2ed-b1b6-4360-9146-51e55f86d95d)

After we have our credentials, we need to update our .env in our project so we can tell Laravel where to send the emails. This is rather quick as you will mostly need to copy and paste above credentials. Once you have, it should look something like the snippet below, without a masked password.

![image](https://github.com/ThanhTuanTruong/Laravel-Mail/assets/30792959/3242d49b-8650-4dd5-8a67-fbb1a10269e7)

## Sending your first Envelope
With everything setup, you should now be able to complete the form we made at the start of this guide, therefore, lets go to our form and fill it in.

![image](https://github.com/ThanhTuanTruong/Laravel-Mail/assets/30792959/4641c425-d48e-49bf-8aa5-a2158da1a3bd)

Now, all we need to do is click on the ‘Send Message’ button and let all the code we have written do it’s magic. If the email is sent successfully, you should be able to check your mailtrap account and see the email.

![image](https://github.com/ThanhTuanTruong/Laravel-Mail/assets/30792959/e09900b3-e4d6-4c3f-b56f-d8097d81afdf)
