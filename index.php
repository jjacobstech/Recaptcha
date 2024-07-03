<?php
include_once 'recaptcha.php';
recaptcha();
?>
<html>

<head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <form action="?" method="POST">
        <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY ?>"></div>
        <br />
        <input type="submit" value="Submit">
    </form>
    <!-- <script type="text/javascript">
    var onloadCallback = function() {
        alert("grecaptcha is ready!");
    };
    </script>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script> -->


</body>

</html>