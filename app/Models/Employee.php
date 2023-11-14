<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $genere
 * @property $number_student_employees
 * @property $career
 * @property $register
 * @property $created_at
 * @property $updated_at
 *
 * @property Register $register
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'genere' => 'required',
		'number_student_employees' => 'required',
		'career' => 'required',
		'register' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['genere','number_student_employees','career','register'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function register()
    {
        return $this->hasOne('App\Models\Register', 'id', 'register');
    }
    

}
