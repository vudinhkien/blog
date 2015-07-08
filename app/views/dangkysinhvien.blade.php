<!DOCTYPE html>
<html>
<head>
	<title>Đăng ký sinh viên</title>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>
</head>
<body>
<div class="containner">
	<div class="row">
		
		<fieldset>
			<legend> Đăng Ký Sinh Viên</legend>
				<form action="{{ asset('xuly') }}" method="post">
					Tên Sinh Viên
					<input type="text" name="tensv" value="{{ Input::old('tensv') }}" id="tensv" class="form-control">
					Ngày Sinh
					<input type="date" name="ngaysinh" value="{{ Input::old('ngaysinh') }}" id="ngaysinh" class="form-control">
					Quê Quán 
					<input type="text" name="quequan" id="quequan" value="{{ Input::old('quequan') }}" class="form-control">
					Điện Thoại 
					<input type="text" name="dienthoai" id="dienthoai" value="{{ Input::old('dienthoai') }}" class="form-control">
					Lớp Học
					<input type="text" name="lophoc" id="lophoc" value="{{ Input::old('lophoc') }}" class="form-control">
					Email 
					<input type="email" name="email" id="email" value="{{ Input::old('email') }}" class="form-control">
					<button type="submit" class="btn btn-effect-ripple btn-primary">Đăng Ký</button>
					<button type="reset" class="btn btn-effect-ripple btn-danger">Hủy Bỏ</button>
				</form>
		</fieldset>
	</div>
</div>
</body>
</html>