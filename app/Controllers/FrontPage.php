<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
  public function intro()
  {
      $intro = get_field('intro');
      return $intro;
  }
  public function events()
  {
    $events = get_field('events');
    return $events;
  }
  public function artist()
  {
    $artist = get_field('artist');
    return $artist;
  }
}
