<?php
/**
 * StatsApi
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\StackAdapt
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * StackAdapt API
 *
 * Use this API to create Native Ads and Campaigns on the StackAdapt Platform Use this API to create Native Ads and Campaigns on the StackAdapt Platform
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\StackAdapt\Api;

use \CollingMedia\StackAdapt\Configuration;
use \CollingMedia\StackAdapt\ApiClient;
use \CollingMedia\StackAdapt\ApiException;
use \CollingMedia\StackAdapt\ObjectSerializer;

/**
 * StatsApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\StackAdapt
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StatsApi
{

    /**
     * API Client
     *
     * @var \CollingMedia\StackAdapt\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CollingMedia\StackAdapt\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CollingMedia\StackAdapt\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('http://api.stackadapt.com/service/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CollingMedia\StackAdapt\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CollingMedia\StackAdapt\ApiClient $apiClient set the API client
     *
     * @return StatsApi
     */
    public function setApiClient(\CollingMedia\StackAdapt\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getStats
     *
     * Get stats
     *
     * @param string $resource The resource type to retrieve. Valid resources are: \&quot;campaign\&quot;, \&quot;conversion_tracker\&quot; \&quot;line_item\&quot;, \&quot;native_ad\&quot;, \&quot;advertiser\&quot;, or \&quot;buyer_account\&quot; (total account stats) (required)
     * @param string $type The type of stats to retrieve. Valid types are: \&quot;domain\&quot;, \&quot;total\&quot;, \&quot;daily\&quot;, and \&quot;hourly\&quot;. \&quot;domain\&quot; type is only supported if resource is \&quot;campaign\&quot; (required)
     * @param int $id Id of resource (optional)
     * @param \DateTime $start_date The start date in the format of \&quot;yyyy-mm-dd\&quot; (optional)
     * @param \DateTime $end_date The end date in the format of \&quot;yyyy-mm-dd\&quot; (optional)
     * @param string $timezone The timezone of the start and end date, if applicable. (optional)
     * @param string $group_by_resource The resource type to group by when retrieve stats. Valid group_by_resources are: \&quot;advertiser\&quot;, \&quot;line_item\&quot;, \&quot;campaign\&quot;, \&quot;native_ad\&quot;. The group_by_resource should be subordinated to resource for group by action. (optional)
     * @return void
     * @throws \CollingMedia\StackAdapt\ApiException on non-2xx response
     */
    public function getStats($resource, $type, $id = null, $start_date = null, $end_date = null, $timezone = null, $group_by_resource = null)
    {
        list($response) = $this->getStatsWithHttpInfo($resource, $type, $id, $start_date, $end_date, $timezone, $group_by_resource);
        return $response;
    }

    /**
     * Operation getStatsWithHttpInfo
     *
     * Get stats
     *
     * @param string $resource The resource type to retrieve. Valid resources are: \&quot;campaign\&quot;, \&quot;conversion_tracker\&quot; \&quot;line_item\&quot;, \&quot;native_ad\&quot;, \&quot;advertiser\&quot;, or \&quot;buyer_account\&quot; (total account stats) (required)
     * @param string $type The type of stats to retrieve. Valid types are: \&quot;domain\&quot;, \&quot;total\&quot;, \&quot;daily\&quot;, and \&quot;hourly\&quot;. \&quot;domain\&quot; type is only supported if resource is \&quot;campaign\&quot; (required)
     * @param int $id Id of resource (optional)
     * @param \DateTime $start_date The start date in the format of \&quot;yyyy-mm-dd\&quot; (optional)
     * @param \DateTime $end_date The end date in the format of \&quot;yyyy-mm-dd\&quot; (optional)
     * @param string $timezone The timezone of the start and end date, if applicable. (optional)
     * @param string $group_by_resource The resource type to group by when retrieve stats. Valid group_by_resources are: \&quot;advertiser\&quot;, \&quot;line_item\&quot;, \&quot;campaign\&quot;, \&quot;native_ad\&quot;. The group_by_resource should be subordinated to resource for group by action. (optional)
     * @return Array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \CollingMedia\StackAdapt\ApiException on non-2xx response
     */
    public function getStatsWithHttpInfo($resource, $type, $id = null, $start_date = null, $end_date = null, $timezone = null, $group_by_resource = null)
    {
        // verify the required parameter 'resource' is set
        if ($resource === null) {
            throw new \InvalidArgumentException('Missing the required parameter $resource when calling getStats');
        }
        // verify the required parameter 'type' is set
        if ($type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $type when calling getStats');
        }
        // parse inputs
        $resourcePath = "/stats";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($resource !== null) {
            $queryParams['resource'] = $this->apiClient->getSerializer()->toQueryValue($resource);
        }
        // query params
        if ($type !== null) {
            $queryParams['type'] = $this->apiClient->getSerializer()->toQueryValue($type);
        }
        // query params
        if ($id !== null) {
            $queryParams['id'] = $this->apiClient->getSerializer()->toQueryValue($id);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = $this->apiClient->getSerializer()->toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = $this->apiClient->getSerializer()->toQueryValue($end_date);
        }
        // query params
        if ($timezone !== null) {
            $queryParams['timezone'] = $this->apiClient->getSerializer()->toQueryValue($timezone);
        }
        // query params
        if ($group_by_resource !== null) {
            $queryParams['group_by_resource'] = $this->apiClient->getSerializer()->toQueryValue($group_by_resource);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/stats'
            );

            return array(null, $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

}
