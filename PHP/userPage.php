<?php 

    if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
        header("location: index.php");
        exit;
      }
  
    if(isset($_POST['destroy_sess'])) {
        session_destroy();
        unset($_SESSION['loggedin']);
        header('location:index.php');
        mysqli_free_result($result);
	    mysqli_close($connection);
    }

    // retreving user info from the database
    $sql = "SELECT * FROM users WHERE email = '$_SESSION['email']' LIMIT 1";
    if($result = mysqli_query($connection , $sql)){
        $_SESSION['lesson_state'] =	$row['lesson_state'];
        $_SESSION['quiz1_score'] =	$row['quiz1_score'];
        $_SESSION['quiz2_score'] =	$row['quiz2_score'];
        $_SESSION['quiz3_score'] =	$row['quiz3_score'];  
    }

    // header

    $lastVisit = '<span> last seccessful login was on: '.$_SESSION["lastVisit"].'</span>';
    $hello = '<span> Hello '.$_SESSION['name'].'!</span>';

    $injoy = '<span>Enjoy learning about science by taking our lessons and quizzes.</span>';
    if($_SESSION['lesson_state'] == 3){
        $total_Score= $_SESSION['quiz1_score'] + $_SESSION['quiz2_score'] + $_SESSION['quiz3_score'];
        $injoy = '<span>Congratulations! You finished all quizzes. Your final score is'.$total_Score.'/12.</span>';
    }



    // Table
    
    $table_row1 = '<tr><td>1</td><td> <a href="lesson.php?id=1"> Matter and States of matter </a></td><td>Not taken</td></tr>';
    $table_row2 = '<tr><td>2</td><td> <a href="lesson.php?id=2"> What makes it rain </a></td><td>Not taken</td></tr>';
    $table_row3 = '<tr><td>3</td><td> <a href="lesson.php?id=3"> How birds fly  </a></td><td>Not taken</td></tr>';

    if($_SESSION['quiz1_score'] != NULL)
        $table_row1 = '<tr><td>1</td><td> <a href="lesson.php?id=1"> Matter and States of matter </a></td><td>'.$_SESSION['quiz1_score'].'</td></tr>';
     
    if($_SESSION['quiz2_score'] != NULL)
        $table_row2 = '<tr><td>2</td><td> <a href="lesson.php?id=2"> What makes it rain </a></td><td>'.$_SESSION['quiz2_score'].'</td></tr>';
    
    if($_SESSION['quiz3_score'] != NULL)
        $table_row3 = '<tr><td>3</td><td> <a href="lesson.php?id=3"> How birds fly  </a></td><td>'.$_SESSION['quiz3_score'].'</td></tr>';

    $table_rows = $table_row1;
    if($_SESSION['lesson_state'] == 1)
        $table_rows = $table_row1 .''. $table_row2;
    if($_SESSION['lesson_state'] >= 2)
        $table_rows = $table_row1 .''. $table_row2 .''. $table_row3;
      	
        
?>  