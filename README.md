# Cloth-DataBase
Data base of a cloth showroom


Install xampp in your system
After Installation steps:
	1)start the server using command "sudo /opt/lampp/lammp start"
	2)copy the Cloth folder into /opt/lampp/htdocs 
	3)In url type "localhost/xampp"
	4)then open phpmyadmin in this site
	5)create a database name "Cloth" in phpmyadmin  (C is in capslock)
  	6)Import the 'Cloth.sql' in Project database
	7)In url type "localhost/Cloth/login.php"
Description:
	1) It is a data base for a cloth shop so there should be given username and password manually
	2) Once the username and password are given then the user can change password
	3) After authentication login completed then it will be redirected to home page where you can see the customers name and phonenumbers
	4) Once customer buys the dresses from the showroom they have to bill
	5) There will be ID for every product and if there is offer for a product then discounted money is automatically reduced from the total money
	6) Offers has start and end date.Once the end date is completed then auomatically offer is removed.
	7) If a customer buys products automatically total number of products will be decreased and so many additional features have been implemented.
