<?php

namespace App\Controllers;

use \Core\View;

// Ho creato questa nuovo controller, funziona
class School extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('School/index.html');
    }
}
