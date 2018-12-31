<?php
namespace app\composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class ModuleInstaller
 * @since 1.0
 * @author Dzhamal Tayibov <prohps@gmail.com>
 */
class ComponentInstaller extends LibraryInstaller
{
    /**
     * {@inheritdoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        $vendorPath = $this->composer->getConfig()->get('vendor-dir');
        $pName = basename($package->getName());
        if ($package->getType() === 'module-type' || $package->getType() === 'medkey-module') {
            return dirname($vendorPath) . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $pName;
        } elseif ($package->getType() === 'medkey-plugin') {
            return dirname($vendorPath) . DIRECTORY_SEPARATOR . 'plugins' . DIRECTORY_SEPARATOR . $pName;
        }
    }
    
    /**
     * {@inheritdoc}
     */
    public function supports($packageType)
    {
        return
            'module-type' === $packageType ||
            'medkey-module' === $packageType ||
            'medkey-plugin' === $packageType;
    }
}
