<?php

namespace CeresHermko\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresHermkoContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresHermko::Stylesheet');
    }
}
