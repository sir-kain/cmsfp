<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'upload.annotation_reader' shared service.

return $this->services['upload.annotation_reader'] = new \Upload\UploadBundle\Annotation\UploadAnnotationReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'});