<!DOCTYPE html>
<html>
<head>
	<title>Tim Kiem danh sách</title>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>
</head>
<body>
<div class="containner">
		<div class="row" style="font-weight:bold; text-align:center">
			@foreach ($search as $a)
			<div class="col-md-4">Tên Sinh Viên: {{ $a->tensv }}</div>
			<div class="col-md-4">Số Điện Thoại: {{ $a->dienthoai }}</div>
			<div class="col-md-4">Quê Quán: {{ $a->quequan }}</div>
			@endforeach
		</div>
</body>
</html>