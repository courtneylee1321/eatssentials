var id;
var response = [];


//Makes a call to the API with user's query, returns an array of recipes that match
function getRecipe(q){
	//console.log(q);
	$.ajax({
		//Edit endpoint below to modify call
		url:"https://api.spoonacular.com/recipes/findByIngredients?apiKey=f05e4fc5c5004a3cbaea45899b55fd12&ingredients="+q,
		success: function(res) {
			response = res;
			//console.log(response[1].title);
			//console.log(res);
			id = res[0].id;
			showRecipe(id);
			rankResults(response);
			//document.getElementById("results").innerHTML=res[0].title
		}
	});
}


function showRecipe(w) {
	//console.log(w);
	$.ajax({
		url:"https://api.spoonacular.com/recipes/" + w + "/information?apiKey=f05e4fc5c5004a3cbaea45899b55fd12",
		success: function(res) {
			//console.log(res);
			//document.getElementById("results1").innerHTML=res.servings
		}
	});
}

function rankResults(response) {
	for (var i = 0 in response) {
		
	}
}