<?php

declare (strict_types=1);
namespace RectorPrefix20220124\Symplify\EasyTesting\Kernel;

use RectorPrefix20220124\Psr\Container\ContainerInterface;
use RectorPrefix20220124\Symplify\EasyTesting\ValueObject\EasyTestingConfig;
use RectorPrefix20220124\Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel;
final class EasyTestingKernel extends \RectorPrefix20220124\Symplify\SymplifyKernel\HttpKernel\AbstractSymplifyKernel
{
    /**
     * @param string[] $configFiles
     */
    public function createFromConfigs(array $configFiles) : \RectorPrefix20220124\Psr\Container\ContainerInterface
    {
        $configFiles[] = \RectorPrefix20220124\Symplify\EasyTesting\ValueObject\EasyTestingConfig::FILE_PATH;
        return $this->create([], [], $configFiles);
    }
}
