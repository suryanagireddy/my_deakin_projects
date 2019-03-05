
$(function (){
	//declaring variables to be used in the game
	var container=$('#container');
	var bird=$('#bird');
	var pole=$('.pole');
	var pole_1=$('#pole_1');
	var pole_2=$('#pole_2');
	var score=$('#score');
	var speed_span=$('#speed');
	var restart_btn=$('#restart_btn');
	var container_width=parseInt(container.width());
	var container_height=parseInt(container.height());
	var pole_initial_position=parseInt(pole.css('right'));
	var pole_initial_height=parseInt(pole.css('height'));
	var bird_left=parseInt(bird.css('left'));
	var bird_left=parseInt(bird.css('left'));
	var bird_height=parseInt(bird.height());
	//initializing the speed and assigning to 10 as the base.
	var speed=10;
	
	var go_up=false;
	var score_updated=false;
	var game_over=false;
	//declaring variable game which will have a series of actions
	var the_game=setInterval(function (){
		//checking if the bird collided on the screen with either the poles, lower surface or upper surface of the container
			if( collision(bird, pole_1) || collision(bird, pole_2) || parseInt(bird.css('top')) <=0 || parseInt(bird.css('top')) >
			container_height - bird_height){
			//if it collided, the stop game function is called	
			
			stop_the_game();
			
		}else{
			//else the next pole are set
		
		var pole_current_position=parseInt(pole.css('right'));
		//checks if the bird has passed the pole succefully then increament the score
		if(pole_current_position > container_width - bird_left){
			
			if(score_updated===false){
				//display the new score
			score.text(parseInt(score.text()) + 1);
			score_updated=true;
		}
		}
		//check if the bird has passed the poles successfully then change the heights of the poles
		if(pole_current_position>container_width){
			var new_height=parseInt(Math.random() * 100);
			
			pole_1.css('height', pole_initial_height + new_height);
			pole_2.css('height', pole_initial_height - new_height);
			//increament the speed of the poles
			speed = speed + 1;
			//display the new speed
			speed_span.text(speed);
			score_updated=false;
			
			pole_current_position=pole_initial_position;
			
		}
		
		pole.css('right',pole_current_position + speed);
		
		if(go_up===false){
			go_down();
		}
	}
	}, 40);
	
	
	

	
	
	$(document).ready(function(){
		
		
		//chck the start of the tap event and initialize the function
		
		
		
		
		
		var getPointerEvent = function(event) {
    return event.originalEvent.targetTouches ? event.originalEvent.targetTouches[0] : event;
};
var $touchArea = $('body'),
    touchStarted = false, // detect if a touch event is sarted
    currX = 0,
    currY = 0,
    cachedX = 0,
    cachedY = 0;

//setting the events listeners
$touchArea.on('touchstart mousedown',function (e){
    e.preventDefault(); 
    var pointer = getPointerEvent(e);
    // caching the current x
    cachedX = currX = pointer.pageX;
    // caching the current y
    cachedY = currY = pointer.pageY;
    // a touch event is detected      
    touchStarted = true;
	//check if the bird is not going up and the game is not over
   if(go_up===false && game_over===false){
		go_up=setInterval(up, 50);

	}
    
});
//check when the screen is not tapped then allow the bird to move down.
$touchArea.on('touchend mouseup touchcancel',function (e){
    e.preventDefault();
    // here we can consider finished the touch event the bird moves down
    touchStarted = false;
    clearInterval(go_up);
			go_up=false;
});

   
		
		
		
		
		
		
		
		
		//ok
		
	});
	//function for going down of the bird
	function go_down(){
		bird.css('top', parseInt(bird.css('top')) + 5);
		
	}
	//function for going down of the bird
	function up(){
		bird.css('top', parseInt(bird.css('top')) - 10);
	
	}
	//function for ending the game incase of collision
	function stop_the_game(){
		clearInterval(the_game);
		game_over=true;
		restart_btn.show();
	}
//displaying the restart button if the game if over and reload the game
	restart_btn.click(function(){
		location.reload();
	});
	//function for checking the collision of the bird in the screen
	function collision($div1, $div2){
		var x1=$div1.offset().left;
		var y1=$div1.offset().top;
		var h1=$div1.outerHeight(true);
		var w1 = $div1.outerWidth(true);
		var b1=y1+h1;
		var r1=x1+w1;
		var x2=$div2.offset().left;
		var y2=$div2.offset().top;
		var h2=$div2.outerHeight(true);
		var w2=$div2.outerWidth(true);
		var b2=y2+h2;
		var r2=x1+w2;
		if (b1 < y2 || y1 > b2 || r1 < x2 || x1 > r2 )
		return false; 
		return true;
	}

});