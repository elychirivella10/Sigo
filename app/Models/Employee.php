<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\Location;

/**
 * Class Employee
 *
 * @property $id
 * @property $status
 * @property $cod
 * @property $dni
 * @property $first_lastname
 * @property $second_lastname
 * @property $birthday
 * @property $gender
 * @property $phone
 * @property $position_id
 * @property $company_id
 * @property $departament_id
 * @property $date_of_admission
 * @property $date_of_egress
 * @property $digdoc
 * @property $date_of_digdoc
 * @property $observation
 * @property $files
 * @property $location_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Branch $branch
 * @property Departament $departament
 * @property Location $location
 * @property Position $position
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    use HasFactory;
    
    static $rules = [
		'status' => 'required',
		'cod' => 'required|unique:employees,cod',
		'dni' => 'required|unique:employees,dni',
		'position_id' => 'required',
		'company_id' => 'required',
		'departament_id' => 'required',
		'date_of_admission' => 'required',
		'location_id' => 'required',
        'phone'=> 'required|unique:employees,phone'
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['status','cod','dni','nac','first_lastname','second_lastname','birthday','gender','phone','position_id','company_id','departament_id','date_of_admission','date_of_egress','digdoc','date_of_digdoc','observation','files','location_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function branchs()
    {
        return $this->belongsTo(Branches::class, 'company_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departaments()
    { 
        return $this->belongsTo(Departaments::class, 'departament_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function locations()
    {
        return $this->belongsTo(Locations::class, 'location_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function positions()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    

}
