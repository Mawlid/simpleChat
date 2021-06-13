<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Realtime Chat</title>
        <link rel="stylesheet" href="css/chat.css">




    </head>
<body>
    <div class="chat-widget">
        <div class="chat-messages">
        </div>

        <input type="text" class="chat-name">
        <textarea class="chat-entry" placeholder="Type a message  and hit enter"></textarea>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="js/chat.js"></script>

    <script>
        // Enable pusher logging - don't include this in production
        //Pusher.logToConsole = true;

        var pusher = new Pusher('XXXX', {
           cluster: 'eu',
            forceTLS: true
        });
        var channel = new ChatWidget(pusher);

    </script>
</body>
</html>
