<?php

namespace Olly\Psalm6788;

use Psalm\Plugin\PluginEntryPointInterface;
use Psalm\Plugin\RegistrationInterface;
use SimpleXMLElement;

class Plugin implements PluginEntryPointInterface
{
    public function __invoke(RegistrationInterface $registration, ?SimpleXMLElement $config = null): void
    {
        $registration->addFileTypeScanner('any', AnyScanner::class);
        $registration->addFileTypeAnalyzer('any', AnyAnalyzer::class);
        var_dump('registered');
    }
}
