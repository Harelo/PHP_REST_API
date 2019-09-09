<h1><b>A website with a REST API used for personal tests</h1></b>

This website was made as a test.<br/>
Explanations about the folders:
<ul>
<li>API - includes the file read.php where the main code for reading information from the database can be found.</li>
<li>CONFIG - a folder for configuration files. Includes the file Database.php which allows connection with the database.</li>
<li>MODELS - a folder for models. In it you can find the model Group which represents a single record in the database's main table. The code allows an SQL query to be sent to the database with a specific ID which in turn returns the record found for the ID given.</li>
<li>SITE - the files of the website itself (client-side). Includes the file mainpage.html which is the main page for the website. Also includes a JavaScript file in which there is a script that sends a GET request to the API (basically, sends an ID which returns a record from the database that matches the ID).
</ul>
<br/>
This website was tested using XAMPP & PHPMyAdmin with a database stored locally.
