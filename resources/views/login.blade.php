@include('layout.login.header')

@include('layout.login.switcher')


<div class="gradient-background">
		
			<!-- GLOABAL LOADER -->
			<!-- <div id="global-loader">
				<img src="{{URL::to('/')}}/assets/images/loader.svg" class="loader-img" alt="Loader">
			</div> -->
			<!-- /GLOABAL LOADER -->
			<!-- PAGE -->
			<div class="page" style="min-width: -webkit-fill-available;">
				<div>
				
					<!-- CONTAINER CLOSED -->
					<div class="limiterlogin">
						
						<div class="container-newlogin100">
							
							<div class="wrap-newlogin100">
								<span class="login100-form-title">
									<div class="mx-auto text-center">
										<a href="index.html" class="text-center">
											<img src="{{URL::to('/')}}/assets/images/brand/Astra_logo.png" class="header-brand-img" alt="" style="height: auto;">
										</a>
									</div>
								</span>
								
									<div class="newlogin100-pic logintruck js-tilt" data-tilt>
										<img src="{{URL::to('/')}}/assets/images/animation3.gif" alt="IMG">
									</div>
								
				
									<form action="{{ route('login.post') }}" method="post" class="login100-form validate-form">
                                    @csrf
										<span class="login100-form-title">
											Member Login
										</span>
                                        @if(Session::has('message'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                        {{ Session::get('message') }}
                                    </p>
                                    @endif
					
										<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
											<input class="input100" type="text" name="userEmail" placeholder="Email">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-envelope" aria-hidden="true"></i>
											</span>
										</div>
					
										<div class="wrap-input100 validate-input" data-validate = "Password is required">
											<input class="input100" type="password" name="userPass" placeholder="Password">
											<span class="focus-input100"></span>
											<span class="symbol-input100">
												<i class="fa fa-lock" aria-hidden="true"></i>
											</span>
										</div>
										
										<div class="container-newlogin100-form-btn">
											<button type="submit" class="btn1 login_btn">
												Login
											</button>
										</div>
					
										<div class="text-center p-t-12">
											<span class="txt1">
												Forgot
											</span>
											<a class="forget_text" href="{{URL::to('/forgot-password')}}">
												 Password?
											</a>
										</div>
					
									</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End PAGE -->
	
		</div>


<!-- PAGE -->




            @include('layout.login.footer')