<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" > <!--<![endif]-->
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Social Network</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
    
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/main.css">

        <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.10/angular.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	 <ul class="nav navbar-nav">
                    <li>
                        <a class="menu-toggle" href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
        </div><!--/.navbar-collapse -->
        
     
      </div>
    </nav>


    <div class="container">
     		    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a class="unselected" id="newsfeed" href="#">News Feed</a>
                </li>
                <li>
                    <a class="unselected" id="debate" href="#">Debates</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="content-wrapper" id="news-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >

                        <div class="newsfeed feed active container-fluid" ng-app="newsfeed" ng-controller="newsCtrl as news">
                            <div class="" >
                            <form  class="facebook-share-box" ng-controller="statusController as statusCtrl" ng-submit="statusCtrl.addStatus(news)" novalidate>
                                
                                <div class="share">
                                    <div class="panel panel-default">
                                          <div class="panel-heading" style="border-bottom:2px solid #c2d0d3;"><i class=""></i> Update Status</div>
                                          <div class="panel-body">
                                            <div class="">
                                                <textarea name="message" cols="40" rows="10" id="status_message" ng-model="statusCtrl.status.content" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
                                            </div>
                                          </div>
                                          <div class="panel-footer" style="">
                                                <div class="row">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <div class="btn-group">
                                                                  <button type="button" class="btn btn-default"><i class="icon icon-map-marker"></i> Location</button>
                                                                  <button type="button" class="btn btn-default"><i class="icon icon-picture"></i> Photo</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                            <select name="privacy" class="form-control privacy-dropdown pull-left input-sm">
                                                                    <option value="1" selected="selected">Public</option>
                                                                    <option value="2">Only my friends</option>
                                                                    <option value="3">Only me</option>
                                                            </select>                                    
                                                            <input type="submit" name="submit" value="Post" class="btn btn-primary">                               
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div> 
                            </form>
                            </div>

                            <hr>

                            <div class="post-wrap" >  
                              <div class="post container-fluid" ng-repeat="post in news.posts |  orderBy:post.date:reverse | limitTo:10">
                                <div class="postcontent" >
                                    <h2>{{post.title}}   <small>{{post.date | date}} </small></h2>
                                    <h4>{{post.subtitle}}</h4>
                                    <p>{{post.content}}</p>
                                </div>

                                <div class="likebar">    
                                <ul style="list-style-type:none;">
                                    <li><a>Upvote</a></li>
                                    <li><a>Downvote</a></li>
                                    <li><a>Share</a></li>  
                                </ul>
                                </div>    
                                
                                <section ng-controller="PanelCtrl as panel">
                                            <ul class="nav nav-pills" >
                                                <li ng-class="{active:panel.isSet(1)}"><a href="" ng-click="panel.setTab(1)">Comments</a></li>
                                                <li ng-class="{active:panel.isSet(2)}"><a href="" ng-click="panel.setTab(2)">Reviews</a></li>
                                                <li ng-class="{active:panel.isSet(3)}"><a href="" ng-click="panel.setTab(3)">Questions</a></li>
                                            </ul>
                                        <div class="section-wrap">
                                            <div class="comment-wrap panel container-fluid" ng-show="panel.isSet(1)">
                                               <h4>Comments</h4>
                                                <div  style="padding:10px;" class="tip left" ng-repeat="comment in post.comments">
                                                    <b>{{comment.name}}</b>
                                                    <p>{{comment.email}}</p>
                                                    <p>{{comment.body}}</p>
                                                </div>
                                                <br/>
                                            
                                                <form name="commentform" ng-controller="commentController as CommentCtrl" 
                                                ng-submit="commentform.$valid && CommentCtrl.addComment(post)" novalidate>
                                                <blockquote>
                                                    <b>{{CommentCtrl.comment.name}}</b>
                                                    <p>{{CommentCtrl.comment.body}}</p>
                                                    <cite>{{CommentCtrl.comment.email}}</cite>
                                                </blockquote>
                                                <div class="form-group">
                                                  <textarea class="form-control" ng-model="CommentCtrl.comment.body" placeHolder="Comment" required></textarea> 
                                                  <input type="text" ng-model="CommentCtrl.comment.name" placeHolder="Name" class="form-control" required>
                                                  <input type="email" ng-model="CommentCtrl.comment.email" placeHolder="Email address" class="form-control" required>
                                                </div>
                                                <div>The form is {{commentform.$valid}}</div>
                                                <input type="submit" value="Submit">
                                                </form>
                                            </div>
                                            <div class="panel" ng-show="panel.isSet(2)">
                                                <h4>Reviews</h4>
                                                <p>product.reviews</p>
                                            </div>
                                            <div class="panel" ng-show="panel.isSet(3)">
                                                <h4>Questions</h4>
                                                <p>product.questions</p>
                                            </div>
                                        </div>
                                        </section>

                                </div>
                            </div>
                        </div>
                        
                        <div class="debate feed inactive" ng-app="debate">
                            <h2 style="text-align:center;padding:0px;">Debate Feed</h2>
                            <p>Add new posts here.</p>
                           
                            <div ng-controller="debateCtrl as first">
                                 <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                                 <br />
                                 <h1>{{first.greeting}}</h1>
                                 <input type="text" ng-model="first.greeting" />
                            </div>
                        </div>

                    </div>
                </div>
                
        <!-- /.row -->
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    </div> <!-- /container -->        
    
    
    	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        
         
    </body>
</html>