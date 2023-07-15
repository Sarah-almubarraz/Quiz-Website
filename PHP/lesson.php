<?php

    if ($_SESSION["loggedin"] !== true || !isset($_SESSION["loggedin"])) {
        header("location: index.php");
        exit;
    }

    // if users typed the url (not click in the title link in userPage) return them to the user page
    if(!isset($_GET['id']){
        header("location: userPage.php");
        exit;
    }

    $id = $_GET['id'];

    $lesson1_title = '<span> Matter and States of matter </span>';
    $lesson1_budy = '<span>Matter is anything that occupies space and has mass. Everything around us is made of matter. Matter is made up of tiny particles called atoms. Matter can take different forms or states depending on the conditions. on our planet Earth the matter is generally in the form of a solid, liquid or a gas.</span>';
    $lesson1_quiz_link = '<a href="quiz.php?id=1"> Take the quiz! </a>';

    $lesson1 = array("title" => $lesson1_title, "budy" => $lesson1_budy  , "quiz" => $lesson1_quiz_link);

    $lesson2_title = '<span> What makes it rain </span>';
    $lesson2_budy = '<span> We can start our lesson by asking what causes rain: Clouds are made of water droplets. Within a cloud, water droplets condense onto one another, causing the droplets to grow. When these water droplets get too heavy to stay suspended in the cloud, they fall to Earth as rain. Clouds form from water or ice that has evaporated from Earth’s surface, or from plants that give off water and oxygen as a product of photosynthesis. When it evaporates—that is, rises from Earth’s surface into the atmosphere—water is in the form of a gas, water vapor. Water vapor turns into clouds when it cools and condenses—that is, turns back into liquid water or ice.</span>';
    $lesson2_quiz_link = '<a href="quiz.php?id=2"> Take the quiz! </a>';

    $lesson2 = array("title" => $lesson2_title, "budy" => $lesson2_budy  , "quiz" => $lesson2_quiz_link);

    $lesson3_title = '<span> How birds fly </span>';
    $lesson3budy = '<span> When a bird is flying, their wings are flat so that the air flows easily around it in the direction the animal flies (like your hand cutting through the water or air. As the air flows over the wing, the air flows faster over the top than the bottom because the wing is slightly curved on top. This means there will be more air on the bottom side, because the air is moving more slowly. When there is more air on the bottom that leads to a push and since the push happens against that wide flat part of the wing, this push lifts the animal. So a bird wing slices in the air in the forward direction and gets pushed up from below.</span>';
    $lesson3_quiz_link = '<a href="quiz.php?id=3"> Take the quiz! </a>';

    $lesson3 = array("title" => $lesson3_title, "budy" => $lesson3_budy  , "quiz" => $lesson3_quiz_link);

    // when calling this array, use $id as index of array. Ex: $lessons[id][title];
    $lessons = array( 1 => $lesson1, 2 => $lesson2, 3 => $lesson3);

?>


    