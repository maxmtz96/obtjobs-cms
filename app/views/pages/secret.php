<?php require VIEW_ROOT . '/templates/header.php'; ?>


        <div id="SignUpDiv">
          <?php if(empty($users)): ?>
            <div id="SignUpDiv">
              <a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
              <a href="<?php echo BASE_URL; ?>">Home</a>
            </div>
          <?php else: ?>
            <div id="SignUpDiv">
              <a href="<?php echo BASE_URL; ?>/logout.php">Log out</a>
              <a href="<?php echo BASE_URL; ?>/secret.php">Signed in as <?php echo e($users['firstname'], ENT_QUOTES, 'UTF-8'); ?></a>
            </div>
          <?php endif; ?>
        </div>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/test.css">
</head>
<body>
<div class="container" id="page-info">
  <div class="container">
    <div class="page-header" id="page-header">
      <h1>Profile Page <small>view and edit all your profile details here.</small></h1>
      <br><br>
    </div>
    <style>
    .avatar-img{width:300px;height:200px;}
    .avatar-img img{max-width:100%;max-height:100%;}
    </style> 
    <div class="avatar-img" id="avatar-img">
      <?php if(!isset($users['image'])): ?>
        <img src="https://www.watch2gether.com/assets/w2guser-default-4cd04e39cfd59017ebad065028b8af9dfca8499a45a7b19ec20b1c478a751a77.png" alt="avatar" class="img-circle" />
      <?php else: ?>
        <img max-width="100%" max-height="100%" src="<?php echo BASE_URL; ?>/uploads/<?php echo $users['image']; ?>">
      <?php endif; ?>
      
      <br><br>

      <form action="secret.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]">
        <input type="submit" name="btn btn-primary" value="Upload">
        <!-- <a href="multiup.php" class="btn btn-info">Back</a> --> 
      </form>


<!--           <br><br>
           <h1>Status: <?php // echo htmlentities($users['status'], ENT_QUOTES, 'UTF-8');  ?></h1> -->
          </div>
              <!--end of avatar div-->

              <!---beginning of personal info-->

               <div class="row" id="personal-info">
                <div class="name">
                <p><a href="#"><h1><?php echo e($users['firstname'].' '.$users['lastname']); ?> </h1></a></p>
              </div>
            </div>
            <table id="stats">
              <tbody>
                <tr>
                  <td>Skill | JS</td>
                  <td>Skill | HTML</td>
                </tr>
                <tr>
                  <td>Skill | PHP</td>
                  <td>Skill | XHTML</td>
                </tr>
              </tbody>
            </table>
            <br><br>
          </div>
          <div class="numbers">
            <label>E-mail:</label><br>
            <input id="button" placeholder="E-mail" size="40" type="text" value="">
            <br>
            <br>
            Phone:
            <br>
            <input id="button" name="usrtel" placeholder="XXX-XXX-XXXX" size="40" type="tel"><br>
            <br>
            <form>
              Linkedin or Github:<br>
              <input name="homepage" placeholder="example@gmail.com" size="40" type="url">
            </form>
          <br>
            <br>
            <a class="btn btn-follow" href="#">Save</a>
          </div>

        <!---Resume Info-->
        
        
        <div class="col-md-8" id="about">
          <h1 class="text-primary" id="Resume">Resume</h1>
          <fieldset>
            <legend id="upload">Work Experience</legend>
            <br>
            <div class="container" id="resume-info">
            <div class="title-input">
            <br>
            <h1>Job 1</h1>
            
            <label>Title</label>
            <br>
            <input type="text" name="Title" placeholder="Title (ex: Web Developer)" size="40"></div>
            <br>
            <label>Company</label>
            <br>
            <div class="company-input"><input type="text" name="Company" placeholder="Company name (ex: Microsoft)" size="40"></div>
            <br>
            <label>Location</label>
            <br>
            <input type="text" name="Location" placeholder="Location (ex: Brooklyn, Manhattan, etc...)" size="40">
            <br><br>
            <label>Start Date</label>
            <select>
              <option value="jan">Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Mar</option>
              <option value="apr">Apr</option>
              <option value="may">May</option>
              <option value="jun">Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sep</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
            </select><br><br>

            <label>End Date</label>
             <select>
              <option value="jan">Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Mar</option>
              <option value="apr">Apr</option>
              <option value="may">May</option>
              <option value="jun">Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sep</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
            </select>
            
            <br><br>
            <label>Description</label>
            <br><br>
            
            <textarea cols="50" rows="4">Add personality to your profile! Tell the community about yourself, your skills, and your profession!</textarea>
            </div>
           
           <div class="container" id="resume-info2">
            <div class="title-input">
            <br>
            <h1>Job 2</h1>
            
            <label>Title</label>
            <br>
            <input type="text" name="Title" placeholder="Title (ex: Web Developer)" size="40"></div>
            <br>
            <label>Company</label>
            <br>
            <div class="company-input"><input type="text" name="Company" placeholder="Company name (ex: Microsoft)" size="40"></div>
            <br>
            <label>Location</label>
            <br>
            <input type="text" name="Location" placeholder="Location (ex: Brooklyn, Manhattan, etc...)" size="40">
            <br><br>
            <label>Start Date</label>
            <select>
              <option value="jan">Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Mar</option>
              <option value="apr">Apr</option>
              <option value="may">May</option>
              <option value="jun">Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sep</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
            </select><br><br>

            <label>End Date</label>
             <select>
              <option value="jan">Jan</option>
              <option value="feb">Feb</option>
              <option value="mar">Mar</option>
              <option value="apr">Apr</option>
              <option value="may">May</option>
              <option value="jun">Jun</option>
              <option value="jul">Jul</option>
              <option value="aug">Aug</option>
              <option value="sep">Sep</option>
              <option value="oct">Oct</option>
              <option value="nov">Nov</option>
              <option value="dec">Dec</option>
            </select>
            <select>
              <option value="2017">2017</option>
              <option value="2016">2016</option>
              <option value="2015">2015</option>
              <option value="2014">2014</option>
              <option value="2013">2013</option>
              <option value="2012">2012</option>
              <option value="2011">2011</option>
              <option value="2010">2010</option>
              <option value="2009">2009</option>
              <option value="2008">2008</option>
              <option value="2007">2007</option>
              <option value="2006">2006</option>
              <option value="2005">2005</option>
              <option value="2004">2004</option>
              <option value="2003">2003</option>
              <option value="2002">2002</option>
              <option value="2001">2001</option>
              <option value="2000">2000</option>
              <option value="1999">1999</option>
              <option value="1998">1998</option>
              <option value="1997">1997</option>
              <option value="1996">1996</option>
              <option value="1995">1995</option>
              <option value="1994">1994</option>
              <option value="1993">1993</option>
              <option value="1992">1992</option>
              <option value="1991">1991</option>
              <option value="1990">1990</option>
              <option value="1989">1989</option>
              <option value="1988">1988</option>
              <option value="1987">1987</option>
              <option value="1986">1986</option>
              <option value="1985">1985</option>
              <option value="1984">1984</option>
              <option value="1983">1983</option>
              <option value="1982">1982</option>
              <option value="1981">1981</option>
              <option value="1980">1980</option>
              <option value="1979">1979</option>
              <option value="1978">1978</option>
              <option value="1977">1977</option>
              <option value="1976">1976</option>
              <option value="1975">1975</option>
              <option value="1974">1974</option>
              <option value="1973">1973</option>
              <option value="1972">1972</option>
              <option value="1971">1971</option>
              <option value="1970">1970</option>
            </select>
            
            <br><br>
            <label>Description</label>
            <br><br>
            
            <textarea cols="50" rows="4" class="Description">Add personality to your profile! Tell the community about yourself, your skills, and your profession!</textarea>
            </div>
            <br>
            <a class="btn btn-follow" href="#">Save</a> <input id="myFile" onclick="myFunction()" type="file"> 
          </fieldset>
          
          </div>
        </div> 
      </div>
    </div>
    <br><br>
    <div class="well" id="icons">
      <a href="https://github.com/"><img src="http://hammerjs.github.io/assets/img/github-icon.png"></a> 
      <a href="https://www.linkedin.com/"><img src="https://cdn3.iconfinder.com/data/icons/free-social-icons/67/linkedin_circle_color-512.png"></a>
    </div>
    <div class="well">
      <ul class="list-group">
        <li class="list-group-item"></li>
      </ul>
    </div>
  </div>

  </div>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>