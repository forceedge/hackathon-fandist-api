<html>
<head>
<script type="text/javascript" src="//d3oz3h4ohtpniw.cloudfront.net/0.28.9/pub/bundles/CoreBundle/plugins/jquery-1.11.0/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function () {
    $('#share').click(function() {
        console.log("share link clicked");
        console.log("attempting to inject");
        $('#scriptHolder').html('<' + 'script type="text/javascript" src="http://cdn.fandi.st/FD-800-01.js">' + '< /script' + '>');
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
<div id="scriptHolder">

</div>
<a id="share" href="">click me to register a share</a>
</body>
</html>
