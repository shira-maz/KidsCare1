<?php
include ('Templates/DB.php');
include ('Templates/menu.php');
include ('Templates/head.php');

$date1 =date("Y-m-d");
$username1 = $_GET["username"]; {
    $query ="SELECT * FROM accounts WHERE username = '$username1'";
    mysqli_query($conn, $query) or die('Error querying database.');
    $result1 = mysqli_query($conn, $query);
    $row2 = mysqli_fetch_array($result1);
    }

?>

<style>
    body{
        color:black;
    }
    @media screen and (max-width: 600px) {
label{
    display:
}

</style>

<title>KidsCare-Developmental-Report</title>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">דיווח התפתחותי</h3>
                </div>
            </div>

            <div class="card profile-card-4">
            <div class="card-body pt-5">
                <img alt="profile-image" class="profile"
                    src="../uploads/<?= $row2['fileToUpload'] ?>" />
                <h5 class="card-title text-center">
                    <?= $row2['fullName'] ?> </h5>
            </div>
            </div>

            <div class="content-body">
                <section id="line-awesome-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <section>
                                            <div class="container">
                                                <div class="row">
                     
                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <button type='button' class="btn btn-link" style="font-size:16px;" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                שפה (הבנה והבעה)</button> 
                                        </div>

                                        <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body " style="background-color:LightCyan;">
                                            <div class="row skin skin-flat ">
                                            <div class="col-md-6 col-sm-12">
                                            <form method="post" action="developmentalReportDB.php" name="developmentalreport" >
                                            <input type="hidden" name="date" value="<?= $date1 ?>">
                                            <input type="hidden" name="username" value="<?= $row2['username'] ?>">
                                            <input type="hidden" name="fullName" value="<?= $row2['fullName'] ?>">
                                            <h5 style ="display: inline"> <b> מבין את התכנים הנלמדים בגן </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                            <label> <input type = "radio"  value="תמיד"  name="Language1" style="display: inline-block" > תמיד &nbsp;   </label>                      
                                            <label> <input type = "radio" value="לפעמים" name="Language1" style="display:inline-block"> לפעמים &nbsp; </label>  
                                            <label> <input type = "radio"  value="לעיתים רחוקות" name="Language1" style="margin-top: 4%; display:block"> לעיתים רחוקות &nbsp;    </label>             
                                             </div>
                                            <h5 style ="display: inline"> <b>מבין ועונה נכון על שאלות שנשאל </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                            <label> <input type = "radio"  value="תמיד" name="Language2" > תמיד &nbsp;     </label>                       
                                            <label> <input type = "radio"  value="לפעמים" name="Language2" > לפעמים &nbsp; </label>  
                                            <label> <input type = "radio"  value="לעיתים רחוקות" name="Language2" style="margin-top: 4%;"> לעיתים רחוקות &nbsp;  </label>  
                                             </div>
                                            <h5 style ="display: inline"> <b>מתאר באופן מילולי תמונות שמוצגות לו </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                            <label> <input type = "radio"  value="תמיד" name="Language3" style="margin-top: 4%;" > תמיד &nbsp;  </label>                          
                                             <label> <input type = "radio"  value="לפעמים" name="Language3" style="margin-top: 4%;"> לפעמים &nbsp; </label>  
                                             <label><input type = "radio"  value="לעיתים רחוקות" name="Language3" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                             </div>

                                             <h5 style ="display: inline"> <b>האם קיים חוסר שטף בדיבור (גמגום)?</b></h5>
                                             <div class="container" style="margin-bottom: 3%; ">
                                             <label>  <input type = "radio" value="תמיד" name="Language4"  > תמיד &nbsp;             </label>               
                                            <label>  <input type = "radio" value="לפעמים" name="Language4" > לפעמים &nbsp; </label>  
                                            <label> <input type = "radio" value="לעיתים רחוקות" name="Language4" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <h4 class="mb-0">
                                            <button type='button' class="btn btn-link" style="font-size:16px;" data-toggle="collapse" data-target="#accordionC2" aria-expanded="true" aria-controls="accordionC1">
                                                תפקוד חברתי ותקשורתי
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="accordionC2" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body" style="background-color:Lavender; opacity: 0.8">
                                            <div class="row skin skin-flat">
                                            <div class="col-md-6 col-sm-12">
                                            <h5 style ="display: inline"> <b> יוצר קשר עם ילדים ומסוגל ליזום משחק </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                                    <input type = "radio"  value="תמיד" name="communication1"  > תמיד &nbsp;     </label>                       
                                                    <label>    <input type = "radio"  value="לפעמים" name="communication1" > לפעמים &nbsp; </label>  
                                                    <label>  <input type = "radio"  value="לעיתים רחוקות" name="communication1" style="margin-top: 4%;"> לעיתים רחוקות &nbsp;   </label>                                                             
                                                    </div>
                                                    <h5 style ="display: inline"> <b> משתתף בתחרויות ומקבל הן הצלחה והן כישלון </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label>  <input type = "radio"  value="תמיד" name="communication2"  > תמיד &nbsp;      </label>                      
                                                    <label>  <input type = "radio"  value="לפעמים" name="communication2" > לפעמים &nbsp; </label>  
                                                    <label>  <input type = "radio"  value="לעיתים רחוקות" name="communication2" style="margin-top: 4%;"> לעיתים רחוקות &nbsp;     </label>                                                   
                                                    </div>
                                                    <h5 style ="display: inline"> <b> מגיב באלימות פיזית או מילולית </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label>   <input type = "radio"  value="תמיד" name="communication3"  > תמיד &nbsp;     </label>                       
                                                    <label>  <input type = "radio"  value="לפעמים" name="communication3" > לפעמים &nbsp; </label>  
                                                    <label>    <input type = "radio"  value="לעיתים רחוקות" name="communication3" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                                    </div>
                                                    <h5 style ="display: inline"> <b> אינו מפרש רמזים וסיטואציות חברתיות </b></h5>
                                                    <div class="container" style="margin-bottom: 3%; ">
                                                    <label>  <input type = "radio"  value="תמיד" name="communication4"  > תמיד &nbsp;              </label>              
                                                    <label>     <input type = "radio"  value="לפעמים" name="communication4"> לפעמים &nbsp; </label>  
                                                    <label>      <input type = "radio"  value="לעיתים רחוקות" name="communication4" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <h4 class="mb-0">
                                                <button type='button' class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC3" aria-expanded="true" aria-controls="accordionC1">
                                                מוטוריקה עדינה
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="accordionC3" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body" style="background-color:LavenderBlush; opacity: 0.8">
                                            <div class="row skin skin-flat ">
                                            <div class="col-md-10 col-sm-12 col-xs-12">
                                            <h5 style ="display: inline"> <b> אחיזה ושליטה בכלי כתיבה </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                                   <label> <input type = "radio"  value="בהתאם לגיל" name="motorica1"  > בהתאם לגיל &nbsp;     </label>                    
                                                   <label> <input type = "radio"  value="מתקשה" name="motorica1" > מתקשה &nbsp;</label>
                                                   <label>  <input type = "radio"  value=" מתקשה מאוד" name="motorica1" style="margin-top: 4%;"> מתקשה מאוד &nbsp;</label> 
                                                   <label> <input type = "radio"  value=" נמנע" name="motorica1" style="margin-top: 4%;" > נמנע &nbsp;     </label> 
                                                    </div>

                                                    <h5 style ="display: inline"> <b> ציור, צביעה ויצירה </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label> <input type = "radio"  value="בהתאם לגיל" name="motorica2" > בהתאם לגיל &nbsp; </label>                        
                                                    <label> <input type = "radio"  value="מתקשה" name="motorica2" > מתקשה &nbsp; </label> 
                                                    <label><input type = "radio"  value=" מתקשה מאוד" name="motorica2" style="margin-top: 4%;"> מתקשה מאוד &nbsp;</label> 
                                                    <label> <input type = "radio"  value=" נמנע" name="motorica2" style="margin-top: 4%;" > נמנע &nbsp; </label> 
                                                    </div>

                                                    <h5 style ="display: inline"> <b> משחקי בנייה והרכבה </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label><input type = "radio"  value="בהתאם לגיל" name="motorica3"  > בהתאם לגיל &nbsp;</label>                    
                                                    <label> <input type = "radio"  value="מתקשה" name="motorica3" > מתקשה &nbsp;</label> 
                                                    <label>  <input type = "radio"  value=" מתקשה מאוד" name="motorica3" style="margin-top: 4%;"> מתקשה מאוד &nbsp;</label> 
                                                    <label>  <input type = "radio"  value=" נמנע" name="motorica3" style="margin-top: 4%;" > נמנע &nbsp;</label> 
                                                    </div>

                                                    <h5 style ="display: inline"> <b> מניפולציות בכף היד (חרוזים והרכבות קטנות) </b></h5>
                                                    <div class="container" style="margin-bottom: 3%; ">
                                                    <label> <input type = "radio" value="בהתאם לגיל" name="motorica4" > בהתאם לגיל &nbsp; </label>                       
                                                    <label> <input type = "radio" value="מתקשה" name="motorica4" > מתקשה &nbsp;</label> 
                                                    <label><input type = "radio" value=" מתקשה מאוד" name="motorica4" style="margin-top: 4%;"> מתקשה מאוד &nbsp;</label> 
                                                    <label><input type = "radio" value=" נמנע" name="motorica4" style="margin-top: 4%;" > נמנע &nbsp;</label> 
                                                    </div>
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <h4 class="mb-0">
                                                <button type='button' class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC4" aria-expanded="true" aria-controls="accordionC1">
                                                תפקודי קשב
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="accordionC4" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body" style="background-color:HoneyDew; opacity: 0.8">
                                            <div class="row skin skin-flat ">
                                            <div class="col-md-10 col-sm-12">                                            <h5 style ="display: inline"> <b> אימפולסיבי </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                            <label>   <input type = "radio"  value="תמיד" name="attention1"  > תמיד &nbsp;                 </label>           
                                            <label>   <input type = "radio"  value="לפעמים" name="attention1" > לפעמים &nbsp; </label>  
                                            <label>    <input type = "radio"  value="לעיתים רחוקות" name="attention1" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                        </div>

                                                    <h5 style ="display: inline"> <b> קשוב להוראות </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label>  <input type = "radio"  value="תמיד" name="attention2"  > תמיד &nbsp;              </label>              
                                                    <label>  <input type = "radio"  value="לפעמים" name="attention2" > לפעמים &nbsp; </label>  
                                                    <label>  <input type = "radio"   value="לעיתים רחוקות" name="attention2" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                                    </div>

                                                    <h5 style ="display: inline"> <b> מתמיד במשימות </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label><input type = "radio"  value="תמיד" name="attention3"  > תמיד &nbsp;          </label>                  
                                                    <label> <input type = "radio"  value="לפעמים" name="attention3" > לפעמים &nbsp; </label>  
                                                    <label>  <input type = "radio"  value="לעיתים רחוקות" name="attention3" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                                    </div>

                                                    <h5 style ="display: inline"> <b> מרבה להתנועע </b></h5>
                                                    <div class="container" style="margin-bottom: 3%; ">
                                                    <label> <input type = "radio"  value="תמיד" name="attention4" > תמיד &nbsp;           </label>                 
                                                    <label> <input type = "radio"  value="לפעמים" name="attention4" > לפעמים &nbsp; </label>  
                                                    <label>  <input type = "radio"  value="לעיתים רחוקות" name="attention4" style="margin-top: 4%;"> לעיתים רחוקות &nbsp; </label>  
                                            </div>
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <h4 class="mb-0">
                                                <button type='button' class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC5" aria-expanded="true" aria-controls="accordionC1">
                                               תפקוד תנועתי
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="accordionC5" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body" style="background-color:LightCyan; opacity: 0.8">
                                            <div class="row skin skin-flat ">
                                            <div class="col-md-10 col-sm-12">
                                            <h5 style ="display: inline"> <b> הליכה וריצה </b></h5>
                                            <div class="container" style="margin-bottom: 5%; ">
                                            <label>    <input type = "radio" value="בהתאם לגיל" name="movement1"  > בהתאם לגיל &nbsp; &nbsp;    </label>                         
                                            <label>    <input type = "radio"   value="מתקשה" name="movement1" > מתקשה &nbsp; </label>  
                                            <label>    <input type = "radio"  value="מתקשה מאוד" name="movement1" style="margin-top: 4%;" > מתקשה מאוד &nbsp; </label>  
                                            <label>     <input type = "radio"  value="נמנע" name="movement1" style="margin-top: 4%;" > נמנע &nbsp; </label>  
                                                    </div>

                                                    <h5 style ="display: inline"> <b> קפיצה </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label>      <input type = "radio" value="בהתאם לגיל" name="movement2"  > בהתאם לגיל &nbsp; &nbsp;    </label>                       
                                                    <label>      <input type = "radio"  value="מתקשה" name="movement2"> מתקשה &nbsp; </label>  
                                                    <label>      <input type = "radio"  value="מתקשה מאוד" name="movement2" style="margin-top: 4%;" > מתקשה מאוד &nbsp; </label>  
                                                    <label>     <input type = "radio"  value="נמנע" name="movement2" style="margin-top: 4%;" > נמנע &nbsp; </label>  
                                                    </div>

                                                    <h5 style ="display: inline"> <b> השתתפות בריתמיקה </b></h5>
                                                    <div class="container" style="margin-bottom: 5%; ">
                                                    <label>  <input type = "radio"  value="בהתאם לגיל" name="movement3"> בהתאם לגיל &nbsp; &nbsp;            </label>                 
                                                    <label>   <input type = "radio" value="מתקשה" name="movement3" > מתקשה &nbsp; </label>  
                                                    <label>   <input type = "radio"  value="מתקשה מאוד" name="movement3" style="margin-top: 4%;" > מתקשה מאוד &nbsp; </label>  
                                                    <label>   <input type = "radio"  value="נמנע" name="movement3" style="margin-top: 4%;" > נמנע &nbsp; </label>  
                                                 </div>

                                                    <h5 style ="display: inline"> <b> משחקי כדור </b></h5>
                                                    <div class="container" style ="margin-bottom: 3%; ">   
                                                    <label> <input type = "radio"  value="בהתאם לגיל" name="movement4" > בהתאם לגיל &nbsp;&nbsp;     </label>                         
                                                    <label>   <input type = "radio"  value="מתקשה" name="movement4" > מתקשה &nbsp; </label>  
                                                    <label>   <input type = "radio"  value="מתקשה מאוד" name="movement4" style="margin-top: 4%;" > מתקשה מאוד &nbsp; </label> 
                                                    <label>   <input type = "radio"   value="נמנע" name="movement4" style="margin-top: 4%;" > נמנע &nbsp; </label> 
                                                    </div>

                                        </div>
    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                        <div class="col-lg-12 col-xl-10">
                            <div id="accordion3" class="card-accordion">
                                <div class="card collapse-icon accordion-icon-rotate">
                                    <div class="card">
                                        <div class="card-header" id="headingGOne">
                                            <h4 class="mb-0">
                                                <button type='button' class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC6" aria-expanded="true" aria-controls="accordionC1">
                                                מידת העצמאות והתלות
                                                </button>
                                            </h4>
                                        </div>

                                        <div id="accordionC6" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                            <div class="card-body" style="background-color:Lavender; opacity: 0.8">
                                            <div class="row skin skin-flat ">
                                            <div class="col-md-10 col-sm-12">
                                            <h5 style ="display: inline"> <b> ביצוע משימות </b></h5>
                                            <div class="container" style ="margin-bottom: 5%; ">
                                            <label>     <input type = "radio"  value="עצמאי" name="independence1"  > עצמאי &nbsp;         </label>                  
                                            <label>     <input type = "radio"  value="לפעמים תלוי" name="independence1" > לפעמים תלוי &nbsp; </label> 
                                            <label>   <input type = "radio"  value="תלוי במבוגר" name="independence1"  > תלוי במבוגר &nbsp; </label> 
                                                </div>

                                                    <h5 style ="display: inline"> <b> אכילה </b></h5>
                                                    <div class="container" style ="margin-bottom: 5%; ">
                                                    <label>       <input type = "radio"   value="עצמאי" name="independence2" > עצמאי &nbsp;   </label>                
                                                    <label>        <input type = "radio"  value="לפעמים תלוי" name="independence2" > לפעמים תלוי &nbsp; </label> 
                                                    <label>       <input type = "radio"  value="תלוי במבוגר" name="independence2" > תלוי במבוגר &nbsp; </label> 
                                                           
                                                    </div>

                                                    <h5 style ="display: inline"> <b> שמירה על הניקיון  </b></h5><br>
                                                    <div class="container" style ="margin-bottom: 5%;">
                                                    <label>      <input type = "radio"  value="עצמאי" name="independence3" > עצמאי &nbsp;            </label>               
                                                    <label>       <input type = "radio"  value="לפעמים תלוי" name="independence3"> לפעמים תלוי &nbsp;  </label> 
                                                    <label>      <input type = "radio"  value="תלוי במבוגר" name="independence3" > תלוי במבוגר &nbsp; </label> 
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                     
                        <input type = "submit" value = "עדכן" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-8 mr-1 mb-1 " style="margin-top:5%; margin-right:10%;">                                   
                        </form> 
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>

        </div>
    </div>
    </div>


    <?php 
   include ('Templates/footer.php');
   include ('Templates/JS.php');
?>

</body>

</html>