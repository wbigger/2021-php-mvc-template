<?php

namespace App\Controllers;

use \Core\View;
use \App\Models\Pizza;

// Ho creato questa nuovo controller, funziona
class PoiController extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Poi/index.html');
    }

    public function dataAction()
    {
      echo Pizza::getAll();
    }
}
