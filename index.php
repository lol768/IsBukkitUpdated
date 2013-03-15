<?php
$baseUrl = "http://dl.bukkit.org/api/1.0/";
$checkLatest = "downloads/projects/craftbukkit/view/latest/?_accept=application%2Fjson";
$result = json_decode(file_get_contents($baseUrl . $checkLatest));
$updated = false; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Is Bukkit updated yet?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 50px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
 
  <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">CraftBukkit Update Status</h3>
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="https://github.com/Bukkit/CraftBukkit">GitHub</a></li>
                <li><a href="http://dl.bukkit.org/downloads/" title = "Development builds are available by clicking Alternate Versions">Latest builds</a></li>
                <li><a href="http://forums.bukkit.org/">Forums</a></li>
                
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><?php if ($updated) { ?>Yep! A build for 1.5 has been released.<?php } else { ?>Nope, CraftBukkit is not yet updated for Minecraft 1.5.<?php } ?></h1>
        <p class="lead"><?php if ($updated) { ?>You should be aware that this build may contain bugs, incomplete features and may not be stable. Use it at your own risk!<?php } else { ?>Don't despair! The Bukkit team are working hard to ensure the update process will be as smooth as possible without bugs. This means a better quality end-product that's not rushed.<?php } ?></p>
      </div>

      <hr>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <div class="span4">
          <h2><?php if ($updated) { ?>What happened<?php } else { ?>Events so far<?php } ?></h2>
          <p>Minecraft 1.5 was tested in a number of snapshots, and published to the launcher on the <strong>13th of March</strong>. Since then, the Bukkit team have been working to update the CraftBukkit server software to support all of the new features in 1.5. <?php if ($updated) { ?>The update process has now progressed to a point where a build can be released.<?php } else { ?>This process has not yet finished.<?php } ?></p>
        </div>
        <div class="span4">
          <h2>Is there an ETA?</h2>
          <p>No. ETAs are usually not given -  CraftBukkit will be ready when it is ready, not before. Be patient - all of the developers are volunteers, doing their best to ensure that server admins are able to experience the latest features without issues.</p>
       </div>
        <div class="span4">
          <h2>Unofficial builds</h2>
          <p>Be wary of unofficial builds that claim to support 1.5 clients and implement the Bukkit API. You will receive no support if you use these, and in some cases they may cause crashes or not support the new features properly. For the best experience, wait until an official build of Craftbukkit is released for 1.5.</p>
        </div>
      </div>
 <div class="row-fluid">
        <div class="span4">
        <h2>Twitter feed</h2>
<a class="twitter-timeline"  href="https://twitter.com/CraftBukkit"  data-widget-id="311927542909108224">Tweets by @CraftBukkit</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


</div>
        <div class="span4"><h2>Page changelog</h2><p><ul><?php if ($updated) { ?><li>Changed page to reflect release of new build<?php } ?><li>Created page for the Minecraft 1.5 "Redstone Update".</li></ul></p><p><em>This page will be updated as builds are released and Minecraft is updated</em></p></div>
<div class="span4">
        <h2>Sending PMs</h2>
        <p>Please don't message staff or other users with unsolicited questions about CraftBukkit for 1.5 via IRC, the forums or BukkitDev. This only means a large number of messages to reply to, and could be perceived as spam. Thanks for your understanding.</p>
        </div>
  
</div>
      <hr>

      <div class="footer">
        <p>This site is not affiliated with Mojang or Bukkit in any way.</p>
      </div>

    </div> <!-- /container -->


  </body>
</html>

