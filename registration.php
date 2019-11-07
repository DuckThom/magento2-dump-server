<?php

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

require_once __DIR__ . '/bootstrap.php';

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Wiringa_DumpServer', __DIR__);
