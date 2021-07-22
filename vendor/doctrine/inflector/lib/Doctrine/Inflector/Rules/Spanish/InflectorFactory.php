<?php

declare (strict_types=1);
namespace RectorPrefix20210722\Doctrine\Inflector\Rules\Spanish;

use RectorPrefix20210722\Doctrine\Inflector\GenericLanguageInflectorFactory;
use RectorPrefix20210722\Doctrine\Inflector\Rules\Ruleset;
final class InflectorFactory extends \RectorPrefix20210722\Doctrine\Inflector\GenericLanguageInflectorFactory
{
    protected function getSingularRuleset() : \RectorPrefix20210722\Doctrine\Inflector\Rules\Ruleset
    {
        return \RectorPrefix20210722\Doctrine\Inflector\Rules\Spanish\Rules::getSingularRuleset();
    }
    protected function getPluralRuleset() : \RectorPrefix20210722\Doctrine\Inflector\Rules\Ruleset
    {
        return \RectorPrefix20210722\Doctrine\Inflector\Rules\Spanish\Rules::getPluralRuleset();
    }
}
