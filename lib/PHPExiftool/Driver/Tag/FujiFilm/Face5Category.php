<?php

namespace PHPExiftool\Driver\Tag\FujiFilm;

class Face5Category extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'Face5Category';

    protected $Name = 'Face5Category';

    protected $FullName = 'FujiFilm::FaceRecInfo';

    protected $GroupName = 'FujiFilm';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'FujiFilm';

    protected $g2 = 'Image';

    protected $Type = 'int8u';

    protected $Writable = false;

    protected $Description = 'Face 5 Category';

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'Partner',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Family',
        ),
        8 => array(
            'Id' => 8,
            'Label' => 'Friend',
        ),
    );

}