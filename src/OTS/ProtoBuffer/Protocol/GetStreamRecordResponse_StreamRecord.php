<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.GetStreamRecordResponse.StreamRecord</code>
 */
class GetStreamRecordResponse_StreamRecord extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required .aliyun.OTS.ProtoBuffer.Protocol.ActionType action_type = 1;</code>
     */
    private $action_type = 0;
    private $has_action_type = false;
    /**
     * Generated from protobuf field <code>required bytes record = 2;</code>
     */
    private $record = '';
    private $has_record = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required .aliyun.OTS.ProtoBuffer.Protocol.ActionType action_type = 1;</code>
     * @return int
     */
    public function getActionType()
    {
        return $this->action_type;
    }

    /**
     * Generated from protobuf field <code>required .aliyun.OTS.ProtoBuffer.Protocol.ActionType action_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setActionType($var)
    {
        GPBUtil::checkEnum($var, \Aliyun\OTS\ProtoBuffer\Protocol\ActionType::class);
        $this->action_type = $var;
        $this->has_action_type = true;

        return $this;
    }

    public function hasActionType()
    {
        return $this->has_action_type;
    }

    /**
     * Generated from protobuf field <code>required bytes record = 2;</code>
     * @return string
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Generated from protobuf field <code>required bytes record = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRecord($var)
    {
        GPBUtil::checkString($var, False);
        $this->record = $var;
        $this->has_record = true;

        return $this;
    }

    public function hasRecord()
    {
        return $this->has_record;
    }

}

