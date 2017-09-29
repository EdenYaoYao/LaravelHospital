<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    const TYPE_ANGIOOCARPY = 2;//心血管内科
    const TYPE_NERVE = 3;//神经内科
    const TYPE_ORTHOPAEDIC = 4;//骨科
    const TYPE_URINARY= 5;//泌尿外科
    const TYPE_OBSTETRICS = 6;//产科
    const TYPE_DIAGNOSE = 7;//产前诊断科
    const TYPE_PEDIATRIC = 8;//儿科
    const TYPE_CH_MEDICINE = 9;//中医科


    protected $table = 'doctors';

    protected $fillable = ['name', 'sex', 'image', 'graduate', 'major', 'position',
        'info', 'dept_id'];
}
