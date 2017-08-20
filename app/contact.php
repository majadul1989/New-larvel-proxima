<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class contacts extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'ContactName','ContactPhone','ContactEmail','RowDescription','RowStatus','AddBy','UpdatedBy', 'create_at',
    ];

// public function branchRelation(){
// 	$branches = DB::table('branches')
//             ->join('users', 'users.id', '=', 'branches.user_id')
//             ->paginate(2);
//     return $branches;
// }


}
