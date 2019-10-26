<link rel="stylesheet" href="{{ URL::asset('/bootstrap.min.css') }}">


    <center><h2 class="lead">新建客户</h2></center>
<form class="form-horizontal" action="{{url('/client/create_do')}}" method="post" role="form" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">销售员:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="admin_name" id="firstname" placeholder="请输入销售员">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">是否共享客户</label>
    <div class="col-sm-10">
      <input type="radio" value="1" name="is_share" >是
      <input type="radio" value="2" name="is_share" checked>否
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户名称:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="client_name" id="lastname" placeholder="请输入客户名称">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户简称:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="client_short" id="lastname" placeholder="请输入客户简称">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户编号:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="client_coding" id="lastname" placeholder="请输入客户编号">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户电话:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="tel" id="lastname" placeholder="请输入客户电话">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户邮箱:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" id="lastname" placeholder="请输入客户邮箱">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">地区:</label>
    <div class="col-sm-10">
      <select class="dropdown-header dropdown-menu" name="region">
        @foreach($city as $v)
          <option>{{$v->name}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">详情地址:</label>
    <div class="col-sm-10">
      <textarea name="address" cols="100" rows="5"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户来源:</label>
    <div class="col-sm-10">
      <select class="dropdown-header dropdown-menu" name="client_source">
          <option>广告</option>
          <option>朋友推荐</option>
          <option>抖音</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">客户类别:</label>
    <div class="col-sm-10">
      <select class="dropdown-header dropdown-menu" name="sales">
          <option>新用户</option>
          <option>老用户</option>
          <option>潜在用户</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">销售类别:</label>
    <div class="col-sm-10">
      <select class="dropdown-header dropdown-menu" name="cource_type">
          <option value="1">零售</option>
          <option value="2">批售</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">备注:</label>
    <div class="col-sm-10">
      <textarea name="remark" cols="100" rows="5"></textarea>
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">商品图片:</label>
    <div class="col-sm-10">
      <input type="file" name="goods_img"  id="lastname">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">是否展示</label>
    <div class="col-sm-10">
      <input type="radio" value="1" name="is_show" checked>是
      <input type="radio" value="2" name="is_show">否
    </div>
  </div> -->
  
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-success">添加</button>
    </div>
  </div>
</form>
