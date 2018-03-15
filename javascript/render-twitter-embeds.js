twttr.ready(function (twttr) {
    console.log('Twitter ready');

    var tweets = document.getElementsByClassName("tweet");
    var i;
    for (i = 0; i < tweets.length; i++) {
        var tweet = tweets[i];
        var id = tweet.getAttribute("tweetID");
        console.log('Loading ' , id);
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


    twttr.events.bind(
        'loaded',
        function (event) {
            console.log('Loaded');
            event.widgets.forEach(function (widget) {
                console.log("Created widget", widget.id);
            });
        }
    );
});