<?php
if(isset($_POST["submit"])){
    $Name = $_POST["Name"];
    $Designation = $_POST["Designation"];
    $Description = $_POST["Description"];
    $Phone = $_POST["Phone"];
    $Email = $_POST["Email"];
    $Location = $_POST["Location"];
    $linkedin = $_POST["linkedin"];
    $skype = $_POST["skype"];

    $Designation1 = $_POST["Designation1"];
    $Organization1 = $_POST["Organization1"];
    $Start1 = $_POST["Start1"];
    $End1 = $_POST["End1"];
    $Location1 = $_POST["Location1"];

    $Designation2 = $_POST["Designation2"];
    $Organization2 = $_POST["Organization2"];
    $Start2 = $_POST["Start2"];
    $End2 = $_POST["End2"];
    $Location2 = $_POST["Location2"];

    $Language1 = $_POST["Language1"];
    $Language1v = $_POST["Language1v"];
    $Language2 = $_POST["Language2"];
    $Language2v = $_POST["Language2v"];
    $Language3 = $_POST["Language3"];
    $Language3v = $_POST["Language3v"];

    $Organisation1 = $_POST["Organisation1"];
    $from1 = $_POST["from1"];
    $to1 = $_POST["to1"];
    $Organisation2 = $_POST["Organisation2"];
    $from2 = $_POST["from2"];
    $to2 = $_POST["to2"];
    $Organisation3 = $_POST["Organisation3"];
    $from3 = $_POST["from3"];
    $to3 = $_POST["to3"];

    $Skills = $_POST["Skills"];
    $array = explode(',', $Skills);
    $Degree = $_POST["Degree"];
    $University = $_POST["University"];
    $EduStart = $_POST["Start"];
    $EduEnd = $_POST["End"];

    $Honour1 = $_POST["Honour1"];
    $Award1 = $_POST["Award1"];
    $Honour2 = $_POST["Honour2"];
    $Award2 = $_POST["Award2"];
    $Honour3 = $_POST["Honour3"];
    $Award3 = $_POST["Award3"];

    $Course1 = $_POST["Course1"];
    $Subtitle1 = $_POST["Subtitle1"];
    $Course2 = $_POST["Course2"];
    $Subtitle2 = $_POST["Subtitle2"];
    $Course3 = $_POST["Course3"];
    $Subtitle3 = $_POST["Subtitle3"];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Online Resume </title>
      <link rel="stylesheet" href="styles.css">
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <body>
      <div class="resume">
         <div class="resume_left">
            <div class="resume_content">
               <div class="resume_item resume_info">
                  <div class="title">
                     <p class="bold"><?= $Name; ?></p>
                     <p class="dignhead"><?= $Designation; ?></p>
                  </div>
                  <div class="resume_item resume_about">
                     <p><?= $Description; ?></p>
                  </div>
               </div>
               <div class="resume_item resume_skills">
                  <div class="title">
                     <p class="bold">Work Experience</p>
                  </div>
                  <div class="bottomline">
                  </div>
                  </br>
                  <div class="digination">
                     <p class="dignation"><?= $Designation1; ?></p>
                  </div>
                  <div class="comapny1">
                     <p class="comapn1"><?= $Organization1; ?></p>
                  </div>
                  <ul>
                     <li>
                        <div class="skill_name">
                        <?=$Start1; ?>- <?= $End1?>
                        </div>
                        <div class="skill_per"><?= $Location1; ?></div>
                     </li>
                  </ul>
                  <div class="responsibility">
                     <div class="text1">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                     <div class="text2">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                     <div class="text3">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                  </div>
               </div>
               <div class="resume_item resume_skills" style="border:none;">
                  </br>
                  <div class="digination">
                     <p class="dignation"><?= $Designation2; ?></p>
                  </div>
                  <div class="comapny1">
                     <p class="comapn1"><?= $Organization2; ?></p>
                  </div>
                  <ul>
                     <li>
                        <div class="skill_name">
                        <?=$Start2; ?>- <?= $End2?>
                        </div>
                        <div class="skill_per"><?= $Location2; ?></div>
                     </li>
                  </ul>
                  <div class="responsibility">
                     <div class="text1">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                     <div class="text2">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                     <div class="text3">
                        <p class="resp"><span style="color: red;font-size: 13px;">-</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since 
                           the 1500s
                        </p>
                     </div>
                  </div>
               </div>
               <div class="resume_item resume_skills">
                  </br>
                  <div class="digination">
                     <p class="education">Education</p>
                  </div>
                  <div class="bottomline">
                  </div>
                  <div class="comapny1">
                     <p class="comapn1"><?= $Degree; ?></p>
                  </div>
                  <div class="comapny1">
                     <p class="comapn1"><?= $University; ?></p>
                  </div>
                  <ul>
                     <li>
                        <div class="skill_name">
                           <?= $EduStart; ?> - <?= $EduEnd; ?>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="resume_item resume_social">
                  <div class="title">
                     <p class="bold">Languages</p>
                  </div>
                  <ul>
                     <li>
                        <div class="lang1">
                           <i class=""><?= $Language1;?></i>
                        </div>
                        <div class="data">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                        </div>
                     </li>
                     <li>
                        <div class="lang1">
                           <i class=""><?= $Language2;?></i>
                        </div>
                        <div class="data">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                        </div>
                     </li>
                     <li>
                        <div class="lang1">
                           <i class=""><?= $Language3;?></i>
                        </div>
                        <div class="data">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                           <input type="radio" id="html" name="fav_language" value="HTML">
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="resume_right">
            <ul style="left: 123px;
               position: relative;
               width: 434px;">
               <li>
                  <div class="icon">
                     <i class="fas fa-envelope" style="color: #dd0e0e;"></i>
                  </div>
                  <div class="data">
                     <?= $Email; ?>
                  </div>
               </li>
               <li>
                  <div class="icon">
                     <i class="fas fa-mobile-alt" style="color: #dd0e0e;"></i>
                  </div>
                  <div class="data">
                     <?= $Phone;?>
                  </div>
               </li>
               <li>
                  <div class="icon">
                     <i class="fas fa-map-marker" style="color: #dd0e0e;"></i>
                  </div>
                  <div class="data">
                     <?= $Location;?>
                  </div>
               </li>
               <li>
                  <div class="icon">
                     <i class="fab fa-linkedin-square" style="color: #dd0e0e;"></i>
                  </div>
                  <div class="data">
                     <?= $linkedin; ?>
                  </div>
               </li>
               <li>
                  <div class="icon">
                     <i class="fa fa-skype" style="color: #dd0e0e;"></i>
                  </div>
                  <div class="data">
                     <?= $skype;?>
                  </div>
               </li>
            </ul>
            <div class="resume_item resume_work">
               <div class="bottomline">
               </div>
			   <div class="btttn">
               <div class="title">
                  <p class="bold">Skills</p>
               </div>
               <div class="bottomline">
               </div>
			   </br>
               <ul>
                  <li>
                     <div class="butt1">
                        <?php
                        foreach($array as $val){
                            echo "<button class='bttn'>{$val}</button>";
                        }
                        ?>
                     </div>
                     
                     
                  </li>
               </ul>
			   </div>
			   <div class="orgn">
			     <div class="bottomline">
               </div>
               <div class="title">
                  <p class="bold">Organization</p>
               </div>
               <div class="bottomline">
               </div>
			   
               <ul>
                  <li>
				  <div class="org1">
					 <p class="semi-bold"><?= $Organisation1; ?></p></div>
                     <div class="date">
					 <p>(<?=  $from1; ?> - <?=  $to1; ?>)</p></div>
                  
                  </li>
				    <li>
				  <div class="org2">
					 <p class="semi-bold"><?= $Organisation2; ?></p></div>
                     <div class="date">
					 <p>(<?=  $from2; ?> - <?=  $to2; ?>)</p></div>
                   
                  </li>
				      <li>
				  <div class="org3">
					 <p class="semi-bold"><?= $Organisation3; ?></p></div>
                     <div class="date">
					 <p>(<?=  $from3; ?> - <?=  $to3; ?>)</p></div>
                     
                  </li>
            
               </ul>
            </div>
			    </div>
			<div class="honour">
               <div class="title">
                  <p class="bold">Honours and awards</p>
               </div>
               <div class="bottomline">
               </div>
			   
               <ul>
                  <li>
				  <div class="awd1">
					 <p class="semi-bold"><?= $Honour1; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Award1; ?></p></div>
                   
                  </li>
				    <li>
                    <div class="awd2">
					 <p class="semi-bold"><?= $Honour2; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Award2; ?></p></div>
                   
                  </li>
				      <li>
                      <div class="awd3">
					 <p class="semi-bold"><?= $Honour3; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Award3; ?></p></div>
                   
                  </li>
            
               </ul>
			   </div>
			   <div class="conf">
			         <div class="title">
                  <p class="bold">Conferences & Courses</p>
               </div>
               <div class="bottomline">
               </div>
			   
               <ul>
                  <li>
				  <div class="co1">
					 <p class="semi-bold"><?= $Course1; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Subtitle1; ?></p></div>
                   
                  </li>
				    <li>
                    <div class="co1">
					 <p class="semi-bold"><?= $Course2; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Subtitle2; ?></p></div>
                   
                  </li>
				      <li>
                      <div class="co1">
					 <p class="semi-bold"><?= $Course3; ?></p></div>
                     <div class="date">
					 <p class="name1"><?= $Subtitle3; ?></p></div>
                     
                  </li>
            
               </ul>
     
            </div>
         </div>
      </div>
   </body>
</html>
<?php
}
else {
    header("Location: index.html");
}
?>