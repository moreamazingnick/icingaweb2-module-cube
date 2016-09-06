<?php

namespace Icinga\Module\Cube;

interface Dimension
{
    public function getName();

    public function getColumnExpression();

    public function addToCube(Cube $cube);
}
