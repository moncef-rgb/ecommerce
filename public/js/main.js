function getcatProducts($id){
	const input = document.querySelector("#cat_id");
	const form = document.querySelector("#catPro");
	input.value= $id;
	form.submit();
}
function submitForm($id){
	const input = document.querySelector("#product_id");
	const form = document.querySelector("#form");
	input.value= $id;
	form.submit();
}

