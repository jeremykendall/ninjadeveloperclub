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
                        <h3>The First Rule of Ninja Developer Club</h3>
                        <p>
                            Don't call yourself <em>ninja</em> when 
                            <em>douchebag</em> is a better label.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/grmpyprogrammer/statuses/166915258643005441">@grmpyprogrammer</a>
                            </small>
                        </p>

                        <h3>The Second Rule of Ninja Developer Club</h3>
                        <p>
                            Real ninjas build new functionality by removing code only.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/omnicolor/status/167644363269222400">@omnicolor</a>
                            </small>
                        </p>

                        <h3>The Third Rule of Ninja Developer Club</h3>
                        <p>
                            If you write bad code, you must commit seppuku.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/weierophinney/status/167629721440493568">@auroraeosrose via @weierophinney</a>
                            </small>
                        </p>

                        <h3>The Fourth Rule of Ninja Developer Club</h3>
                        <p>
                            The ninja always silently assassinates code. Take no credit for your kills.
                            <small>
                                &#8212; <a href="https://twitter.com/#!/sprunka/status/167632631775764480">@sprunka</a>
                            </small>
                        </p>

                        <h3>The Fifth Rule of Ninja Developer Club</h3>
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
                    <h3>Ninja Tweets</h3>
                    <p>
                        <a class="twitter-timeline" href="https://twitter.com/search?q=%22PHP+Ninja%22+OR+%22Ninja+Developer+Club%22+OR+%40ninjadevclub+OR+ninjadevclub+OR+from%3Aninjadevclub+OR+to%3Aninjadevclub" data-widget-id="381145085150113792">Tweets about ""PHP Ninja" OR "Ninja Developer Club" OR @ninjadevclub OR ninjadevclub OR from:ninjadevclub OR to:ninjadevclub"</a>
                    </p>
                </div>
            </section>

            <hr>

            <footer>
                <p>
                    <small>
                        Ninja Developer Club is brought to you by  
                        <a href="http://about.me/jeremykendall">Jeremy Kendall</a> 
                        and was inspired by Chris Hartjes' 
                        <a href="https://twitter.com/grmpyprogrammer/statuses/166915258643005441">First Rule of Ninja Developer Club</a>.
                    </small>
                </p>
                <p>
                    <small>
                        Ninja Developer Club source code is <a href="https://github.com/jeremykendall/ninjadeveloperclub/blob/master/LICENSE.md">MIT</a> licensed
                        and is available on <a href="https://github.com/jeremykendall/ninjadeveloperclub">GitHub</a>.
                    </small>
                </p>
            </footer>

        </div> <!-- /container -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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
