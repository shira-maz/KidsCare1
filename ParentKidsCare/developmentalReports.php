
<?php 
include ('Templates/DB.php');
include ('Templates/menu.php');
include ('Templates/head.php');

$date1 =date("Y-m-d");

if (isset($_POST['search'])) {
    $date1 = $_POST['dates1'];
}
?>

<style>
td, th {
   text-align: center;
}
</style>


<title>KidsCare-Previous Daily Update</title>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-4 col-12 mb-2">
                    <h3 class="content-header-title">דיווחי התפתחות קודמים</h3>
                </div>
            </div>

            <div class="content-body">
            <section id="line-awesome-icons">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <section>
                                            <div class="container">
                                                <div class="row">
                    
                                       <div class="col-lg-12 col-xl-12 text-center" style="margin-bottom:10%" >
                                           <h3> אנא בחר תאריך </h3>
                                        <form method="post" >
                                            <input type="date" name = "dates1" class="col-xs-4">
                                            <button type = "submit" name="search"   style = "display:inline; line-height: 7.5px; padding:11px 15px 11px 15px; " class="btn btn-glow btn-bg-gradient-x-purple-blue col-xs-4"> בחר </button>
                                        </form>
                                   </div>

                                        <?php   
                                            //$username1 = $_GET["username"];  
                                           $qD= "SELECT * from  developmentalreport WHERE date = '$date1' AND username = '$username1'";
                                           $resD= $conn->query($qD);
                                           $countD = $resD->num_rows;

                                        if ($countD > 0) {?>
                                         <h3 class = "text-center" > דיווח לתאריך  <?= $date1 ?> </h3> 
                                         
                                                                               
                                        <?php 
                                            while ($row3D = $resD->fetch_assoc()) { ?>
                                           <h4 class = "text-center" > <?php echo '  ---->  '.$row3D['fullName'] ?> </h4>
                       
                                            <div class="col-lg-12 col-xl-10">
                                                <div id="accordion3" class="card-accordion">
                                                    <div class="card collapse-icon accordion-icon-rotate">
                                                        <div class="card">
                                                            <div class="card-header" id="headingGOne">
                                                                <button class="btn btn-link" style="font-size:16px;" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                    שפה (הבנה והבעה)
                                                                    </button> 
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:LightCyan; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">

                                                                <h5 style ="display: inline"> <b> מבין את התכנים הנלמדים בגן </b></h5>
                                                                <span style=" text-align: right; " class="media-heading text-bold-700"><?php echo '- '.$row3D['Language1'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b>מבין ועונה נכון על שאלות שנשאל </b></h5>
                                                                <span style=" text-align: right; " class="media-heading text-bold-700"><?php echo '- '.$row3D['Language2'] ?></span>                                                                        
                                                                <br>
                                                                <h5 style ="display: inline"> <b>מתאר באופן מילולי תמונות שמוצגות לו </b></h5>
                                                                <span style=" text-align: right; " class="media-heading text-bold-700"><?php echo '- '.$row3D['Language3'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b>האם קיים חוסר שטף בדיבור (גמגום)?</b></h5>
                                                                <span style=" text-align: right; " class="media-heading text-bold-700"><?php echo '- '.$row3D['Language4'] ?></span>
                                                                <br>
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
                                                                    <button class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                    תפקוד חברתי ותקשורתי
                                                                    </button>
                                                                </h4>
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:Lavender; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">
                                                                <h5 style ="display: inline"> <b> יוצר קשר עם ילדים ומסוגל ליזום משחק </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['communication1'] ?></span>
                                                                <br>

                                                                <h5 style ="display: inline"> <b> משתתף בתחרויות ומקבל הן הצלחה והן כישלון </b></h5>
                                                                    <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['communication2'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> מגיב באלימות פיזית או מילולית </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['communication3'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> אינו מפרש רמזים וסיטואציות חברתיות </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['communication4'] ?></span>
                                                                <br>
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
                                                                    <button class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                    מוטוריקה עדינה
                                                                    </button>
                                                                </h4>
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:LavenderBlush; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">
                                                                <h5 style ="display: inline"> <b> אחיזה ושליטה בכלי כתיבה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['motorica1'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> ציור, צביעה ויצירה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['motorica2'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> משחקי בנייה והרכבה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['motorica3'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> מניפולציות בכף היד (חרוזים והרכבות קטנות) </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['motorica4'] ?></span>
                                                                <br>
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
                                                                    <button class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                    תפקודי קשב
                                                                    </button>
                                                                </h4>
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:HoneyDew; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">
                                                                <h5 style ="display: inline"> <b> אימפולסיבי </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['attention1'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> קשוב להוראות </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['attention2'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> מתמיד במשימות </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['attention3'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> מרבה להתנועע </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['attention4'] ?></span>
                                                                <br>
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
                                                                    <button class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                תפקוד תנועתי
                                                                    </button>
                                                                </h4>
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:LightCyan; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">
                                                                <h5 style ="display: inline"> <b> הליכה וריצה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['movement1'] ?></span><br>
                                                                       
                                                                <h5 style ="display: inline"> <b> קפיצה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['movement2'] ?></span><br>
                                                               

                                                                <h5 style ="display: inline"> <b> השתתפות בריתמיקה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['movement3'] ?></span><br>

                                                                <h5 style ="display: inline"> <b> משחקי כדור </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '. $row3D['movement4'] ?></span><br>
                                                                

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
                                                                    <button class="btn btn-link" style="font-size:16px" data-toggle="collapse" data-target="#accordionC1" aria-expanded="true" aria-controls="accordionC1">
                                                                    מידת העצמאות והתלות
                                                                    </button>
                                                                </h4>
                                                            </div>

                                                            <div id="accordionC1" class="collapse show" aria-labelledby="headingGOne" data-parent="#accordion3">
                                                                <div class="card-body" style="background-color:Lavender; opacity: 0.8">
                                                                <div class="row skin skin-flat">
                                                                <div class="col-md-11 col-sm-12">
                                                                <h5 style ="display: inline"> <b> ביצוע משימות </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['independence1'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> אכילה </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['independence2'] ?></span>
                                                                <br>
                                                                <h5 style ="display: inline"> <b> שמירה על הניקיון  </b></h5>
                                                                <span style=" text-align: center; " class="media-heading text-bold-700"><?php echo '- '.$row3D['independence3'] ?></span>
                                                                <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                      
                       
                                        <?php }
                                        }

                                        else {  ?>
                                        <h2 style =" text-align: center;">אין רישום עבור יום זה</h2>
                                             
                                            <?php  }
                                        ?>
                                       
                                        </div>
                                                </div>
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

<!-- END: Content-->

    <?php 
include ('Templates/footer.php');
include ('Templates/JS.php');
?>

</body>
</html>