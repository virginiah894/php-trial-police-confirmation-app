<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="/css/main.css" rel="stylesheet" />
   
  </head>
  <body>
    <div class="s130">
      <form  method="get" action="{{ route('show') }}"  role="search">
        @csrf
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" type="number" 
            placeholder="Enter police force number" autocomplete="true" 
            autofocus required =""/>
          </div>
          <div class="input-field second-wrap">
            <input class="btn-search" type="submit">SEARCH</input>
          </div>
        </div>
        <span class="info">ex. police force number</span>
        <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Captcha</label>
          <div class="col-md-6">
              {!! app('captcha')->display() !!}
              @if ($errors->has('g-recaptcha-response'))
                  <span class="help-block">
                      <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      </form>
      {!! app('captcha')->display(); !!}
    </div>
    <script src="/js/extention/choices.js"></script>
    {!! NoCaptcha::renderJs() !!}
  </body>
</html>
