<?php
/**
 * AccountResponseTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Karix;

/**
 * AccountResponseTest Class Doc Comment
 *
 * @category    Class
 * @description AccountResponse
 * @package     Karix
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountResponseTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "AccountResponse"
     */
    public function testAccountResponse()
    {
    }

    /**
     * Test attribute "meta"
     */
    public function testPropertyMeta()
    {
        $account_response = new \Karix\Model\AccountResponse();
        
        
        $subobj = new \Karix\Model\ObjectMetaResponse();
        

        $meta = $subobj;
        
        $account_response->setMeta($meta);
        $this->assertEquals($meta, $account_response->getMeta());

    }

    /**
     * Test attribute "data"
     */
    public function testPropertyData()
    {
        $account_response = new \Karix\Model\AccountResponse();
        
        
        $subobj = new \Karix\Model\Account();
        

        $data = $subobj;
        
        $account_response->setData($data);
        $this->assertEquals($data, $account_response->getData());

    }

    /**
    * Helper to create a good example of model
    */
    public function getGoodExample()
    {
        
        
        $subobj = new \Karix\Model\ObjectMetaResponse();
        

        $meta = $subobj;
        
        
        
        $subobj = new \Karix\Model\Account();
        

        $data = $subobj;
        
        return array(
            "meta" => $meta,
            "data" => $data,
        );
    }

    /**
    * Test AccountResponse validation
    */
    public function testValidation()
    {
        $example = $this->getGoodExample();
        $account_response = new \Karix\Model\AccountResponse($example);
        $this->assertTrue($account_response->valid());
    }

}
