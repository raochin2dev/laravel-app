$(document).ready(function(){

	$('#submitBtn').click(function(){

		$.ajax({
			url: "/products",
			type: "post",
			data: $('#myForm').serialize(),
			success:function(r){
				buildTable(jQuery.parseJSON(r));
			}
		});

	});


	function buildTable(data){

		html = "";
		totalVal = 0;
		$.each(data,function(i,product){
			curPrice = product.product_qty*product.product_price;
			totalVal += curPrice;
			date = new Date(product.created_at);

			html += "<tr><td>"+product.product_name+"</td><td>"+product.product_qty+"</td><td>"+product.product_price+"</td><td>"+((date.getMonth()+1)+"/"+date.getDate()+"/"+date.getFullYear()+" "+date.getHours()+":"+date.getMinutes())+"</td><td>"+(curPrice)+"</td></tr>";

		});

		html += "<tr><td colspan='5'></td></tr><tr><td colspan='5'>Collective total : "+totalVal+"</td></tr>";

		$('#tblBody').html(html);
	}

});
