<?php

namespace PayPal\Test\Api;

use PayPal\Api\WebhookList;

/**
 * Class WebhookList
 *
 * @package PayPal\Test\Api
 */
class WebhookListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Gets Object Instance with Json data filled in
     * @return WebhookList
     */
    public static function getObject()
    {
        return new WebhookList(self::getJson());
    }

    /**
     * Gets Json String of Object WebhookList
     * @return string
     */
    public static function getJson()
    {
        return '{"webhooks":' . WebhookTest::getJson() . '}';
    }

    /**
     * Tests for Serialization and Deserialization Issues
     * @return WebhookList
     */
    public function testSerializationDeserialization()
    {
        $obj = new WebhookList(self::getJson());
        $this->assertNotNull($obj);
        $this->assertNotNull($obj->getWebhooks());
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }

    /**
     * @depends testSerializationDeserialization
     * @param WebhookList $obj
     */
    public function testGetters($obj)
    {
        $this->assertEquals($obj->getWebhooks(), WebhookTest::getObject());
    }

}
