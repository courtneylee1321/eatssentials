var response = [];
const ingredients = [];
const resultsToDisplay = [];

var key = "";


// Good foods for diabetics
const good_diabetes = ["fish", "leafy greens", "spinach", "avocados," "eggs", "chia seeds", "beans", "almonds", "walnuts", "pecans", "broccoli",
		       "extra virgin olive oil", "flax seeds", "apple cider vinegar", "strawberries", "garlic", "squash", "shirataki noodles",
		       "kale", "spinach", "arugula", "oranges", "melon", "apples", "grapes", "berries", "carrots", "fresh fruit", "vegetables",
		       "tomatoes", "grains", "sweet potato", "applesauce", "sugar-free jam"];

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
		   "garbanzo beans", "white beans", "canned beans" "olives", "mulberries", "soybeans", "flax seeds", "hummus", "cashews", "pistachios"];

// Good foods for cholestrol patients

const good_cholesterol = ["oats", "barley", "legumes", "avocados", "walnuts", "fatty fish", "salmon", "mackerel", "oats", "barley", "fruit", 
			  "berries", "grapes", "citrus fruit", "strawberries", "apples", "dark chocolate", "cocoa", "garlic", "soy", "vegetables",
			  "okra", "eggplants", "carrots", "oranges", "carrots", "potatoes", "dark leafy greens", "kale", "spinach", "green tea",
			  "black tea", "extra virgin olive oil"];

// Good foods for vitamin A deficiency patients

const good_vitaminA = ["liver", "beef", "oily fish", "chicken", "eggs", "fortified milk", "carrots", "mangoes", "sweet potatoes",
		       "leafy greens", "apricots", "papaya", "peaches", "tomatoes", "fortified skim milk", "meat", "poultry",
		       "dairy", "beef liver", "sweet potato", "black-eyed peas", "spinach", "broccoli", "sweet red pepper", "mango",
		       "cantaloupe", "pumpkin pie", "tomato juice", "herring"];

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
