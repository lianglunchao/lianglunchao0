<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
class Student extends Model{
	protected $table="student";//指定表名
	
	protected $primarykey = 'id';
	
}