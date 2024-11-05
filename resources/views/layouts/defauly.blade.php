<!DOCTYPE html> 
<!-- saved from url=(0050)https://getbootstrap.com/docs/5.0/examples/heroes/ --> 
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
 
 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content=""> 
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"> 
    <meta name="generator" content="Hugo 0.84.0"> 
    <title>Heroes · Bootstrap v5.0</title> 
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/"> 
 
 
 
    <!-- Bootstrap core CSS --> 
<link href="./Heroes · Bootstrap v5.0_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
 
    <!-- Favicons --> 
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180"> 
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png"> 
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png"> 
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json"> 
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3"> 
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico"> 
<meta name="theme-color" content="#7952b3"> 
 
 
    <style> 
      .bd-placeholder-img { 
        font-size: 1.125rem; 
        text-anchor: middle; 
        -webkit-user-select: none; 
        -moz-user-select: none; 
        user-select: none; 
      } 
 
      @media (min-width: 768px) { 
        .bd-placeholder-img-lg { 
          font-size: 3.5rem; 
        } 
      } 
    </style> 
 
 
 
 
    <!-- Custom styles for this template --> 
    <link href="./Heroes · Bootstrap v5.0_files/heroes.css" rel="stylesheet"> 
  </head> 
  <body data-new-gr-c-s-check-loaded="14.1123.0" data-gr-ext-installed=""> 
 
 <main> 
 
     <div class="px-4 py-5 my-5 text-center"> 
        <h1>@yield('title')</h1> 
        <img class="d-block mx-auto mb-4" src="img1.png" alt="" width="400" height="400> 
        <h1 class= "display-5 fw-bold><br><b>HEROS</b></h1> 
        <div class="col-lg-6 mx-auto"> 
          <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button> 
            <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> 
          </div> 
        </div> 
      </div> 
 
      ***************************************************************** 
 
    <title>@yield('title')</title> 
  <h1 class="visually-hidden">Heroes examples</h1> 
 
    @include('layouts.includes.Centered hero') 
 
  <div class="b-example-divider"></div> 
 
 @include('layouts.includes.Centered screenshot') 
 
  <div class="b-example-divider"></div> 
 
******************************************************************* 
   <div class="px-4 pt-5 my-5 text-center border-bottom"> 
    <h1 class="display-4 fw-bold">Centered screenshot</h1> 
    <div class="col-lg-6 mx-auto"> 
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5"> 
        <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button> 
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button> 
      </div> 
    </div>cls 
    <div class="overflow-hidden" style="max-height: 30vh;"> 
      <div class="container px-5"> 
        <img src="img2.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy"> 
      </div> 
    </div> 
  </div> 
  <div class="container col-xxl-8 px-4 py-5"> 
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5"> 
      <div class="col-10 col-sm-8 col-lg-6"> 
        <img src=".img3.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy"> 
      </div>  
 
 
      <div class="col-lg-6"> 
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1> 
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
        <div class="d-grid gap-2 d-md-flex justify-content-md-start"> 
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button> 
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> 
        </div> 
      </div> 
    </div> 
  </div> 
 
  <div class="b-example-divider"></div> 
 
  <div class="container col-xl-10 col-xxl-8 px-4 py-5"> 
    <div class="row align-items-center g-lg-5 py-5"> 
      <div class="col-lg-7 text-center text-lg-start"> 
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1> 
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> 
      </div> 
      <div class="col-md-10 mx-auto col-lg-5"> 
        <form class="p-4 p-md-5 border rounded-3 bg-light"> 
          <div class="form-floating mb-3"> 
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com"> 
            <label for="floatingInput">Email address</label> 
          </div> 
          <div class="form-floating mb-3"> 
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"> 
            <label for="floatingPassword">Password</label> 
          </div> 
          <div class="checkbox mb-3"> 
            <label> 
              <input type="checkbox" value="remember-me"> Remember me 
            </label> 
          </div> 
          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button> 
          <hr class="my-4"> 
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small> 
        </form> 
      </div> 
    </div> 
  </div> 
 
  <div class="b-example-divider"></div> 
 
  <div class="container my-5"> 
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg"> 
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3"> 
        <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1> 
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3"> 
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button> 
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> 
        </div> 
      </div> 
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg"> 
          <img class="rounded-lg-3" src="./Heroes · Bootstrap v5.0_files/bootstrap-docs.png" alt="" width="720"> 
      </div> 
    </div> 
  </div> 
 
  <div class="b-example-divider"></div> 
 
  @section('main-centent') 
 
  <div class="bg-dark text-secondary px-4 py-5 text-center"> 
    <div class="py-5"> 
      <h1 class="display-5 fw-bold text-white">Dark mode hero</h1> 
      <div class="col-lg-6 mx-auto"> 
        <p class="fs-5 mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> 
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> 
          <button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Custom button</button> 
          <button type="button" class="btn btn-outline-light btn-lg px-4">Secondary</button> 
        </div> 
      </div> 
    </div> 
  </div> 
 
  @show 
 
  <div class="b-example-divider mb-0"></div> 
</main> 
 
 
    <script src="./Heroes · Bootstrap v5.0_files/bootstrap.bundle.min.js.download" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 
      <footer>WELCOME 
 
        <footer> 
            @karthick Panneerselvam 
            </footer> 
 
      </footer> 
 
 
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open"><style> 
      div.grammarly-desktop-integration { 
        position: absolute; 
        width: 1px; 
        height: 1px; 
        padding: 0; 
        margin: -1px; 
        overflow: hidden; 
        clip: rect(0, 0, 0, 0); 
        white-space: nowrap; 
        border: 0; 
        -moz-user-select: none; 
        -webkit-user-select: none; 
        -ms-user-select:none; 
        user-select:none; 
      } 
 
      div.grammarly-desktop-integration:before { 
        content: attr(data-content); 
      } 
 
 
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>