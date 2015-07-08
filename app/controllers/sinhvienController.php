<?php

class sinhvienController extends BaseController {

	public function __construct(SinhVien $sv) {
		$this->bangsinhvien = $sv;
	}

	/*
	  Hien thi trang form dang ky
	 */
	public function getFormLogin() {
		return View::make("dangkysinhvien");
	}


	/**
	 * Lay danh sach sinh vien
	 * 
	 * @return View
	 */
	public function getAllSv()// show toàn bộ dlieu trong 1 bảng
	{

		//phân 5 bản ghi 1 trang
		$students = $this->bangsinhvien->getPaginated(5, Input::all());
		
		// trả về file showdanhsach.blade.php biến $students 
		return View::make('showdanhsach', compact('students'));	
	}   

	/*
	  lấy dữ liệu nhập từ view về
	*/
	public function take_data_view() {

		$rules = [ //điều kiện kiểm trả nhập trống
			'tensv'     => 'required',
			'ngaysinh'  => 'required',
			'quequan'   => 'required',
			'dienthoai' => 'required',
			'lophoc'    => 'required',
			'email'     => 'required',
		];

		$messages = [  //in ra thông báo ô trống
			'tensv.required'     => 'Vui lòng nhập tên',
			'ngaysinh.required'  => 'Vui lòng nhập ngày sinh',
			'quequan.required'   => 'Vui lòng nhập quê quán',
			'dienthoai.required' => 'Vui lòng nhập điện thoại',
			'lophoc.required'    => 'Vui lòng nhập lớp học',
			'email.required'     => 'Vui lòng nhập email',
		];

		$validator = Validator::make(Input::all(), $rules, $messages);//thực thi

		if($validator->passes()) {
			$sv_obj    = new SinhVien();
			$tensv     = Input::get("tensv");
			$ngaysinh  = Input::get("ngaysinh");
			$quequan   = Input::get("quequan");
			$dienthoai = Input::get("dienthoai");
			$lophoc    = Input::get("lophoc");
			$email     = Input::get("email");

			if($sv_obj->insert_updateSv([ //thay vì if($news_obj->insertSv($tensv,$...))
				'tensv'     => $tensv,
				'ngaysinh'  => $ngaysinh,    
				'quequan'   => $quequan,   
				'dienthoai' => $dienthoai,   
				'lophoc'    => $lophoc,   
				'email'     => $email,    
				]))
			{
				return Redirect::to('/show')->with('bao_thanh_cong', 'Insert thanh cong');
			}
			else
			{
				return Redirect::back()->with('bao_loi', 'Insert that bai');
			}
		}else {			
			return Redirect::back()->withInput()->withErrors($validator);
		}
	}

	public function getEdit($id)
	{
		$edit = $this->bangsinhvien->find($id);
		return View::make('update', compact('edit'));//trả sang form 'update.blade.php' $edit mang dữ liệu của id
	}

	public function update_Sv()
	{
		$sv_obj 	=	new SinhVien();
		// $tensv     = Input::get("tensv");
		// $ngaysinh  = Input::get("ngaysinh");
		// $quequan   = Input::get("quequan");
		// $dienthoai = Input::get("dienthoai");
		// $lophoc    = Input::get("lophoc");
		// $email     = Input::get("email");
		$lay_giatri_vuathay_form_update = Input::all();  //thay vì viết dài dòng như trên
		if($sv_obj->insert_updateSv($lay_giatri_vuathay_form_update))
			{
				return Redirect::to('/show')->with('bao_thanh_cong', 'update thanh cong');
			}
			else
			{
				return Redirect::back()->with('bao_loi', 'update that bai');
			}
	}

	public function delete_Sv()
	{
		$sv_obj 	=	new SinhVien();
		$id = Input::get('id');
		if($sv_obj->deleteSv($id)){
			return Redirect::to('/show')->with('bao_thanh_cong', 'xoa thanh cong');
		}
		else
		{
			return Redirect::back()->with('bao_loi', 'xoa that bai');
		}
	}

	public function search(){
		$search = $this->bangsinhvien->getPaginatedForSearch(5, Input::all());
		return View::make('showsearch', compact('search'));	
	}

}//end class
