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

	var feedUrl=document.getElementById("textbox1").value;
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
			rssoutput+="<br><div class=\"newsBox\"><a class=\"newsTitle\" href='" + entry.link + "'>" + entry.title + "</a><br>"
			rssoutput+="<a class=\"newsDate\">"+ new Date(entry.publishedDate) +"<a><br>"
			rssoutput+="<a class=\"newsSnippet\">"+ entry.contentSnippet +"<a><br>"
			rssoutput+="<a>"+entry.content+"<a><br></div>"
			container.innerHTML=rssoutput
          }
        }
      });
    }
    google.setOnLoadCallback(initialize);
	</script>

</head>

<body>

<header>
<div>Feed URL<input type="text" name="textbox1" id="textbox1" />
<input type="submit" name="button" id="button1" onclick="feedreader.php" value="Submit" /></div>

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

<article>
<div>
	<img class="imgNewsAuthor" src="http://www.thehindu.com/template/1-0-1/gfx/logo.jpg" alt="Times Of India" align="center"> 

</div>
<div id="feed"></div>
</article>

</section>

<footer>
 <?php include 'footer.php';?>
</footer>

</body>
</html>
