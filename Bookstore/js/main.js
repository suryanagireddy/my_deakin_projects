$(document).ready(function(){
$("body").delegate("#contacto","click",function(event){
	event.preventDefault();
	alert(0);
	die();




		$.ajax({
			url	: "contact.php",
			method	: "POST",
			data	:$("form").serialize(),
			success	: function(data){
				$("#msg").html(data);
			}
		});
});
availablebooks();
function availablebooks(){
		$.ajax({
			url : "action.php",
			method : "POST",
			data : {getBooks:1},
			success : function(data){
				$("#get_books").html(data);
			}
		})
	}
	viewcontact();
	function viewcontact(){
		
		$.ajax({
			url	: "action.php",
			method: "POST",
			data	:{viewcontact:1},
			success:	function(data){
				$("#viewcontact").html(data);
			}
			
		})
	}
	$("#search").keyup(function(){
		
		var keyword=$("#search").val();
		if(keyword !=""){
			$.ajax({
			url : "action.php",
			method : "POST",
			data : {search:1,keyword:keyword},
			success : function(data){
				$("#getbooks").html(data);
			}
		})
		}else{
			$.ajax({
			url : "action.php",
			method : "POST",
			data : {reset:1},
			success : function(data){
				//$("#get_product").html(data);
				window.location.href='booksearch.php';
			}
		})
		}
	})
	$("#ok").click(function(){
		alert(no);
	})
	
	
	
});
