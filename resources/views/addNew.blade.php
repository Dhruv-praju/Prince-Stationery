<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title> Add New </title>
    	<link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href= "/css/text1.css">
       
      
 </head>       
  
  <body>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/f00f8dca49.js"></script>


<!-- Wrapper -->
<div class="wrapper">
 
    <!-- Sidebar -->
    <nav class="sidebar">
       <!-- close sidebar menu -->
      <div class="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>
  
    <div class="logo">
      <img src="C:\Users\91992\Desktop\bootstrap\logo.png">
    </div>
  
    <ul class="list-unstyled menu-elements">
        <li class="active">
            <a class="scroll-link" href="#top-content"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
        </li>
        <li>
            <a class="scroll-link" href="#section-1"><i class="fa fa-bar-chart" aria-hidden="true"></i> 
              Analysis</a>
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
      </li>
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
  
   
      <!-- Content -->
      <div class="content">
   
          <!-- open sidebar menu -->
          <a class="btn btn-primary btn-customized open-menu " href="#" role="button">
              <i class="fas fa-align-left"></i>
          </a>
    </div>
    <!-- End content -->
  
  </div>
  <!-- End wrapper -->
  
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


        
    
    <!--Add new page code-->
  
<div class="container">
    <h4 class="header">Store>Products><strong>Add New</strong></h4>
    
   <div class="row">
    
        <div class="col-lg-6 col-sm-8">
            
            <div class="index">
          
            
           
        <label>Product Name</label><br>
        <input class="prname" type="text">
        
     
        <div class="description">
            <label>Product Description</label><br>
            <textarea class="txtarea"></textarea>
            </div>
        </div>
   </div>
    <!--code for right side sidebar-->
            <div class="col-lg-6 col-sm-4">
                
               <div class="main">
        
        <div class="productBox">
            <h1 class="boxheader">publish</h1>
            <hr>
            <button style="background-color:#F28D35;" type="button" class="btn btn-warning btn-sm ml-2 mb-3">publish</button> save as draft

        </div>
        
        <div class ="box1">
            <h1 class= "boxHeader">product categories</h1>

        <div class ="box2">
           
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
            <ul>
                <li>
                    <input type="checkbox">
                    <label>Adhesives,Tapes & Tape Dispensers</label>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <input type="checkbox">
                            <label>fevibond</label>
                        </li>
                    </ul>
                   
                    
                </li>
            </ul>
        </div>
        <!--link for Add New Category-->
        <a class="link" href="">+Add New Category</a>
</div>
<div class="tagBox">
    <h1 class="boxHeader">Product Tags</h1>
    <hr>
    <textarea></textarea><button style="background-color:#F28D35;" type="button" class="btn btn-warning btn-sm ml-2 mb-3">Add</button><br>
</div>
<div class="productBox ">
    <h1 class="boxHeader">Product Image</h1>
    <hr>
  <!--link for select product image-->
    <a href="">Select Product image</a>
</div>
<!--link for product gallery-->
<div class="productBox">
    <h1 class="boxHeader">Product Gallery</h1>
    <hr>
   
    <a  href="">Add product Gallery Images</a>
</div>

</div>
</div>
</div>
</div>
</div>
</body>
</html> 
 