<?php
namespace PayPal\Test\Api;

use PayPal\Api\RelatedResources;

class RelatedResourcesTest extends \PHPUnit_Framework_TestCase
{

    private $RelatedResources;

    public function setup()
    {
        $this->relatedResources = self::createRelatedResources();
    }

    public static function createRelatedResources()
    {
        $relatedResources = new RelatedResources();
        $relatedResources->setAuthorization(AuthorizationTest::createAuthorization());
        $relatedResources->setCapture(CaptureTest::createCapture());
        $relatedResources->setOrder(OrderTest::createOrder());
        return $relatedResources;
    }

    public function testGetterSetter()
    {
        $this->assertEquals(AuthorizationTest::$create_time, $this->relatedResources->getAuthorization()->getCreateTime());
        $this->assertEquals(CaptureTest::$create_time, $this->relatedResources->getCapture()->getCreateTime());
        $this->assertEquals(OrderTest::$id, $this->relatedResources->getOrder()->getId());
    }

    public function testSerializeDeserialize()
    {
        $s1 = $this->relatedResources;

        $s2 = new RelatedResources();
        $s2->fromJson($s1->toJson());

        $this->assertEquals($s1, $s2);
    }
}
