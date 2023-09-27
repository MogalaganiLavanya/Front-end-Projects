<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
        body {
    font-family: Arial, sans-serif;
    margin: 0;` 
    padding: 0;
        }
#mydiv.container {
  display: grid;
  grid-template-columns: auto 2fr; 
  align-items: center;
  gap: 20px; 
  background-color: burlywood;
}

#mydiv.container img {
    width: 500px; 
    height: 300px;
}
.heading.container a
{
    background-color: #222;
}

.menu-container {
    display: flex;
    flex-wrap: wrap;
    margin: 30px;

}

.menu-item {
    width: 400px;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ddd;
    border-radius: 7px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    background-color: cadetblue;
}


.menu-item h3 {
    margin: 10px 0;
    color: #333;
}

.table-container
{
    padding: 10px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    align: center;

}

.about-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin-left: 10px;
    
}
.about-text {
            display: flex;
            justify-content: space-between;
            flex: 1;
            border: 5px  #ccc;
            padding: 10px;
            background-color: antiquewhite;
            
        }


    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NL - Amazing & Delicious Food</title>
    <meta name="title" content="Grilli - Amazing & Delicious Food">
    <meta name="description" content="This is a Restaurant">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>navigation</title>
  </head>
</head>
<body>
    <div class="container mt-3" id="1">
        <nav class="navbar bg-dark navbar-expand-md">
               <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#items-link">Items</a>
                </li>
                <li class="nav-item"></li>
                <a class="nav-link" href="#reservation-link">reservation</a>
                </li>
                <li class="nav-item"></li>
                <a class="nav-link" href="#contact">Contact us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            </ul>
        </nav>
        <br>
        <h1 align="center" > NL Tasty Food</h1>
        <br>
        <h3 align="center">Delicious Food in Your Traveling Time Also....</h3>

    <br>
    <img class="responsive" src="res1.jpg" width="1100px" height="500px" align="center">
    </div><br><br>

    
<div class="container" id="mydiv">
    <img src="./res2.jpg" alt="Image">
   <a><h3>FIRST OF ALL</h3>
    <h1>Welcome to NL Tasty Food</h1><br>
    <p>Experience the best of Hyderabad's culinary delights at <br>
    NL Tasty Food. Our restaurant offers a diverse and attractive menu<br> that cates to all your craving. Whether you're on the go or looking <br>for a place to dine, we have got you covered.Indulge in our Delicious<br> food and make your journey even more memorable.</p>
</a>  
</div>
<br>
<div class="container" id="mydiv">

<img src="./res3.jpg" alt="Image">
<a><h1>Our Delicious Memu</h1><br>
    <p>Indulge in a delightful culinary experience with our <br>extensive memu that offers a wide range of delectable<br> dishes.From traditional Indain delicacies to international<br> flavors, we have something to satisfy every palate.Enjoy<br>the perfect blend of taste and quality at NL Tasty Food.</p>
</a>  
</div>
<br>
<div class="anchor" id="heading">
    
    <a>
 </a> 
</div>
<br>
<a class="anchor" id="Item">
    <a class="anchor" id="items-link">
    <h1>Items</h1>
    <h6>click on image for order </h6>
<div class="menu-container" >
    <br>   
        
            <a href="./cart.php" target="_blank">
            <img src="./food" alt="Item 2" width="650px" height="300px" >
            </a>
            
       
</div>
</a>
</a>
<br>
<div>
    <a class="anchor" id="Item">
        <a class="anchor" id="reservation-link">
            <h1>Table reservation</h1><br>
            <div class="table-container">
            
                    <table align="center" cellpadding="15px" border="2px">
                        <tr><td>Name</td><td><input type="text" name="urn"></td></tr>
                        <tr><td>phone number</td><td><input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx"></td><tr>
                        <tr><td>Date</td><td><input type="date" name="DT"></td></tr>
                        <tr><td>Time</td><td><input type="time" minlength="11" maxlength="24" name="time"></td></tr>
                        <tr><td>Number of guests</td><td>
                            <select>
                                <option disabled selected>--select--</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10+</option>
                                
                            </select>
                        </td></tr>
                        <tr><td>Special-Note</td><td><input type="text" minlength="5" maxlength="150" name="msg"></td></tr>
                        <tr><td colspan="2" align="center">
                <button><a href="reservation complected.php">sumbit</button></td></tr>
                    </table>
                </div>
            </div>
        </a>
    </a>
</div>
<div >
    <a class="anchor" id="contact">
        <a class="anchor" id="contact-link">
            <h1>Contact</h1><br>
            <div class="contact-container" align="center">
                <div class="contact-text">
                    <div id="contact" class="container-fluid text-center">
                        
                        <p>Email or call us to contact</p>
                        <p>Email:nlrestutrant@gmail.com</p>
                        <p>Phone:
                            <a href="+3599999999">
                              <strong>(+359) 012-3456</strong>
                            </a>
                        </p>
                    </div>
                        <div class="social-icons" >
                    
                            <a href="" target="_blank">
                            <img src="./insta1.png" alt="Twitter" width="25px" height="25px">
                            </a>
                            <a href="" target="_blank">
                            <img src="./twitter1.png" alt="instagram" width="25px" height="25px"">
                            </a>
                            <a href="" target="_blank">
                                <img src="./whatsapp1.png" alt="whatsapp" width="25px" height="25px">
                            </a>
                        </div>
                    
                </div>
            </div>
        </a>
    </a>
</div>
</div>
<br>

<div>
    <h1>About</h1><br>
    <a class="anchor" id="about">
    <a class="anchor" id="about-link">
        <div class="about-container">
            
            <div class="about-text">
            <div class="about-text">
                <div class="columns-2aEKlV"><div class="column-rP0F0I" data-hook="column__column column--name_product"><p class="columnName-UAIClq">Product</p>
                    <ul class="list-3FSRMN"><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/website/templates" target="_self">Website Templates</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com" target="_self">Website Builder</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/website/design" target="_self">Website Design</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/features/main" target="_self">Wix Features</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/app-market" target="_blank">App Market</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/free/web-hosting" target="_self">Web Hosting</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/domain/names" target="_self">Domain Names</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/accessibility" target="_self">Website Accessibility</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/app-builder" target="_self">Mobile App Builder</a>
                    </li></ul>
                </div>
                </div>
            </div>
            <div class="about-text" >
                <div class="column-rP0F0I" data-hook="column__column column--name_learn"><p class="columnName-UAIClq">Learn</p>
                    <ul class="list-3FSRMN"><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/blog" target="_blank"> Blog</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/manage/privacy-security-hub" target="_self">Privacy and Security Hub</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/seo/learn" target="_blank">SEO Learning Hub</a>
                    </li></ul>
                </div>
            </div>
            <div class="about-text" >
                <div class="column-rP0F0I" data-hook="column__column column--name_support"><p class="columnName-UAIClq">Support</p>
                    <ul class="list-3FSRMN"><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://support.wix.com/en" target="_self">Help Center</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/marketplace" target="_blank">Hire a Professional</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/about/abuse" target="_self">Report Abuse</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://status.wix.com" target="_self">System Status</a>
                    </li></ul>
                </div>
            </div>
            <div class="about-text">
                <div class="column-rP0F0I" data-hook="column__column column--name_company"><p class="columnName-UAIClq">Company</p>
                    <ul class="list-3FSRMN"><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/press-room/home" target="_self">Press &amp; Media</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://investors.wix.com" target="_self">Investor Relations</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/wix-capital" target="_self">Capital</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/about/terms-accessibility" target="_self">Accessibility Statement</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/about/patent-notice" target="_self">Patent Notice</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://www.wix.com/about/sitemap" target="_self">Sitemap</a>
                    </li><li class="linkWrapper-Wg53rf"><a class="link-326Gjr" href="https://careers.wix.com" target="_self">Careers</a>
                    </li></ul>
                </div>
            </div>
            
        </div>

    </a>    
    </a>
</div>
</body>
</html>