<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('/bootstrap.min.css') }}">
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>销售员</td>
            <td>是否共享</td>
            <td>客户名称</td>
            <td>客户编号</td>
            <td>客户简称</td>
            <td>电话</td>
            <td>邮箱</td>
            <td>地区</td>
            <td>详情地址</td>
            <td>客户来源</td>
            <td>客户类型</td>
            <td>销售方式</td>
            <td>备注</td>
            <td>操作</td>
        </tr>
        @foreach($client_info as $v)
        <tr>
            <td>{{$v->client_id}}</td>
            <td>{{$v->admin_name}}</td>
            <td>{{$v->is_share==1?'展示':'不展示'}}</td>
            <td>{{$v->client_name}}</td>
            <td>{{$v->client_coding}}</td>
            <td>{{$v->client_short}}</td>
            <td>{{$v->tel}}</td>
            <td>{{$v->email}}</td>
            <td>{{$v->region}}</td>
            <td>{{$v->address}}</td>
            <td>{{$v->client_source}}</td>
            <td>{{$v->cource_type}}</td>
            <td>{{$v->sales}}</td>
            <td>{{$v->remark}}</td>
            <td>
                <a href="{{url('client/del/').'/'.$v->client_id}}">删除</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{$client_info->links()}}
</body>
</html>