<?php namespace Shohabbos\Like\Models;

use Model;

/**
 * Model
 */
class View extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'shohabbos_like_views';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
