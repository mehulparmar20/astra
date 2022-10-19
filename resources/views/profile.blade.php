@include('layout.dashboard.header')

@include('layout.loader')

<!-- PAGE -->
<div class="page">
    <div class="page-main">
        @include('layout.dashboard.navigation')

        @include('layout.dashboard.sidebar')

        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">
                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <div>
                            <h1 class="page-title">Profile</h1>
                        </div>
                        <div class="ms-auto pageheader-btn">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </div>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                    @endif
                    <!-- PAGE-HEADER END -->

                    <!-- ROW-1 OPEN -->
                    <div class="row" id="user-profile">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12 col-xl-6">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="profile-img-main rounded">
                                                    <img src="../assets/images/faces/6.jpg" alt="img"
                                                        class="m-0 p-1 rounded hrem-6">
                                                </div>
                                                <div class="ms-4">
                                                    <h4>{{auth()->user()->userFirstName}}
                                                        {{auth()->user()->userLastName}}</h4>
                                                    <!-- <p class="text-muted mb-2">Member Since: November 2020</p>
															<a href="#" class="btn btn-primary btn-sm"><i class="fa fa-rss"></i> Follow</a>
															<a href="mail-inbox.html" class="btn btn-secondary btn-sm"><i class="fa fa-envelope"></i> E-mail</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="wideget-user-tab">
                                        <div class="tab-menu-heading">
                                            <div class="tabs-menu1">
                                                <ul class="nav">
                                                    <li><a href="#profileMain" class="active show"
                                                            data-bs-toggle="tab">Profile</a></li>
                                                    <li><a href="#editProfile" data-bs-toggle="tab">Edit Profile</a>
                                                    </li>
                                                    <!-- <li><a href="#timeline" data-bs-toggle="tab">Timeline</a></li>
															<li><a href="#gallery" data-bs-toggle="tab">Gallery</a></li>
															<li><a href="#friends" data-bs-toggle="tab">Friends</a></li>
															<li><a href="#accountSettings" data-bs-toggle="tab">Account Settings</a></li> -->
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active show" id="profileMain">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <!-- <div class="p-5">
														<h3 class="card-title">Biodata</h3>
														<p class="text-dark-light">Hi I'm Teri Dactyl,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
														<div>
															<div>
																<h5 class="text-dark text-14 mb-0">Lead designer / Developer</h5>
																<a href="javascript:void(0)" class="text-primary">websitenamename.com</a>
																<p class="mb-2 mt-3"><b>2010-2015</b></p>
																<p class="text-muted text-14">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
															</div>

															<div>
																<h5 class="text-dark text-14 mb-0">Senior Graphic Designer</h5>
																<a href="javascript:void(0)" class="text-primary">samplewebsite.com</a>
																<p class="mb-2 mt-3"><b>2007-2009</b></p>
																<p class="text-muted text-14 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
															</div>
														</div>
													</div>
													<div class="border-top"></div> -->
                                            <div class="table-responsive p-5">
                                                <h3 class="card-title">Personal Info</h3>
                                                <table class="table row table-borderless">
                                                    <tbody class="col-lg-12 col-xl-6 p-0">
                                                        <tr>
                                                            <td><strong>Full Name :</strong>
                                                                {{auth()->user()->userFirstName}}
                                                                {{auth()->user()->userLastName}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Username :</strong> {{auth()->user()->userName}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Address :</strong>
                                                                {{auth()->user()->userAddress}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Location :</strong>
                                                                {{auth()->user()->userLocation}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Fax :</strong> {{auth()->user()->userFax}}</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody class="col-lg-12 col-xl-6 p-0 border-top-0">
                                                        <tr>
                                                            <td><strong>Zip :</strong> {{auth()->user()->userZip}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Email :</strong> {{auth()->user()->userEmail}}
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Phone :</strong>
                                                                {{auth()->user()->userTelephone}} </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Ext :</strong> {{auth()->user()->userExt}} </td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>Toll Free :</strong>
                                                                {{auth()->user()->TollFree}} </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="editProfile">
                                    <div class="card">
                                        <div class="card-body border-0">
                                            <form class="form-horizontal" method="POST"
                                                action="{{route('profile.edit')}}">
                                                {{csrf_field()}}
                                                <div class="row mb-4">
                                                    <p class="mb-4 text-17">Personal Info</p>
                                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                                        <div class="form-group">
                                                            <label for="username" class="form-label">User Name</label>
                                                            <input type="text" class="form-control" name="userName"
                                                                id="username" value="{{$user->userName}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                                        <div class="form-group">
                                                            <label for="firstname" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" name="userFirstName"
                                                                id="firstname" placeholder="First Name"
                                                                value="{{$user->userFirstName}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-lg-12 col-xl-6">
                                                        <div class="form-group">
                                                            <label for="lastname" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" name="userLastName"
                                                                id="lastname" placeholder="Last Name"
                                                                value="{{$user->userLastName}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-4 text-17">Contact Info</p>
                                                <div class="form-group">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="email" class="form-label">Email</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="email"
                                                                name="userEmail" placeholder="Email"
                                                                value="{{$user->userEmail}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="phoneNumber" class="form-label">Phone</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="userTelephone"
                                                                id="phoneNumber" placeholder="phone number"
                                                                value="{{$user->userTelephone}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="fax" class="form-label">Fax</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="userFax"
                                                                id="fax" placeholder="Fax" value="{{$user->userFax}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="address" class="form-label">Address</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="address"
                                                                name="userAddress" rows="2"
                                                                placeholder="Address">{{$user->userAddress}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="location" class="form-label">Location</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="userLocation"
                                                                id="location" placeholder="Location"
                                                                value="{{$user->userLocation}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="zip" class="form-label">Zip</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="userZip"
                                                                id="zip" placeholder="Zip" value="{{$user->userZip}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="ext" class="form-label">Ext</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="userExt"
                                                                id="ext" placeholder="Ext" value="{{$user->userExt}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="tollfree" class="form-label">Toll Free</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" name="TollFree"
                                                                id="zip" placeholder="Toll Free"
                                                                value="{{$user->TollFree}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="timeline">
                                    <div class="row row-sm">
                                        <div class="col-12">
                                            <div class="card border">
                                                <div class="card-header border-bottom d-block p-4">
                                                    <div class="media overflow-visible">
                                                        <div class="media-user me-2">
                                                            <div class="main-img-user"><img alt=""
                                                                    class="rounded-circle avatar-md"
                                                                    src="../assets/images/faces/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ms-2">Mintrona Pechon Pechon</h6><span
                                                                class="text-primary ms-2">just now</span>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown show main-contact-star">
                                                                <a class="new option-dots2" data-bs-toggle="dropdown"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="fe fe-more-vertical  tx-18"></i></a>
                                                                <div class="dropdown-menu shadow">
                                                                    <a class="dropdown-item" href="#">Edit Post</a>
                                                                    <a class="dropdown-item" href="#">Delete Post</a>
                                                                    <a class="dropdown-item" href="#">Personal
                                                                        Settings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable.</p>
                                                    <div class="row row-sm">
                                                        <div class="col">
                                                            <img alt="img" class="h-200 mb-2 mt-2 me-4 br-5"
                                                                src="../assets/images/media/timeline1.jpg">
                                                            <img alt="img" class="h-200 br-5"
                                                                src="../assets/images/media/timeline2.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="media mt-4 profile-footer align-items-center">
                                                        <div class="avatar-list avatar-list-stacked me-4">
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/8.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/7.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/9.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/14.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/11.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius bg-primary">+8</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 text-bold text-dark-light">28 people like
                                                                your photo</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border">
                                                <div class="card-header border-bottom d-block p-4">
                                                    <div class="media overflow-visible">
                                                        <div class="media-user me-2">
                                                            <div class="main-img-user"><img alt=""
                                                                    class="rounded-circle avatar-md"
                                                                    src="../assets/images/faces/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ms-2">Mintrona Pechon Pechon</h6><span
                                                                class="text-primary ms-2">just now</span>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown show main-contact-star">
                                                                <a class="new option-dots2" data-bs-toggle="dropdown"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="fe fe-more-vertical  tx-18"></i></a>
                                                                <div class="dropdown-menu shadow">
                                                                    <a class="dropdown-item" href="#">Edit Post</a>
                                                                    <a class="dropdown-item" href="#">Delete Post</a>
                                                                    <a class="dropdown-item" href="#">Personal
                                                                        Settings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable.</p>
                                                    <div class="row row-sm">
                                                        <div class="col">
                                                            <img alt="img" class="h-200 mb-2 mt-2 me-4 br-5"
                                                                src="../assets/images/media/timeline3.jpg">
                                                            <img alt="img" class="h-200 br-5"
                                                                src="../assets/images/media/timeline4.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="media mt-4 profile-footer align-items-center">
                                                        <div class="avatar-list avatar-list-stacked me-4">
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/8.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/7.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/9.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/14.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/11.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius bg-primary">+8</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 text-bold text-dark-light">28 people like
                                                                your photo</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card border">
                                                <div class="card-header border-bottom d-block p-4">
                                                    <div class="media overflow-visible">
                                                        <div class="media-user me-2">
                                                            <div class="main-img-user"><img alt=""
                                                                    class="rounded-circle avatar-md"
                                                                    src="../assets/images/faces/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ms-2">Mintrona Pechon Pechon</h6><span
                                                                class="text-primary ms-2">just now</span>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown show main-contact-star">
                                                                <a class="new option-dots2" data-bs-toggle="dropdown"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="fe fe-more-vertical  tx-18"></i></a>
                                                                <div class="dropdown-menu shadow">
                                                                    <a class="dropdown-item" href="#">Edit Post</a>
                                                                    <a class="dropdown-item" href="#">Delete Post</a>
                                                                    <a class="dropdown-item" href="#">Personal
                                                                        Settings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable.</p>
                                                    <div class="row row-sm">
                                                        <div class="col">
                                                            <img alt="img" class="h-200 mb-2 mt-2 me-4 br-5"
                                                                src="../assets/images/media/timeline5.jpg">
                                                            <img alt="img" class="h-200 br-5"
                                                                src="../assets/images/media/timeline6.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="media mt-4 profile-footer align-items-center">
                                                        <div class="avatar-list avatar-list-stacked me-4">
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/8.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/7.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/9.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/14.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/11.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius bg-primary">+8</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 text-bold text-dark-light">28 people like
                                                                your photo</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header border-bottom d-block p-4">
                                                    <div class="media overflow-visible">
                                                        <div class="media-user me-2">
                                                            <div class="main-img-user"><img alt=""
                                                                    class="rounded-circle avatar-md"
                                                                    src="../assets/images/faces/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 ms-2">Mintrona Pechon Pechon</h6><span
                                                                class="text-primary ms-2">just now</span>
                                                        </div>
                                                        <div class="ms-auto">
                                                            <div class="dropdown show main-contact-star">
                                                                <a class="new option-dots2" data-bs-toggle="dropdown"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="fe fe-more-vertical  tx-18"></i></a>
                                                                <div class="dropdown-menu shadow">
                                                                    <a class="dropdown-item" href="#">Edit Post</a>
                                                                    <a class="dropdown-item" href="#">Delete Post</a>
                                                                    <a class="dropdown-item" href="#">Personal
                                                                        Settings</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p>There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration in some form, by
                                                        injected humour, or randomised words which don't look even
                                                        slightly believable.</p>
                                                    <div class="row row-sm">
                                                        <div class="col">
                                                            <img alt="img" class="h-200 mb-2 mt-2 me-4 br-5"
                                                                src="../assets/images/media/timeline7.jpg">
                                                            <img alt="img" class="h-200 br-5"
                                                                src="../assets/images/media/timeline9.jpg">
                                                        </div>
                                                    </div>
                                                    <div class="media mt-4 profile-footer align-items-center">
                                                        <div class="avatar-list avatar-list-stacked me-4">
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/8.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/7.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/9.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/14.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius cover-image"
                                                                data-bs-image-src="../assets/images/users/11.jpg"></span>
                                                            <span
                                                                class="avatar avatar-md rounded-circle bradius bg-primary">+8</span>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 text-bold text-dark-light">28 people like
                                                                your photo</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="gallery">
                                    <div class="row  mb-5 img-gallery" id="lightgallery">
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/8.jpg"
                                            data-src="../assets/images/media/8.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/8.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/10.jpg"
                                            data-src="../assets/images/media/10.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/10.jpg" alt="banner image "></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/11.jpg"
                                            data-src="../assets/images/media/11.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/11.jpg" alt="banner image "></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/12.jpg"
                                            data-src="../assets/images/media/12.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/12.jpg" alt="banner image "></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/13.jpg"
                                            data-src="../assets/images/media/13.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/13.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/14.jpg"
                                            data-src="../assets/images/media/14.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/14.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/15.jpg"
                                            data-src="../assets/images/media/15.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/15.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/16.jpg"
                                            data-src="../assets/images/media/16.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/16.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/17.jpg"
                                            data-src="../assets/images/media/17.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/17.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/18.jpg"
                                            data-src="../assets/images/media/18.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/18.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/19.jpg"
                                            data-src="../assets/images/media/19.jpg">
                                            <a href="#"><img class="img-fluid wp-100 mb-2 br-5"
                                                    src="../assets/images/media/19.jpg " alt="banner image"></a>
                                        </div>
                                        <div class="col-lg-3 col-md-6" data-responsive="../assets/images/media/20.jpg"
                                            data-src="../assets/images/media/20.jpg">
                                            <a href="#"><img class="img-fluid wp-100 br-5"
                                                    src="../assets/images/media/20.jpg " alt="banner image"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="friends">
                                    <div class="row row-sm">
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/1.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Lisbon Taylor
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/11.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">jordan Ramsay
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/12.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Corey Richard
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/5.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Lana Del Rey
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/7.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Mariana Gold
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/13.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Travis Bickle
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/8.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">Emilie Benett
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                            <div class="card custom-card border">
                                                <div class="card-body  user-lock text-center">
                                                    <div class="dropdown text-end">
                                                        <a href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true"> <i
                                                                class="fe fe-more-vertical text-muted"></i> </a>
                                                        <div class="dropdown-menu dropdown-menu-right shadow"> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-message-square me-2"></i> Message</a>
                                                            <a class="dropdown-item" href="#"><i
                                                                    class="fe fe-edit-2 me-2"></i> Edit</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-eye me-2"></i> View</a> <a
                                                                class="dropdown-item" href="#"><i
                                                                    class="fe fe-trash-2 me-2"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                    <a href="#">
                                                        <img alt="avatar" class="avatar avatar-xl rounded"
                                                            src="../assets/images/faces/4.jpg">
                                                        <h4 class="fs-16 mb-0 mt-3 text-dark fw-semibold">James Thomas
                                                        </h4>
                                                        <span class="text-muted">Web designer</span>
                                                    </a>
                                                    <div class="footer-container-main border-0 my-2">
                                                        <div class="footer p-0 icons-bg border-0">
                                                            <div class="social">
                                                                <ul class="text-center">
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Facebook"><i
                                                                                class="fa fa-facebook"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Twitter"><i
                                                                                class="fa fa-twitter"></i></a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="social-icon" href="javascript:void(0)"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-placement="top" title="Linkedin"><i
                                                                                class="fa fa-linkedin"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="accountSettings">
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="form-horizontal" data-select2-id="11">
                                                <div class="mb-4 main-content-label">Account</div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="userName" class="form-label">User Name</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="userName"
                                                                placeholder="User Name" value="Elena Gilbert">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label for="eMail" class="form-label">Email</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="eMail"
                                                                placeholder="Email" value="info@elenagilbert.in">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group " data-select2-id="108">
                                                    <div class="row" data-select2-id="107">
                                                        <div class="col-md-3">
                                                            <label for="language" class="form-label">Language</label>
                                                        </div>
                                                        <div class="col-md-9" data-select2-id="106">
                                                            <select class="form-control select2" id="language"
                                                                tabindex="-1" aria-hidden="true">
                                                                <option>Us English</option>
                                                                <option>Arabic</option>
                                                                <option>Korean</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group " data-select2-id="10">
                                                    <div class="row" data-select2-id="9">
                                                        <div class="col-md-3">
                                                            <label for="timeZone" class="form-label">Timezone</label>
                                                        </div>
                                                        <div class="col-md-9" data-select2-id="8">
                                                            <select class="form-control select2" id="timeZone"
                                                                data-select2-id="4" tabindex="-1" aria-hidden="true">
                                                                <option value="Pacific/Midway" data-select2-id="6">
                                                                    (GMT-11:00) Midway Island, Samoa</option>
                                                                <option value="America/Adak" data-select2-id="16">
                                                                    (GMT-10:00) Hawaii-Aleutian</option>
                                                                <option value="Etc/GMT+10" data-select2-id="17">
                                                                    (GMT-10:00) Hawaii</option>
                                                                <option value="Pacific/Marquesas" data-select2-id="18">
                                                                    (GMT-09:30) Marquesas Islands</option>
                                                                <option value="Pacific/Gambier" data-select2-id="19">
                                                                    (GMT-09:00) Gambier Islands</option>
                                                                <option value="America/Anchorage" data-select2-id="20">
                                                                    (GMT-09:00) Alaska</option>
                                                                <option value="America/Ensenada" data-select2-id="21">
                                                                    (GMT-08:00) Tijuana, Baja California</option>
                                                                <option value="Etc/GMT+8" data-select2-id="22">
                                                                    (GMT-08:00) Pitcairn Islands</option>
                                                                <option value="America/Los_Angeles"
                                                                    data-select2-id="23">(GMT-08:00) Pacific Time (US
                                                                    &amp; Canada)</option>
                                                                <option value="America/Denver" data-select2-id="24">
                                                                    (GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                                <option value="America/Chihuahua" data-select2-id="25">
                                                                    (GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                                                                <option value="America/Dawson_Creek"
                                                                    data-select2-id="26">(GMT-07:00) Arizona</option>
                                                                <option value="America/Belize" data-select2-id="27">
                                                                    (GMT-06:00) Saskatchewan, Central America</option>
                                                                <option value="America/Cancun" data-select2-id="28">
                                                                    (GMT-06:00) Guadalajara, Mexico City, Monterrey
                                                                </option>
                                                                <option value="Chile/EasterIsland" data-select2-id="29">
                                                                    (GMT-06:00) Easter Island</option>
                                                                <option value="America/Chicago" data-select2-id="30">
                                                                    (GMT-06:00) Central Time (US &amp; Canada)</option>
                                                                <option value="America/New_York" data-select2-id="31">
                                                                    (GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                                <option value="America/Havana" data-select2-id="32">
                                                                    (GMT-05:00) Cuba</option>
                                                                <option value="America/Bogota" data-select2-id="33">
                                                                    (GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                                                                <option value="America/Caracas" data-select2-id="34">
                                                                    (GMT-04:30) Caracas</option>
                                                                <option value="America/Santiago" data-select2-id="35">
                                                                    (GMT-04:00) Santiago</option>
                                                                <option value="America/La_Paz" data-select2-id="36">
                                                                    (GMT-04:00) La Paz</option>
                                                                <option value="Atlantic/Stanley" data-select2-id="37">
                                                                    (GMT-04:00) Faukland Islands</option>
                                                                <option value="America/Campo_Grande"
                                                                    data-select2-id="38">(GMT-04:00) Brazil</option>
                                                                <option value="America/Goose_Bay" data-select2-id="39">
                                                                    (GMT-04:00) Atlantic Time (Goose Bay)</option>
                                                                <option value="America/Glace_Bay" data-select2-id="40">
                                                                    (GMT-04:00) Atlantic Time (Canada)</option>
                                                                <option value="America/St_Johns" data-select2-id="41">
                                                                    (GMT-03:30) Newfoundland</option>
                                                                <option value="America/Araguaina" data-select2-id="42">
                                                                    (GMT-03:00) UTC-3</option>
                                                                <option value="America/Montevideo" data-select2-id="43">
                                                                    (GMT-03:00) Montevideo</option>
                                                                <option value="America/Miquelon" data-select2-id="44">
                                                                    (GMT-03:00) Miquelon, St. Pierre</option>
                                                                <option value="America/Godthab" data-select2-id="45">
                                                                    (GMT-03:00) Greenland</option>
                                                                <option value="America/Argentina/Buenos_Aires"
                                                                    data-select2-id="46">(GMT-03:00) Buenos Aires
                                                                </option>
                                                                <option value="America/Sao_Paulo" data-select2-id="47">
                                                                    (GMT-03:00) Brasilia</option>
                                                                <option value="America/Noronha" data-select2-id="48">
                                                                    (GMT-02:00) Mid-Atlantic</option>
                                                                <option value="Atlantic/Cape_Verde"
                                                                    data-select2-id="49">(GMT-01:00) Cape Verde Is.
                                                                </option>
                                                                <option value="Atlantic/Azores" data-select2-id="50">
                                                                    (GMT-01:00) Azores</option>
                                                                <option value="Europe/Belfast" data-select2-id="51">
                                                                    (GMT) Greenwich Mean Time : Belfast</option>
                                                                <option value="Europe/Dublin" data-select2-id="52">(GMT)
                                                                    Greenwich Mean Time : Dublin</option>
                                                                <option value="Europe/Lisbon" data-select2-id="53">(GMT)
                                                                    Greenwich Mean Time : Lisbon</option>
                                                                <option value="Europe/London" data-select2-id="54">(GMT)
                                                                    Greenwich Mean Time : London</option>
                                                                <option value="Africa/Abidjan" data-select2-id="55">
                                                                    (GMT) Monrovia, Reykjavik</option>
                                                                <option value="Europe/Amsterdam" data-select2-id="56">
                                                                    (GMT+01:00) Amsterdam, Berlin, Bern, Rome,
                                                                    Stockholm, Vienna</option>
                                                                <option value="Europe/Belgrade" data-select2-id="57">
                                                                    (GMT+01:00) Belgrade, Bratislava, Budapest,
                                                                    Ljubljana, Prague</option>
                                                                <option value="Europe/Brussels" data-select2-id="58">
                                                                    (GMT+01:00) Brussels, Copenhagen, Madrid, Paris
                                                                </option>
                                                                <option value="Africa/Algiers" data-select2-id="59">
                                                                    (GMT+01:00) West Central Africa</option>
                                                                <option value="Africa/Windhoek" data-select2-id="60">
                                                                    (GMT+01:00) Windhoek</option>
                                                                <option value="Asia/Beirut" data-select2-id="61">
                                                                    (GMT+02:00) Beirut</option>
                                                                <option value="Africa/Cairo" data-select2-id="62">
                                                                    (GMT+02:00) Cairo</option>
                                                                <option value="Asia/Gaza" data-select2-id="63">
                                                                    (GMT+02:00) Gaza</option>
                                                                <option value="Africa/Blantyre" data-select2-id="64">
                                                                    (GMT+02:00) Harare, Pretoria</option>
                                                                <option value="Asia/Jerusalem" data-select2-id="65">
                                                                    (GMT+02:00) Jerusalem</option>
                                                                <option value="Europe/Minsk" data-select2-id="66">
                                                                    (GMT+02:00) Minsk</option>
                                                                <option value="Asia/Damascus" data-select2-id="67">
                                                                    (GMT+02:00) Syria</option>
                                                                <option value="Europe/Moscow" data-select2-id="68">
                                                                    (GMT+03:00) Moscow, St. Petersburg, Volgograd
                                                                </option>
                                                                <option value="Africa/Addis_Ababa" data-select2-id="69">
                                                                    (GMT+03:00) Nairobi</option>
                                                                <option value="Asia/Tehran" data-select2-id="70">
                                                                    (GMT+03:30) Tehran</option>
                                                                <option value="Asia/Dubai" data-select2-id="71">
                                                                    (GMT+04:00) Abu Dhabi, Muscat</option>
                                                                <option value="Asia/Yerevan" data-select2-id="72">
                                                                    (GMT+04:00) Yerevan</option>
                                                                <option value="Asia/Kabul" data-select2-id="73">
                                                                    (GMT+04:30) Kabul</option>
                                                                <option value="Asia/Yekaterinburg" data-select2-id="74">
                                                                    (GMT+05:00) Ekaterinburg</option>
                                                                <option value="Asia/Tashkent" data-select2-id="75">
                                                                    (GMT+05:00) Tashkent</option>
                                                                <option value="Asia/Kolkata" data-select2-id="76">
                                                                    (GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi
                                                                </option>
                                                                <option value="Asia/Katmandu" data-select2-id="77">
                                                                    (GMT+05:45) Kathmandu</option>
                                                                <option value="Asia/Dhaka" data-select2-id="78">
                                                                    (GMT+06:00) Astana, Dhaka</option>
                                                                <option value="Asia/Novosibirsk" data-select2-id="79">
                                                                    (GMT+06:00) Novosibirsk</option>
                                                                <option value="Asia/Rangoon" data-select2-id="80">
                                                                    (GMT+06:30) Yangon (Rangoon)</option>
                                                                <option value="Asia/Bangkok" data-select2-id="81">
                                                                    (GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                                                                <option value="Asia/Krasnoyarsk" data-select2-id="82">
                                                                    (GMT+07:00) Krasnoyarsk</option>
                                                                <option value="Asia/Hong_Kong" data-select2-id="83">
                                                                    (GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi
                                                                </option>
                                                                <option value="Asia/Irkutsk" data-select2-id="84">
                                                                    (GMT+08:00) Irkutsk, Ulaan Bataar</option>
                                                                <option value="Australia/Perth" data-select2-id="85">
                                                                    (GMT+08:00) Perth</option>
                                                                <option value="Australia/Eucla" data-select2-id="86">
                                                                    (GMT+08:45) Eucla</option>
                                                                <option value="Asia/Tokyo" data-select2-id="87">
                                                                    (GMT+09:00) Osaka, Sapporo, Tokyo</option>
                                                                <option value="Asia/Seoul" data-select2-id="88">
                                                                    (GMT+09:00) Seoul</option>
                                                                <option value="Asia/Yakutsk" data-select2-id="89">
                                                                    (GMT+09:00) Yakutsk</option>
                                                                <option value="Australia/Adelaide" data-select2-id="90">
                                                                    (GMT+09:30) Adelaide</option>
                                                                <option value="Australia/Darwin" data-select2-id="91">
                                                                    (GMT+09:30) Darwin</option>
                                                                <option value="Australia/Brisbane" data-select2-id="92">
                                                                    (GMT+10:00) Brisbane</option>
                                                                <option value="Australia/Hobart" data-select2-id="93">
                                                                    (GMT+10:00) Hobart</option>
                                                                <option value="Asia/Vladivostok" data-select2-id="94">
                                                                    (GMT+10:00) Vladivostok</option>
                                                                <option value="Australia/Lord_Howe"
                                                                    data-select2-id="95">(GMT+10:30) Lord Howe Island
                                                                </option>
                                                                <option value="Etc/GMT-11" data-select2-id="96">
                                                                    (GMT+11:00) Solomon Is., New Caledonia</option>
                                                                <option value="Asia/Magadan" data-select2-id="97">
                                                                    (GMT+11:00) Magadan</option>
                                                                <option value="Pacific/Norfolk" data-select2-id="98">
                                                                    (GMT+11:30) Norfolk Island</option>
                                                                <option value="Asia/Anadyr" data-select2-id="99">
                                                                    (GMT+12:00) Anadyr, Kamchatka</option>
                                                                <option value="Pacific/Auckland" data-select2-id="100">
                                                                    (GMT+12:00) Auckland, Wellington</option>
                                                                <option value="Etc/GMT-12" data-select2-id="101">
                                                                    (GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                                                                <option value="Pacific/Chatham" data-select2-id="102">
                                                                    (GMT+12:45) Chatham Islands</option>
                                                                <option value="Pacific/Tongatapu" data-select2-id="103">
                                                                    (GMT+13:00) Nuku'alofa</option>
                                                                <option value="Pacific/Kiritimati"
                                                                    data-select2-id="104">(GMT+14:00) Kiritimati
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3 col">
                                                            <label class="form-label">Verification</label>
                                                        </div>
                                                        <div class="col-md-9 col d-flex">
                                                            <div class="custom-checkbox custom-control mx-2">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="Email">
                                                                <label for="Email"
                                                                    class="custom-control-label">Email</label>
                                                            </div>
                                                            <div class="custom-checkbox custom-control mx-2">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="Sms">
                                                                <label for="Sms"
                                                                    class="custom-control-label">Sms</label>
                                                            </div>
                                                            <div class="custom-checkbox custom-control mx-2">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="Phone">
                                                                <label for="Phone"
                                                                    class="custom-control-label">Phone</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 main-content-label">Secuirity Settings</div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Login Verification</label>
                                                        </div>
                                                        <div class="col-md-9"> <a href="#">Setup Verification</a> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row row-sm">
                                                        <div class="col-md-3">
                                                            <label class="form-label">Password Verification</label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="custom-checkbox custom-control mx-2">
                                                                <input type="checkbox" data-checkboxes="mygroup"
                                                                    class="custom-control-input" id="personal">
                                                                <label for="personal"
                                                                    class="custom-control-label">Required personal
                                                                    details</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="mb-4 main-content-label">Notifications</div>
                                                    <div class="form-group mb-0">
                                                        <div class="row row-sm">
                                                            <div class="col-md-3">
                                                                <label class="form-label">Configure
                                                                    Notifications</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <label class="d-block">
                                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                                        class="custom-switch-input" checked>
                                                                    <span class="custom-switch-indicator"></span>
                                                                    <span class="text-muted ms-2">Allow all
                                                                        Notifications</span>
                                                                </label>
                                                                <label class="d-block">
                                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                                        class="custom-switch-input">
                                                                    <span class="custom-switch-indicator"></span>
                                                                    <span class="text-muted ms-2">Disable all
                                                                        Notifications</span>
                                                                </label>
                                                                <label class="d-block">
                                                                    <input type="checkbox" name="custom-switch-checkbox"
                                                                        class="custom-switch-input" checked>
                                                                    <span class="custom-switch-indicator"></span>
                                                                    <span class="text-muted ms-2">Notification
                                                                        Sounds</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group float-end">
                                                    <div class="row row-sm">
                                                        <div class="col-md-12">
                                                            <a class="btn btn-info my-1" href="#">Change Password</a>
                                                            <a class="btn btn-outline-danger my-1" href="#">Deactivate
                                                                Account</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>
                    <!-- ROW-1 CLOSED -->

                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>

    <!-- Country-selector modal-->
    <div class="modal fade" id="country-selector">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content country-select-modal">
                <div class="modal-header">
                    <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <ul class="row row-sm p-3">
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block active">
                                <span class="country-selector"><img alt="unitedstates"
                                        src="{{URL::to('/')}}/assets/images/flags/us_flag.jpg"
                                        class="me-2 language"></span>United States
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="italy"
                                        src="{{URL::to('/')}}/assets/images/flags/italy_flag.jpg"
                                        class="me-2 language"></span>Italy
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="spain"
                                        src="{{URL::to('/')}}/assets/images/flags/spain_flag.jpg"
                                        class="me-2 language"></span>Spain
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="india"
                                        src="{{URL::to('/')}}/assets/images/flags/india_flag.jpg"
                                        class="me-2 language"></span>India
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="french"
                                        src="{{URL::to('/')}}/assets/images/flags/french_flag.jpg"
                                        class="me-2 language"></span>French
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="russia"
                                        src="{{URL::to('/')}}/assets/images/flags/russia_flag.jpg"
                                        class="me-2 language"></span>Russia
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="germany"
                                        src="{{URL::to('/')}}/assets/images/flags/germany_flag.jpg"
                                        class="me-2 language"></span>Germany
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="argentina"
                                        src="{{URL::to('/')}}/assets/images/flags/argentina_flag.jpg"
                                        class="me-2 language"></span>Argentina
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="uae"
                                        src="{{URL::to('/')}}/assets/images/flags/uae_flag.jpg"
                                        class="me-2 language"></span>UAE
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="austria"
                                        src="{{URL::to('/')}}/assets/images/flags/austria_flag.jpg"
                                        class="me-2 language"></span>Austria
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="mexico"
                                        src="{{URL::to('/')}}/assets/images/flags/mexico_flag.jpg"
                                        class="me-2 language"></span>Mexico
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="china"
                                        src="{{URL::to('/')}}/assets/images/flags/china_flag.jpg"
                                        class="me-2 language"></span>China
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="poland"
                                        src="{{URL::to('/')}}/assets/images/flags/poland_flag.jpg"
                                        class="me-2 language"></span>Poland
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="canada"
                                        src="{{URL::to('/')}}/assets/images/flags/canada_flag.jpg"
                                        class="me-2 language"></span>Canada
                            </a>
                        </li>
                        <li class="col-lg-4 mb-2">
                            <a class="btn btn-country btn-lg btn-block">
                                <span class="country-selector"><img alt="malaysia"
                                        src="{{URL::to('/')}}/assets/images/flags/malaysia_flag.jpg"
                                        class="me-2 language"></span>Malaysia
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Country-selector modal-->

    @include('layout.dashboard.footer')
