<?php

namespace App\Model;

//use Illuminate\Database\Capsule\Manager as DB;
use \Illuminate\Database\Eloquent\Model;

class SubjectModel extends Model
{

    protected $table = 'subject';

    public $timestamps = false;

    protected $fillable = array('titleSubject', 'contentSubject', 'dateSubject');


    public function cat()
    {
        return $this->belongsTo('App\Model\CategoryModel','idCat','idCat');

    }

    public function user()
    {
        return $this->belongsTo('App\Model\UserModel','idUser','idUser');
    }

    public function comment()
    {
        return $this
        	->HasMany('App\Model\CommentModel', 'idSubject', 'idSubject');
            // ->selectRaw('idSubject, count(idSubject) as countSubject')
            // ->groupBy('idSubject')
            //->orderBy('dateSubject');
    }

     public function vote()
    {
        return $this
            ->HasMany('App\Model\VoteModel', 'idVote', 'idVote');
            // ->selectRaw('idSubject, count(idSubject) as countSubject')
            // ->groupBy('idSubject')
            //->orderBy('dateSubject');
    }
}

?>