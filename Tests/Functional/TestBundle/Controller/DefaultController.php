<?php

namespace SC\DatetimepickerBundle\StephaneCollotDatetimepickerBundle\Tests\Functional\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function homepageAction()
    {
        return $this->render('TestBundle:Default:index.html.twig');
    }
}
