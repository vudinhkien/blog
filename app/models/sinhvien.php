<?php 
class SinhVien extends Eloquent{
	public $table="sinhvien";
	public $timestamps=false;
	/*
		hàm phân trang
	*/
	public function getPaginated($limit = 25) {
		return SinhVien::paginate($limit);
	}
	
	/*
		hàm phân trang cho search
	*/
	public function getPaginatedForSearch($limit = 25, array $receiveArray = array()) {
	$keyword = array_get($receiveArray, 'keyword');		

	$query = SinhVien::whereRaw(1);// tương đương với select * from sinhvien

	if($keyword) {
		$query->where('tensv', 'LIKE', '%'. $keyword .'%')
				->orWhere('dienthoai', 'LIKE', '%'. $keyword .'%');			      
	}

		return $query->paginate($limit);
	}

	/*
	 	hàm thêm sinh viên
	*/
	public function insert_updateSv($data)
	{	
		$id = Input::get("id");
		if(!($id)){
			$SinhVien  = new SinhVien;
		}else{
			$SinhVien = SinhVien::find(array_get($data, 'id'));		//tìm id đã có trong data	
		}
		$SinhVien->tensv     = array_get($data, 'tensv');
		$SinhVien->ngaysinh  = array_get($data, 'ngaysinh');
		$SinhVien->quequan   = array_get($data, 'quequan');
		$SinhVien->dienthoai = array_get($data, 'dienthoai');
		$SinhVien->lophoc    = array_get($data, 'lophoc');
		$SinhVien->email     = array_get($data, 'email');
		return $SinhVien->save();
		
	}

	public function deleteSv($id)
	{
		return $this->where('id',$id)->first()->delete();
	}
	
}//end class

