<?php

namespace KunicMarko\SonataImporterBundle\DTO;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @author Marko Kunic <kunicmarko20@gmail.com>
 */
final class AdminImport
{
    /**
     * @var UploadedFile
     */
    public $file;
}
