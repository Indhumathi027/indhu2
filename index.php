<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Hello</title>
    <style>
        .reg{
            text-align: center;
            font-size: 10px;
            border: 2px solid black;
            width: 200px;
            height: 200px;
            border-radius: 6px;
            position: relative;
            left: 1200px;
            margin-top: 160px;
        }
        /* .bat{
            text-align: center;
            font-size: 10px;
            border: 2px solid black;
            width: 200px;
            height: 200px;
            border-radius: 6px;
        } */
        .logo{
            position: absolute;
            left: 40px;
            top: 30px;
        }
        .btn{
            background-color: black;
            color: white;
        }
        .btn:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .head{
            position: absolute;
            top: 60px;
            left: 250px;
            border-radius: 6px;
        }
        .head:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        }
        .red{
          background-color: black;
          color: white;
          border-radius: 4px;
          position: absolute;
          top: 65px;
          left: 1500px;
          width: 100px;
          height: 40px;
        }
        .red:hover{
          box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
          background-color: red;
          color: white;
        }
        footer{
          text-align: center;
        }
    </style>
  </head>
  <body class="container">
    <img src="image/ws design.jpg" class="logo" width="130px" height="110px" alt="logo">
    <div class="head">
       <a href="calculator.html"> <button type="button" class="btn btn-primary btn-lg">Calculator</button></a>
        <!-- <button type="button" class="btn btn-secondary btn-lg">Large button</button> -->
    </div>  
    <div>
      <button type="button" class="red" data-bs-toggle="popover" data-bs-title="Warning!" data-bs-content="There is not an eligible admin yet!">Admin</button>
    </div>  
    <table>
        <tr>
            <th></th>
        </tr>
    </table>
    <form class="reg">
        <h6>Student Login</h6>
        <label>UserName</label>
        <input type="text" name="UserName" id="UserName" placeholder="Enter ur UserName"><br><br>
        <label>Password</label>
        <input type="password" name="password" id="password" placeholder="Enter passowrd"><br><br>
        <button>Login</button><br><br>
        <p>(OR)</p>
        <button>Register</button>
    </form>
    <hr>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-80">
            <img src="image/fastrack.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Fastrack</h5>
              <p class="card-text">Fastrack is an Indian fashion accessory retail brand, launched in 1998 as a sub-brand of Titan Watches. In 2005, Fastrack was spun off as an independent brand targeting the urban youth and growing fashion industry in India. Fastrack began opening retail stores throughout the country. The first store was opened in early 2009.</p>
              <a href="https://www.fastrack.in/>" class="btn btn-primary">Official Website</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/titan.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Titan</h5>
              <p class="card-text">Titan Company Limited is an Indian company that mainly manufactures fashion accessories such as jewellery, watches and eyewear. Part of the Tata Group and started as a joint venture with TIDCO, the company has its corporate headquarters in Electronic City, Bangalore, and registered office in Hosur, Tamil Nadu.</p>
              <a href="https://www.titan.co.in/>" class="btn btn-primary">Official Website</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="image/casio.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Casio</h5>
              <p class="card-text">Casio Computer Co., Ltd.[note 1] (カシオ計算機株式会社, Kashio Keisanki Kabushiki-gaisha) is a Japanese multinational electronics manufacturing corporation headquartered in Shibuya, Tokyo, Japan. Its products include calculators, mobile phones, digital cameras, electronic musical instruments, and analogue and digital watches.</p>
                <div href="https://www.thewatchcompany.com/casio/>" class="btn btn-primary">Official Website</div>
                </div>
              </div>
            </div>
  </div>
      </div>
  </body>
</html>
