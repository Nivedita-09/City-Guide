<!DOCTYPE html>
<html>
<head>
<style>
* {
    margin: 0;
    padding: 0;
    }
.title{
    font-size: 80px;
    font-family: 'Lucida Handwriting';
    font-weight: 30px;
    color: aliceblue;
    padding-top: 15px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color:#111;
  height: 310px;
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  padding-top: 25px;
}

/* Change the link color on hover */
li a:hover {
  background-color: cyan;
  color: white;
}
.background{
    height: 620px;
    width: 100%;
    background-image: url("https://media-cdn.tripadvisor.com/media/photo-s/11/88/31/7d/suraj-water-park.jpg");
    background-size: cover;
}
.navbar{
    padding-top: 20px;
    padding-inline-end: 15px;
    
}
</style>
</head>
<body>
<div class="background">
    <h2 class="title">Tourism</h2>

    <div class="navbar">
    <ul>
    <li><a href="Hotels.php">Hotels</a></li>
    <li><a href="restraunt.php">Restaurants</a></li>
    <li><a href="mall.php">Shopping Mall</a></li>
    <li><a href="cinema.php">Cinema</a></li>
    <li><a href="petrol.php">Petrol Pump</a></li>
    <li><a href="club.php">Night Club</a></li>
    </ul>
    </div>
</div>
</body>
</html>


