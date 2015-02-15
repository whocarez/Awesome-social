
 $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
 });

   $(document).ready(function(){
            $('.status').click(function() { $('.arrow').css("left", 0);});
            $('.photos').click(function() { $('.arrow').css("left", 146);});
        });

 $(".unselected").click(function(e) {
        e.preventDefault();

        var id = $(this).attr('id');
        $(".active").fadeOut(1000, function(){ $("."+id).fadeIn(1000)}).removeClass("active");
 		$("."+id).addClass("active");
 		$(this).removeClass("unselected");
 });


(function(){

	var newsfeed = angular.module('newsfeed',[]);

	var values = [{
		title: "The first post",
		date:1,
		subheading:"subheading1",
		subtitle:"the subtitle of first post",
		content:"the body content of the post",
		comments:[{
			name:"Midhun",
			email:"midhunadarvin@gmail.com",
			body:"This post is so awesome!!!"
		},{
			name:"Midhun",
			email:"midhunadarvin@gmail.com",
			body:"TLorem ipsum dolor sior. Duis placerat tellus at erat pellentesque nec ultricies erat molestie. Integer nec orci id tortor molestie porta. Suspendisse eu sagittis quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur quam a sapien egestas eget scelerisque lectus tempor. Duis placerat tellus at erat pellentesque nec ultricies erat molestie. Integer nec orci id tortor molestie porta. Suspendisse eu sagittis quam."
		},{
			name:"Midhun",
			email:"midhunadarvin@gmail.com",
			body:"I'm so AWESOME!!!"
		}]
	},{
		title: "The second post",
		date:2,
		subheading:"subheading2",
		subtitle:"the subtitle of second post",
		content:"the body content of the post",
		comments:[{
			name:"Midhun",
			email:"md@gmail.com",
			body:"Second post comment"
		}]

	},{
		title: "The Test post",
		date:3,
		subheading:"testing",
		subtitle:"the subtitle of test post",
		content:"lahblahb ahblah blahbl ahblahbl bahlablai should be ready by skdfj skdfsldfkjslkfjsl dksjlfdkj dkfjslkfready ",
		comments:[{
			name:"Midhun",
			email:"md@gmail.com",
			body:"Third post comment"
		}]
	}
	]

	var newsCtrl = function($scope){
			this.posts = values;
	}

	var PanelCtrl = function(){
		this.tab =0;
		this.setTab = function(tabno){
			this.tab = tabno;
		};
		this.isSet = function(check){
			return this.tab===check;
		};
	}


	var debateCtrl = function($scope){
			
	}

	newsfeed.controller("newsCtrl", newsCtrl)
	.controller("debateCtrl", debateCtrl)
	.controller("PanelCtrl",PanelCtrl);

	newsfeed.controller('statusController',function(){
		this.status ={};
		this.status.comments={};
		this.addStatus = function(news){
			this.status.date = Date.now();
			news.posts.unshift(this.status);
			this.status ={};
		};
	});

	newsfeed.controller('commentController',function(){
		this.comment ={};
		this.addComment= function(post){
			post.comments.push(this.comment);
			this.comment={};
		};
	});



})();
	
$(document).load(function(){
	$(".section-wrap").hide();
});

