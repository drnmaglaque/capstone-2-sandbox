$(document).ready(function(){

	const listItems = $(".list-group-item");

	listItems.each(function() {
		$(this).click(function(){
			let obj = {
				"catId" : $(this).attr("id")	
			}

			console.log(obj);

			$.ajax({
				"url": "../controllers/show_by_category.php",
				"type": "POST",
				"data": obj,
				"success": filterByCatId
			});
		});
	});

	function filterByCatId(jsondata) {
		if (jsondata !== "") {
			const filteredItems = JSON.parse(jsondata);

			let cardColumns = ``;
			let listItems = ``;
			filteredItems.forEach(function(item){
				listItems += `

				<div class="card" id="${item.id}" >
							<img class="img-card-top img-fluid" src="${item.img_path}" alt="">
							<div class="card-body">
								<div class="card-title"><h3>${item.item_name}</h3></div>
								<div class="card-text"><p>${item.description}</p>${item.price}
									
								</div>
								
							</div>
						</div>

				`;

				cardColumns = `
					<div class="card-column">
						${listItems}
					</div>
				`;

				$(".items-group-container").html(cardColumns);
			})

		}
	}

});