<?php
namespace app\composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Class ModulePlugin
 * @since 1.0
 * @author Dzhamal Tayibov <prohps@gmail.com>
 */
class ComponentPlugin implements PluginInterface
{
    protected $composer;
    protected $io;

    /**
     * {@inheritdoc}
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
        $installer = new ComponentInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
