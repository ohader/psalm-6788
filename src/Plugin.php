<?php

namespace Olly\Psalm6788;

use Psalm\Plugin\FileExtensionsInterface;
use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\PluginFileExtensionsInterface;
use Psalm\Plugin\RegistrationInterface;
use SimpleXMLElement;

class Plugin implements PluginEntryPointInterface, PluginFileExtensionsInterface
{
    public function __invoke(RegistrationInterface $registration, ?SimpleXMLElement $config = null): void
    {
    }

    public function processFileExtensions(FileExtensionsInterface $fileExtensions, ?SimpleXMLElement $config = null): void
    {
        $fileExtensions->addFileTypeScanner('any', AnyScanner::class);
        $fileExtensions->addFileTypeAnalyzer('any', AnyAnalyzer::class);
    }
}
