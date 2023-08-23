<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Job configuration
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1.JobConfig</code>
 */
class JobConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * List of input assets stored in Cloud Storage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Input inputs = 1;</code>
     */
    private $inputs;
    /**
     * List of `Edit atom`s. Defines the ultimate timeline of the resulting
     * file or manifest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.EditAtom edit_list = 2;</code>
     */
    private $edit_list;
    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.ElementaryStream elementary_streams = 3;</code>
     */
    private $elementary_streams;
    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.MuxStream mux_streams = 4;</code>
     */
    private $mux_streams;
    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Manifest manifests = 5;</code>
     */
    private $manifests;
    /**
     * Output configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Output output = 6;</code>
     */
    private $output = null;
    /**
     * List of ad breaks. Specifies where to insert ad break tags in the output
     * manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AdBreak ad_breaks = 7;</code>
     */
    private $ad_breaks;
    /**
     * Destination on Pub/Sub.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PubsubDestination pubsub_destination = 8;</code>
     */
    private $pubsub_destination = null;
    /**
     * List of output sprite sheets.
     * Spritesheets require at least one VideoStream in the Jobconfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.SpriteSheet sprite_sheets = 9;</code>
     */
    private $sprite_sheets;
    /**
     * List of overlays on the output video, in descending Z-order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Overlay overlays = 10;</code>
     */
    private $overlays;
    /**
     * List of encryption configurations for the content.
     * Each configuration has an ID. Specify this ID in the
     * [MuxStream.encryption_id][google.cloud.video.transcoder.v1.MuxStream.encryption_id]
     * field to indicate the configuration to use for that `MuxStream` output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Encryption encryptions = 11;</code>
     */
    private $encryptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Video\Transcoder\V1\Input>|\Google\Protobuf\Internal\RepeatedField $inputs
     *           List of input assets stored in Cloud Storage.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\EditAtom>|\Google\Protobuf\Internal\RepeatedField $edit_list
     *           List of `Edit atom`s. Defines the ultimate timeline of the resulting
     *           file or manifest.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\ElementaryStream>|\Google\Protobuf\Internal\RepeatedField $elementary_streams
     *           List of elementary streams.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\MuxStream>|\Google\Protobuf\Internal\RepeatedField $mux_streams
     *           List of multiplexing settings for output streams.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\Manifest>|\Google\Protobuf\Internal\RepeatedField $manifests
     *           List of output manifests.
     *     @type \Google\Cloud\Video\Transcoder\V1\Output $output
     *           Output configuration.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\AdBreak>|\Google\Protobuf\Internal\RepeatedField $ad_breaks
     *           List of ad breaks. Specifies where to insert ad break tags in the output
     *           manifests.
     *     @type \Google\Cloud\Video\Transcoder\V1\PubsubDestination $pubsub_destination
     *           Destination on Pub/Sub.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\SpriteSheet>|\Google\Protobuf\Internal\RepeatedField $sprite_sheets
     *           List of output sprite sheets.
     *           Spritesheets require at least one VideoStream in the Jobconfig.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\Overlay>|\Google\Protobuf\Internal\RepeatedField $overlays
     *           List of overlays on the output video, in descending Z-order.
     *     @type array<\Google\Cloud\Video\Transcoder\V1\Encryption>|\Google\Protobuf\Internal\RepeatedField $encryptions
     *           List of encryption configurations for the content.
     *           Each configuration has an ID. Specify this ID in the
     *           [MuxStream.encryption_id][google.cloud.video.transcoder.v1.MuxStream.encryption_id]
     *           field to indicate the configuration to use for that `MuxStream` output.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * List of input assets stored in Cloud Storage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Input inputs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInputs()
    {
        return $this->inputs;
    }

    /**
     * List of input assets stored in Cloud Storage.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Input inputs = 1;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\Input>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInputs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\Input::class);
        $this->inputs = $arr;

        return $this;
    }

    /**
     * List of `Edit atom`s. Defines the ultimate timeline of the resulting
     * file or manifest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.EditAtom edit_list = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEditList()
    {
        return $this->edit_list;
    }

    /**
     * List of `Edit atom`s. Defines the ultimate timeline of the resulting
     * file or manifest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.EditAtom edit_list = 2;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\EditAtom>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEditList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\EditAtom::class);
        $this->edit_list = $arr;

        return $this;
    }

    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.ElementaryStream elementary_streams = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getElementaryStreams()
    {
        return $this->elementary_streams;
    }

    /**
     * List of elementary streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.ElementaryStream elementary_streams = 3;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\ElementaryStream>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setElementaryStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\ElementaryStream::class);
        $this->elementary_streams = $arr;

        return $this;
    }

    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.MuxStream mux_streams = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMuxStreams()
    {
        return $this->mux_streams;
    }

    /**
     * List of multiplexing settings for output streams.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.MuxStream mux_streams = 4;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\MuxStream>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMuxStreams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\MuxStream::class);
        $this->mux_streams = $arr;

        return $this;
    }

    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Manifest manifests = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getManifests()
    {
        return $this->manifests;
    }

    /**
     * List of output manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Manifest manifests = 5;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\Manifest>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setManifests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\Manifest::class);
        $this->manifests = $arr;

        return $this;
    }

    /**
     * Output configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Output output = 6;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\Output|null
     */
    public function getOutput()
    {
        return $this->output;
    }

    public function hasOutput()
    {
        return isset($this->output);
    }

    public function clearOutput()
    {
        unset($this->output);
    }

    /**
     * Output configuration.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.Output output = 6;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\Output $var
     * @return $this
     */
    public function setOutput($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\Output::class);
        $this->output = $var;

        return $this;
    }

    /**
     * List of ad breaks. Specifies where to insert ad break tags in the output
     * manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AdBreak ad_breaks = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdBreaks()
    {
        return $this->ad_breaks;
    }

    /**
     * List of ad breaks. Specifies where to insert ad break tags in the output
     * manifests.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.AdBreak ad_breaks = 7;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\AdBreak>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdBreaks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\AdBreak::class);
        $this->ad_breaks = $arr;

        return $this;
    }

    /**
     * Destination on Pub/Sub.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PubsubDestination pubsub_destination = 8;</code>
     * @return \Google\Cloud\Video\Transcoder\V1\PubsubDestination|null
     */
    public function getPubsubDestination()
    {
        return $this->pubsub_destination;
    }

    public function hasPubsubDestination()
    {
        return isset($this->pubsub_destination);
    }

    public function clearPubsubDestination()
    {
        unset($this->pubsub_destination);
    }

    /**
     * Destination on Pub/Sub.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1.PubsubDestination pubsub_destination = 8;</code>
     * @param \Google\Cloud\Video\Transcoder\V1\PubsubDestination $var
     * @return $this
     */
    public function setPubsubDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1\PubsubDestination::class);
        $this->pubsub_destination = $var;

        return $this;
    }

    /**
     * List of output sprite sheets.
     * Spritesheets require at least one VideoStream in the Jobconfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.SpriteSheet sprite_sheets = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpriteSheets()
    {
        return $this->sprite_sheets;
    }

    /**
     * List of output sprite sheets.
     * Spritesheets require at least one VideoStream in the Jobconfig.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.SpriteSheet sprite_sheets = 9;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\SpriteSheet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpriteSheets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\SpriteSheet::class);
        $this->sprite_sheets = $arr;

        return $this;
    }

    /**
     * List of overlays on the output video, in descending Z-order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Overlay overlays = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOverlays()
    {
        return $this->overlays;
    }

    /**
     * List of overlays on the output video, in descending Z-order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Overlay overlays = 10;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\Overlay>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOverlays($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\Overlay::class);
        $this->overlays = $arr;

        return $this;
    }

    /**
     * List of encryption configurations for the content.
     * Each configuration has an ID. Specify this ID in the
     * [MuxStream.encryption_id][google.cloud.video.transcoder.v1.MuxStream.encryption_id]
     * field to indicate the configuration to use for that `MuxStream` output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Encryption encryptions = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncryptions()
    {
        return $this->encryptions;
    }

    /**
     * List of encryption configurations for the content.
     * Each configuration has an ID. Specify this ID in the
     * [MuxStream.encryption_id][google.cloud.video.transcoder.v1.MuxStream.encryption_id]
     * field to indicate the configuration to use for that `MuxStream` output.
     *
     * Generated from protobuf field <code>repeated .google.cloud.video.transcoder.v1.Encryption encryptions = 11;</code>
     * @param array<\Google\Cloud\Video\Transcoder\V1\Encryption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncryptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Video\Transcoder\V1\Encryption::class);
        $this->encryptions = $arr;

        return $this;
    }

}

