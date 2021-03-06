<?php
/**
 * ConversionTracker
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
 * ConversionTracker Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     CollingMedia\StackAdapt
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConversionTracker implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConversionTracker';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'name' => 'string',
        'code' => 'string',
        'description' => 'string',
        'user_id' => 'string',
        'conv_type' => 'string',
        'post_time' => 'int',
        'count_type' => 'string'
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
        'name' => 'name',
        'code' => 'code',
        'description' => 'description',
        'user_id' => 'user_id',
        'conv_type' => 'conv_type',
        'post_time' => 'post_time',
        'count_type' => 'count_type'
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
        'name' => 'setName',
        'code' => 'setCode',
        'description' => 'setDescription',
        'user_id' => 'setUserId',
        'conv_type' => 'setConvType',
        'post_time' => 'setPostTime',
        'count_type' => 'setCountType'
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
        'name' => 'getName',
        'code' => 'getCode',
        'description' => 'getDescription',
        'user_id' => 'getUserId',
        'conv_type' => 'getConvType',
        'post_time' => 'getPostTime',
        'count_type' => 'getCountType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const CONV_TYPE_IMP = 'imp';
    const CONV_TYPE_CLICK = 'click';
    const COUNT_TYPE_ONCE = 'once';
    const COUNT_TYPE_MULTIPLE = 'multiple';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConvTypeAllowableValues()
    {
        return [
            self::CONV_TYPE_IMP,
            self::CONV_TYPE_CLICK,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getCountTypeAllowableValues()
    {
        return [
            self::COUNT_TYPE_ONCE,
            self::COUNT_TYPE_MULTIPLE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : 102;
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'API Tracker';
        $this->container['code'] = isset($data['code']) ? $data['code'] : 'null';
        $this->container['description'] = isset($data['description']) ? $data['description'] : 'This is a tracker';
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : '30';
        $this->container['conv_type'] = isset($data['conv_type']) ? $data['conv_type'] : 'imp';
        $this->container['post_time'] = isset($data['post_time']) ? $data['post_time'] : 2592000000;
        $this->container['count_type'] = isset($data['count_type']) ? $data['count_type'] : 'once';

        // Initialize discriminator property with the model name.
        $discrimintor = array_search('conversion tracker', self::$attributeMap);
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
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['conv_type'] === null) {
            $invalid_properties[] = "'conv_type' can't be null";
        }
        $allowed_values = array("imp", "click");
        if (!in_array($this->container['conv_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'conv_type', must be one of #{allowed_values}.";
        }

        if ($this->container['post_time'] === null) {
            $invalid_properties[] = "'post_time' can't be null";
        }
        $allowed_values = array("once", "multiple");
        if (!in_array($this->container['count_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'count_type', must be one of #{allowed_values}.";
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
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['conv_type'] === null) {
            return false;
        }
        $allowed_values = array("imp", "click");
        if (!in_array($this->container['conv_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['post_time'] === null) {
            return false;
        }
        $allowed_values = array("once", "multiple");
        if (!in_array($this->container['count_type'], $allowed_values)) {
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
     * @param int $id The ID of the conversion_tracker.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The name of the conversion_tracker.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Code of the conversion_tracker.
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Some description of the conversion_tracker.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets user_id
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param string $user_id User who owns the conversion_tracker.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets conv_type
     * @return string
     */
    public function getConvType()
    {
        return $this->container['conv_type'];
    }

    /**
     * Sets conv_type
     * @param string $conv_type Specifies whether the conversion is matched by an impression or a click.
     * @return $this
     */
    public function setConvType($conv_type)
    {
        $allowed_values = array('imp', 'click');
        if (!in_array($conv_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'conv_type', must be one of 'imp', 'click'");
        }
        $this->container['conv_type'] = $conv_type;

        return $this;
    }

    /**
     * Gets post_time
     * @return int
     */
    public function getPostTime()
    {
        return $this->container['post_time'];
    }

    /**
     * Sets post_time
     * @param int $post_time Time till tracker expires for each user. Max: 2592000000 (30 days)
     * @return $this
     */
    public function setPostTime($post_time)
    {
        $this->container['post_time'] = $post_time;

        return $this;
    }

    /**
     * Gets count_type
     * @return string
     */
    public function getCountType()
    {
        return $this->container['count_type'];
    }

    /**
     * Sets count_type
     * @param string $count_type Specifies whether the conversion can be counted multiple times, or only once, by the same user.
     * @return $this
     */
    public function setCountType($count_type)
    {
        $allowed_values = array('once', 'multiple');
        if (!in_array($count_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'count_type', must be one of 'once', 'multiple'");
        }
        $this->container['count_type'] = $count_type;

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


