<!DOCTYPE html>
<html>
<head>
	<title>Sửa sinh viên</title>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>
</head>
<body>
<div class="containner">
	<div class="row">
		
		<fieldset>
			<legend> Update Sinh Viên</legend>
				<form action="{{ asset('updateSv') }}" method="post">
					Tên Sinh Viên
					<input type="text" name="tensv" value="{{ Input::old('tensv', $edit->tensv) }}" id="tensv" class="form-control">
					Ngày Sinh
					<input type="date" name="ngaysinh" value="{{ Input::old('ngaysinh',$edit->ngaysinh) }}" id="ngaysinh" class="form-control">
					Quê Quán 
					<input type="text" name="quequan" id="quequan" value="{{ Input::old('quequan',$edit->quequan) }}" class="form-control">
					Điện Thoại 
					<input type="text" name="dienthoai" id="dienthoai" value="{{ Input::old('dienthoai',$edit->dienthoai) }}" class="form-control">
					Lớp Học
					<input type="text" name="lophoc" id="lophoc" value="{{ Input::old('lophoc', $edit->lophoc) }}" class="form-control">
					Email 
					<input type="email" name="email" id="email" value="{{ Input::old('email', $edit->email) }}" class="form-control">
					<input type="hidden" name="id" value="{{ $edit->id }}" />
					<button type="submit" class="btn btn-effect-ripple btn-primary">Cập Nhật</button>
					<a href="{{ asset('show') }}" class="quaylai">Quay Lại</a>
					<button type="reset" class="btn btn-effect-ripple btn-danger">Hủy Bỏ</button>
				</form>
		</fieldset>
		
	</div>
</div>
</body>
</html>