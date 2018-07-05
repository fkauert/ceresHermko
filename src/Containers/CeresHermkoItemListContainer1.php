<?php

namespace CeresHermko\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresHermkoItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('Ceres::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
