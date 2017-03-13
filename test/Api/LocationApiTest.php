<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

namespace SquareConnect\Api;

use \SquareConnect\Configuration;
use \SquareConnect\ApiClient;
use \SquareConnect\ApiException;
use \SquareConnect\ObjectSerializer;

/**
 * LocationApiTest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://squareup.com/developers
 */
class LocationApiTest extends \PHPUnit_Framework_TestCase
{
    private static $api_instance;
    private static $test_accounts;

    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass() {
        self::$api_instance = new \SquareConnect\Api\LocationApi();
        self::$test_accounts = new \SquareConnect\TestAccounts();
    }

    /**
     * Clean up after running each test case
     */
    public static function tearDownAfterClass() {

    }

    /**
     * Test case for listLocations
     *
     * ListLocations
     *
     */
    public function test_listLocations() {
        $sandbox_account = self::$test_accounts->{'US-Prod-Sandbox'};
        $authorization = $sandbox_account->{'access_token'};
        $result = self::$api_instance->listLocations($authorization);
        
        $this->assertInstanceOf(
            '\SquareConnect\Model\ListLocationsResponse',
            $result
        );
        $first_location = $result->getLocations()[0];
        $this->assertInstanceOf(
            '\SquareConnect\Model\Location',
            $first_location
        );
        $this->assertEquals(
            'CBASEEffqN8pnVNXwoCL0dSGMVAgAQ',
            $first_location->getId()
        );
    }
}
