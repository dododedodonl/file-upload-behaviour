<?php

namespace App\Filament\Forms\Components;

use Filament\Forms\Components\FileUpload;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class CustomFileUpload extends FileUpload
{
    public function removeUploadedFile(string $fileKey): string | TemporaryUploadedFile | null
    {
        // Triggered in all cases
        dump('triggered removeUploadedFile()');

        return parent::removeUploadedFile($fileKey);
    }
}
