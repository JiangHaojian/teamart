@extends('layouts.newapp')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Panel title</h3>
            <hr>
            <h3 class="panel-title"><a href="{{url('/admin/distributor/create')}}">添加分销员</a></h3>
            <form action="{{url('/admin/distributor/search')}}" method="get">
                <input type="text" name="string">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">
                    搜索分销员
                </button>
            </form>
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>id</th>
                        <th>用户名</th>
                        <th>类型</th>
                        <th>返利比例</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users->where('type',1) as $user)
                        <tr>
                            <th></th>
                            <th>{{$user->id}}</th>
                            <th>{{$user->name}}</th>
                            <th>{{App\user::TYPE[$user->type]}}</th>
                            <th>{{$user->proportion}}</th>
                            <th>
                                <a href={{url('/admin/distributor/'.$user->id.'/edit')}}>编辑</a>
                                <form action={{url('admin/users/'.$user->id.'')}} method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type ="submit">
                                        删除
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection