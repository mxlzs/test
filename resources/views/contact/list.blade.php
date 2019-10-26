<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('/bootstrap.min.css')}}">
</head>
<body>
<caption><h3>联系人列表</h3></caption>
<!-- <form>
	<input type="text" name="goods_name" value="{{$query['goods_name']??''}}" >
	<button class="btn btn-warning">搜索</button>

</form> -->
<table class="table table-bordered">
  
  <thead>
    <tr>
      <th>联系人ID</th>
      <th>客户单位</th>
      <th>联系人职位</th>
      <th>姓名</th>
      <th>性别</th>
      <th>生日</th>
      <th>爱好</th>
      <th>家庭住址</th>
      <th>电话</th>
      <th>EMAIL</th>
      <th>备注</th>
      <th>操作</th>
    </tr>
  </thead>
  @foreach($data as $v)
  <tbody>
    <tr>
      <td>{{$v->contact_id}}</td>
      <td>{{$v->client_unit}}</td>
      <td>{{$v->contact_job}}</td>
      <td>{{$v->contact_name}}</td>
      <td>{{$v->contact_sex}}</td>
      <td>{{$v->contact_birthday}}</td>
      <td>{{$v->contact_hobby}}</td>
      <td>{{$v->contact_address}}</td>
      <td>{{$v->contact_tel}}</td>
      <td>{{$v->contact_email}}</td>
      <td>{{$v->contact_remark}}</td>
      <td>
      	<a href="">编辑</a> |
      	<a href="{{url('contact/delete/').'/'.$v->contact_id}}">删除</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$data->links()}}
</body>
</html>