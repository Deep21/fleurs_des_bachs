<?php

namespace PayPal\Test\Api;

use PayPal\Api\PaymentCard;

/**
 * Class PaymentCard
 *
 * @package PayPal\Test\Api
 */
class PaymentCardTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Gets Object Instance with Json data filled in
     * @return PaymentCard
     */
    public static function getObject()
    {
        return new PaymentCard(self::getJson());
    }

    /**
     * Gets Json String of Object PaymentCard
     * @return string
     */
    public static function getJson()
    {
        return '{"id":"TestSample","number":"TestSample","type":"TestSample","expire_month":123,"expire_year":123,"start_month":123,"start_year":123,"cvv2":123,"first_name":"TestSample","last_name":"TestSample","billing_address":' . AddressTest::getJson() . ',"external_customer_id":"TestSample","status":"TestSample","valid_until":"TestSample","links":' . LinksTest::getJson() . '}';
    }

    /**
     * Tests for Serialization and Deserialization Issues
     * @return PaymentCard
     */
    public function testSerializationDeserialization()
    {
        $obj = new PaymentCard(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getId());
        $this->assertNotNull($obj->getNumber());
        $this->assertNotNull($obj->getType());
        $this->assertNotNull($obj->getExpireMonth());
        $this->assertNotNull($obj->getExpireYear());
        $this->assertNotNull($obj->getStartMonth());
        $this->assertNotNull($obj->getStartYear());
        $this->assertNotNull($obj->getCvv2());
        $this->assertNotNull($obj->getFirstName());
        $this->assertNotNull($obj->getLastName());
        $this->assertNotNull($obj->getBillingAddress());
        $this->assertNotNull($obj->getExternalCustomerId());
        $this->assertNotNull($obj->getStatus());
        $this->assertNotNull($obj->getValidUntil());
        $this->assertNotNull($obj->getLinks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param PaymentCard $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getId(), "TestSample");
        $this->assertEquals($obj->getNumber(), "TestSample");
        $this->assertEquals($obj->getType(), "TestSample");
        $this->assertEquals($obj->getExpireMonth(), 123);
        $this->assertEquals($obj->getExpireYear(), 123);
        $this->assertEquals($obj->getStartMonth(), 123);
        $this->assertEquals($obj->getStartYear(), 123);
        $this->assertEquals($obj->getCvv2(), 123);
        $this->assertEquals($obj->getFirstName(), "TestSample");
        $this->assertEquals($obj->getLastName(), "TestSample");
        $this->assertEquals($obj->getBillingAddress(), AddressTest::getObject());
        $this->assertEquals($obj->getExternalCustomerId(), "TestSample");
        $this->assertEquals($obj->getStatus(), "TestSample");
        $this->assertEquals($obj->getValidUntil(), "TestSample");
        $this->assertEquals($obj->getLinks(), LinksTest::getObject());
    }

}
