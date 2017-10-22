<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //

	public $timestamps = false;
	protected $fillable = [
		'name',
		'admin_name',
		'admin_link_vk',
		'city',
		'admin_phone',
		'admin_phone_1',
		'admin_phone_2',
		'viber',
		'group_vk',
		'table_link',
		'site_link'

	];
}
