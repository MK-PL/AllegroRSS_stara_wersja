<?php
	include 'simple_html_dom.php';
	include 'Item.php';
	include 'Feed.php';
	include 'RSS2.php';
	
	date_default_timezone_set('UTC');
	use \FeedWriter\RSS2;

	$TestFeed = new RSS2;
	$TestFeed->setTitle($_GET['url']);
	
	$html = file_get_html($_GET['url']);
	$numberOfPages = $html->find('a.last', 0)->plaintext;    
    $j = 0;

    for ($i = 1; $i <= $numberOfPages; $i++) {
      $html = file_get_html($_GET['url'] . '&p=' . $i);  
      
      foreach($html->find('.offer') as $article) {

          $item[$j] = $TestFeed->createNewItem();
          $item[$j]->setTitle($article->find('.offer-title', 0)->plaintext);
          $item[$j]->setLink($article->find('a.offer-title', 0)->href);
          $item[$j]->setDescription ('<img src="'.$article->find('a.inner', 0)->attr['data-src'].'">'.'<p>'.$article->find('.offer-price .statement', 0)->plaintext.' ///'.$article->find('.offer-delivery .statement', 0)->plaintext.'</p><hr>');
          $TestFeed->addItem($item[$j]);
          $j++;
      }
    }

	$TestFeed->printFeed();
?>