<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
    <style>
    .ftco-section {
    padding: 7em 0;
}

.wrap .img {
    height: 200px;
}

.wrap {
    width: 100%;
    overflow: hidden;
    background: #fff;
    border-radius: 5px;
    -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
    -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
    box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
}

.wrap .img {
    height: 200px;
}

.login-wrap {
    position: relative;
}

.login-wrap h3 {
    font-weight: 300;
}

.form-group {
    margin-bottom: 1rem;
}

.form-group {
    position: relative;
    z-index: 0;
    margin-bottom: 20px !important;
}

.form-group a {
    color: gray;
}

.form-control {
    height: 48px;
    background: #fff;
    color: #000;
    font-size: 16px;
    border-radius: 5px;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: 1px solid rgba(0, 0, 0, 0.1);
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #2b4797;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #2b4797;
    border-radius: 0.25rem;
    -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
}

input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}





.form-control:focus + .form-control-placeholder, .form-control:valid + .form-control-placeholder {
    -webkit-transform: translate3d(0, -110%, 0);
    transform: translate3d(0, -110%, 0);
    padding: 7px 0 0 0;
    opacity: 1;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    color: #2b4797!important;
    font-weight: 700;
}

.form-control-placeholder {
    position: absolute;
    top: 2px;
    padding: 7px 0 0 15px;
    -webkit-transition: all 400ms;
    -o-transition: all 400ms;
    transition: all 400ms;
    opacity: 0.6;
}

@media (min-width: 576px) {
    .form-inline .form-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 0;
    }
}

/*.btn-outline-info {*/
/*    color: #2b4797!important;*/
/*    border-color: #2b4797!important;*/
/*}*/

/*.btn-outline-info:hover {*/
/*    color: #fff!important;*/
/*    background-color: #2b4797!important;*/
/*    border-color: #2b4797!important;*/
/*}*/

.btn-outline-info{
    color: #fff!important;
    background-color: #2b4797!important;
    border-color: #2b4797!important;
}

.form-control:focus {
    color: #212529;
    background-color: #fff;
    border-color: #2b4797!important;
    outline: 0;
    box-shadow: none!important;
}

a {
    color: #2b4797!important;
    text-decoration: underline;
}
</style>
</head>
<body>
<section class="ftco-section mt-5 pt-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <div class="wrap">
                  <a href="{{Route('/')}}">
                    <div class="img" style="background-image: url('https://restin.in/layouts/img/logo copy.png');background-size: 100% 100%;"></div>
                  </a>
                <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                    <div class="w-100">
                      <h3 class="mb-4">Sign In</h3>
                    </div>
                  </div>
                  <form method="POST" action="/user_login" class="signin-form">
                      @csrf
                        @if (session('success'))
                        <div class="alert alert-info mb-4 p-1 text-center">
                            {{ session('success') }}
                        </div>
                        @endif
                    <div class="form-group mt-3">
                      <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                      <label class="form-control-placeholder p-1 ps-3" for="Email">Mobile No.</label>
                      
                    </div>
                    <div class="form-group mt-4">
                      <input id="password-field password" type="password" name="password" class="form-control  @error('password') is-invalid @enderror" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                      <label class="form-control-placeholder p-1 ps-3" for="password">Password</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-info w-100">
                        Sign In
                      </button>
                    </div>
                    <div class="form-group d-md-flex justify-content-end">
                      <div>
                        <a href="#" class="text-secondary">Forgot Password</a>
                      </div>
                    </div>
                    

                  </form>
                  <p class="text-center">
                    Not a member? <a  href="{{ route('register') }}">Sign Up</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
<script>
    const getSelectors = () => {
        const email = document.querySelector(`input[name="email"]`)
        const password = document.querySelector(`input[name="password"]`)
        const isRemembered = document.querySelector(`input[name="remember"]`)
        return {email,password, isRemembered}
    }
    
    function onSubmitLogin (e) {
        const {
            email,password, isRemembered
        } = getSelectors()
        if(isRemembered.checked) {
            localStorage.setItem('rememberData',JSON.stringify({email: email.value,password: password.value, date: new Date().toISOString()}))
        }else{
            localStorage.removeItem('rememberData')
        }
    }

    window.onload = function() {
        let data = localStorage.getItem('rememberData');
       if(!data) return;
       data = JSON.parse(data);
       if(!(data?.email || data?.password || data?.date)) return
       if((new Date().getTime() - new Date(data?.date).getTime()) /  (1000 * 3600 * 24) > 7) return
       const {
           email,password, isRemembered
        } = getSelectors()
        email.value =data.email;
        password.value =data.password;
        isRemembered.checked = true;
    };
</script>

      </body>
</html>
