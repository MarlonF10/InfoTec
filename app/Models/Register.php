<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;


/**
 * Class Register
 *
 * @property $id
 * @property $name_student
 * @property $career_student
 * @property $genere
 * @property $state
 * @property $register_date
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee[] $employees
 * @property NonEmployee[] $nonEmployees
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Register extends Model
{
    
    static $rules = [
		'name_student' => 'required',
		'career_student' => 'required',
		'genere' => 'required',
		'state' => 'required',
		'register_date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name_student','career_student','genere','state','register_date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'register', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function nonEmployees()
    {
        return $this->hasMany('App\Models\NonEmployee', 'register', 'id');
    }
    

}
