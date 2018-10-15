<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositoPendiente extends Model
{
	protected $fillable = [
		'cod_local', 
		'dia_mes',
		'fecha_mes',
		'num_doc_jef_zona',
	];
}
