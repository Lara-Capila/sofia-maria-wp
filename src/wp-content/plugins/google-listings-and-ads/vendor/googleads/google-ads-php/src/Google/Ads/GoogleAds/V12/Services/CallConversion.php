<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A call conversion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.CallConversion</code>
 */
class CallConversion extends \Google\Protobuf\Internal\Message
{
    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign, for example, "+16502531234".
     *
     * Generated from protobuf field <code>optional string caller_id = 7;</code>
     */
    protected $caller_id = null;
    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string call_start_date_time = 8;</code>
     */
    protected $call_start_date_time = null;
    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 9;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 10;</code>
     */
    protected $conversion_date_time = null;
    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>optional double conversion_value = 11;</code>
     */
    protected $conversion_value = null;
    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 12;</code>
     */
    protected $currency_code = null;
    /**
     * The custom variables associated with this conversion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.services.CustomVariable custom_variables = 13;</code>
     */
    private $custom_variables;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $caller_id
     *           The caller id from which this call was placed. Caller id is expected to be
     *           in E.164 format with preceding '+' sign, for example, "+16502531234".
     *     @type string $call_start_date_time
     *           The date time at which the call occurred. The timezone must be specified.
     *           The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     *           for example, "2019-01-01 12:32:45-08:00".
     *     @type string $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *           Note: Although this resource name consists of a customer id and a
     *           conversion action id, validation will ignore the customer id and use the
     *           conversion action id as the sole identifier of the conversion action.
     *     @type string $conversion_date_time
     *           The date time at which the conversion occurred. Must be after the call
     *           time. The timezone must be specified. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *     @type float $conversion_value
     *           The value of the conversion for the advertiser.
     *     @type string $currency_code
     *           Currency associated with the conversion value. This is the ISO 4217
     *           3-character currency code. For example: USD, EUR.
     *     @type array<\Google\Ads\GoogleAds\V12\Services\CustomVariable>|\Google\Protobuf\Internal\RepeatedField $custom_variables
     *           The custom variables associated with this conversion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign, for example, "+16502531234".
     *
     * Generated from protobuf field <code>optional string caller_id = 7;</code>
     * @return string
     */
    public function getCallerId()
    {
        return isset($this->caller_id) ? $this->caller_id : '';
    }

    public function hasCallerId()
    {
        return isset($this->caller_id);
    }

    public function clearCallerId()
    {
        unset($this->caller_id);
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign, for example, "+16502531234".
     *
     * Generated from protobuf field <code>optional string caller_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCallerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->caller_id = $var;

        return $this;
    }

    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string call_start_date_time = 8;</code>
     * @return string
     */
    public function getCallStartDateTime()
    {
        return isset($this->call_start_date_time) ? $this->call_start_date_time : '';
    }

    public function hasCallStartDateTime()
    {
        return isset($this->call_start_date_time);
    }

    public function clearCallStartDateTime()
    {
        unset($this->call_start_date_time);
    }

    /**
     * The date time at which the call occurred. The timezone must be specified.
     * The format is "yyyy-mm-dd hh:mm:ss+|-hh:mm",
     * for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string call_start_date_time = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCallStartDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->call_start_date_time = $var;

        return $this;
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 9;</code>
     * @return string
     */
    public function getConversionAction()
    {
        return isset($this->conversion_action) ? $this->conversion_action : '';
    }

    public function hasConversionAction()
    {
        return isset($this->conversion_action);
    }

    public function clearConversionAction()
    {
        unset($this->conversion_action);
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     * Note: Although this resource name consists of a customer id and a
     * conversion action id, validation will ignore the customer id and use the
     * conversion action id as the sole identifier of the conversion action.
     *
     * Generated from protobuf field <code>optional string conversion_action = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 10;</code>
     * @return string
     */
    public function getConversionDateTime()
    {
        return isset($this->conversion_date_time) ? $this->conversion_date_time : '';
    }

    public function hasConversionDateTime()
    {
        return isset($this->conversion_date_time);
    }

    public function clearConversionDateTime()
    {
        unset($this->conversion_date_time);
    }

    /**
     * The date time at which the conversion occurred. Must be after the call
     * time. The timezone must be specified. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string conversion_date_time = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_date_time = $var;

        return $this;
    }

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>optional double conversion_value = 11;</code>
     * @return float
     */
    public function getConversionValue()
    {
        return isset($this->conversion_value) ? $this->conversion_value : 0.0;
    }

    public function hasConversionValue()
    {
        return isset($this->conversion_value);
    }

    public function clearConversionValue()
    {
        unset($this->conversion_value);
    }

    /**
     * The value of the conversion for the advertiser.
     *
     * Generated from protobuf field <code>optional double conversion_value = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setConversionValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->conversion_value = $var;

        return $this;
    }

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 12;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return isset($this->currency_code) ? $this->currency_code : '';
    }

    public function hasCurrencyCode()
    {
        return isset($this->currency_code);
    }

    public function clearCurrencyCode()
    {
        unset($this->currency_code);
    }

    /**
     * Currency associated with the conversion value. This is the ISO 4217
     * 3-character currency code. For example: USD, EUR.
     *
     * Generated from protobuf field <code>optional string currency_code = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * The custom variables associated with this conversion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.services.CustomVariable custom_variables = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomVariables()
    {
        return $this->custom_variables;
    }

    /**
     * The custom variables associated with this conversion.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v12.services.CustomVariable custom_variables = 13;</code>
     * @param array<\Google\Ads\GoogleAds\V12\Services\CustomVariable>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomVariables($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V12\Services\CustomVariable::class);
        $this->custom_variables = $arr;

        return $this;
    }

}

