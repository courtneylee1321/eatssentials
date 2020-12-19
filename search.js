var response = [];
const ingredients = [];
const resultsToDisplay = [];

var key = "";

//Makes a call to the API with user's query, returns an array of recipes that match
function getRecipe(q){
	console.log(q);
	$.ajax({
		//Edit endpoint below to modify call
		url:"https://api.spoonacular.com/recipes/complexSearch?apiKey=ba289e57e8ef469cb93c2b79d6a00525&includeIngredients="+q,
		success: function(res) {
			response = res;
			console.log(res.results);
			//for (int i = 0; i < 10; i++) {
				document.getElementById("results").innerHTML=res.results[0].title+"<br><img src='"+res.results[0].image+"' width='400' /><br><br>"
			//}
		}
	});
}