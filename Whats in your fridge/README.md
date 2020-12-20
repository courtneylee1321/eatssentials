# Eatssentials
www.eatssentials.space

## Installation 
1. Download the repo locally on your computer
2. Ensure that XAMPP is downloaded locally or a webhost with PHP & SQL is configured
3. Move the github files to the root directory of your web server. If using XAMPP in linux, move the files to opt/lampp/htdocs.
4. With XAMPP installed and all servers running, proceed to localhost/phpmyadmin in your browser. Use phpMyAdmin to create a new database called ingredients and run the commands found in ingredients.sql

## Technologies / Tools
* HTML/CSS
* Javascript
* PHP
* SQL
* Spoonacular API
* XAMPP

## Introduction
Eatssentials is a web-based application that can be hosted on any browser (Google Chrome, Firefox, etc.). The website intends to help users with certain health conditions such as diabetes, vitamin deficiencies, mineral deficiencies, and high/low cholesterol by browsing the web for health accomodating meals they can prepare with the limited items at their disposal. Initially, users will be prompted to fill out a survey where they indicate whether or not they have the health conditions listed. The health survey is designed specifically for individuals with the mentioned health conditions, thus the default answer in the survey is 'Yes.' If a user does not have a specific health condition, they must specifically indicate by checking 'No' in the survey's slots. Upon survey completion, the users will be redirected to a page where they are prompted to individually enter the names of the ingredients inside their "fridge." From our end, our website will browse the web, using the Spoonacular API, for recipes that the user can prepare based upon both their health conditions and the limited items in their fridge. 

## Visuals 



## Included Files
* 

## Future Work 
* Login Page for users
* Functionality to save recipes to a user's account. This ensures a user would not have to repeatedly enter ingredients for particular recipes.

## Contributers
* Svanik Shirodkar
* Sarah Lim
* Nisha Reddy
* Courtney Lee
