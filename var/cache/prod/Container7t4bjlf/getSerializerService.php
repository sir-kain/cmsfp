<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'serializer' shared service.

return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 1 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer(new \Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array(0 => new \Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}))), NULL), ${($_ = isset($this->services['serializer.mapping.cache.symfony']) ? $this->services['serializer.mapping.cache.symfony'] : $this->load(__DIR__.'/getSerializer_Mapping_Cache_SymfonyService.php')) && false ?: '_'}), NULL, ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->load(__DIR__.'/getPropertyAccessorService.php')) && false ?: '_'}, NULL)), array(0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()));
