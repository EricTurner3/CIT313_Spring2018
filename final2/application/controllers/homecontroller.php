<?php

class HomeController extends Controller{

	
	public function index(){
	    $rss = new RssDisplay('http://feeds.reuters.com/reuters/technologyNews');

	    $channelinfo = $rss->getChannelInfo();
	    $this->set('channel_title', $channelinfo['title']);
	    $this->set('channel_link', $channelinfo['link']);
        $this->set('channel_desc', $channelinfo['desc']);

        $numofitems = 8;

        $feed_data = $rss->getFeedItems($numofitems);
        $this->set('numItems', $numofitems);
        $this->set('feed_data', $feed_data);



        //Weather sidebar
        $zip = '46239'; //Default Zip Code to Load
        $xml = simplexml_load_file('http://api.openweathermap.org/data/2.5/weather?zip='.$zip.'&appid=94f38a7a1a91948b0e04e86d5d4d2ef3&mode=xml&units=imperial');
        $this->set('current',$xml);
        $this->set('zip',$zip);
	}
	
	
}
