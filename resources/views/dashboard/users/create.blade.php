@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        @if(session()->has('massage'))
            <div class="alert alert-success">
                {{session()->get('massage')}}
            </div>
        @endif
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">إضافة مستخدم</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="/dashboard/users">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputName1">الإسم</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" id="exampleInputName1" placeholder="أدخل الإسم">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">البريد الإلكتروني</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="أدخل البريد الإلكتروني">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">كلمة المرور</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="كلمة المرور">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">تأكيد كلمة المرور</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleInputPassword1" placeholder="تأكيد كلمة المرور">
                        @error('password_confirmation')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">إرسال</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>

@endsection
