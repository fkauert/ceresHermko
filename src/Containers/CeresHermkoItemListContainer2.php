<?php

namespace CeresHermko\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresHermkoItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Ceres::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
