<!DOCTYPE html>
<html>
<head>
	<title>Show danh sách</title>
	<link rel="stylesheet" href="{{Asset('assets/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{Asset('assets/css/style.css')}}"/>
</head>
<body>
<div class="containner">
	<div class="row">
		<div class="col-md-12">

			@if($sucess = Session::get('bao_thanh_cong'))
				{{ $sucess }}
			@endif

			@if($error = Session::get('bao_loi'))
				{{ $error }}
			@endif

			<form action="search" method="get" class="search" >
            <input class="search1" type="text" placeholder="TÌM KIẾM" name="keyword" />
            <input class="search1-buttom" type="submit" value="Tìm Kiếm" />
         </form> 

			<table class="table table-bordered table-striped table-condensed flip-content">
				<thead class="flip-content">
					<tr>
						<th width="5%">ID</th>
						<th>Tên Sinh Viên</th>
						<th>Ngày Sinh</th>
						<th>Quê Quán</th>
						<th>Điện Thoại</th>
						<th>Lớp Học</th>
						<th>Email</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>

				<tbody>
				<?php
					$i = 0;
					foreach($students as $val){
					$i++;
				?>
				<tr>
					<td> {{ $i }} </td>
					<td> {{ $val->tensv }} </td>
					<td> {{ $val->ngaysinh }} </td>
					<td> {{ $val->quequan }} </td>
					<td> {{ $val->dienthoai }} </td>
					<td> {{ $val->lophoc }} </td>
					<td> {{ $val->email }} </td>

				 	<form action="{{ asset('delete') }}" method="post">
	               <td class="numeric">
		               <a href="{{ route('edit_id_detail', [$val->id]) }}" class="btn default btn-xs purple"><i class="fa fa-edit"></i>
		               	Sửa
		            	</a>
	            	</td>
	               <td class="numeric">
		               <input type="hidden" name="id" value="{{ ($val->id) }}" />
		               <input class="delete" type="submit" value="Xóa" /></a><strong></strong>
	            	</td>
               </form>
				</tr>
				<?php } ?>
				<a href="{{ asset('dangky') }}" class="quaylai">Đăng Ký</a>
		   </tbody>
			</table>

			{{ $students->links() }} <!-- phân trang -->       
		</div>
	</div>
</div>
</body>
</html>
