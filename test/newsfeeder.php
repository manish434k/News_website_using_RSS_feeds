<?php
echo'<script type="text/javascript">

	var feedUrl="http://timesofindia.feedsportal.com/c/33039/f/533965/index.rss";
    google.load("feeds", "1");

    function initialize() {
      var feed = new google.feeds.Feed(feedUrl);
	  var rssoutput="";
	  feed.setNumEntries(10);
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
			rssoutput+="<br><div class=\"newsBox\"><a class=\"newsTitle\" href=\'" + entry.link + "\'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a><br>"
			rssoutput+="<a>"+entry.content+"<a><br></div>"
			container.innerHTML=rssoutput
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);
	</script>';
?>