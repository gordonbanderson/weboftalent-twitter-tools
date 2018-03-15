
<div class="tweet" tweetID="{$TweetID}"></div>

<div class="tweet" tweetID="972332296337420289"></div>

<script sync src="https://platform.twitter.com/widgets.js"></script>

<script>

  window.onload = (function(){
	var tweets = document.getElementsByClassName("tweet");
    var i;
    for (i = 0; i < tweets.length; i++) {
        var tweet = tweets[i];
        var id = tweet.getAttribute("tweetID");

        twttr.widgets.createTweet(
              id, tweet,
              {
                conversation : 'none',    // or all
                cards        : 'visible',  // or visible
                linkColor    : '#cc0000', // default is blue
                theme        : 'light',    // or dark,
                'align'		 : 'center'
              });
    }

  });

</script>
