<?php

namespace Padosoft\StaticReview\PHP;

use StaticReview\File\FileInterface;
use StaticReview\Reporter\ReporterInterface;
use StaticReview\Review\AbstractFileReview;
use StaticReview\Review\ReviewableInterface;

class VarDumpReview extends AbstractFileReview
{
    public function canReviewFile(FileInterface $file)
    {
        $extension = $file->getExtension();
        return ($extension === 'php' || $extension === 'phtml');
    }

    public function review(ReporterInterface $reporter, ReviewableInterface $file)
    {
        $cmd = sprintf('grep --fixed-strings --ignore-case --quiet "var_dump" %s', $file->getFullPath());
        $process = $this->getProcess($cmd);
        $process->run();

        if ($process->isSuccessful()) {
            $message = 'A call to `var_dump()` was found';
            $reporter->error($message, $this, $file);
        }
    }
}
