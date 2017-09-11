<?php
namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use App\Student;
//use Psy\Command\WhereamiCommand;
class StudentController extends Controller{
	public function test1(){
		return 'test1';
		//查询
		//$arr = DB::select('select * from student');
		//dd($arr);
		//增加
		//$bool = DB::insert('insert into student(name,age) value(?,?)',
		//['mooc',18]);
		//修改
		//$result = DB::update('update student set age=? where name=?',
				//[17,'chao']);
		//var_dump($result);
		//删除
		//$num = DB::delete('delete from student where id=?',
			//	[2]);
		//dd($num);
	}
	public function query(){
		
		//新增一条数据
		//$boll = DB::table('student')->insert(
			//	['name'=>'mooc','age'=>18]);
		//dd($boll);
		//新增多条数据
		
		/*  $boll = DB:: table('student')->insert(
				[
				['name'=>'qioadan','age'=>26],
				['name'=>'kebi','age'=>30],
				['name'=>'weide','age'=>26]
				]);
		var_dump($boll);  */
		//更新
		/* $num = DB::table('student')
			->where('id',6)
			->update(['age'=>19]);
		var_dump($num); */
		//increment 自增 默认加一  

		//$num = DB::table('student')->increment('age'); 
		
		
		//$num = DB::table('student')->increment('age',3); 
		
		//decrement 自减  默认减一
		
		//$num = DB::table('student')->decrement('age');

		//$num = DB::table('student')->decrement('age',3);
		
		
		//$num = DB::table('student')->Where('id',4)->decrement('age', 3 ,['name'=>'baeec']);
		
		//dd($num);
		//删除
		/* $num = DB:: table('student')
		->delete(['id'=>5]);*/
		
		//$num = DB:: table('student')
		//->where('id','>=', 4)->delete();
		//var_dump($num);
		
		//truncate（）清空表
		//DB::table('student')->truncate();
		
		//查询 get 获取所有记录
		/* $arr = DB::table('student')
		->get();
		dd($arr); */
		
		
		//first 获取一条数据
		/* $one = DB::table('student')
		->orderBy('id','desc')
		->first();
		dd($one); */
		
		//where 
		/* $arr = DB::table('student')
		->where('id','>=',2)
		->get();
		dd($arr); */
		
		//whereRaw 多条件查询
		/* $arr = DB::table('student')
		->whereRaw('id >= ? and age > ?',[2,25])
		->get();
		dd($arr); */
		
		//Pluck 返回结果集中指定的字段
		/* $names = DB::table('student')
		->pluck('name');
		dd($names); */
		
		//lists 返回结果集中指定的字段和对应的下标
		/* $names = DB:: table('student')
		->lists('name','id');
		dd($names); */
		//
		//selsect 查询指定的字段
		/* $arr = DB::table('student')
		->select('id','name','age')
		->get();
		dd($arr); */
		
		//chunk 查一万条数据  分段返回 一万条数据
		/* echo '<pre>';
		DB::table('student')
		->chunk(1,function($students){
			
			if($students==1){
			return false;
			}
			var_dump($students);
		}); */
		
		//count查询总记录数
		/* $num = DB::table('student')
		->count();
		var_dump($num); */
		
		
		//max 返回最大值
		$num = DB::table('student')
		->max('age');
		var_dump($num);
		
		//min 返回最小值
		$num = DB::table('student')
		->min('age');
		var_dump($num);
		
		//avg 返回平均值
		$num = DB::table('student')
		->avg('age');
		var_dump($num);
		
		//sum 相加的和
		$num = DB::table('student')
		->sum('age');
		var_dump($num);
		
	}
	function orm1(){
		$students =Student::all();
		dd($students);
}
}