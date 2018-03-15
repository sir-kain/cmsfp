<?php

namespace FP\CMSBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FPCMSBundle extends Bundle
{
    public function getParent()
    {
      return 'FOSUserBundle';
    }
}
