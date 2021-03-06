<?php
/**
 * CampaignResponse
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
 * CampaignResponse Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     CollingMedia\StackAdapt
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CampaignResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CampaignResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'advertiser_id' => 'int',
        'insertion_order_id' => 'int',
        'name' => 'string',
        'budget' => 'float',
        'bid_type' => 'string',
        'bid_amount_total' => 'float',
        'optimize_type' => 'string',
        'optimize_value' => 'float',
        'daily_cap' => 'float',
        'pace_evenly' => 'bool',
        'state' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'category_options' => 'string[]',
        'country_options' => 'string[]',
        'us_state_options' => 'string[]',
        'canada_province_options' => 'string[]',
        'city_options' => 'string',
        'domain_action' => 'string',
        'domain_options' => 'string[]',
        'device_type_options' => 'string[]',
        'supply_type_options' => 'string[]',
        'supply_source_options' => 'string[]',
        'freq_cap_limit' => 'int',
        'freq_cap_time' => 'int',
        'language_options' => 'string[]',
        'use_dma' => 'bool',
        'campaigns_conversion_trackers' => '\CollingMedia\StackAdapt\Model\ConversionTracker[]',
        'allow_iframe_engagement' => 'bool',
        'all_native_ads' => '\CollingMedia\StackAdapt\Model\NativeAdResponse[]'
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
        'advertiser_id' => 'advertiser_id',
        'insertion_order_id' => 'insertion_order_id',
        'name' => 'name',
        'budget' => 'budget',
        'bid_type' => 'bid_type',
        'bid_amount_total' => 'bid_amount_total',
        'optimize_type' => 'optimize_type',
        'optimize_value' => 'optimize_value',
        'daily_cap' => 'daily_cap',
        'pace_evenly' => 'pace_evenly',
        'state' => 'state',
        'start_date' => 'start_date',
        'end_date' => 'end_date',
        'category_options' => 'category_options',
        'country_options' => 'country_options',
        'us_state_options' => 'us_state_options',
        'canada_province_options' => 'canada_province_options',
        'city_options' => 'city_options',
        'domain_action' => 'domain_action',
        'domain_options' => 'domain_options',
        'device_type_options' => 'device_type_options',
        'supply_type_options' => 'supply_type_options',
        'supply_source_options' => 'supply_source_options',
        'freq_cap_limit' => 'freq_cap_limit',
        'freq_cap_time' => 'freq_cap_time',
        'language_options' => 'language_options',
        'use_dma' => 'use_dma',
        'campaigns_conversion_trackers' => 'campaigns_conversion_trackers',
        'allow_iframe_engagement' => 'allow_iframe_engagement',
        'all_native_ads' => 'all_native_ads'
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
        'advertiser_id' => 'setAdvertiserId',
        'insertion_order_id' => 'setInsertionOrderId',
        'name' => 'setName',
        'budget' => 'setBudget',
        'bid_type' => 'setBidType',
        'bid_amount_total' => 'setBidAmountTotal',
        'optimize_type' => 'setOptimizeType',
        'optimize_value' => 'setOptimizeValue',
        'daily_cap' => 'setDailyCap',
        'pace_evenly' => 'setPaceEvenly',
        'state' => 'setState',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'category_options' => 'setCategoryOptions',
        'country_options' => 'setCountryOptions',
        'us_state_options' => 'setUsStateOptions',
        'canada_province_options' => 'setCanadaProvinceOptions',
        'city_options' => 'setCityOptions',
        'domain_action' => 'setDomainAction',
        'domain_options' => 'setDomainOptions',
        'device_type_options' => 'setDeviceTypeOptions',
        'supply_type_options' => 'setSupplyTypeOptions',
        'supply_source_options' => 'setSupplySourceOptions',
        'freq_cap_limit' => 'setFreqCapLimit',
        'freq_cap_time' => 'setFreqCapTime',
        'language_options' => 'setLanguageOptions',
        'use_dma' => 'setUseDma',
        'campaigns_conversion_trackers' => 'setCampaignsConversionTrackers',
        'allow_iframe_engagement' => 'setAllowIframeEngagement',
        'all_native_ads' => 'setAllNativeAds'
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
        'advertiser_id' => 'getAdvertiserId',
        'insertion_order_id' => 'getInsertionOrderId',
        'name' => 'getName',
        'budget' => 'getBudget',
        'bid_type' => 'getBidType',
        'bid_amount_total' => 'getBidAmountTotal',
        'optimize_type' => 'getOptimizeType',
        'optimize_value' => 'getOptimizeValue',
        'daily_cap' => 'getDailyCap',
        'pace_evenly' => 'getPaceEvenly',
        'state' => 'getState',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'category_options' => 'getCategoryOptions',
        'country_options' => 'getCountryOptions',
        'us_state_options' => 'getUsStateOptions',
        'canada_province_options' => 'getCanadaProvinceOptions',
        'city_options' => 'getCityOptions',
        'domain_action' => 'getDomainAction',
        'domain_options' => 'getDomainOptions',
        'device_type_options' => 'getDeviceTypeOptions',
        'supply_type_options' => 'getSupplyTypeOptions',
        'supply_source_options' => 'getSupplySourceOptions',
        'freq_cap_limit' => 'getFreqCapLimit',
        'freq_cap_time' => 'getFreqCapTime',
        'language_options' => 'getLanguageOptions',
        'use_dma' => 'getUseDma',
        'campaigns_conversion_trackers' => 'getCampaignsConversionTrackers',
        'allow_iframe_engagement' => 'getAllowIframeEngagement',
        'all_native_ads' => 'getAllNativeAds'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const BID_TYPE_CPM = 'cpm';
    const BID_TYPE_CPC = 'cpc';
    const BID_TYPE_CPE = 'cpe';
    const BID_TYPE_CPS = 'cps';
    const OPTIMIZE_TYPE_CTR = 'ctr';
    const OPTIMIZE_TYPE_CPC = 'cpc';
    const OPTIMIZE_TYPE_CPE = 'cpe';
    const OPTIMIZE_TYPE_CPS = 'cps';
    const STATE_ACTIVE = 'active';
    const STATE_PAUSED = 'paused';
    const DOMAIN_ACTION_INCLUDE = 'include';
    const DOMAIN_ACTION_EXCLUDE = 'exclude';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getBidTypeAllowableValues()
    {
        return [
            self::BID_TYPE_CPM,
            self::BID_TYPE_CPC,
            self::BID_TYPE_CPE,
            self::BID_TYPE_CPS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOptimizeTypeAllowableValues()
    {
        return [
            self::OPTIMIZE_TYPE_CTR,
            self::OPTIMIZE_TYPE_CPC,
            self::OPTIMIZE_TYPE_CPE,
            self::OPTIMIZE_TYPE_CPS,
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
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDomainActionAllowableValues()
    {
        return [
            self::DOMAIN_ACTION_INCLUDE,
            self::DOMAIN_ACTION_EXCLUDE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : 45;
        $this->container['advertiser_id'] = isset($data['advertiser_id']) ? $data['advertiser_id'] : 12;
        $this->container['insertion_order_id'] = isset($data['insertion_order_id']) ? $data['insertion_order_id'] : 22;
        $this->container['name'] = isset($data['name']) ? $data['name'] : 'API Test Campaign';
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : 10000.0;
        $this->container['bid_type'] = isset($data['bid_type']) ? $data['bid_type'] : 'cpm';
        $this->container['bid_amount_total'] = isset($data['bid_amount_total']) ? $data['bid_amount_total'] : 5.0;
        $this->container['optimize_type'] = isset($data['optimize_type']) ? $data['optimize_type'] : 'cpc';
        $this->container['optimize_value'] = isset($data['optimize_value']) ? $data['optimize_value'] : 1.5;
        $this->container['daily_cap'] = isset($data['daily_cap']) ? $data['daily_cap'] : null;
        $this->container['pace_evenly'] = isset($data['pace_evenly']) ? $data['pace_evenly'] : true;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'active';
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['category_options'] = isset($data['category_options']) ? $data['category_options'] : null;
        $this->container['country_options'] = isset($data['country_options']) ? $data['country_options'] : null;
        $this->container['us_state_options'] = isset($data['us_state_options']) ? $data['us_state_options'] : null;
        $this->container['canada_province_options'] = isset($data['canada_province_options']) ? $data['canada_province_options'] : null;
        $this->container['city_options'] = isset($data['city_options']) ? $data['city_options'] : 'Sugar Land > TX > US:618@ Missouri City > TX > US:618@ Houston > TX > US:618@ Austin > TX > US:635';
        $this->container['domain_action'] = isset($data['domain_action']) ? $data['domain_action'] : 'exclude';
        $this->container['domain_options'] = isset($data['domain_options']) ? $data['domain_options'] : null;
        $this->container['device_type_options'] = isset($data['device_type_options']) ? $data['device_type_options'] : null;
        $this->container['supply_type_options'] = isset($data['supply_type_options']) ? $data['supply_type_options'] : null;
        $this->container['supply_source_options'] = isset($data['supply_source_options']) ? $data['supply_source_options'] : null;
        $this->container['freq_cap_limit'] = isset($data['freq_cap_limit']) ? $data['freq_cap_limit'] : 7;
        $this->container['freq_cap_time'] = isset($data['freq_cap_time']) ? $data['freq_cap_time'] : 86400000;
        $this->container['language_options'] = isset($data['language_options']) ? $data['language_options'] : null;
        $this->container['use_dma'] = isset($data['use_dma']) ? $data['use_dma'] : null;
        $this->container['campaigns_conversion_trackers'] = isset($data['campaigns_conversion_trackers']) ? $data['campaigns_conversion_trackers'] : null;
        $this->container['allow_iframe_engagement'] = isset($data['allow_iframe_engagement']) ? $data['allow_iframe_engagement'] : true;
        $this->container['all_native_ads'] = isset($data['all_native_ads']) ? $data['all_native_ads'] : null;

        // Initialize discriminator property with the model name.
        $discrimintor = array_search('campaign', self::$attributeMap);
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
        if ($this->container['advertiser_id'] === null) {
            $invalid_properties[] = "'advertiser_id' can't be null";
        }
        if ($this->container['insertion_order_id'] === null) {
            $invalid_properties[] = "'insertion_order_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['budget'] === null) {
            $invalid_properties[] = "'budget' can't be null";
        }
        if ($this->container['bid_type'] === null) {
            $invalid_properties[] = "'bid_type' can't be null";
        }
        $allowed_values = array("cpm", "cpc", "cpe", "cps");
        if (!in_array($this->container['bid_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'bid_type', must be one of #{allowed_values}.";
        }

        if ($this->container['bid_amount_total'] === null) {
            $invalid_properties[] = "'bid_amount_total' can't be null";
        }
        $allowed_values = array("ctr", "cpc", "cpe", "cps");
        if (!in_array($this->container['optimize_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'optimize_type', must be one of #{allowed_values}.";
        }

        $allowed_values = array("active", "paused");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }

        $allowed_values = array("include", "exclude");
        if (!in_array($this->container['domain_action'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'domain_action', must be one of #{allowed_values}.";
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
        if ($this->container['advertiser_id'] === null) {
            return false;
        }
        if ($this->container['insertion_order_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['budget'] === null) {
            return false;
        }
        if ($this->container['bid_type'] === null) {
            return false;
        }
        $allowed_values = array("cpm", "cpc", "cpe", "cps");
        if (!in_array($this->container['bid_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['bid_amount_total'] === null) {
            return false;
        }
        $allowed_values = array("ctr", "cpc", "cpe", "cps");
        if (!in_array($this->container['optimize_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("active", "paused");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("include", "exclude");
        if (!in_array($this->container['domain_action'], $allowed_values)) {
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
     * @param int $id The ID of the campaign.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets advertiser_id
     * @return int
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     * @param int $advertiser_id The ID of the campaign's advertiser.
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets insertion_order_id
     * @return int
     */
    public function getInsertionOrderId()
    {
        return $this->container['insertion_order_id'];
    }

    /**
     * Sets insertion_order_id
     * @param int $insertion_order_id The ID of the campaign's line item. This value cannot be modified after it has been set.
     * @return $this
     */
    public function setInsertionOrderId($insertion_order_id)
    {
        $this->container['insertion_order_id'] = $insertion_order_id;

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
     * @param string $name The name of the campaign.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets budget
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     * @param float $budget The budget of the campaign.
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets bid_type
     * @return string
     */
    public function getBidType()
    {
        return $this->container['bid_type'];
    }

    /**
     * Sets bid_type
     * @param string $bid_type Type of bid model: cpm (Cost Per Thousand Impressions), cpc (Cost Per Click), cpe (Cost Per Engagement), cps (Cost Per Session) bid model.
     * @return $this
     */
    public function setBidType($bid_type)
    {
        $allowed_values = array('cpm', 'cpc', 'cpe', 'cps');
        if (!in_array($bid_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'bid_type', must be one of 'cpm', 'cpc', 'cpe', 'cps'");
        }
        $this->container['bid_type'] = $bid_type;

        return $this;
    }

    /**
     * Gets bid_amount_total
     * @return float
     */
    public function getBidAmountTotal()
    {
        return $this->container['bid_amount_total'];
    }

    /**
     * Sets bid_amount_total
     * @param float $bid_amount_total The bid amount of the campaign.
     * @return $this
     */
    public function setBidAmountTotal($bid_amount_total)
    {
        $this->container['bid_amount_total'] = $bid_amount_total;

        return $this;
    }

    /**
     * Gets optimize_type
     * @return string
     */
    public function getOptimizeType()
    {
        return $this->container['optimize_type'];
    }

    /**
     * Sets optimize_type
     * @param string $optimize_type The type of optimization used for the campaign: ctr (CTR floor), cpc (CPC goal), cps (CPS goal).
     * @return $this
     */
    public function setOptimizeType($optimize_type)
    {
        $allowed_values = array('ctr', 'cpc', 'cpe', 'cps');
        if (!in_array($optimize_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'optimize_type', must be one of 'ctr', 'cpc', 'cpe', 'cps'");
        }
        $this->container['optimize_type'] = $optimize_type;

        return $this;
    }

    /**
     * Gets optimize_value
     * @return float
     */
    public function getOptimizeValue()
    {
        return $this->container['optimize_value'];
    }

    /**
     * Sets optimize_value
     * @param float $optimize_value The value of the optimization. Example: The value is 0.2 for a $0.2 CPC goal, or a 0.2% CTR floor.
     * @return $this
     */
    public function setOptimizeValue($optimize_value)
    {
        $this->container['optimize_value'] = $optimize_value;

        return $this;
    }

    /**
     * Gets daily_cap
     * @return float
     */
    public function getDailyCap()
    {
        return $this->container['daily_cap'];
    }

    /**
     * Sets daily_cap
     * @param float $daily_cap The maximum budget to be spent in a single day. This value is only used if pace_evenly is NULL or false.
     * @return $this
     */
    public function setDailyCap($daily_cap)
    {
        $this->container['daily_cap'] = $daily_cap;

        return $this;
    }

    /**
     * Gets pace_evenly
     * @return bool
     */
    public function getPaceEvenly()
    {
        return $this->container['pace_evenly'];
    }

    /**
     * Sets pace_evenly
     * @param bool $pace_evenly Whether or not to pace the campaign budget evenly over the course of the campaign. This value is only used if a valid end_date is specified.
     * @return $this
     */
    public function setPaceEvenly($pace_evenly)
    {
        $this->container['pace_evenly'] = $pace_evenly;

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
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date The timestamp in UTC when the campaign will begin.
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date The timestamp in UTC when the campaign will end.
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets category_options
     * @return string[]
     */
    public function getCategoryOptions()
    {
        return $this->container['category_options'];
    }

    /**
     * Sets category_options
     * @param string[] $category_options The list of IAB categories to be included in the campaign. <a class=\"campaign-link\" target=\"_blank\" href=\"https://docs.google.com/document/d/1oZEWp_b9ccLsPNbTJf-w5ENHSSHiAjVQVcfjUh7LBsg/edit?usp=sharing#bookmark=id.wwmc2j4w9weo\">Click Here</a> for full list of IB categories. Leave empty to choose all.
     * @return $this
     */
    public function setCategoryOptions($category_options)
    {
        $this->container['category_options'] = $category_options;

        return $this;
    }

    /**
     * Gets country_options
     * @return string[]
     */
    public function getCountryOptions()
    {
        return $this->container['country_options'];
    }

    /**
     * Sets country_options
     * @param string[] $country_options The list of ISO 3166-1 alpha-2 country codes to be included in the campaign.
     * @return $this
     */
    public function setCountryOptions($country_options)
    {
        $this->container['country_options'] = $country_options;

        return $this;
    }

    /**
     * Gets us_state_options
     * @return string[]
     */
    public function getUsStateOptions()
    {
        return $this->container['us_state_options'];
    }

    /**
     * Sets us_state_options
     * @param string[] $us_state_options The list of ISO 3166-2 US state codes to be included in the campaign.
     * @return $this
     */
    public function setUsStateOptions($us_state_options)
    {
        $this->container['us_state_options'] = $us_state_options;

        return $this;
    }

    /**
     * Gets canada_province_options
     * @return string[]
     */
    public function getCanadaProvinceOptions()
    {
        return $this->container['canada_province_options'];
    }

    /**
     * Sets canada_province_options
     * @param string[] $canada_province_options The list of ISO 3166-2 Canadian province codes to be included in the campaign.
     * @return $this
     */
    public function setCanadaProvinceOptions($canada_province_options)
    {
        $this->container['canada_province_options'] = $canada_province_options;

        return $this;
    }

    /**
     * Gets city_options
     * @return string
     */
    public function getCityOptions()
    {
        return $this->container['city_options'];
    }

    /**
     * Sets city_options
     * @param string $city_options The list of city ID objects to be included in the campaign. For more information <a class=\"campaign-link\" target=\"_blank\" href=\"https://docs.google.com/document/d/1oZEWp_b9ccLsPNbTJf-w5ENHSSHiAjVQVcfjUh7LBsg/edit?usp=sharing#bookmark=id.19kxqs63mxbn\">Click Here</a>.
     * @return $this
     */
    public function setCityOptions($city_options)
    {
        $this->container['city_options'] = $city_options;

        return $this;
    }

    /**
     * Gets domain_action
     * @return string
     */
    public function getDomainAction()
    {
        return $this->container['domain_action'];
    }

    /**
     * Sets domain_action
     * @param string $domain_action Action to be taken on the \"domain_options\" list.
     * @return $this
     */
    public function setDomainAction($domain_action)
    {
        $allowed_values = array('include', 'exclude');
        if (!in_array($domain_action, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'domain_action', must be one of 'include', 'exclude'");
        }
        $this->container['domain_action'] = $domain_action;

        return $this;
    }

    /**
     * Gets domain_options
     * @return string[]
     */
    public function getDomainOptions()
    {
        return $this->container['domain_options'];
    }

    /**
     * Sets domain_options
     * @param string[] $domain_options The list of domains or subdomains to be included or excluded in the campaign. \"domain_action\" must also be set. Example: [\"ford.com\", \"www.american express.com\"]
     * @return $this
     */
    public function setDomainOptions($domain_options)
    {
        $this->container['domain_options'] = $domain_options;

        return $this;
    }

    /**
     * Gets device_type_options
     * @return string[]
     */
    public function getDeviceTypeOptions()
    {
        return $this->container['device_type_options'];
    }

    /**
     * Sets device_type_options
     * @param string[] $device_type_options The list of device types to be included in the campaign.
     * @return $this
     */
    public function setDeviceTypeOptions($device_type_options)
    {
        $this->container['device_type_options'] = $device_type_options;

        return $this;
    }

    /**
     * Gets supply_type_options
     * @return string[]
     */
    public function getSupplyTypeOptions()
    {
        return $this->container['supply_type_options'];
    }

    /**
     * Sets supply_type_options
     * @param string[] $supply_type_options The list of mobile supply types to be included in the campaign.
     * @return $this
     */
    public function setSupplyTypeOptions($supply_type_options)
    {
        $this->container['supply_type_options'] = $supply_type_options;

        return $this;
    }

    /**
     * Gets supply_source_options
     * @return string[]
     */
    public function getSupplySourceOptions()
    {
        return $this->container['supply_source_options'];
    }

    /**
     * Sets supply_source_options
     * @param string[] $supply_source_options The list of supply sources to be included in the campaign. Please reach out to CSM for the list of supply sources.
     * @return $this
     */
    public function setSupplySourceOptions($supply_source_options)
    {
        $this->container['supply_source_options'] = $supply_source_options;

        return $this;
    }

    /**
     * Gets freq_cap_limit
     * @return int
     */
    public function getFreqCapLimit()
    {
        return $this->container['freq_cap_limit'];
    }

    /**
     * Sets freq_cap_limit
     * @param int $freq_cap_limit The user frequency cap value, which is the maximum amount of impressions that a unique user can see.
     * @return $this
     */
    public function setFreqCapLimit($freq_cap_limit)
    {
        $this->container['freq_cap_limit'] = $freq_cap_limit;

        return $this;
    }

    /**
     * Gets freq_cap_time
     * @return int
     */
    public function getFreqCapTime()
    {
        return $this->container['freq_cap_time'];
    }

    /**
     * Sets freq_cap_time
     * @param int $freq_cap_time The length of time in milliseconds when the user frequency cap counter restarts.
     * @return $this
     */
    public function setFreqCapTime($freq_cap_time)
    {
        $this->container['freq_cap_time'] = $freq_cap_time;

        return $this;
    }

    /**
     * Gets language_options
     * @return string[]
     */
    public function getLanguageOptions()
    {
        return $this->container['language_options'];
    }

    /**
     * Sets language_options
     * @param string[] $language_options A list of language(s) that are targeted. The campaign will only target sites or users whose language is included in the list.
     * @return $this
     */
    public function setLanguageOptions($language_options)
    {
        $this->container['language_options'] = $language_options;

        return $this;
    }

    /**
     * Gets use_dma
     * @return bool
     */
    public function getUseDma()
    {
        return $this->container['use_dma'];
    }

    /**
     * Sets use_dma
     * @param bool $use_dma Enable campaign to target city by Designated Market Area (DMA).
     * @return $this
     */
    public function setUseDma($use_dma)
    {
        $this->container['use_dma'] = $use_dma;

        return $this;
    }

    /**
     * Gets campaigns_conversion_trackers
     * @return \CollingMedia\StackAdapt\Model\ConversionTracker[]
     */
    public function getCampaignsConversionTrackers()
    {
        return $this->container['campaigns_conversion_trackers'];
    }

    /**
     * Sets campaigns_conversion_trackers
     * @param \CollingMedia\StackAdapt\Model\ConversionTracker[] $campaigns_conversion_trackers
     * @return $this
     */
    public function setCampaignsConversionTrackers($campaigns_conversion_trackers)
    {
        $this->container['campaigns_conversion_trackers'] = $campaigns_conversion_trackers;

        return $this;
    }

    /**
     * Gets allow_iframe_engagement
     * @return bool
     */
    public function getAllowIframeEngagement()
    {
        return $this->container['allow_iframe_engagement'];
    }

    /**
     * Sets allow_iframe_engagement
     * @param bool $allow_iframe_engagement Allow engagement tracking by placing add within an iframe
     * @return $this
     */
    public function setAllowIframeEngagement($allow_iframe_engagement)
    {
        $this->container['allow_iframe_engagement'] = $allow_iframe_engagement;

        return $this;
    }

    /**
     * Gets all_native_ads
     * @return \CollingMedia\StackAdapt\Model\NativeAdResponse[]
     */
    public function getAllNativeAds()
    {
        return $this->container['all_native_ads'];
    }

    /**
     * Sets all_native_ads
     * @param \CollingMedia\StackAdapt\Model\NativeAdResponse[] $all_native_ads Native ad model
     * @return $this
     */
    public function setAllNativeAds($all_native_ads)
    {
        $this->container['all_native_ads'] = $all_native_ads;

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


