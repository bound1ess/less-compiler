<?php namespace LessCompiler\Css\Selectors;

/**
 * This selector selects ALL elements on a page.
 */
class UniversalSelector extends Selector {

    /**
     * {@inheritdoc}
     */
    public function represent()
    {
        return "*";
    }

}
