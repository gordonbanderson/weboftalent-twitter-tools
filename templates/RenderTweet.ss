
<div id="tweet" tweetID="{$TweetID}"></div>

<script sync src="https://platform.twitter.com/widgets.js"></script>

<script>

  window.onload = (function(){

    var tweet = document.getElementById("tweet");
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

  });

</script>
