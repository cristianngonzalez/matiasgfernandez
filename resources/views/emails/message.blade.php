<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="padding: 0px; margin: 0px; font-family: Verdana, Geneva, Tahoma, sans-serif">
  
  <!---------------------------------------------------------------------------------------------->
  <div style="width: 100%; text-align:center; padding-top: 10px; padding-bottom: 10px; margin-bottom: 50px;
    box-shadow:
    inset 0 -3em 3em rgba(0,0,0,0.1),
          0 0  0 2px rgb(255,255,255),
          0.3em 0.3em 1em rgba(0,0,0,0.3);" >
    <a href="">
      <img src="https://matiasgfernandez.com/public/img/logo/logo.png"  style="width: 300px;" width="300" alt="">
    </a>
  </div>
  <!---------------------------------------------------------------------------------------------->

  <div style="padding-left: 10px; padding-right:20px; min-height: 300px;">
    {!!$msg!!}
  </div>

  <!---------------------------------------------------------------------------------------------->
  <div style="width: 100%; text-align:center; padding-top: 10px; padding-bottom: 10px; margin-top: 50px;
    box-shadow:
    inset 0 -3em 3em rgba(0,0,0,0.1),
          0 0  0 2px rgb(255,255,255),
          0.3em 0.3em 1em rgba(0,0,0,0.3);" >
    
    <table style="margin-right: auto; margin-left: auto; margin-top: 20px">
      <tr>
        <td style="padding-left: 10px; padding-right: 10px;">
          <a href="{{$socialnetworks[0]->link}}" target="_blank">
            <img src="https://matiasgfernandez.com/public/img/svg/icons/linkedin.png" alt="">
          </a>
        </td>
        <td style="padding-left: 10px; padding-right: 10px;">
          <a href="{{$socialnetworks[1]->link}}" target="_blank">
            <img src="https://matiasgfernandez.com/public/img/svg/icons/youtube.png" alt="">
          </a>
        </td>
      </tr>
    </table>

    <table style="margin-right: auto; margin-left: auto; margin-top: 20px;">
      <tr>
        <td style="padding-left: 10px; padding-right: 10px;">
          <a href="https://www.matiasgfernandez.com" target="_blank" style="text-decoration: none; color: black;">
            Website
          </a>
        </td>
        <td style="padding-left: 10px; padding-right: 10px;">
          <a href="https://www.matiasgfernandez.com/blogs" target="_blank" style="text-decoration: none; color: black;">
            Blog
          </a>
        </td>
        <td style="padding-left: 10px; padding-right: 10px;">
          <a href="https://www.matiasgfernandez.com#about" target="_blank" style="text-decoration: none; color: black;">
            Acerca de mi
          </a>
        </td>
      </tr>
    </table>

    <p style="margin-top: 30px">2023 Matías Fernández</p>

  </div>
  <!---------------------------------------------------------------------------------------------->

</body>
</html>