<?php
/**
 * NativeAd
 *
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

namespace CollingMedia\StackAdapt\Model;

use \ArrayAccess;

/**
 * NativeAd Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     CollingMedia\StackAdapt
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NativeAd implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NativeAd';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'click_url' => 'string',
        'input_data' => '\CollingMedia\StackAdapt\Model\InputData',
        'audit_status' => 'string',
        'name' => 'string',
        'state' => 'string',
        'imp_tracker_urls' => 'string[]',
        'brandname' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'click_url' => 'click_url',
        'input_data' => 'input_data',
        'audit_status' => 'audit_status',
        'name' => 'name',
        'state' => 'state',
        'imp_tracker_urls' => 'imp_tracker_urls',
        'brandname' => 'brandname'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'click_url' => 'setClickUrl',
        'input_data' => 'setInputData',
        'audit_status' => 'setAuditStatus',
        'name' => 'setName',
        'state' => 'setState',
        'imp_tracker_urls' => 'setImpTrackerUrls',
        'brandname' => 'setBrandname'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'click_url' => 'getClickUrl',
        'input_data' => 'getInputData',
        'audit_status' => 'getAuditStatus',
        'name' => 'getName',
        'state' => 'getState',
        'imp_tracker_urls' => 'getImpTrackerUrls',
        'brandname' => 'getBrandname'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const AUDIT_STATUS_PENDING = 'pending';
    const AUDIT_STATUS_PASSED = 'passed';
    const AUDIT_STATUS_FAILED = 'failed';
    const STATE_ACTIVE = 'active';
    const STATE_PAUSED = 'paused';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAuditStatusAllowableValues()
    {
        return [
            self::AUDIT_STATUS_PENDING,
            self::AUDIT_STATUS_PASSED,
            self::AUDIT_STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVE,
            self::STATE_PAUSED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : 22;
        $this->container['click_url'] = isset($data['click_url']) ? $data['click_url'] : 'www.stackadapt.com';
        $this->container['input_data'] = isset($data['input_data']) ? $data['input_data'] : null;
        $this->container['audit_status'] = isset($data['audit_status']) ? $data['audit_status'] : 'pending';
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'API New Native Ad';
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'active';
        $this->container['imp_tracker_urls'] = isset($data['imp_tracker_urls']) ? $data['imp_tracker_urls'] : null;
        $this->container['brandname'] = isset($data['brandname']) ? $data['brandname'] : 'My Brand';

        // Initialize discriminator property with the model name.
        $discrimintor = array_search('native_ad', self::$attributeMap);
        $this->container[$discrimintor] = static::$swaggerModelName;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['click_url'] === null) {
            $invalid_properties[] = "'click_url' can't be null";
        }
        if ($this->container['input_data'] === null) {
            $invalid_properties[] = "'input_data' can't be null";
        }
        $allowed_values = array("pending", "passed", "failed");
        if (!in_array($this->container['audit_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'audit_status', must be one of #{allowed_values}.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        $allowed_values = array("active", "paused");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        if ($this->container['brandname'] === null) {
            $invalid_properties[] = "'brandname' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['click_url'] === null) {
            return false;
        }
        if ($this->container['input_data'] === null) {
            return false;
        }
        $allowed_values = array("pending", "passed", "failed");
        if (!in_array($this->container['audit_status'], $allowed_values)) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        $allowed_values = array("active", "paused");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['brandname'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id The ID of the native ad.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets click_url
     * @return string
     */
    public function getClickUrl()
    {
        return $this->container['click_url'];
    }

    /**
     * Sets click_url
     * @param string $click_url The click URL of the native ad. Not used for App Install Campaigns, where the click url is on the campaign object.
     * @return $this
     */
    public function setClickUrl($click_url)
    {
        $this->container['click_url'] = $click_url;

        return $this;
    }

    /**
     * Gets input_data
     * @return \CollingMedia\StackAdapt\Model\InputData
     */
    public function getInputData()
    {
        return $this->container['input_data'];
    }

    /**
     * Sets input_data
     * @param \CollingMedia\StackAdapt\Model\InputData $input_data
     * @return $this
     */
    public function setInputData($input_data)
    {
        $this->container['input_data'] = $input_data;

        return $this;
    }

    /**
     * Gets audit_status
     * @return string
     */
    public function getAuditStatus()
    {
        return $this->container['audit_status'];
    }

    /**
     * Sets audit_status
     * @param string $audit_status The audit status of the audit.
     * @return $this
     */
    public function setAuditStatus($audit_status)
    {
        $allowed_values = array('pending', 'passed', 'failed');
        if (!in_array($audit_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'audit_status', must be one of 'pending', 'passed', 'failed'");
        }
        $this->container['audit_status'] = $audit_status;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the native ad
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state The state of the campaign.
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('active', 'paused');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'active', 'paused'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets imp_tracker_urls
     * @return string[]
     */
    public function getImpTrackerUrls()
    {
        return $this->container['imp_tracker_urls'];
    }

    /**
     * Sets imp_tracker_urls
     * @param string[] $imp_tracker_urls List of URLs for impression tracking.
     * @return $this
     */
    public function setImpTrackerUrls($imp_tracker_urls)
    {
        $this->container['imp_tracker_urls'] = $imp_tracker_urls;

        return $this;
    }

    /**
     * Gets brandname
     * @return string
     */
    public function getBrandname()
    {
        return $this->container['brandname'];
    }

    /**
     * Sets brandname
     * @param string $brandname Brand name associated with the creative.
     * @return $this
     */
    public function setBrandname($brandname)
    {
        $this->container['brandname'] = $brandname;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CollingMedia\StackAdapt\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CollingMedia\StackAdapt\ObjectSerializer::sanitizeForSerialization($this));
    }
}


