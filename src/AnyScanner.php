<?php
namespace Olly\Psalm6788;

use Psalm\Codebase;
use Psalm\Internal\Scanner\FileScanner;
use Psalm\Progress\Progress;
use Psalm\Storage\FileStorage;

class AnyScanner extends FileScanner
{
    public function scan(Codebase $codebase, FileStorage $file_storage, bool $storage_from_cache = false, ?Progress $progress = null): void
    {
        var_dump('Scanner: ' . $file_storage->file_path);
    }
}
