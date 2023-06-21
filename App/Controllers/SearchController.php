<?php

namespace App\Controllers;

use App\Scrappers\AmazonScrapper;
use App\Scrappers\EbayScrapper;

class SearchController
{
  public function show ()
  {
    $amazon = new AmazonScrapper($_GET['keywords']);
    $amazon->search();

    $ebay = new EbayScrapper($_GET['keywords']);
    $ebay->search();

    if ($_GET['sort'] == 'asc') {
      $amazon->search()->sortAsc();
      $ebay->search()->sortAsc();
    }

    if ($_GET['sort'] == 'desc') {
      $amazon->search()->sortDesc();
      $ebay->search()->sortDesc();
    }

    return view('search', [
      'amazonResults' => $amazon->getResults(),
      'ebayResults' => $ebay->getResults()
    ]);

  }
}