
@extends("profiles.layouts.userMain")

@section("userContent")

<div class="form-group row">
    <label class="col-lg-2 col-form-label offset-lg-1 form-control-label">First name</label>
    <div class="col-lg-9">
        <input class="form-control" type="text" value="{{old('name',$user->name)}}" name="name" />
    </div>
</div>

<div class="form-group row">
    <label class="col-lg-2 col-form-label offset-lg-1 form-control-label">Bio</label>
    <div class="col-lg-9">
        <textarea class="form-control">{{old('bio',$user->bio)}}</textarea>
    </div>
</div>

<div class="form-row text-center">
    <div class="col-12">
    <button type="submit" class="btn btn-primary">Update Profile</button>
    </div>
</div>
@endsection




      