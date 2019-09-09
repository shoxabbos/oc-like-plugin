<?php namespace Shohabbos\Like\Models;

use Model;

/**
 * Model
 */
class Like extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_like_likes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $morphTo = [
        'attachment' => []
    ];
    public $belongsTo = [
        'author' => \Rainlab\User\Models\User::class
    ];

    public $guarded = [
        'id'
    ];
}
