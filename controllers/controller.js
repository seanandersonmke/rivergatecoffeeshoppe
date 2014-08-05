var app = angular.module('myApp', ['ngRoute']).
config(['$routeProvider', function($routeProvider) {
$routeProvider
.when('/', {
	templateUrl: 'main.php',
	controller: ''
	})
.when('/lunch', {
	templateUrl: 'lunch.php',
	controller: 'LunchController'
	})
.when('/breakfast', {
	templateUrl: 'breakfast.php',
	controller: 'BreakfastController'
	})
.when('/about', {
	templateUrl: 'about.php',
	controller: ''
	})
}]);

app.controller('HeaderController', ['$scope', '$location', function ($scope, $location) {
    $scope.navClass = function (page) {
        var currentRoute = $location.path().substring(1) || '#';
        return page === currentRoute ? 'active' : '';
    };        
}]);

/*Lunch Controller objects*/
var coldsandwiches = 
	[{item:'Tuna', price:'5.50'},
	{item:'Egg Salad', price:'4.40'},
	{item:'Chicken Salad', price:'5.50'},
	{item:'Egg Salad', price:'4.40'},
	{item:'Turkey', price:'5.75'},
	{item:'Roast Beef', price:'5.75'},
	{item:'Ham', price:'5.50'},
	{item:'BLT', price:'5.50'}];

var hotsandwiches = [{item:'Hamburger', desc: '1/3 lb. on toasted bun, all the way or your choice', price:'4.75'},
	{item:'Cheesburger', desc:'All the way or your choice', price:'4.99'},
	{item:'Bacon Cheeseburger', desc:'All the way or your choice', price:'5.80'},
	{item:'Double Cheeseburger', price:'6.80'},
	{item:'Roast Beef Melt', desc:'Thin sliced on your choice of bread with grilled onion', price:'5.90'},
	{item:'Patty Melt', desc:'1/3 lb. grilled on your choice of bread with griled onion', price:'5.90'},
	{item:'Turkey Melt', desc:'Sliced white meat on your choice of bread with grilled onion', price:'5.90'},
	{item:'Tuna Melt', desc:'On your choice of bread with grilled onion', price:'5.90'},
	{item:'Fried Bologna',  price:'4.75'},
	{item:'Grilled Chicken Breast on Bun', price:'5.99'},
	{item:'French Dip', desc:'Warm sliced roast beef on bun with au jus gravy', price:'5.99'},
	{item:'Fish Sandwich', desc:'Deep fried Flounder on hoagie roll', price:'5.99'},
	{item:'Grilled Cheese', price:'4.25'},
	{item:'Grilled Cheese', desc:'With tomato', price:'4.50'},
	{item:'Grilled Ham & Cheese', price:'5.75'},
	{item:'Western Sandwich', price:'4.95'},
	{item:'Hot Dog', price:'3.75'},
	{item:'Hot Dog', desc:'With chili and cheese', price:'4.25'},
	{item:'Fried Egg', price:'3.50'},
	{item:'Fried Egg', desc:'With bacon, ham or sausage', price:'4.95'},
	{item:'T-Bird', desc:'On grilled sourdough', price:'5.95'}];	

var clubsandwiches = [{item:'Roast Beef Club', price:'6.00'},
	{item:'Turkey Club', price:'6.00'},	
	{item:'Hamburger Club', price:'6.00'},
	{item:'BLT Club', desc:'Made with 8 slices of bacon',price:'6.00'}];

var opensandwiches = [{item:'Roast Beef', price:'6.25'},
	{item:'Turkey', price:'5.25'},
	{item:'Hamburger Steak', price:'6.25'}];

var subs = [{item:'Ham & Cheese', price:'6.00'},
{item:'Turkey & Cheese', price:'6.00'},
{item:'Roast Beef & Cheese', price:'6.00'},
{item:'Tuna Salad', price:'6.00'},
{item:'Chicken Salad', price:'6.00'},
{item:'Cheese Steak', desc:'With Mushroom, Onion, Pepper', price:'6.95'}];

var lunchspecials = [{item:'Chop Steak', desc:'With Mushroom, Onion, Gravy', price:'6.95'},
{item:'Meatloaf', price:'6.95'},
{item:'Liver & Onions', price:'6.95'},
{item:'Chicken Tenders', price:'6.95'},
{item:'Chicken Breast Fillet', price:'6.95'},
{item:'Country Fried Steak', desc:'With Sausage Gravy', price:'6.95'},
{item:'Honey Dipped Fried Chicken', price:'7.75'},
{item:'Pork Chops (2)', price:'8.50'},
{item:'N.Y. Strip (8oz)', price:'8.95'},
{item:'Fried Flounder', price:'7.50'},
{item:'Fried Shrimp', price:'7.50'}];

var salads = [{item:'Tossed Salad', price:'3.50'},
{item:'Tossed Salad', desc:'With Egg', price:'3.95'},
{item:'Chef Salad', price:'6.99'},
{item:'Cold Plate', desc:'With Tuna or Chicken Salad and choice of Potato Salad, Coleslaw, or Cottage Cheese', price:'6.99'},
{item:'Stuffed Tomato', desc:'With Tuna or Chicken Salad', price:'6.99'},
{item:'Chicken Salad', price:'6.99'},
{item:'Crispy Chicken Salad', price:'6.99'},
{item:'Tuna Salad', price:'6.99'},
{item:'Soup & Salad', price:'5.25'},
{item:'Grilled Chicken Salad', price:'6.99'},
{item:'Greek Salad', price:'6.99'}];

var lunchsides = [{item:'Cottage Cheese', price:'1.95'},
{item:'Potato Salad', price:'1.95'},
{item:'Coleslaw', price:'1.95'},
{item:'French Fries', price:'1.95'},
{item:'Chili Cheese Fries', price:'3.75'},
{item:'Onion Rings', price:'2.50'},
{item:'Macaroni & Cheese', price:'2.95'},
{item:'Sweet Potato Fries', price:'2.50'},
{item:'Tomatoes', price:'1.99'},
{item:'Fried Okra', price:'2.50'},
{item:'Fried Zucchini', price:'2.75'},
{item:'Apple Sauce', price:'1.70'},
{item:'Beef or Chicken Gravy', price:'1.25'}];
/*End Lunch Controller objects*/
/*Breakfast Controller objects*/
var breakfast = [{item:'1 Egg', price:'2.95'},
	{item:'2 Eggs', price:'3.75'},
	{item:'2 Eggs', desc:'With Bacon or Sausage', price:'5.25'},
	{item:'2 Eggs', desc: 'With 1/3 lb. Ground Beef Patty', price:'5.99'},
	{item:'2 Eggs', desc: 'With Hash, Smoked Sausage, Ham or Bologna',price:'6.25'},
	{item:'2 Eggs', desc: 'With Country Fried Steak', price:'6.50'},
	{item:'8 oz. New York Strip & Eggs', price:'8.95'},
	{item:'Pork Chops & Eggs', price:'8.50'}];

var omelettes = [{item:'Cheese', price:'4.99'},
	{item:'Mushroom & Swiss Cheese', price:'5.95'},
	{item:'Bacon or Sausage', price:'5.95'},
	{item:'Ham', price:'5.95'},
	{item:'Western', desc: 'Onion, Green Pepper, Ham', price:'5.99'},
	{item:'Spinach & Swiss Cheese', desc: '', price:'5.99'},
	{item:'Greek', desc: 'Feta, Spinach, Garlic, Tomato', price:'6.50'},
	{item:'Spanish', price:'5.25'},
	{item:'Chili', price:'5.75'},
	{item:'Philly', desc: 'Steak, Onion, Green Pepper', price:'6.99'},
	{item:'Vegetarian', desc: 'Mushroom, Onion, Tomato, Green Pepper', price:'5.99'},
	{item:'Gyro', desc: 'Onion, Feta, Gyro Meat', price:'6.99'}];

var breakfastspecials = [{item:'Pancakes', desc: 'Short Stack of 2', price:'3.75'},
	{desc:'With Bacon or Sausage', price:'4.99'},
	{desc:'With Ham', price:'5.50'},
	{item:'Pancakes', desc: 'Large Stack of 3', price:'4.25'},
	{item:'Pancakes', desc: 'Single Stack of 1', price:'2.75'},
	{item:'French Toast(2)', price:'3.85'},
	{desc:'With Bacon or Sausage', price:'5.50'},
	{desc:'With Ham', price:'5.75'},
	{item:'Biscuit & Gravy', price:'3.75'},
	{item:'Large Sausage Biscuit', price:'3.85'}];

var kids = [{item:'Chocolate Chip Pancake', price:'3.00'},
	{item:'Mickey Mouse', price:'3.00'},
	{item:'2 Silver & 1 Egg', price:'3.00'},
	{item:'1 Egg, 2 Bacon Strips, Home Fries, Toast & Jelly', price:'3.99'},
	{item:'Chicken Tenders', desc: 'With French Fries and Applesauce', price:'4.50'}];

var sideorders = [{item:'English Muffin', price:'1.25'},
	{item:'Toast', price:'1.10'},
	{item:'Grits', desc:'Cup/Bowl',price:'$1.50/$1.99' },
	{item:'Biscuit', price:'1.35'},
	{item:'Bagel', price:'1.75'},
	{item:'Sausage Gravy', price:'1.99'},
	{item:'Peanut Butter', price:'0.75'},
	{item:'Bacon or Sausage', price:'2.95'},
	{item:'Bagel w/Cream Cheese', price:'2.25'},
	{item:'Smoked Sausage, Scrapple, Corned Beef Hash or Ham', price:'3.50'},
	{item:'Home Fries or Hash Browns', price:'2.25'},
	{item:'1 Egg', price:'1.35'},
	{item:'Muffins', desc:'Banana Walnut, Blueberry, or Carrot', price:'2.75'}];

var beverages = [{item:'Brisk Coffee', price:'1.50'},
	{item:'Decaffeinated Coffee', price:'1.50'},
	{item:'Hot Tea', price:'1.50'},
	{item:'Iced Tea', price:'1.99'},
	{item:'Milk', price:'1.75'},
	{item:'Chocolate Milk', price:'1.95'},
	{item:'Medium Juice', price:'1.50'},
	{item:'Large Juice', price:'2.25'},
	{item:'Soda', price:'1.99'},
	{item:'Lemonade', price:'1.99'}];

app.controller('LunchController', function($scope){
	$scope.coldsandwiches = coldsandwiches;
	$scope.hotsandwiches = hotsandwiches;
	$scope.clubsandwiches = clubsandwiches;
	$scope.opensandwiches = opensandwiches;
	$scope.subs = subs;
	$scope.lunchspecials = lunchspecials;
	$scope.salads = salads;
	$scope.lunchsides = lunchsides;

});

app.controller('BreakfastController', function($scope){
	$scope.breakfast = breakfast;
	$scope.omelettes = omelettes;
	$scope.breakfastspecials = breakfastspecials;
	$scope.kids = kids;
	$scope.sideorders = sideorders;
	$scope.beverages = beverages;
});