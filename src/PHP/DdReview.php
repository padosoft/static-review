<?php

namespace Padosoft\StaticReview\PHP;

use StaticReview\File\FileInterface;
use StaticReview\Reporter\ReporterInterface;
use StaticReview\Review\AbstractReview;

class DdReview extends AbstractReview
{
    public function canReview(FileInterface $file)
    {
        $extension = $file->getExtension();
        return ($extension === 'php' || $extension === 'phtml');
    }

    public function review(ReporterInterface $reporter, FileInterface $file)
    {
        $cmd = sprintf('grep --fixed-strings --ignore-case --quiet "dd" %s', $file->getFullPath());
        $process = $this->getProcess($cmd);
        $process->run();

        if ($process->isSuccessful()) {
            $message = 'A call to `dd()` was found';
            $reporter->error($message, $this, $file);
        }
    }
}
