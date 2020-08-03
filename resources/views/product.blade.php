<!DOCTYPE html>

<html>

<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	  <link rel="stylesheet" href="/css/app.css">
	  <link rel="stylesheet" type="text/css" href="/css/product_page.css">
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

	  <title> Products </title>

</head>

<body>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f00f8dca49.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 
<!-- Wrapper -->
  <div class="wrapper">
 
  <!-- Sidebar -->

<nav class="sidebar">
  <!-- close sidebar menu -->
    <div class="dismiss">

      <i class="fas fa-arrow-left"></i>

    </div>

  <div class="logo">
    <img src="Logo.png">
  </div>

  <ul class="list-unstyled menu-elements">
      <li class="active">
          <a class="scroll-link" href="#top-content"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
      </li>
      <li>
          <a class="scroll-link" href="#section-1"><i class="fa fa-bar-chart" aria-hidden="true"></i> 
            Analysis
          </a>
      </li>
      <li>
          <a href="#otherSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" role="button" aria-controls="otherSections">
          <i class="fas fa-store"></i> Store
          </a>
          <ul class="collapse list-unstyled" id="otherSections">
              <li>
                  <a class="scroll-link" href="#section-3">Orders</a>
              </li>
              <li>
                <a class="scroll-link" href="#section-4">Products</a>
            </li>
            <li>
              <a class="scroll-link" href="#section-4">Coupons</a>
            </li>
            <li>
              <a class="scroll-link" href="#section-4">Costomers</a>
            </li>
            <li>
              <a class="scroll-link" href="#section-4">Reports</a>
            </li>
            <li>
              <a class="scroll-link" href="#section-4">Settings</a>
            </li>  
        </ul>
            
            <li>
                <a class="scroll-link" href="#section-1"><i class="fas fa-photo-video"></i>
                Media</a>
            </li> 
            <li>
                <a class="scroll-link" href="#section-1"><i class="fas fa-info-circle"></i> 
                Inquiries</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-1"><i class="fas fa-user-friends"></i>
                Users</a>
            </li>
            <li>
                <a class="scroll-link" href="#section-1"><i class="fas fa-user-shield"></i> 
                 My Profile</a>
            </li>
            <li>
                <div class="last"><a class="scroll-link" href="#section-1"><i class="far fa-question-circle"></i> 
                Support</a></div>
            </li>
        </ul>
</nav>
  <!-- End sidebar -->

	 <!-- open sidebar menu -->
        <a class="btn btn-primary btn-customized open-menu" href="#" role="button">
            <i class="fas fa-align-left"></i>
        </a>
 

 <script>
  jQuery(document).ready(function() {
 
 $('.dismiss, .overlay').on('click', function() {
     $('.sidebar').removeClass('active');
     $('.overlay').removeClass('active');
 });

 $('.open-menu').on('click', function(e) {
     e.preventDefault();
     $('.sidebar').addClass('active');
     $('.overlay').addClass('active');
     // close opened sub-menus
     $('.collapse.show').toggleClass('show');
     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
 });

 /* other code */

});

</script>



<h4>Store><b>Products</b></h4>


<div class="container">

  <div class="row">

    <div class="col-md-4" >

  	   <!--buttons-->

  	   <a href="#" class="btn btn-outline-secondary btn-sm " role="button" >Add new</a>
	     <a href="#" class="btn btn-outline-secondary btn-sm" role="button">Import</a>
	     <a href="#" class="btn btn-outline-secondary btn-sm" role="button">Export</a>
	     <br>
	     <a href="#" class="btn btn-outline-secondary btn-sm" role="button" style="background-color:white;color:#024059;">Bulk Action <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
	     <a href="#" class="btn btn-outline-secondary btn-sm" role="button">Apply</a>

    </div>

      <!--serach bar-->

  <div style="text-align: right;" class="col-md-8   ">

        <form class="search-container"  action="/action_page.php" id="Searchbar">
            <input  type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fas fa-search" ></i></button>
        </form>

        <div>

           <a href="#" class="btn btn-outline-secondary btn-sm" role="button" style="background-color:white;color:#024059;">Filter by Category  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
	         <a href="#" class="btn btn-outline-secondary btn-sm" role="button" style="background-color:white;color:#024059;">Filter by Product type  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
	         <a href="#" class="btn btn-outline-secondary btn-sm" role="button" style="background-color:white;color:#024059;">Filter by Stock Status  <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
	         <a href="#" class="btn btn-outline-secondary btn-sm" role="button">Filter</a>
        </div>
  </div>
</div>

<!--table-->

<table  class="table table-sm table-hover ">
  <thead>
    <tr>
      <th scope="col"><input type="checkbox" id="select-all"></th>
      <th scope="col">Name</th>
      <th scope="col">SKU</th>
      <th scope="col">Price</th>
      <th scope="col">Categories</th>
      <th scope="col">Date</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>

      <th scope="row"><input type="checkbox" name="check" ></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
        <th scope="col"></th>


    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check"></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check"></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check"></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check" ></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check" ></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check"></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>
    <tr>
      <th scope="row"><input type="checkbox" name="check"></th>
      <td style="color: #F28D35">Classmate Single Line A5 Notebook 172 Pages (Pack of 6)</td>
      <td>8902519002211</td>
      <td><del>₹200</del><br>₹150</td>
      <td style="color: #F28D35">Notebook</td>
      <td>Published<br>19/06/2020</td>
    </tr>

  </tbody>


</table>

    <div style="text-align: center; color: #024059;">
	
 	      321 Items  <i class="fas fa-backward"></i>  <i class="fas fa-caret-left"></i>  1 of 17 <i class="fas fa-caret-right"></i> <i class="fas fa-forward"></i>
    </div>
</div>


<script>
  	document.getElementById('select-all').onclick = function() 
    {
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
     for (var checkbox of checkboxes) 
        {
          checkbox.checked = this.checked;
        }
    }
</script>
 


</body>

</html> 