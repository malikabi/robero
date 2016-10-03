<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Lock Screen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <!-- <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="">
    <link rel="apple-touch-icon" sizes="152x152" href="">
    <link rel="icon" type="image/x-icon" href="" /> -->
    {{ Html::style('assets/pages/ico/60.png') }}
    {{ Html::style('assets/pages/ico/76.png') }}
    {{ Html::style('assets/pages/ico/120.png') }}
    {{ Html::style('assets/pages/ico/152.png') }}
    {{ Html::style('assets/favicon.ico') }}
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    {{ Html::style('assets/plugins/pace/pace-theme-flash.css') }}
    {{ Html::style('assets/plugins/boostrapv3/css/bootstrap.min.css') }}
    {{ Html::style('assets/plugins/font-awesome/css/font-awesome.css') }}
    {{ Html::style('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}
    {{ Html::style('assets/plugins/bootstrap-select2/select2.css') }}
    {{ Html::style('assets/plugins/switchery/css/switchery.min.css') }}
    {{ Html::style('assets/pages/css/pages-icons.css') }}
    {{ Html::style('assets/pages/css/pages.css') }}
    <!-- <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet" type="text/css" />
    <link href="" rel="stylesheet" type="text/css" media="screen" />
    <link href="" rel="stylesheet" type="text/css" media="screen" />
    <link href="" rel="stylesheet" type="text/css" media="screen" />
    <link href="" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="" rel="stylesheet" type="text/css" /> -->
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header ">
    <div class="register-container full-height sm-p-t-30">
      <div class="container-sm-height full-height">
        <div class="row row-sm-height">
          <div class="col-sm-12 col-sm-height col-middle">
            <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            <h3>Pages makes it easy to enjoy what matters the most in your life</h3>
            <p>
              <small>
        Create a pages account. If you have a facebook account, log into it for this process. Sign in with <a href="#" class="text-info">Facebook</a> or <a href="#" class="text-info">Google</a>
    </small>
            </p>
            <form id="form-register" class="p-t-15" role="form" action="{{url('public/registration')}}" method="post">
              <input id="token" name="_token" type="text" value="{{csrf_token()}}" hidden>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>First Name</label>
                    <input type="text" value="{{old('first_name')}}" name="first_name" placeholder="John" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Last Names</label>
                    <input type="text" value="{{old('last_name')}}" name="last_name" placeholder="Smith" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>User name</label>
                    <input type="text" value="{{old('user_name')}}" name="user_name" placeholder="JohnSmith" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>User Type</label>
                    <select type="text" value="{{old('user_type')}}" name="user_type" placeholder="JohnSmith" class="form-control" required>
                      <option value="3">Seller</option>
                      <option value="4">Buyer</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Password</label>
                    <input type="password" value="{{old('password')}}"  name="password" placeholder="Minimum of 5 Charactors" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="email" value="{{old('email')}}" id="email" name="email" placeholder="test@test.com" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row m-t-10">
                <div class="col-md-6">
                  <p>I agree to the <a href="#" class="text-info small">Pages Terms</a> and <a href="#" class="text-info small">Privacy</a>.</p>
                </div>
                <div class="col-md-6 text-right">
                  <a href="#" class="text-info small">Help? Contact Support</a>
                </div>
              </div>
              <button class="btn btn-primary btn-cons m-t-10 register">Create a new account</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class=" full-width">
      <div class="register-container m-b-10 clearfix">
        <div class="inline pull-left">
          <img src="assets/img/demo/pages_icon.png" alt="" class="m-t-5 " data-src="assets/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" width="60" height="60">
        </div>
        <div class="col-md-10 m-t-15">
          <p class="hinted-text small inline ">No part of this website or any of its contents may be reproduced, copied, modified or adapted, without the prior written consent of the author, unless otherwise indicated for stand-alone materials.</p>
        </div>
      </div>
    </div>
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <!-- <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <! END VENDOR JS -->
    <!-- <script src="pages/js/pages.min.js"></script> --> -->
    {{ Html::script('assets/plugins/pace/pace.min.js') }}
    {{ Html::script('assets/plugins/jquery/jquery-1.11.1.min.js') }}
    {{ Html::script('assets/plugins/modernizr.custom.js') }}
    {{ Html::script('assets/plugins/jquery-ui/jquery-ui.min.js') }}
    {{ Html::script('assets/plugins/boostrapv3/js/bootstrap.min.js') }}
    {{ Html::script('assets/plugins/jquery/jquery-easy.js') }}
    {{ Html::script('assets/plugins/jquery-unveil/jquery.unveil.min.js') }}
    {{ Html::script('assets/plugins/jquery-bez/jquery.bez.min.js') }}
    {{ Html::script('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}
    {{ Html::script('assets/plugins/jquery-actual/jquery.actual.min.js') }}
    {{ Html::script('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}
    {{ Html::script('assets/plugins/bootstrap-select2/select2.min.js') }}
    {{ Html::script('assets/plugins/classie/classie.js') }}
    {{ Html::script('assets/plugins/switchery/js/switchery.min.js') }}
    {{ Html::script('assets/plugins/nvd3/lib/d3.v3.js') }}
    {{ Html::script('assets/plugins/nvd3/nv.d3.min.js') }}
    {{ Html::script('assets/plugins/nvd3/src/utils.js') }}
    {{ Html::script('assets/plugins/nvd3/src/tooltip.js') }}
    {{ Html::script('assets/plugins/nvd3/src/interactiveLayer.js') }}
    {{ Html::script('assets/plugins/nvd3/src/models/axis.js') }}
    {{ Html::script('assets/plugins/nvd3/src/models/line.js') }}
    {{ Html::script('assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}
    {{ Html::script('assets/plugins/mapplic/js/hammer.js') }}
    {{ Html::script('assets/plugins/mapplic/js/jquery.mousewheel.js') }}
    {{ Html::script('assets/plugins/mapplic/js/mapplic.js') }}
    {{ Html::script('assets/plugins/jquery-metrojs/MetroJs.min.js') }}
    {{ Html::script('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}
    {{ Html::script('assets/plugins/skycons/skycons.js') }}
    {{ Html::script('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}
    {{ Html::script('assets/pages/js/pages.min.js') }}
    {{ Html::script('assets/js/scripts.js') }}

    <script type="text/javascript">
      $(document).ready(function(){

        $('.register').on('click', function(e){
          e.preventDefault();

          var email = $('#email').val();

          if(email != ""){

            $.ajax({
            type: "get",
              url: '{{ url("check_email")}}/'+email,
              dataType: ''
            }).success(function(res) {
              console.log(res);
              if(res == '0'){
                $('#email').css('border', '1px solid green');
              }else{
                $('#email').css('border', '1px solid red');
                $('#email').val("");
                $('#email').attr('placeholder', 'Email Already Register');
              }

            });

          }


        });

      });
    </script>


  </body>
</html>