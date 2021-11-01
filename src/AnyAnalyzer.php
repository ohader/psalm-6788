<?php
namespace Olly\Psalm6788;

use Psalm\Context;
use Psalm\Internal\Analyzer\FileAnalyzer;

class AnyAnalyzer extends FileAnalyzer
{
    public function analyze(?Context $file_context = null, ?Context $global_context = null): void
    {
        var_dump('Analyzer: ' . $this->file_path);
    }
}
