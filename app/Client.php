<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = 'clients';
	protected $fillable = ['name','last_name','identification','email','depart_id','city_id','address','phone'];

    public function depart()
    {
        return $this->belongsTo('\agricolacentral\Depart');
    }

    public function city()
    {
        return $this->belongsTo('\agricolacentral\City');
    }

    public function accounts()
    {
        return $this->hasMany('\agricolacentral\Account');
    }


		public function scopeName($query,$name)
		{
		  if (trim($name) !="")
		  {
		    $query->where(\DB::raw("CONCAT(Name,' ',last_name,' ',identification)"),"LIKE","%$name%");
		  }

		}



}
