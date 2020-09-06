
$(document).ready(function(){



//INCREASE AND DECREASE QUANTITY IN CART

/*Increase quantity when user click increase button*/

$(".increase").click(function(){
	
	var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")
	
	if(quantity.val()>=1 && quantity.val()<=9){
		
		var oldVal=quantity.val();
		quantity.val(function(){
			return ++oldVal;
			
		})
		
	}
	
//get the total amount added in input field and in data index 
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	
	location.reload(data);
	
	//console.log(data);
	
	//$(".recomended-for-u").html(data);
	})
	
	
})	


	
/*Decrease quantity when user click increase button*/

$(".decrease").click(function(){
	
	var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")
	
	if(quantity.val()<=10 && quantity.val()>=2){
		
		var newVal=quantity.val();
		quantity.val(function(){
			return --newVal;
		})
	}
	
//get the total amount added in input field and in data index 
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	location.reload(data);
	//console.log(data);
	//$(".recomended-for-u").html(data);
	})
})	


//if increase and decrease input get focus , get it value

$(".input_qty").mouseout(function(){
var quantity=$(".input_qty[data-index='"+$(this).data("index")+"'")

//get the total amount added in input field and in data index 
	if(quantity.val()>=1 && quantity.val()<=9){
	var amount=quantity.val();
	
	var currentIndex=parseInt($(this).data('index'));
	
	
	
	$.post('cart_quantity.php',{amount,currentIndex},function(data){
	
    console.log(data);
	//$(".recomended-for-u").html(data);
	})
 $(".input_qty").css({'border':'1px solid transparent'});
	}
else{
	alert("Value Should Be Between 1 and 10 ");
	$(".input_qty").css({'border':'1px solid red'});
}	
	
})

		
	
//HAEDER AUTO SEARCH INPUT.

//medium  device screen main search ajax codes
	
	$('#form-md').keyup(function(e){
    e.preventDefault();
	
	//get input data
	var search=$('#search-md').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});
//Small to medium screen main auto search ajax codes
	
	$('#form-sm').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-sm').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});

//Very small screen ajax  auto search code
	$('#form-xs').keyup(function(e){
  e.preventDefault();
	
	//get input data
	var search=$('#search-xs').val();
	$.ajax({
		type:'post',
		url:'header/search_main.php #mysearch',
		data:{search},
		success:function(data){
			
		$('.post_data').html(data);
			
		}
		
	})
	
});	
/*Hide myseach div box When click outside*/	
	$('body').click(function(e){
	
	$("form #mysearch").hide();	
})

//End of main search input data via ajax;	


//select all in cart list checkbox	
$("input[name='select_all']").click(function(){

var checked=$("input[name='select_all']").is(":checked");;

if(checked==true){

var email=$("input[name='select_all']").val();
$.post('subtotal.php',{email},function(data){
	$(".tprice").html(data);
	
})
//check all element in cart
$("input[name='total_cart']").prop("checked",true);	
}
else{

if(checked==false){
   
//alert('working again
$(".tprice").html("<h5>$0.00</h5>");
$("input[name='total_cart']").prop("checked",false);	

}	
}

})



	

	
	














	
	})