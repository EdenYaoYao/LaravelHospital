<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    const TYPE_NOTICE = 13;//通知
    const TYPE_FOCUSES = 15;//聚焦
    const TYPE_ARTICLES = 17;//概况
    const TYPE_HEALTHS = 18;//健康知道
    const TYPE_DEPARTMENTS = 19;//科室
    const TYPE_SURGICAL = 20;//内科
    const TYPE_NEWS = 21;//新闻
    const TYPE_MEDICINE = 22;//外科
    const TYPE_TIME = 28;//就诊时间
    const TYPE_NEEDS = 29;//就诊须知

    /**
     * @var string
     */
    protected $table = 'posts';

    /**
     * @var array
     */
    protected $fillable = ['category_id', 'title', 'content', 'description', 'image', 'visible'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postImages()
    {
        return $this->hasMany('App\PostImage', 'post_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('updated_at', 'desc');
    }
}
