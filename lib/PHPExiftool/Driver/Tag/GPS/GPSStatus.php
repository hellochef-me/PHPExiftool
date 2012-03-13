<?php

namespace PHPExiftool\Driver\Tag\GPS;

class GPSStatus extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'GPSStatus';

    protected $FullName = 'mixed';

    protected $GroupName = 'GPS';

    protected $g0 = 'mixed';

    protected $g1 = 'mixed';

    protected $g2 = 'mixed';

    protected $Type = 'string';

    protected $Writable = 'mixed';

    protected $Description = 'GPS Status';

    protected $Values = array(
        'A' => array(
            'Id' => 'A',
            'Label' => 'Measurement Active',
        ),
        'V' => array(
            'Id' => 'V',
            'Label' => 'Measurement Void',
        ),
    );

    protected $local_g1 = 'mixed';

    protected $local_g2 = 'mixed';

}
