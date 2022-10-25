This is Api Project for Larave

Step 1: download all the files and move the file in localdirectory
Step 2: Change the database name , user name and password in .env file
Step 3: Open terminal and run the migration cammand
php artisan migrate
Step 4: Run the seed command to import dummy data
php artisan db:seed

There is 5 api in this progect 
1) get all customer
URL: http://localhost/laraveltest/public/api/getCustomer
Method: GET
Auth: besic auth (username: abhishek , password: 12345678)

2) search customer
URL: http://localhost/laraveltest/public/api/searchCustomer/{customer_id}
Method: GET
Auth: besic auth (username: abhishek , password: 12345678)

3) Create customer
URL: http://localhost/laraveltest/public/api/addCustomer
Method: POST
Data type : Body(JSON)
{"name":"Raju","email":"sonu@gmail.com","address":"New Delhi India","phone":"9887654345"}
Auth: besic auth (username: abhishek , password: 12345678)

4) Update customer
URL: http://localhost/laraveltest/public/api/updateCustomer/{customer_id}
Method: POST
Data type : Body(JSON)
{"name":"Raju","email":"sonu@gmail.com","address":"New Delhi India","phone":"9887654345"}
Auth: besic auth (username: abhishek , password: 12345678)

5) Delete customer
URL: http://localhost/laraveltest/public/api/deleteCustomer/{customer_id}
Method: DELETE
Auth: besic auth (username: abhishek , password: 12345678)

Note: postman json link (https://www.getpostman.com/collections/6fac5035ee1069a5e5cf)
