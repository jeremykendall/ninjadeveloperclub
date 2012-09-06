<?php require_once __DIR__ . '/library/base.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ninja Developer Club</title>
        <meta name="description" content="Ninja Developer Club">
        <meta name="author" content="Jeremy Kendall">

        <!-- HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
                text-align: center;
            }
        </style>
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../assets/tweet/jquery.tweet.css" media="all" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="/">Ninja Developer Club</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="/">Home</a></li>
                            <!--
                            <li><a href="#about">About</a></li>
                            <li><a href="#contact">Contact</a></li>
                            -->
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <div class="hero-unit">
                <h1>Ninja Developer Club</h1>
            </div>

            <section id="rules">
                <div class="row">
                    <div class="span6 offset3">
                        <h2>The First Rule of Ninja Developer Club</h2>
                        <p>
                            Don't call yourself <em>ninja</em> when 
                            <em>douchebag</em> is a better label.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/grmpyprogrammer/statuses/166915258643005441">@grmpyprogrammer</a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="span6 offset3">
                        <h2>The Second Rule of Ninja Developer Club</h2>
                        <p>
                            Real ninjas build new functionality by removing code only.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/omnicolor/status/167644363269222400">@omnicolor</a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="span6 offset3">
                        <h2>The Third Rule of Ninja Developer Club</h2>
                        <p>
                            If you write bad code, you must commit seppuku.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/weierophinney/status/167629721440493568">@auroraeosrose via @weierophinney</a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="span6 offset3">
                        <h2>The Fourth Rule of Ninja Developer Club</h2>
                        <p>
                            The ninja always silently assassinates code. Take no credit for your kills.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/sprunka/status/167632631775764480">@sprunka</a>
                            </small>
                        </p>
                    </div>
                </div>
                
                <div class="row">
                    <div class="span6 offset3">
                        <h2>The Fifth Rule of Ninja Developer Club</h2>
                        <p>
                            The ninja dev rewrites the repository to leave no trace of their commits.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/weierophinney/status/168840642263400449">@weierophinney</a>
                            </small>
                        </p>
                    </div>
                </div>
            </section>

            <section id="tweets">
                <div class="row">
                    <div class="span6 offset3 page-header">
                        <!-- I hate using empty divs for layout, but I suck at design, too -->
                    </div>
                    <div class="tweet span6 offset3"></div>
                </div>
            </section>

            <hr>

            <footer>
                <p>
                    <small>
                        Ninja Developer Club is brought to you by  
                        <a href="http://about.me/jeremykendall">Jeremy Kendall</a> 
                        and was inspired by Chris Hartjes's 
                        <a href="https://twitter.com/grmpyprogrammer/statuses/166915258643005441">First Rule of Ninja Developer Club</a>.
                    </small>
                </p>
                <p>
                    <small>
                        Ninja Developer Club source code is licensed under a 
                        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">
                            Creative Commons Attribution-ShareAlike 3.0 Unported License
                        </a> and is available on <a href="https://github.com/jeremykendall/ninjadeveloperclub">github.com</a>.
                    </small>
                </p>
            </footer>

        </div> <!-- /container -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="../assets/tweet/jquery.tweet.js"></script>
        <script type="text/javascript">
            
            jQuery(function($){
                $(".tweet").tweet({
                    avatar_size: 45,
                    count: 10,
                    refresh_interval: 60,
                    query: "\"PHP Ninja\" OR \"Ninja Developer Club\" OR @ninjadevclub OR ninjadevclub OR from:ninjadevclub OR to:ninjadevclub",
                    loading_text: "searching twitter..."
                });
            });

<?php if (APPLICATION_ENV == 'production'): ?>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1611748-6']);
        _gaq.push(['_trackPageview']);
        //
        (function() {
            var ga = document.createElement('script'); ga.type =
                'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ?
                'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s =
                document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
<?php endif; ?>
        </script>
    </body>

</html>
