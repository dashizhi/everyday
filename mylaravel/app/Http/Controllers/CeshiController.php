<?php  
  
  
namespace App\Http\Controllers;  
  
use DB;  
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Login;
use Sensitive;
  
class CeshiController extends Controller  
{  
  
    public function index()  
    {  
        return view('cheshi/index');  
  
    }
    public function add(){
        $name = $_POST['name'];  
        $pwd = $_POST['pwd'];
        // print_r($name);die;
        $res = DB::table('lianxi1')->where(['name'=>$name,'pwd'=>$pwd])->first();
        if($res){
            return redirect('say');
        }else{
            echo '艹，密码或账户不正确';
        }
        
    }
    public function say(){
        return view('cheshi/say');
    }
    public function doadd(){
        $res = Input::all();
        // print_r($res);die;
        $model = new Login();

        $model->biaoti = $res['biaoti'];
        $model->content = $res['content'];
        $res=$model->save();
        if($res){
            return redirect('show');
        }else{
            echo '呵呵，出错了';
        }

    }
    public function show(){
        $model = new Login();
        $res = $model->get()->toArray();

        $interference = ['&', '*'];
        $filename = 'D:\phpStudy\WWW\train one\mylaravel\vendor\yankewei\laravel-sensitive\demo\words.txt'; //每个敏感词独占一行
        Sensitive::interference($interference); //添加干扰因子
        Sensitive::addwords($filename); //需要过滤的敏感词
        foreach ($res as $k => $val) {
            $res[$k]['content'] = Sensitive::filter($val['content']);
            $res[$k]['biaoti'] = Sensitive::filter($val['biaoti']);
        }

        // print_r($res);die;
        return view('cheshi/show',['res'=>$res]);
    }
    public function deletes(){

        $id = Input::get('id');
        $arr = DB::table('logins')->where('id',$id)->delete();
        if($arr){
            return redirect('show');
        }else{
            echo '删除失败,冷静';
        }
    }
    public function updates(){
        $id = Input::get('id');
        $model = new Login();
        $data = $model->where('id',$id)->first()->toArray();
        
        return view('cheshi/upd',['data'=>$data]);
    }
    public function doup(){
        $id = Input::get('id');
        $biaoti = Input::get('biaoti');
        $content = Input::get('content');
        $arr=array('biaoti'=>$biaoti,'content'=>$content);
        $ary = DB::table('logins')->where('id',$id)->update($arr);
        if($ary){
            return redirect('show');
        }

    }
 
   
  
}  