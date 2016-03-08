@extends('layouts.admin')

@section('content')

    @foreach( $errors->all() as $error )

        <p>{{ $error }}</p>
    @endforeach
    <div class="row">
        <form action="{!! route('postCreateUser') !!}" class="form" role="form" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <span class="form-horizontal">
                    <input type="radio" class="checkbox-inline" name="gender" value="0">
                Male
                <input type="radio" class="checkbox-inline" name="gender" value="1">
                Female
                </span>
            </div>
            <div class="form-group">
                <label for="">Phone </label>
                <input type="tel" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Nationality</label>
                <select name="country_id" class="form-control">
                    <option>Select Country</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Education</label>
                <a class="btn-info btn btn-sm pull-right">
                    <i class="glyphicon glyphicon-plus-sign ">
                        Add Education
                    </i>
                </a>
            </div>
            <div class="form-group">
                <select name="education_level[0][education_level]" class="col-xs-4">
                    <option>Choose Education</option>
                </select>
                <input type="text" name="education[0][institution]" placeholder="Institution" class="col-xs-4">
                <input type="text" name="education[0][passed_year]" placeholder="Passed Year" class="col-xs-4">
            </div>
            <div class="form-group">
                <select name="education_level[1][education_level]" class="col-xs-4">
                    <option>Choose Education</option>
                </select>
                <input type="text" name="education[1][institution]" placeholder="Institution" class="col-xs-4">
                <input type="text" name="education[1][passed_year]" placeholder="Passed Year" class="col-xs-4">
            </div>
            <div class="form-group">
                <label>&nbsp;</label>
                <button type="submit" class="btn btn-success"> Save </button>
            </div>

        </form>
    </div>

@stop