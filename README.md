# Eatssentials
www.eatssentials.online

## Installation 
1. Download the repository locally on your computer
2. Ensure that XAMPP is downloaded locally or a webhost with PHP & SQL is configured
3. Move the github files to the root directory of your web server. If using XAMPP in linux, move the files to opt/lampp/htdocs.
4. With XAMPP installed and all servers running, proceed to localhost/phpmyadmin in your browser. Use phpMyAdmin to create a new database called ingredients and run the commands found in ingredients.sql
5. Finally search www.eatssentials.online and browse!


## Technologies / Tools
* HTML/CSS
* Javascript
* PHP
* SQL
* Spoonacular API
* XAMPP
* AJAX
* JSON

## Introduction
Our project is called Eatssentials, an online recipe book built around your health and what’s in your fridge. To elaborate, Eatssentials is a web-based application that can be hosted on any browser (Google Chrome, Firefox, etc.). The website intends to help users with certain health conditions such as diabetes, vitamin deficiencies, mineral deficiencies, and high cholesterol by browsing the web for health accommodating meals they can prepare with the limited items at their disposal. 

Initially, users will be prompted to fill out a survey where they indicate whether or not they have the health conditions listed. A series of health conditions will be listed and the default answer is set to 'No.' If a user has a health condition, they must specifically indicate it by selecting 'Yes' in the slot. Upon survey completion, the users will be redirected to a page where they are prompted to individually enter the names of the ingredients inside their "fridge." There will also be an option to remove ingredients from the list you have created. If you remove an ingredient, click on the ‘Recipes’ tab at the top and when the redirected page appears, select ‘Find Recipes.’ From our end, our website will browse the web, using the Spoonacular API, for recipes that the user can prepare based upon both their health conditions and the limited items in their fridge.

# Visuals 
![Dashboard](https://raw.githubusercontent.com/courtneylee1321/eatssentials/master/dashboard.png)

![Recipes](https://raw.githubusercontent.com/courtneylee1321/eatssentials/master/recipes.JPG)
# Main Files 
## Index.php 
PHP hosting our website 

## Style.css 
CSS creating a user-friendly interface that users can interact with easily

## Ingredient.sql
SQL file creating a database table to store ingredients from the user's refrigerator


## Future Work 
* Login and sign in page for users in order for the tailored recipes will be saved on the recipes tab for them to reference in the future
* Functionality to save recipes to a user's account. This ensures a user would not have to repeatedly enter ingredients for particular recipes.

## Contributers
* Svanik Shirodkar
* Sarah Lim
* Nisha Reddy
* Courtney Lee
