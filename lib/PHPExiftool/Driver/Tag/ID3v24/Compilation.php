<?php

namespace PHPExiftool\Driver\Tag\ID3v24;

class Compilation extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'TCMP';

    protected $Name = 'Compilation';

    protected $FullName = 'ID3::v2_4';

    protected $GroupName = 'ID3v2_4';

    protected $g0 = 'ID3';

    protected $g1 = 'ID3v2_4';

    protected $g2 = 'Audio';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Compilation';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Yes',
        ),
    );

}