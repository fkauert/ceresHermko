<?php

namespace CeresHermko\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresHermkoItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresHermko::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
