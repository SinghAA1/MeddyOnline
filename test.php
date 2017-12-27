<html>
<head>
    <title>Hangout button demo: Inviting people</title>
    <link rel="canonical" href="http://www.example.com" />
</head>
<body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <g:hangout render="createhangout"
        invites="[{ id : '1234', invite_type : 'PROFILE' },
                  { id : 'foo@example.com', invite_type : 'EMAIL' }]">
    </g:hangout>
</body>
</html>