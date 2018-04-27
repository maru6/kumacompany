@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">

                <hr>

                <!-- @include('common.error') -->

                    <form action="{{ route('messages.store') }}" method="POST" accept-charset="UTF-8">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <!-- <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('address') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('deployment') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('responsible_name') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('phone') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('fax') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('email') }}" placeholder="请填写公司名称" required/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="company_name" value="{{ old('content') }}" placeholder="请填写公司名称" required/>
                    </div> -->

                    <!-- <div class="form-group">
                        <textarea name="body" class="form-control" id="editor" rows="3" placeholder="请填入至少三个字符的内容。" required></textarea>
                    </div> -->






                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 保存</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
