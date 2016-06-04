<?php

$header = <<<EOF
AdvancedHosters asset files: images, configs and more

@link      https://github.com/advancedhosters/yii2-asset-advancedhosters
@package   yii2-asset-advancedhosters
@license   proprietary
@copyright Copyright (c) 2015-2016, AdvancedHosters (https://advancedhosters.com/)
EOF;

Symfony\CS\Fixer\Contrib\HeaderCommentFixer::setHeader($header);

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers([
        'header_comment',                        /// Add, replace or remove header comment
    ])
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
    )
;
