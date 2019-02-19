<?php

namespace App\Repositories\Eloquents;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\BaseInterface;

abstract class BaseEloquent implements BaseInterface
{
    /**
     * Instance that extends Illuminate\Database\Eloquent\Model
     *
     * @var Model
     */
    protected $model;

    abstract public function model();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->model = app()->make($this->model());
    }


}