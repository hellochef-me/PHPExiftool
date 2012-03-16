<?php

namespace PHPExiftool;

require_once dirname(__FILE__) . '/../../../lib/PHPExiftool/RDFParser.php';

/**
 * Test class for RDFParser.
 * Generated by PHPUnit on 2012-03-16 at 18:48:53.
 */
class RDFParserTest extends \PHPUnit_Framework_TestCase
{

  /**
   * @covers {className}::{origMethodName}
   * @todo Implement testParse().
   */
  public function testParse()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }

  /**
   * @covers {className}::{origMethodName}
   * @todo Implement testParseEntity().
   */
  public function testParseEntity()
  {
    // Remove the following lines when you implement this test.
    $this->markTestIncomplete(
      'This test has not been implemented yet.'
    );
  }

  /**
   * @covers \PHPExiftool\RDFParser::QueryEntity
   */
  public function testQueryEntity()
  {
    $xml = "<?xml version='1.0' encoding='UTF-8'?>
      <rdf:RDF xmlns:rdf='http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
      <rdf:Description xmlns:NeutronSpace='http://ns.exiftool.ca/NeutronSpace/1.0/'>
        <NeutronSpace:SpecialRomain>Hello World !</NeutronSpace:SpecialRomain>
      </rdf:Description>
      </rdf:RDF>";

    $dom = new \DOMDocument();
    $dom->loadXML($xml);

    $entity = new FileEntity(new \SplFileInfo('nothing'), $dom);
    $query = 'NeutronSpace:SpecialRomain';

    $this->assertEquals('Hello World !', RDFParser::QueryEntity($entity, $query));
  }

}
