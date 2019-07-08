# AJAX-Search-Suggestions-Dropdown
Ajax Search Suggestions Dropdown in PHP & JavaScript

## Setup the Script
1. Download the Script & Download Database SQL file from <a href="https://github.com/hiiamrohit/Countries-States-Cities-database">here</a>
2. Extract it into web directory
3. Create a Database with the name of **phpajax** & import the SQL file into the database
4. Configure the Database Credentials in **searchresults.php**, You will find this code from line numbers 2 to 9
```php	
$connection = mysqli_connect('localhost', 'root', '');
if(!$connection){
	die("Database Connection Failed" . mysqli_error($connection));
}
$selectdb = mysqli_select_db($connection, 'phpajax');
if(!$selectdb){
	die("Database Selection Failed" . mysqli_error($connection));
}
```