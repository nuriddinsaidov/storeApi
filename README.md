# storeApi


application uses laravel API Authentication (Passport) Password Grant Tokens
[more details here](https://laravel.com/docs/5.6/passport)


### in order to start working with api
 
 1. first of all u would need to create user 
 send post request to
 `/api/register` with the following parametrs `name,email,password,c_password,login`
 2. Creating A Password Grant Client by executing command `php artisan passport:client --password`
 3. Requesting Tokens Once you have created a password grant client, you may request an access token by issuing a  POST request to the /oauth/token route with the user's email address and password.
 
 ```'grant_type' => 'password',
          'client_id' => 'client-id',
          'client_secret' => 'client-secret',
          'username' => 'user@laravel.com',
          'password' => 'my-password',
          'scope' => ''
  ```
          
  U will receive you token that u have to include to each your request   
  
  ````
  'headers' => [
          'Accept' => 'application/json',
          'Authorization' => 'Bearer '.$accessToken,
      ],
  ````        
  
  ### list of available commands
  
  - list of the products: GET /api/products
  - create product: POST /api/products
  - Show product: GET api/products/{id}
  - Update product: PUT api/products/{id}
  - Delete product: DELETE api/products/{id}
 