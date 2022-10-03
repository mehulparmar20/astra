@include('layout.login.header')
@include('layout.login.switcher')
        
        

            

                
			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="#" class="text-center">
							<img src="../assets/images/brand/logo-3.png" class="header-brand-img" alt="">
						</a>

					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
							<form action="{{ route('login.post') }}" method="post"class="login100-form validate-form">
									@csrf
									<span class="login100-form-title">
										Login
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="userEmail" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="userPass" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<div class="text-end pt-1">
										<p class="mb-0"><a href="forgot-password" class="text-primary ms-1">Forgot Password?</a></p>
									</div>
									<div class="container-login100-form-btn">
									<button type="submit" class="login100-form-btn btn-primary">Login</button>
									</div>
									<div class="text-center pt-3">
										<!-- <p class="text-dark mb-0">Not a member?<a href="https://laravel8.spruko.com/noa/register" class="text-primary ms-1">Create an Account</a></p> -->
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

            
@include('layout.login.footer')