@extends('layouts.admin')

@section('content')

    @foreach( $errors->all() as $error )

        <p>{{ $error }}</p>
    @endforeach
    <div class="row" ng-controller="UserCtrl as user">
        <form action="{!! route('postCreateUser') !!}" class="form" role="form" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Gender</label>

                    <input type="radio" class="checkbox-inline" name="gender" value="0">
                Male
                <input type="radio" class="checkbox-inline" name="gender" value="1">
                Female

            </div>
            <div class="form-group">
                <label for="">Phone </label>
                <input type="tel" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group">
                <label for="">Nationality</label>
                <select name="country" class="form-control">
                    @foreach( $countries as $country )
                        <option value="{{ $country->code() }}">{{ $country->name() }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Date of Birth</label>
                <input type="text" class="form-control" name="dob">
            </div>
            <div class="form-group">
                <label>Education</label>
                <a class="btn-info btn btn-sm pull-right" ng-click="user.addEducation()">
                    <i class="glyphicon glyphicon-plus-sign ">
                        Add Education
                    </i>
                </a>
            </div>

            <div class="form-group" ng-repeat="education in user.educations track by $index">
                <select class="col-xs-4"
                        name="education[@{{ $index }}][name]"
                        ng-model="educationSelect"
                    ng-options="educationList.name for educationList in user.allEducations track by educationList.name"
                >
                    <option value="">Choose Education</option>
                </select>
                <input type="text" name="education[@{{ $index }}][institution]" placeholder="Institution" class="col-xs-4">
                <input type="text" name="education[@{{ $index }}][passed_year]" placeholder="Passed Year" class="col-xs-4">
            </div>
            <div class="form-group">
                <label for="">Mode of Contact</label>
                <select name="contact_mode" class="form-control">
                    <option>Select Mode of Contact</option>
                    @foreach( $contactModes as $slug => $contactMode )
                        <option value="{{ $slug }}">{{ $contactMode }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>&nbsp;</label>
                <button type="submit" class="btn btn-success"> Save </button>
            </div>

        </form>
    </div>

@stop