<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tweet longer messages using Images">
    <meta name="keywords" content="twitter,tweet,image,140 characters" />
    <meta name="google-site-verification" content="qLgsVlVAkYIuwPGvt2RgNfQof1-xRFGw8Jbf-0iuf1g" />

    <title>ImageTweet - Tweet longer messages using Images</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <style type="text/css">
    #text-text {
        width: 400px;
        border-radius: 5px;
        background-color: rgb(241, 241, 241);
    }
    #textarea {
        height: 200px;
        width: 400px;
        border-radius: 10px;
        background-color: rgb(241, 241, 241);
    }
    .white {
        color: white;
    }
    #textarea {
        color:#666;
        font-size:14px;
        -moz-border-radius: 8px; -webkit-border-radius: 8px;
        margin:5px 0px 10px 0px;
        padding:10px;
        border:#999 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        transition: all 0.25s ease-in-out;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 0);
    }
    #textarea:focus {
        color:#000;
        outline:none;
        border:#35a5e5 1px solid;
        font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
        box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -webkit-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
        -moz-box-shadow: 0 0 5px rgba(81, 203, 238, 1);
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top">ImageTweet</a>
            </li>
            <li>
                <a href="#top">Home</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1>ImageTweet</h1>
                        <h5>Tweet longer messages using Images</h5>
                        <input type="text" id="text-text" maxlength="117" placeholder="Optional text"></input>
                        <br/>
                        <textarea id="textarea" placeholder="Text that will be shown as image"></textarea>
                        <br/>
                        <a id="preview" href="#output-container" class="btn btn-success btn-lg">Preview</a>
                        <a id="tweet-direct" class="btn btn-primary btn-lg">Tweet</a>
                        <br/>
                        <span style="color:wheat">You have to authorize the app every time since we don't store tokens.</span>
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <div class="row">
                                <label class="col-sm-3 control-label white">Font</label>
                                <select id="font" class="form-control">
                                    <option value="Times">Times</option>
                                    <option value="Arial">Arial</option>
                                    <option value="Courier">Courier</option>
                                </select>
                            </div>
                            <div class="row">
                                <label class="col-sm-7 control-label white">Font size</label>
                                <input type="number" id="font_size" class="form-control" min="1" max="50" value="12">
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label white">Width</label>
                                <input type="number" id="width" class="form-control" min="1" max="2000" value="400">
                            </div>
                            <div class="row">
                                <label class="col-sm-3 control-label white">Height</label>
                                <input type="number" id="height" class="form-control" min="1" max="5000" value="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="output-container" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div id="output">
                        <h2>You preview appears here!</h2>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    

    <!-- Callout -->
    <!-- <aside class="callout">
        <div class="text-vertical-center">
            <h1>Vertically Centered Text</h1>
        </div>
    </aside> -->

    

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary" style="background:none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="#" id="tweet-it" class="btn btn-lg btn-primary">Tweet this!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Footer -->
    <footer style="padding:0">
        <div id="contact" class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>ImageTweet</strong>
                    </h4>
                    <p>Contact<br/><a href="http://arjunsreedharan.org" target="_blank">author's website</a></p>
                    <ul class="list-unstyled">
                        <!-- <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a> -->
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="http://facebook.com/arjun024" target="_blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://twitter.com/arjun024" target="_blank"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="http://github.com/arjun024" target="_blank"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <!-- <p class="text-muted">Copyright &copy; Your Website 2014</p> -->
                </div>
            </div>
        </div>
    </footer>

    <!--ads -->
    <div id="ad-div"  class="hidden-xs" style="padding-left: 19%">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- imagetweet1 -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:728px;height:90px"
             data-ad-client="ca-pub-5046754493364025"
             data-ad-slot="8593747196"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    
    <!-- The elements below are invisible on init -->
    <!-- success and failure dialog boxes -->
    <div class="modal fade" id="modal-success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-success" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel-success">Success</h4>
          </div>
          <div class="modal-body">
            Tweet successfully posted !!!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal-failure" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-failure" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel-failure">Error</h4>
          </div>
          <div class="modal-body">
            Oops Error. Please try again.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- busy indicator modal -->
    <div class="modal fade" id="modal-busy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-busy" aria-hidden="true">
      <div class="modal-dialog">   
            <img src='./img/loading.gif'> 
        </div>
      </div>
    </div>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <!--Bootstrap Core JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>

    <?php if(isset($success_code)) { ?>
        window.success_code = <?php echo $success_code ?>;
    <?php }?>

    if(window.success_code && window.success_code == 200)
        $("#modal-success").modal();
    else if(window.success_code) {
        $("#modal-failure").modal();
        console.error(window.success_code);
    }


    (function remove_all_querystrings() {
        if (history.pushState) {
            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            window.history.pushState({path:newurl},'',newurl);
        }
    })();

    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });

    function truncate_br(str, num) {
        var re = new RegExp(".{1,"+num+"}", 'g');
        var arr = str.match(re);
        var s = "";
        for(var i = 0, len = arr.length; i < len; ++i)
            s += arr[i] + "<br/>";
        return s;
    }

    function make_payload() {
        var x ={};
        var read = $("#textarea").val();
        x.textarea = read;
        if ($("#text-text").val())
            x.text_text = $("#text-text").val();
        if ($("#height").val())
            x.height = $("#height").val();
        if ($("#width").val())
            x.width = $("#width").val();
        if ($("#font_size").val())
            x.font_size = $("#font_size").val();
        if ($("#font").val())
            x.font = $("#font").val();
        return x;
    }

    function imagetweet() {
        return $.ajax({
            type: "post",
            url: "./imagetweet.php",
            data: make_payload()
        });
    }

    var p_click = function() {
        var read = $("#textarea").val();
        var $write = $("#output");
        if(!read) return;
        var call = imagetweet();
        $write.html("<img src='./img/loading.gif' width='20%'>");
        call.done(function(data){
            $write.html("<img src='data:image/png;base64," + data + "' " +
                "style='border-bottom: 1px solid;border-bottom-color: green'"+
                ">");
            if($("#text-text").val())
                $write.prepend($("<span style='width:200px;'></span>").html(truncate_br($("#text-text").val(), 40)));
        });
        call.fail(function(data) {
            $write.html("<h2>Something went wrong! Please report error if you could.</h2>");
        });
    };
    $("#preview").on("click", p_click);


    var t_click = function() {
        /*goto fist php hook*/
        window.location.search[0]=="?" ? window.location.search+="&img=1" : window.location.search="?img=1";
    };
    $("#tweet-it").on("click", t_click);

    var t_direct_click = function() {
        $("#modal-busy").modal();
        var call = imagetweet();
        call.done(t_click);
        call.fail(function(){
            $("#modal-busy").modal('toggle');
            $("#modal-failure").modal();
            console.error(window.success_code);
        });
    };
    $("#tweet-direct").on("click", t_direct_click);
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-58165926-1', 'auto');
      ga('send', 'pageview');

    </script>

</body>

</html>