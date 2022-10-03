@include('layout.login.header')



<!-- PAGE -->
<div class="page">
    <div>
        <!-- CONTAINER OPEN -->
        <div class="col mx-auto text-center">
            <a href="index.html">
                <img src="../assets/images/brand/logo-3.png" class="header-brand-img" alt="">
            </a>
        </div>
        <div class="col-12 container-login100">
            <div class="row">
                <div class="col col-login mx-auto">
                    <form action="{{ route('forgot.password.post') }}" method="POST" class="card shadow-none">
                        @csrf
                        <div class="card-body">
                            <div class="text-center">
                                <span class="login100-form-title">
                                    Forgot Password
                                </span>
                                <p class="text-muted">Enter the email address registered on your account</p>
                            </div>
                            <div class="pt-3" id="forgot">
                                <div class="form-group">
                                    <label class="form-label" for="eMail">E-Mail:</label>
                                    <input class="form-control" name="email" id="eMail" placeholder="Enter Your Email"
                                        type="email">
                                </div>
                                <div class="submit">
                                    <button class="btn btn-primary d-grid" type="submit">Submit</button>
                                </div>
                                <div class="text-center mt-4">
                                    <p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="/login">Send
                                            me
                                            Back</a></p>
                                </div>
                            </div>

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
                    </form>
                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
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
if(!!window.performance && window.performance.navigation.type === 2)
{
    console.log('Reloading');
    window.location.reload();
}
</script>

</body>

</html>