<?php namespace App\Http\Controllers;  
  
use DB;  
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redis;
use App\Name;
	class AdminController extends Controller {
		public function index(){
			
			return view('admin/index');
		}
		public function tianadd(){
			$name = $_POST['name'];
			$pwd = $_POST['pwd'];
			// print_r($name);die;
			$model = new Name;
			$res = $model->where(['name'=>$name,'pwd'=>$pwd])->first()->toArray();
			$id = $res['id'];
			if($res){
            return redirect('admin/rizhi?id='.$id);
            
        }else{
            echo '呵呵，出错了';
        }
		}
		public function rizhi(){
			$userid = Input::get('id');
			if($userid){
				return view('admin/rizhi',['userid'=>$userid]);
			}else{
				echo '没有用户的id,报错!!';
			}
		}
	public function add(){
		$data = $_POST;
		if($data){
			// $data = unset($data['_token']);
		// print_r($data);die;
		$res = DB::table('rizhi')->insert(['time'=>$data['time'],'content'=>$data['content'],'type'=>$data['type'],'userid'=>$data['userid']]);
		if($res){
			if($data['type'] == 1){

				$arr['time'] = $data['time'];
				$arr['content'] = $data['content'];
				$arr['type'] = $data['type'];
				$arr['userid'] = $data['userid'];

				$arr=serialize($arr);
		
				$redis = Redis::Lpush('news',$arr);
				echo '日志申请成功！！';
			}else{
				echo '日志创建成功，但不提醒(未选择默认为不提醒)!!';
			}
			
		}else{
			echo '日志入库失败',die;
		}
		
		}else{
			echo '提交有误';die;
		}
		
	}
	

}
