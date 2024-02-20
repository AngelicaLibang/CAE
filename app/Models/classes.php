<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
	protected $table = 'classes';
	protected $primaryKey = 'class_id';
	public $timestamps = false;

	protected $casts = [
		'subject_id' => 'int',
		'faculty_id' => 'int'
	];

	protected $fillable = [
		'room',
		'schedule',
		'subject_id',
		'faculty_id'
	];
}
