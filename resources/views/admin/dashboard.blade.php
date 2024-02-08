<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
        <style>
            body {
                font-family: "Open Sans", sans-serif;
                height: 100%;
                background: #FFFFFF;
                 }
            ul {
                  list-style: none;
                  margin: 0;
                  padding: 0;
                }
            a {
                  text-decoration: none;
              }
            .card {
                  background-color: #fff;
                  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                  padding: 20px;
                  margin-bottom: 5px;
                  border-radius: 5px;
        }
            #header {
                  float: left;
                  width: 100%;
                  background: #ffffff;
                  position: relative;
                    }
            .white-label {
                  float: left;
                  background: #33373B;
                  max-width: 210px;
                  padding: 10px;
                  min-height: 54px;
                  background: #279BE4;
                  width: 100%;
                  max-height: 44px;
                  }
            .header-nav {
                  min-height: 64px;
                  -webkit-box-sizing: border-box;
                  -moz-box-sizing: border-box;
                  box-sizing: border-box;
                  background: #279BE4;
                    }
            .menu-button {
                  float: left;
                  font-size: 29px;
                  color: #fff;
                  padding: 12px 19px;
                }
            #sidebar {
                  overflow: hidden;
                  width: 210px;
                  height: 100%;
                  float: left;
                  background: #2A2D33;
                }
            #sidebar-nav {
                  width: 106%;
                  height: calc(100% - 95px);
                  padding: 0;
                  background: #2A2D33;
                  border-right: 1px solid #E0E0E0;
                  overflow-y: scroll;
}
#sidebar-nav h2 {
    color: #60636B;
    float: left;
    width: 100%;
    font-size: 0.8em;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    padding: 3px 0 2px 20px;
    border-top: 1px solid #4D4C4C;
    box-sizing: border-box;
    margin: 10px 0;
}

#sidebar-nav ul li a {
    color: #C2C2C2;
    font-size: 0.95em;
    padding: 15px 20px;
    float: left;
    width: 100%;
    font-weight: 600;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
#sidebar-nav ul li:hover a,
#sidebar-nav ul li:hover a i,
#sidebar-nav li.active a,
#sidebar-nav li.active a i {
    color: #333;
}
#sidebar-nav ul li:hover a {
    background: #fff;
    color: #333;
}
#sidebar-nav ul li.active a {
    background: #fff;
    color: #333;
}
#sidebar-nav ul li.active a i {
    background: #fff;
}
#sidebar-nav i {
    padding-right: 8px;
    font-size: 1.3em;
    color: #60636B;
    width: 25px;
    text-align: center;
}
.user-profile {
    float: right;
}
.user-profile > div {
    float: left;
    padding: 20px 8px;
    position: relative;
}
.user-profile i {
    font-size: 1.2em;
    color: #5F6F86;
}
.user-profile i:hover {
    color: #397AC5;
}
div.user-image {
    padding: 10px 15px;
    margin: 0 5px;
    border-left: 1px solid #ccc;
    border-right: 1px solid #ccc;
}
.nav-profile {
    background: #0274BD;
}
.nav-profile-image img {
    width: 40px;
    height: 41px;
    margin-right: 10px;
    margin-top: 10px;
    border-radius: 50%;
    float: right;
}
.nav-profile-name {
    float: right;
    margin: 16px 8px 8px 14px;
    color: #fff;
}
.nav-profile-name i {
    padding: 0 0 0 11px;
}
#content {
    float: left;
    width: calc(100% - 210px);
    height: 100%;
    word-wrap: break-word;
    background: #FFFFFF;
    font-family: Raleway, sans-serif;
}
.content {
    float: left;
    background: #E9EEF4;
    width: 100%;
    height: calc(100% - 64px);
    margin-top: 50px;
    margin-bottom: 0px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.content-header {
    background: #fff;
    float: left;
    width: 100%;
    margin-bottom: 15px;
    padding: 15px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    border-bottom: 1px solid #ccc;
}
.content-header h1 {
    margin: 0;
    font-weight: normal;
    padding-bottom: 5px;
}
.content-header p {
    margin: 0;
    padding-left: 2px;
}
.widget-box {
    background: #fff;
    border: 1px solid #E0E0E0;
    float: left;
    width: 100%;
    margin: 0 0 15px 15px;
}
.widget-header {
    background: #279BE4;
}
.widget-header h2 {
    font-size: 15px;
    font-weight: normal;
    margin: 0;
    padding: 11px 15px;
    color: #F9F9F9;
    display: inline-block;
}


        </style>
    </head>
    <body>
         <section id="sidebar">
            <div class="white-label"></div>
            <div id="sidebar-nav">
                 <ul>
                    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="{{route('show_all')}}"><i class="fa fa-desktop"></i> show all products</a></li>
                    <li><a href="{{route('create_product')}}"><i class="fa fa-usd"></i> create new product</a></li>
                    <li><a href="#"><i class="fa fa-usd"></i> Info user</a></li>
                    <li><a href="#"><i class="fa fa-usd"></i> Reviews</a></li>
                    <li><a href="#"><i class="fa fa-usd"></i>Settings</a></li>
                    <li><a href="#"><i class="fa fa-usd"></i> Logout</a></li>
                 </ul>
            </div>
        </section>
        <section id="content">
                <div id="header">
                    <div class="header-nav">
                        <div class="menu-button"><!--i class="fa fa-navicon"></i>--></div>
                        <div class="nav">
                             <ul>
                                </li>
                                <li class="nav-profile">
                                        <div class="nav-profile-image">
                                                    <img
                                                       src="images/photo1.jpg"
                                                       alt="profile-img"
                                                       alt="profile image"/>
                                                    <div class="nav-profile-name">
                                                      walaa mohsen<i class="fa fa-caret-down"></i>
                                                     </div>
                                             </div>
                                </li>
                        </div>
                <div class="content">
                   <div class="card">
                             <h2>Welcome, Admin!</h2>
                             <p>This is your admin dashboard. You can manage users, products, and settings here.</p>
                    </div>
                </div>
                <div class="widget-box sample-widget">
                         <div class="widget-header">
                         <h2>Widget Header</h2>
                         <i class="fa fa-cog"></i>
                         </div>
                         <div class="widget-content">
                          <img
                             src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/87118/sample-data-1.png"/>
                       </div>
        </div>
        </section>
    </body>
</html>
