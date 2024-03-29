<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'description',
		'amount',
	];

	protected $casts = [
		'amount' => 'float',
	];
}
