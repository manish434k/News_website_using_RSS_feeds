<!DOCTYPE html>
<html lang="en">
<head>
<title>NewsFeedsWeb</title>
<meta charset="utf-8">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
</script>
<![endif]-->

<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="//cdn.chitika.net/getads.js" async></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	
    google.load("feeds", "1");

    function initialize() {
	  var feedUrl="http://www.bollywoodhungama.com/rss/news.xml";
      var feed = new google.feeds.Feed(feedUrl);
	  var rssoutput="";
	  feed.setNumEntries(10);
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed1");
		  rssoutput+="<div class=\"sourceBox\"><div><img class=\"imgAuthorIndex\" src=\"http://www.bollywoodhungama.com/images/logo.png\" alt=\"Times Of India\" align=\"center\"></div>";
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
			rssoutput+="<br><div class=\"newsBoxSummary\"><a class=\"newsTitle\" href=\'" + entry.link + "\'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a></div><br>"
          }
		  rssoutput+="</div><br>"
        }
      });
	  var feedUrl="http://timesofindia.feedsportal.com/c/33039/f/534006/index.rss";
      var feed = new google.feeds.Feed(feedUrl);
	  feed.setNumEntries(10);
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
		  rssoutput+="<div class=\"sourceBox\"><div><img class=\"imgAuthorIndex\" src=\"http://timesofindia.indiatimes.com/photo/507610.cms\" alt=\"The Hindu\" align=\"center\"></div><br><br><br>";
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
			rssoutput+="<br><div class=\"newsBoxSummary\"><a class=\"newsTitle\" href=\'" + entry.link + "\'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a></div><br>"			
          }
		  rssoutput+="</div><br>"
        }
      });
	  
	  var feedUrl="http://feeds.feedburner.com/NDTV-Ent/";
      var feed = new google.feeds.Feed(feedUrl);
	  feed.setNumEntries(10);
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
		  rssoutput+="<div class=\"sourceBox\"><div><img class=\"imgAuthorIndex\" src=\"http://cdn.ndtv.com/static/ndtv_2013/images/ndtv_logo_new.png\" alt=\"ndtv\" align=\"center\"></div><br><br><br>";
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
			rssoutput+="<br><div class=\"newsBoxSummary\"><a class=\"newsTitle\" href=\'" + entry.link + "\'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a></div><br>"			
          }
		  rssoutput+="</div><br>"

        }
      });
	  
	  var feedUrl="http://feeds.hindustantimes.com/HT-Entertainment";
      var feed = new google.feeds.Feed(feedUrl);
	  feed.setNumEntries(10);
      feed.load(function(result) {
        if (!result.error) {
          var container = document.getElementById("feed");
		  rssoutput+="<div class=\"sourceBox\"><div><img class=\"imgAuthorIndex\" src=\"http://www.hindustantimes.com/images/logo.jpg\" alt=\"hindustantimes\" align=\"center\"></div><br><br><br>";
          for (var i = 0; i < result.feed.entries.length; i++) {
            var entry = result.feed.entries[i];
			rssoutput+="<br><div class=\"newsBoxSummary\"><a class=\"newsTitle\" href=\'" + entry.link + "\'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a></div><br>"			
          }
		  rssoutput+="</div><br>"
		  container.innerHTML=rssoutput
        }
      });
    }
    google.setOnLoadCallback(initialize);
	</script>
</head>

<body>

<header>
  <?php include 'header.php';?>
</header>

<nav></nav>

<aside class="sidebar-left">
 <?php include 'sidemenu.php';?>
 </aside>

<aside class="sidebar-right">
<div>
<script type="text/javascript">
  ( function() {
    if (window.CHITIKA === undefined) { window.CHITIKA = { 'units' : [] }; };
    var unit = {"calltype":"async[2]","publisher":"manish434k","width":250,"height":650,"sid":"Chitika Default"};
    var placement_id = window.CHITIKA.units.length;
    window.CHITIKA.units.push(unit);
    document.write('<div id="chitikaAdBlock-' + placement_id + '"></div>');
}());
</script>
</div>
</aside>

<section>
	<article><div id="feed"></div></article>	
</section>

<footer>
 <?php include 'footer.php';?>
</footer>

</body>
</html>
