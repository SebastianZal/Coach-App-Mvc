              <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="abc"><a href="<?php echo base_url() ?>home">Strona Startowa</a></li>
                    
                    <li><a href="<?php echo base_url() ?>calendar">Calendar</a></li>
                    <li><a href="<?php echo base_url() ?>asd">Landing Page</a></li>
                  </ul>
                </li>
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" name="search" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-red"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </form>       
              </ul>
              <ul class="nav navbar-nav navbar-right">
                  <form id="login" action="<?php echo base_url()?>account/login/" class="navbar-form" method="post" accept-charset="utf-8">
                    <div class="form-group">
                      <input type="text" name="adres" class="form-control" placeholder="Email">
                      <input type="password" name="pass" class="form-control" placeholder="Haslo">
                    </div>
                    <button type="submit" class="btn btn-red">Zaloguj</button>
                    <button type="button" onclick="window.location.href='<?php echo base_url()?>rejestracja'" class="btn btn-red">Rejestracja</button>   
                  </form> 
             <form action="<?php echo base_url()?>account/logout/" class="navbar-form" method="post" accept-charset="utf-8">
                    <button id="logout" class="btn btn-red">wyloguj</button>
                  </form>
              </ul>
            </div>

              <!--/.nav-collapse -->
        </nav>
