@extends('layout.main2')

@section('section1')

<div class="py-5">
<div class="container">
<div class="row">

<aside class="col-md-4">
<div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
<div class="py-4 px-3 border-bottom">
<img src="{{asset('public_theme/images/user/s4.png')}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
<h5 class="font-weight-bold text-dark mb-1 mt-4">Gurdeep Osahan</h5>
<p class="mb-0 text-muted">UI / UX Designer</p>
</div>
<div class="p-4">
<label data-toggle="tooltip" data-placement="top" data-original-title="Upload New Picture" class="btn btn-info m-0" for="fileAttachmentBtn">
<i class="mdi mdi-image"></i> Upload
<input id="fileAttachmentBtn" name="file-attachment" type="file" class="d-none">
</label>
<button data-toggle="tooltip" data-placement="top" data-original-title="Delete" type="submit" class="btn btn-danger"><i class="mdi mdi-delete"></i> Delete</button>
</div>
</div>
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">About</h6>

</div>
<div class="box-body">
<div class="p-3">
<div class="form-group mb-4">
<label class="mb-1">BIO</label>
<div class="position-relative">
<textarea class="form-control" rows="4" name="text" placeholder="Enter Bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor :)</textarea>
</div>
</div>
<div class="form-group mb-0">
<label class="mb-1 w-100">SKILLS</label>
<div class="custom-control custom-checkbox d-inline mr-3">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">JavaScript, jQuery</label>
</div>
<div class="custom-control custom-checkbox d-inline">
<input type="checkbox" class="custom-control-input" id="customCheck2">
<label class="custom-control-label" for="customCheck2">HTML5, CSS3</label>
</div>
</div>
</div>
</div>
</div>
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Social profiles</h6>
<p class="mb-0 mt-0 small">Add elsewhere links to your profile.
</p>
</div>
<div class="box-body">
<div class="p-3">
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-instagram position-absolute text-muted"></i>
 <input placeholder="Add Instagram link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-facebook position-absolute text-muted"></i>
<input placeholder="Add Facebook link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-twitter position-absolute text-muted"></i>
<input placeholder="Add Twitter link" type="text" class="form-control">
</div>
</div>
</div>
</div>
</aside>
<main class="col-md-8">
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Edit Basic Info</h6>
<p class="mb-0 mt-0 small">Lorem ipsum dolor sit amet, consecteturs.
</p>
</div>
<div class="box-body p-3">
<form class="js-validate" novalidate="novalidate"    enctype="multipart/form-data">
<div class="row">

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
First Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="name" value="Gurdeep Osahan" placeholder="Enter your name" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>


<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
    last Name

<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="username" value="iamosahan" placeholder="Enter your username" aria-label="Enter your username" required="" aria-describedby="usernameLabel" data-msg="Please enter your username." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>

</div>

<div class="row">

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="emailLabel" class="form-label">
Email address
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="email" class="form-control" name="email" value="iamosahan@gmail.com" placeholder="Enter your email address" aria-label="Enter your email address" required="" aria-describedby="emailLabel" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
    <div class="js-form-message">
    <label id="phoneNumberLabel" class="form-label">
    Phone number
    <span class="text-danger">*</span>
    </label>
    <div class="form-group">
    <input class="form-control" type="tel" name="phoneNumber" value="+91 85680 79956" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
    </div>
    </div>
   
    </div>


</div>

</form>
</div>
</div>
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Education
</h6>

</div>
<div class="box-body px-3 pt-3 pb-0">
<div class="row">
<div class="col-sm-6 mb-4">
<label id="FROM" class="form-label">University</label>
<div class="input-group">
<input type="text" class="form-control" placeholder="University" aria-label="FROM" aria-describedby="FROM">
</div>

</div>
<div class="col-sm-6 mb-4">
<label id="TO" class="form-label">Major</label>

<div class="input-group">
<input type="text" class="form-control" placeholder="Major" aria-label="TO" aria-describedby="TO">
</div>

</div>
</div>
<div class="row">
<div class="col-sm-6 mb-4">
<label id="companyLabel" class="form-label">Degree</label>

<div class="input-group">
<input type="text" class="form-control" placeholder="degree" aria-label="Enter your company title" aria-describedby="companyLabel">
</div>

</div>
<div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="image" >
    {{-- <div>{{$errors->first('image')}}</div> --}}
 </div>
</div>
</div>
</div>
<div class="mb-3 text-right">
<button type="submit" class="btn btn-outline-success">Cancel</button>
<button type="submit" class="btn btn-success">Submit</button>
</div>
</main>
</div>
</div>
</div>
@endsection