<?php


namespace IncorrectAttribute\TestingNamespace;


use Test\Ecotone\AnnotationFinder\Fixture\Usage\Attribute\Annotation\ApplicationContext;
use Test\Ecotone\AnnotationFinder\Fixture\Usage\Attribute\Annotation\Extension;

#[ApplicationContext]
class CorrectNamespace
{
    #[Extension]
    public function someExtension() : array
    {
        return [];
    }
}