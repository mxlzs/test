<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="{{URL::asset('/bootstrap.min.css')}}">
</head>
<body>
    <center><h2 class="lead">联系人添加</h2></center>
<form class="form-horizontal" role="form" method="post" action="{{url('contact/create')}}" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">客户单位:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="client_unit" id="firstname" placeholder="请输入客户单位">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">联系人职业:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_job" id="lastname" placeholder="请输入联系人职业">
    </div>
  </div>
   <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">姓名:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_name" id="lastname" placeholder="请输入姓名">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">性别:</label>
    <div class="col-sm-10">
      <input type="radio"  name="contact_sex" id="lastname" value="1">男
      <input type="radio"  name="contact_sex" id="lastname" value="1">女
    </div>
  </div>
  
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">生日:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_birthday" id="lastname" placeholder="请输入生日">
    </div>
  </div>
 <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">爱好:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_hobby" id="lastname" placeholder="请输入爱好">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">家庭住址:</label>
    <div class="col-sm-10">
      <textarea name="contact_address" placeholder="请输入生日"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">电话:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact_tel" id="lastname" placeholder="请输入电话">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">EMAIL:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="contact_email" id="lastname" placeholder="请输入邮箱">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">备注:</label>
    <div class="col-sm-10">
      <textarea name="contact_remark" id="lastname"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-success">添加</button>
    </div>
  </div>
</form>
</body>
</html>