<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register</title>
    <style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

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





/* Add styles for focused and valid inputs */
.form-control:focus + .form-control-placeholder,
.form-control:valid + .form-control-placeholder,
.form-control.has-value + .form-control-placeholder {
    -webkit-transform: translate3d(0, -99%, 0);
    transform: translate3d(0, -99%, 0);
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
<section class=" pt-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <div class="wrap">
                  <a href="{{Route('/')}}">
                    <div class="img" style="background-image: url('https://restin.in/layouts/img/logo copy.png');background-size: 100% 100%;"></div>
                  </a>
                <div class="login-wrap p-3">
                  <div class="d-flex">
                    <div class="w-100">
                      <h3 class="mb-4">Sign Up</h3>
                    </div>
                  </div>
                  <form method="POST" action="{{ route('user_register') }}" class="signin-form needs-validation" novalidate>
                      @csrf
                    
                    <div class="form-group mt-3">
                      <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" pattern="[0-9]{10,11}" value="{{ old('mobile') }}" maxlength="10"
                      oninput="this.className = '';javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required />
                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                      <label class="form-control-placeholder p-1 ps-3" for="mobile">Phone Number</label>
                    </div>
                    
                   
                    <div class="form-group mt-3">
                      <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="password_confirmation" value="{{ old('password-confirm') }}" required />  
                      <label class="form-control-placeholder p-1 ps-3" for="password-confirm"> Password</label>
                    </div>
                    
                    <div class="form-group mt-3">
                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      <label class="form-control-placeholder p-1 ps-3" for="password">Confirm Password</label>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" class="btn btn-outline-info w-100">
                        Sign Up
                      </button>
                    </div>
                  </form>
                  <p class="text-center">
                    Already Register? <a  href="{{ route('login') }}">Sign In</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
      </script>
      <script>
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = document.querySelectorAll('.form-control');

        inputs.forEach((input) => {
            input.addEventListener('input', function () {
                if (input.value.trim() !== '') {
                    input.classList.add('has-value');
                    input.classList.add('form-control');
                } else {
                    input.classList.remove('has-value');
                    input.classList.add('form-control');
                }
            });

            // Check the input on page load (in case the browser remembers previous values)
            if (input.value.trim() !== '') {
                input.classList.add('has-value');
                    input.classList.add('form-control');
            }
        });
    });
</script>

      
</body>
</html>
