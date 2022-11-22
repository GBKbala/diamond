<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <body>
<div class="alert alert-danger" role="alert">
	<svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
</svg>
  ADD SALES
</div>
<div class="alert alert-success" role="alert">
 Please fill in the information below.The field labels marked with* are required input fields.
</div>
<div class="container overflow-hidden">
<div class="row">
  <div class="col">
  	DATE*
    <input type="text" class="form-control">
  </div>
  <div class="col">
  	BILL NO*
    <input type="text" class="form-control">
  </div>
   <div class="col">
   	BILLER*
    <input type="text" class="form-control">
  </div>
</div>
</div>
<br>
<div class="alert alert-danger" role="alert">
	<div class="alert alert-success" role="alert">
	<center>Please Select these before adding any product.</center>
	</div>
<div class="row">
  <div class="col">
  	WAREHOUSE*
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col">
  	CUSTOMER*
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected></option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
</div>
</div>
 <div class="alert alert-warning" role="alert">
  <div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    Product*
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>PRODUCT</option>
  <option value="1">one</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>
  <div class="col">
    Net Price*
    <input type="text" class="form-control" placeholder="price">
  </div>
  <div class="col">
     Quantity*
    <input type="text" class="form-control" placeholder="QTY">
</div>
<div class="col">
     Discount*
    <input type="text" class="form-control" placeholder="discount">
</div>
<div class="col">
       Tax*
    <input type="text" class="form-control" placeholder="tax">
</div>
<div class="col">
  <br>
   <svg xmlns="http://www.w3.org/2000/svg" width="36" height="42" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
</div>
</div>
</div>
</div>
<br>
<br>
<div class="alert alert-success" role="alert">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">PRODUCT</th>
      <th scope="col">SERIAL NO</th>
      <th scope="col">MRP</th>
      <th scope="col">UNIT PRICE</th>
      <th scope="col">QTY</th>
      <th scope="col">DISCOUNT</th>
       <th scope="col">TAX</th>
       <th scope="col">EDIT</th>
       <th scope="col">DELETE</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></td>
    </tr>
    <tr>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td>-</td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="30" height="50" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
</svg></td>
    </tr>
  </tbody>
</table>
</div>
<div class="alert alert-danger" role="alert">
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    ORDER DISCOUT*
    <input type="text" class="form-control">
  </div>
  <div class="col">
    <br>
  <center><input class="btn btn-primary" type="submit" value="Submit">
<input class="btn btn-primary" type="reset" value="Reset"></center>
</div>
  <div class="col">
    ATTACH DOCUMENT :
    <input type="text" class="form-control">
  </div>
</div>
</div>
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
     SALE STATUS* 
    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>COMPLETED</option>
  <option value="1">one</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
   
  </div>
  <div class="col">
    PAYMENT TERM*
    <input type="text" class="form-control">
  </div>
  <div class="col">
    PAYMENT STATUS* 
     <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected></option>
  <option value="1">one</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
</div>
</div>
</div>
<div class="alert alert-success" role="alert">
<div class="container overflow-hidden">
  <div class="row">
  <div class="col">
    PAYMENT REFERENCE NO*
    <input type="text" class="form-control">
  </div>
  <div class="col">
    AMOUNT
    <input type="text" class="form-control">
  </div>
  <div class="col">
    PAID BY*
     <select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Cash</option>
  <option value="1">Card</option>
  <option value="2">Debit</option>
  <option value="3">Emi</option>
</select>
  </div>
</div>
</div>
</div>


</body>
</html>