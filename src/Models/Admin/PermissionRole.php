<?php

namespace Giwrgos88\Game\Core\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model {

	protected $primaryKey = 'id';

	/**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'permission_role';

	/**
	 * Indicates if the model should be timestamped.
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['permission_id', 'role_id'];
}
