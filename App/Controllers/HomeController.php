<?php
namespace App\Controllers;

use simplehtmldom\HtmlDocument;
use simplehtmldom\HtmlWeb;

class HomeController
{

  public function show()
  {
    $clientWeb = new HtmlWeb;
    $clientHtml = new HtmlDocument();
    $html = $clientWeb->load('https://www.amazon.com/s?k=keyboard');
    $allNodes = $html->find('div[data-component-type=s-search-result]');

    $results = [];
    foreach ($allNodes as $node) {
      $productNode = $clientHtml->load($node->innertext);
      $image = $productNode->find('img', 0);
      $title = $productNode->find('h2', 0);
      $url = $productNode->find('h2 a', 0);
      $price = $productNode->find('.a-offscreen', 0);
      $results[] = [
        'image' => $image->src,
        'title' => $title->plaintext,
        'url' => $url->href,
        'price' => $price ? $price->plaintext : null
      ];
    }
    dd($results);

    return view('index');
  }
}