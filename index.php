<html>
<head>
<script type="text/javascript" src="//d3oz3h4ohtpniw.cloudfront.net/0.28.9/pub/bundles/CoreBundle/plugins/jquery-1.11.0/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#share').click(function() {
        console.log("share link clicked");
        var script="The script has been injected \<script type='text/javascript'>
(function() {
var fd = document.createElement('script'); fd.type = 'text/javascript'; fd.async = true;
fd.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.fandi.st/FD-800-01.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fd, s);
})();
\</script>";
        console.log("attempting to inject");
        $('body').append(script);
        console.log("injected");
        return false
    });
});
</script>
</head>
<body>
<script>
window.universal_variable = {
      "user": {
           "user_id": "1000001"
      },
      "events": [
           { "type": "shares", "cause": "twitter", "effect": "1270-LnWJxpyH0" }
      ],
      "page": {
           "category": "home"
      }
};
</script>
<a id="share" href="">click me to register a share</a>
</body>
</html>
