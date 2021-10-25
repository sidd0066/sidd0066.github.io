<?php
  $my_second_array = array(
    1 => [
      "name" => "John",
      "age" => "36",
      "location" => "Ottawa",
    ],
    2 => [
      "name" => "Nathan",
      "age" => "24",
      "location" => "Toronto",
    ],
    3 => [
      "name" => "Sarah",
      "age" => "27",
      "location" => "Washington",
    ],
    4 => [
      "name" => "Craig",
      "age" => "32",
      "location" => "Miami",
    ],
    5 => [
      "name" => "Waldo",
      "age" => "40",
      "location" => "Vancouver",
    ],
    6 => [
      "name" => "Elizabeth",
      "age" => "43",
      "location" => "Ottawa",
    ],
  );

  $in_ottawa = 0;
  foreach($my_second_array as $person){
    if($person["location"] == "Ottawa"){
      $in_ottawa++;
    }
  }
?>
<section id="people">
  <div class="container">
    <h2>People</h2>
    <?php echo profileCards($my_second_array); ?>
    <?php
      if($in_ottawa !== 0){
        echo "<p>Number of people in Ottawa: " . $in_ottawa . "</p>";
      }
    ?>
  </div>
</section>


<?php

function profileCards($peopleArray){
  $theCards = '';

  $theCards .= '<ul class="id-cards">';

  foreach($peopleArray as $person){
    $theCards .= "<li><a href='/pages/profile.php?firstname=" . $person['name'] . "&age=" . $person['age'] . "&location=" . $person['location'] . "'><div class='id-card__content'>" .
        "<h3>" . $person["name"] . "</h3>" .
        "<span class='id-card__meta'>Age: " . $person["age"] . "</span>" .
        "<span class='id-card__meta'>Location: " . $person["location"] . "</span>" .
      "</div></a></li>";
  }

  $theCards .= '</ul>';

  return $theCards;
}

?>