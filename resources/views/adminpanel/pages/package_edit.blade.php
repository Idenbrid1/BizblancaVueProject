@extends('adminpanel.layout.master')
<!-- ================================== EXTEND TITLE AND META TAGS ============================= -->
@section('title-meta')
<title>Bizblanca | Packages</title>
<meta name="description" content="this is description">
@endsection
<!-- ====================================== EXTRA CSS LINKS ==================================== -->
@section('other-css')
@endsection
<!-- ======================================== BODY CONTENT ====================================== -->
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Create Packages</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Packages</a>
            </li>
            <li class="active">
                <strong>Create</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="ibox-content">
            <form method="post" class="form-horizontal" action="{{route('admin.packages.update', $package->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" value="{{$package->title}}" name="title" required>
                    </div>
                    <label class="col-sm-2 control-label">Amount</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" value="{{$package->amount}}" name="amount" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-4">
                        <input type="file"   class="form-control" name="image" value="{{$package->image}}">
                    </div>
                    <label class="col-sm-2 control-label">Job Post</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="job_post" value="{{$package->job_post}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Scout/Connent</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" name="connect" value="{{$package->connect}}"  required>
                    </div>
                    <label class="col-sm-2 control-label">Phone/Email</label>
                    <div class="col-sm-4">
                        <select name="is_personal_show" value="{{$package->title}}">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <label class="col-sm-2 control-label">Duration in days</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" value="{{$package->duration}}" name="duration"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-4">
                        <textarea name="description" id="" cols="50" rows="5" value="{{$package->description}}" required>{{$package->description}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Update Package</button>
                    </div>
                </div>

            </form>
        </div>
        <br>
    </div>
</div>
@endsection
<!-- ======================================== FOOTER PAGE SCRIPT ======================================= -->
@section('other-script')
<script>
    $(document).ready(function () {
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>
@endsection

