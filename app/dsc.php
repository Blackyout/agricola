<?php namespace agricolacentral;

use Illuminate\Database\Eloquent\Model;

class dsc extends Model {

  protected $table = 'dscs';
  protected $fillable = ['fecha','Num_Cont', 'Actividad','val_contra','apor_se_soci','aport_volu','aport_afc','decla_renta','ingre_corr','ingre_anual'];

public function scopeBuscar($query,$Num_Cont)
{
  if (trim($Num_Cont) !="")
  {
    $query->where(\DB::raw("CONCAT(Num_Cont,' ')"),"LIKE","%$Num_Cont%");
  }

}

}
