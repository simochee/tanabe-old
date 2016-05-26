<?php
$rss_url = 'http://feed.rssad.jp/rss/gigazine/rss_2.0';
$rss = simplexml_load_file($rss_url);

// var_dump($rss);
// var_dump(get_class_methods($rss));

foreach($rss->channel->item as $item) {
  $rss_title = htmlspecialchars($item->title, ENT_QUOTES, 'UTF-8');
  echo "$rss_title<br>\n";
}