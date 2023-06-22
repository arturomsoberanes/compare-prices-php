<?php

namespace App\Controllers;

use App\Scrappers\AmazonScrapper;
use App\Scrappers\EbayScrapper;

class SearchController
{
  public function show ()
  {
    $amazon = new AmazonScrapper(input('keywords'));
    $amazon->search();

    $ebay = new EbayScrapper(input('keywords'));
    $ebay->search();

    if (input('sort') == 'asc') {
      $amazon->search()->sortAsc();
      $ebay->search()->sortAsc();
    }

    if (input('sort') == 'desc') {
      $amazon->search()->sortDesc();
      $ebay->search()->sortDesc();
    }

    return view('search', [
      'amazonResults' => $amazon->getResults(),
      'ebayResults' => $ebay->getResults()
    ]);

  }
}