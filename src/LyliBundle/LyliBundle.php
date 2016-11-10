<?php

namespace LyliBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LyliBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
