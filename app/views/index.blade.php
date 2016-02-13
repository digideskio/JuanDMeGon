    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Web Developer - Freelancer - Colombia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="description" content="Juan David Meza González portfolio. Web Developer, freelancer.">
    <meta name="keywords" content="juan david meza gonzalez, portfolio, web developer, free lancer, ">
    <meta name="author" content="Juan David Meza González">
    <link rel="shortcut icon" href="img/profile.png" type="image/x-icon" />
    <link rel="image_src" type="image/png" href="img/user.png"/>
    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style-single-page.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
                $(document).ready(function() {
            $(".fancybox-thumb").fancybox({
                helpers	: {
                    title	: {
                        type: 'inside'
                    },
                    overlay : {
                                css : {
                                    'background' : 'rgba(1,1,1,0.65)'
                                }
                            }
                }
            });
        });

                $(document).ready(function()
                {
                  if ($('#myModal2').length)
                  {
                    $('#myModal2').modal('show');
                  }

                  if ($('#myModal3').length)
                  {
                    $('#myModal3').modal('show');
                  }
                });

                $(document).ready(function()
                {
                  $('#myModal3').on('hidden.bs.modal', function (e)
                  {
                    $('#myModal').modal('show');
                  });
                });
            </script>
    </head>
    <body>
    <nav class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="#profile"><img src="{{{$person->getPicture()}}}" width="75" height="75" /></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="#profile"><i class="icon-user"></i> {{Lang::get("texts.profile")}}</a></li>
            <li><a href="#skills"><i class="icon-trophy"></i> {{Lang::get("texts.skills")}}</a></li>
            <li><a href="#work"><i class="icon-picture"></i> {{Lang::get("texts.work")}}</a></li>
            <li><a href="#resume"><i class="icon-doc-text"></i> {{Lang::get("texts.resume")}}</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </nav>
    <article class="clearfix">
      <!--Profile container-->
      <section id="profile" class="container">
        <div class="span3"> <img src="{{$person->getPicture()}}" style="border-radius: 45%;"> </div>
        <div class="span5">
          <h1>{{$person->getName()}}</h1>
          <h3>{{$person->getTitle()}}</h3>
          <p>{{$person->getDescription()}}</p>
          <a href="##myModal" role="button" data-toggle="modal" class="hire-me"><i class="icon-paper-plane"></i> {{Lang::get("texts.hire")}} </a>
          <section class="row social">
            <ul class="social-icons">
              @foreach ($person->socialnetworks as $sn)
                <li><a href="{{$sn->getLink()}}" target="_blank"><img src="{{$sn->getIcon()}}" alt="facebook"></a></li>
              @endforeach
            </ul>
          </section>
        </div>
        <!-- Social Icons -->
        <!-- END: Social Icons -->
      </section>
      <!--END: Profile container-->
      <!--Skills container-->
      <section id="skills" class="container">
        <h2>{{Lang::get("texts.skillsTitle")}}</h2>
        @foreach ($person->skills as $sk)
            <div class="row">
              <div class="span3">
                <div class="ps" style="background-color: {{$sk->getColor()}};">
                  <h3>{{$sk->getShortname()}}</h3>
                </div>
              </div>
              <div class="span5">
                <h3>{{$sk->getName()}} <span>{{$sk->getLevel()}}%</span></h3>
                <div class="expand-bg"> <span class="expand ps2" style="width: {{$sk->getLevel()}}%; background-color: {{$sk->getColor()}}"> &nbsp; </span> </div>
              </div>
            </div> 
        @endforeach
      </section>
      <!--END: Skills container-->
      <!-- Works container -->
      <section id="work" class="container">
        <h2>{{Lang::get("texts.workTitle")}}</h2>
        <ul class="work-images">
          @foreach ($person->works as $wk)
          <li>
            <div>
              <a class="fancybox-thumb" rel="fancybox-thumb" href="{{$wk->getImage()}}" title="<strong><a href='{{$wk->getLink()}}'  target='_blank'>{{$wk->getTitle()}}</a>: </strong>{{$wk->getDescription()}}"><img class="work" src="{{$wk->getImage()}}" width="245" height="150" /></a>
            </div>
          </li>
          @endforeach
      </section>
      <!--END: Work container-->
      <!-- Courses container -->
      <section id="work" class="container">
        <h2>{{Lang::get("texts.coursesTitle")}}</h2>
        <ul class="work-images">
          @foreach ($person->courses as $cors)
          <li>
            <div>
              <a class="fancybox-thumb courses" rel="courses" href="{{$cors->getImage()}}" title="<strong><a href='{{$cors->getLink()}}'  target='_blank'>{{$cors->getTitle()}}</a>: </strong>{{$cors->getDescription()}}"><img class="work" src="{{$cors->getImage()}}" width="245" height="150" /></a>
            </div>
          </li>
          @endforeach
      </section>
      <!--END: course container-->
      <!-- Resume container -->
      <section id="resume" class="container">
        <h2>{{Lang::get("texts.resumeTitle")}}</h2>
        <h3>{{Lang::get("texts.resumeMessage")}}</h3>
        <div class="btn-center"> <a href="{{$person->getResume()}}" target="_blank" class="hire-me"><i class="icon-download"></i> {{Lang::get("texts.resumeDownload")}}</a>
          <h2>80kb</h2>
        </div>
      </section>
      <!--END: Resume container-->
      <!-- Social Icons -->
      <section class="row social">
        <ul class="social-icons">
          @foreach ($person->socialnetworks as $sn)
            <li><a href="{{{$sn->getLink()}}}" target="_blank"><img src="{{{$sn->getIcon()}}}" alt="facebook"></a></li>
          @endforeach
        </ul>
      </section>
      <!-- END: Social Icons -->
    </article>
    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p class="pull-left"><a href="/change/{{Lang::get('texts.alternative')}}"> {{Lang::get("texts.otherLang")}}</a></p>
        <p class="pull-right"><a href="##myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> {{Lang::get("texts.contact")}}</a></p>
      </div>
    </footer>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> {{Lang::get('texts.contact')}}</h3>
      </div>
      <div class="modal-body">
        {{ Form::open(array('url' => 'message/')) }}
          {{ Form::text('name', null, array('placeholder' => Lang::get('texts.contactForm.name'), 'required' => 'required'));}}
          {{ Form::email('email', null, array('placeholder' => Lang::get('texts.contactForm.email'), 'required' => 'required'));}}
          {{ Form::url('website', null, array('placeholder' => Lang::get('texts.contactForm.website')));}}
          {{ Form::textarea('message', null, array('placeholder' => Lang::get('texts.contactForm.message'), 'required' => 'required', 'rows' => 3, 'style' => 'width: 80%; max-width: 80%; max-height: 110px;', 'cols' => null));}}
          {{ Form::captcha(array('theme' => 'white'))}}
          {{Form::button('<i class="icon-paper-plane"></i>'.Lang::get("texts.contactForm.submit"), array('type' => 'submit', 'class' => 'btn btn-large'));}}
        {{ Form::close() }}
      </div>
    </div>

    @if(isset($message))
      <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel2">
            <i class="icon-mail"></i>
            @if($message)
              {{Lang::get('texts.success.title')}}
            @else
              {{Lang::get('texts.error.title')}}
            @endif
          </h3>
        </div>
        <div class="modal-body">
          @if($message)
            <p>{{Lang::get('texts.success.message')}}</p>
          @else
            <p>{{Lang::get('texts.error.message')}}</p>
          @endif
        </div>
      </div>
    @endif

    @if(sizeof($errors->message)>0)
      <div id="myModal3" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 id="myModalLabel3"><i class="icon-mail"></i> Ups!</h3>
        </div>
        <div class="modal-body">
          <p>{{Lang::get('texts.fieldsError')}}</p>

          @foreach ($errors->message->all() as $msj)
            <p style="color:red;">{{{$msj}}}</p>
          @endforeach

          <button class="btn btn-large" onclick="$('#myModal3').modal('hide');">Retry</button>
        </div>
      </div>
    @endif
    <!-- Scripts -->
    <script src="js/vertical-scroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden');
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55317337-1', 'auto');
      ga('send', 'pageview');

    </script>
    </body>
    </html>
