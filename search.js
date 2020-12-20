var id;
var response = [];
var allIDS = [];
var response2 = [];
var ingredientsList = [];
var ingredientsScore = [];

var counter = 0;

var swapCounterA = 0;
var swapCounterB = 0;

var finalData = {
	recipeData: []
};

var counterResults = ["Results1", "Results2", "Results3", "Results4", "Results5", "Results6", "Results7", "Results8", "Results9", "Results10"];
var outoutCounter = 0;

// Good foods for diabetics
const good_diabetes = ["fish", "leafy greens", "spinach", "avocados", "eggs", "chia seeds", "beans", "almonds", "walnuts", "pecans", "broccoli",
		       "extra virgin olive oil", "flax seeds", "apple cider vinegar", "strawberries", "garlic", "squash", "shirataki noodles",
		       "kale", "spinach", "arugula", "oranges", "melon", "apples", "grapes", "berries", "carrots", "fresh fruit", "vegetables",
		       "tomatoes", "grains", "sweet potato", "applesauce", "sugar-free jam"];

// Good foods for vitamin A deficiency patients

const good_vitaminA = ["liver", "beef", "oily fish", "chicken", "eggs", "fortified milk", "carrots", "mangoes", "sweet potatoes",
		       "leafy greens", "apricots", "papaya", "peaches", "tomatoes", "fortified skim milk", "meat", "poultry",
		       "dairy", "beef liver", "sweet potato", "black-eyed peas", "spinach", "broccoli", "sweet red pepper", "mango",
		       "cantaloupe", "pumpkin pie", "tomato juice", "herring"];

// Good foods for calcium deficiency patients

const good_calcium = ["collard greens", "broccoli rabe", "kale", "soybeans", "bok choy", "dried figs", "broccoli", "oranges", "canned sardines",
		      "canned salmon", "canned shrimp", "ricotta", "low-fat yogurt", "skim milk", "low-fat milk", "whole milk", "mozzarella",
		      "chedda cheese", "american cheese", "feta", "cottage cheese", "frozen yogurt", "vanilla ice cream", "parmesan",
		      "almond milk", "rice milk", "soy milk", "orange juice", "fruit juice", "tofu", "canned beans", "nuts", "poppy seeds",
		      "sesame seeds", "celery seeds", "chia seeds", "almonds"];

// Good foods for iron deficiency patients

const good_iron = ["beef", "lamb", "mutton", "pork", "ham", "turkey", "chicken", "veal", "pork", "dried beef", "liver", "liverwurst", "eggs",
		   "shrimp", "clams", "scallops", "shellfish", "clams", "oysters", "tuna", "sardines", "haddock", "mackerel", "fish", "spinach",
		   "sweet potatoes", "peas", "broccoli", "string beans", "beans", "lentils", "tofu", "pumpkins", "squash", "sesame seeds",
		   "dried apricots", "parsley", "beet greens", "dandelion greens", "collards", "kale", "chard", "white bread", "whole wheat bread",
		   "enriched pasta", "chickpea", "enriched cereal", "enriched rice", "enriched bread", "oats", "dried fruit", "russet potato",
		   "red potato", "nuts", "oranges", "lemons", "melon", "kiwi", "peppers", "strawberries", "tomatoes", "cream of wheat", "rye bread",
		   "oat cereal", "strawberries", "watermelon", "raisins", "dates", "figs", "prunes", "prune juice", "dried peaches", "kidney beans",
		   "garbanzo beans", "white beans", "canned beans", "olives", "mulberries", "soybeans", "flax seeds", "hummus", "cashews", "pistachios"];

// Good foods for cholestrol patients

const good_cholesterol = ["oats", "barley", "legumes", "avocados", "walnuts", "fatty fish", "salmon", "mackerel", "oats", "barley", "fruit", 
			  "berries", "grapes", "citrus fruit", "strawberries", "apples", "dark chocolate", "cocoa", "garlic", "soy", "vegetables",
			  "okra", "eggplants", "carrots", "oranges", "carrots", "potatoes", "dark leafy greens", "kale", "spinach", "green tea",
			  "black tea", "extra virgin olive oil"];



//Makes a call to the API with user's query, returns an array of recipes that match
function getRecipe(q){
	//console.log(q);
	$.ajax({
		//Edit endpoint below to modify call
		url:"https://api.spoonacular.com/recipes/findByIngredients?apiKey=c08276ecd7454db4bb516fc78bef6936&ingredients="+q,
		success: function(res) {
			//console.log(response[1].title);
			//console.log(res);
			response = res;
			getID(response);
			//rankResults(response);
		}
	});
}

function getID (response) {
	for (var i = 0; i < 9; i++) {
		allIDS[i] = response[i].id;
		showRecipe(allIDS[i]);
		displayRecipe(allIDS[i]);
	}

}

function displayRecipe(f) {
	$.ajax({
		//Edit endpoint below to modify call
		url:"https://api.spoonacular.com/recipes/" + f + "/information?apiKey=c08276ecd7454db4bb516fc78bef6936",
		success: function(res) {
			//console.log(response[1].title);
			console.log(res);
			document.getElementById(counterResults[outoutCounter]).innerHTML="<h5 class='card-title'>"+res.title+"</h5><br><img class ='card-img-top'src='"+res.image+"' width='400' /><br>" + "<p class='card-text'>" + res.sourceUrl + "</p>"
			outoutCounter++;
		}
	});
}

function showRecipe(w) {
	//console.log(w);
	var score = 0;
	$.ajax({
		url:"https://api.spoonacular.com/recipes/" + w + "/ingredientWidget.json?apiKey=c08276ecd7454db4bb516fc78bef6936",
		success: function(res) {
			response2 = res;
			for (var i = 0; i < response2.ingredients.length; i++) {
				ingredientsList[i] = response2.ingredients[i].name;
				if (localStorage.diabetes == "1") {
					if (good_diabetes.includes(response2.ingredients[i].name)) {
					score++;
					}
				}

				if (localStorage.vitamina == "1") {
					if (good_vitaminA.includes(response2.ingredients[i].name)) {
					score++;
					}
				}

				if (localStorage.calcium == "1") {
					if (good_calcium.includes(response2.ingredients[i].name)) {
					score++;
					}
				}

				if (localStorage.iron == "1") {
					if (good_iron.includes(response2.ingredients[i].name)) {
					score++;
					}
				}

				if (localStorage.cholesterot == "1") {
					if (good_cholesterol.includes(response2.ingredients[i].name)) {
					score++;
					}
				}
			}


			if (counter < 10) {
				ingredientsScore[counter] = score;
			}

			//finalData.recipeData.push({
			//	"Score" : ingredientsScore[counter],
			//	"ID" : allIDS[counter]
			//});

			console.log("Score: " + score + " Counter: " + counter + " ID: " + w);
			counter++;
		}
	});
}

function storeDiabetes(diabetes) {
	localStorage.setItem("diabetes", diabetes);
}

function storeVitamina(vitamina) {
	localStorage.vitamina = vitamina;
}

function storeCalcium(calcium) {
	localStorage.calcium = calcium;
}

function storeIron(iron) {
	localStorage.iron = iron;
}

function storeCholesterot(cholesterot) {
	localStorage.cholesterot = cholesterot;
}
