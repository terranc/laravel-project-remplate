<?php

namespace App\Traits;


/**
 * Trait StatusAttributeTrait
 *
 * @package App\Traits
 */
trait AttributeChannelTrait {
    //    protected $statusLists;

    /**
     * @return mixed
     */
    public function getChannelLists() {
        return $this->channelLists ?: config('global.channels');
    }

    public static function getChannelArrAttribute() {
        return (new static())->getChannelLists();
    }

    public function getChannelTextAttribute() {
        return $this->getChannelArrAttribute()[$this->channel];
    }

    public function scopeChannel($query, $channel = []) {
        return $query->whereIn('channel', $channel);
    }

    public function scopeWxpay($query) {
        return $this->scopeChannel($query, ['WXPAY']);
    }

    public function scopeAlipay($query) {
        return $this->scopeChannel($query, ['ALIPAY']);
    }
}
