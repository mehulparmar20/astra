@include('layout.login.header')

<div class="gradient-background">
			<!-- GLOABAL LOADER -->
			<!-- <div id="global-loader">
				<img src="{{URL::to('/')}}/assets/assets/images/loader.svg" class="loader-img" alt="Loader" >
			</div> -->
			<!-- End GLOABAL LOADER -->

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
								
				
									<form action="{{ route('forgot.password.post') }}" method="POST" class="login100-form validate-form">
                                        @csrf
										<div class="text-center">
											<span class="login100-form-title">
												Forgot Password
											</span>
                                            @if(Session::has('message'))
                                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                                                {{ Session::get('message') }}</p>
                                            @endif
											<p class="text-muted">Enter the email address registered on your account</p>
										</div>
										<div class="pt-3" id="forgot">
											<div class="form-group">
												<label class="form-label" for="eMail">E-Mail:</label>
												<input class="form-control" name="email" id="eMail" placeholder="Enter Your Email" type="email">
											</div>
											<div class="submit">
												<button class="btn1 login_btn" type="submit">Submit</button>
											</div>
											<div class="text-center mt-4">
												<p class="text-dark mb-0">Forgot It?<a class="forget_text" href="{{URL::to('/login')}}">Send me Back</a></p>
											</div>
										</div>
									</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>



<!--END PAGE -->

<!-- JQUERY JS -->
<script src="../assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

<!-- STICKY JS -->
<script src="../assets/js/sticky.js"></script>

<!-- COLOR THEME JS -->
<script src="../assets/js/themeColors.js"></script>

<!-- CUSTOM JS -->
<script src="../assets/js/custom.js"></script>


<script type="text/javascript">
if (!!window.performance && window.performance.navigation.type === 2) {
    console.log('Reloading');
    window.location.reload();
}
</script>

</body>

</html>