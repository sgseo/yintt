<?php
// 本类由系统自动生成，仅供测试用途
class AutoAction extends ACommonAction {
	private $updir = NULL;
	public function _MyInit(){
		Mheader("gbk");
		$this->updir = dirname(C("WEB_ROOT"))."/AutoDo/";
	}
	public function index(){
		$res = file_get_contents($this->updir."config.txt");
		$this->assign("vo",explode("|",$res));
		$this->display();
	}
	public function save(){
		$str = text($_POST['o_time'])."|";
		$str .= text($_POST['o_rate'])."|";
		$str .= text($_POST['o_key']);
		$res = file_put_contents($this->updir."config.txt",$str);
		if($res) $this->success("保存成功,如执行时间有改动，请重启程序");
		else $this->error("保存失败,请重试");
	}
	
	public function start(){
		exec($this->updir."l_start_zs.exe -1",$out,$status);
		print_r($out);
	}
	public function close(){
		$s = exec($this->updir."l_close_zs.exe -1",$out,$status);
		print_r($out);
	}
	public function startServer(){
		exec($this->updir."startserver.exe -1",$out,$status);
		print_r($out);
	}
	public function stopServer(){
		exec($this->updir."stopserver.exe -1",$out,$status);
		print_r($out);
	}
	public function showstatus(){
		exec($this->updir."showstatus.exe -1",$out,$status);
		print_r($out);
	}
}