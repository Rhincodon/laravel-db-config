<?php

namespace ViKon\DbConfig\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Config
 *
 * @author  Kovács Vince <vincekovacs@hotmail.com>
 *
 * @package ViKon\DbConfig\Models
 */
class Config extends Model
{
    /**
     *
     * Disable updated_at and created_at columns
     *
     * @var boolean
     */
    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'config';
}