<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.FieldSort</code>
 */
class FieldSort extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     */
    private $field_name = '';
    private $has_field_name = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortOrder order = 2;</code>
     */
    private $order = 0;
    private $has_order = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortMode mode = 3;</code>
     */
    private $mode = 0;
    private $has_mode = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.NestedFilter nested_filter = 4;</code>
     */
    private $nested_filter = null;
    private $has_nested_filter = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Generated from protobuf field <code>optional string field_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;
        $this->has_field_name = true;

        return $this;
    }

    public function hasFieldName()
    {
        return $this->has_field_name;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortOrder order = 2;</code>
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortOrder order = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOrder($var)
    {
        GPBUtil::checkEnum($var, \Aliyun\OTS\ProtoBuffer\Protocol\SortOrder::class);
        $this->order = $var;
        $this->has_order = true;

        return $this;
    }

    public function hasOrder()
    {
        return $this->has_order;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortMode mode = 3;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SortMode mode = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Aliyun\OTS\ProtoBuffer\Protocol\SortMode::class);
        $this->mode = $var;
        $this->has_mode = true;

        return $this;
    }

    public function hasMode()
    {
        return $this->has_mode;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.NestedFilter nested_filter = 4;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\NestedFilter
     */
    public function getNestedFilter()
    {
        return $this->nested_filter;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.NestedFilter nested_filter = 4;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\NestedFilter $var
     * @return $this
     */
    public function setNestedFilter($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\NestedFilter::class);
        $this->nested_filter = $var;
        $this->has_nested_filter = true;

        return $this;
    }

    public function hasNestedFilter()
    {
        return $this->has_nested_filter;
    }

}

