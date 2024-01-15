<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <!-- swiper css link  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--  font awesome - cdn link->> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<!-- custom css file link -->
<link rel="stylesheet" href="style.css">
<body>
</head>
<body>
    <div class="heading" style="background: url(images/header-bg-3.png) no repeat;">
<h1>book now</h1>
</div>
<!-- booking seection starta here  -->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">

        <div class="flex">
            <div class="inputBox">
                <span>name</span>
                <input type="text" placeholder="enter your name" name="name"> 
            </div>

            <div class="inputBox">
                <span>email:</span>
                <input type="email" placeholder="enter your email" name="email"> 
            </div>

            <div class="inputBox">
                <span>phone</span>
                <input type="number" placeholder="enter your number" name="phone"> 
            </div>

            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address"> 
            </div>

            <div class="inputBox">
                <span>where to: </span>
                <input type="text" placeholder="where you want to visit" name="location"> 
            </div>

            <div class="inputBox">
                <span>how many</span>
                <input type="number" placeholder="how many guest" name="guests"> 
            </div>

            <div class="inputBox">
                <span>arrivlas :</span>
                <input type="date"  name="arrivals"> 
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="text"  name="leaving"> 
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </div>


        </form>
    </section>

<!-- booking section ends here  -->





</body>
</html>