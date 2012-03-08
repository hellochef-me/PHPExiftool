<?php

namespace PHPExiftool\Driver\Tag\PNG;

class Filter extends \PHPExiftool\Driver\Tag
{

    protected $Id = 11;

    protected $Name = 'Filter';

    protected $FullName = 'PNG::ImageHeader';

    protected $GroupName = 'PNG';

    protected $g0 = 'PNG';

    protected $g1 = 'PNG';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Filter';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Adaptive',
        ),
    );

}