<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>IN THEME</title>
</head>
<style>
body {
  width: auto;
  height: auto;
  margin: 0px;
  padding: 0px;
  color: black;
}
.header {
  width: 100%;
  height: 80px;
  background-color: white;
  position: relative;
}
.menu {
  width: 18%;
  height: 50px;
  margin-top: 30px;
  background-color: white;
  text-align: center;
  font-size: 250%;
  font-variant: small-caps;
  display: inline-block;
  float: left;
}
.menublock {
  width: 20%;
  height: 80px;
  background-color: white;
  text-align: center;
  font-size: 350%;
  font-variant: small-caps;
  display: inline-block;
  float: left;
}
.news {
  width: 100%;
  margin-top: 0px;
  height: 170px;
  display: inline-block;
  float: left;
  font-size: 400%;
  font-weight: lighter;
  font-variant: small-caps;
  text-align: center;
  font-variant-position: sub;
  background: linear-gradient(45deg, #e4d301, #ff00bc);
  background-attachment: fixed;
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}
.menu_1 {
  width: 40%;
  height: 80px;
  background-color: white;
  text-align: center;
  font-size: 350%;
  font-variant: small-caps;
  display: inline-block;
  float: left;
}
p {
  color: white;
  background-color: rgba(255, 255, 255, 0.2);
  display: inline;
  border-radius: 10px;
}
a {
  color: black;
  font-size: 100%;
}
form {
  display: inline-block;
  float: left;
  padding-top: 20px;
}
input {
  border: 1px solid grey;
  border-radius: 5px;
  margin-left: 10px;
  margin-right: 10px;
  font-size: 90%;
  font-family: Arial, sans-serif;
  color: grey;
  width: 140px;
  height: 25px;
  padding: 0px;
}
.submit {
  font-family: Arial, sans-serif;
  font-size: 120%;
  padding: 0px;
  font-weight: 200;
  font-variant: small-caps;
  background: linear-gradient(45deg, #e4d301, #ff00bc);
  /*#e4d301 #ff00bc #00ffa1, #9cc8ff*/
  color: white;
  border: 0px;
  width: 90px;
  height: 30px;
  text-align: center;
}
.stringnews {
  color: white;
}
.checkbox {
  float: left;
  display: inline-block;
  position: relative;
}
li {
    list-style-type: none; /* Убираем маркеры */
   }
   ul {
    margin: 25px 0px 25px 0px; /* Отступ слева в браузере IE и Opera */
    padding: 0; /* Отступ слева в браузере Firefox, Safari, Chrome */
    margin-right: 30px;
   }
.filter {
  float: right;
  display: inline-block;
  position: relative;
  font-size: 120%;
  font-family: monospace;
}
.included {
  color: black;
}
.content {
  width: auto;
  height: auto;
  margin: 0px;
  padding: 0px;
  position: relative;
}
.wrapper {
  background-color: pink;
  width: 65%;
  height: 400px;
  display: block;
  position: relative;
  float: left;
}
.cont {
  width: 35%;
  height: 400px;
  display: block;
  position: relative;
  float: right;
}
</style>
<body>
    <div class="header">
        <div class="menu_1">IN THEME</div>
        <a href="/mvpversion/startpage.php/events"><div class="menublock">События</div></a>
        <a href="/mvpversion/startpage.php/us"><div class="menublock">УС</div></a>
        <a href="/mvpversion/startpage.php/questions"><div class="menublock">F.A.Q.</div></a>
      </div>
    </div>
    <div class="news"><?php include_once ('string.php');?></div>
    <div class="content">
      <div class="cont"><?php include_once ('routes.php');?></div>
      <div class="wrapper"></div>
    </div>
    <div class="footer"></div>
</body>
</html>
