<html>
<head>
<script type="text/javascript" src="//d3oz3h4ohtpniw.cloudfront.net/0.28.9/pub/bundles/CoreBundle/plugins/jquery-1.11.0/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function () {
    $('.share').click(function() {
        var shareType = $(this).attr('linkType');
        console.log('you have shared using ' + shareType);
        console.log("share link clicked");
        window.universal_variable.events[0].type = shareType;
        console.log("attempting to inject");
        $('#scriptHolder').append('<' + 'script type="text/javascript" src="http://cdn.fandi.st/FD-800-01.js">' + '< /script' + '>');
        console.log("injected");
        return false
    });
});
</script>
</head>
<body>
<div id="scriptHolder">
<script>
    window.universal_variable = {
          "user": {
              "user_id": "405"
          },
          "events": [
              { "type": "shares", "cause": "twitter", "effect": "1270-2cLuJilST" }
          ],
          "page": {
              "category": "home"
          },
          debug:true
    };
</script>
</div>
<a class="share" linkType="twitter" href="#">click me to register a share to twitter</a>
<a class="share" linkType="facebook" href="#">click me to register a share to facebook</a>
<a class="share" linkType="gplus" href="#">click me to register a share to gplus</a>
</body>
</html>
