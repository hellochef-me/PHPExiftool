<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class WhiteBalance extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'WhiteBalance';

    protected $FullName = 'mixed';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = 'mixed';

    protected $Writable = 'mixed';

    protected $Description = 'White Balance';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Daylight',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Shade',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Fluorescent',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Tungsten',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Manual',
        ),
    );

}
