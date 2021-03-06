<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class DatasetCategory extends Model {

	protected $table = 'dataset_categories';
	protected $guarded = ['id'];

	public function subcategories() {
		return $this->hasMany( 'App\DatasetSubcategory', 'fk_dst_cat_id' );
	}

}
