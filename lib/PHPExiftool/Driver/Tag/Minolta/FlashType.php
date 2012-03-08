<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class FlashType extends \PHPExiftool\Driver\Tag
{

    protected $Id = 89;

    protected $Name = 'FlashType';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Flash Type';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Built-in',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'External',
        ),
    );

}