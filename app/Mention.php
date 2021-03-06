<?php namespace Gomention;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mention
 * @package App
 */
class Mention extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mentions';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
    ];

    /**
     * The attributes are hidden from results.
     *
     * @var array
     */
    protected $hidden = [
        'by_user_id',
        'to_user_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function by_user (){

        return $this->belongsTo('Gomention\User', 'by_user_id', 'id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function to_user (){

        return $this->belongsTo('Gomention\User', 'to_user_id', 'id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes (){
        return $this->hasMany('Gomention\Like', 'mention_id', 'id');
    }

}
