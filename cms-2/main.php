<main>
  <section id="code-examples">
    <div class="container">
      <?php 
        # echo 'Hello World';
        // This is a comment
        /*
          This is a multi-line
          comment
        */

        // Creating a variable
        //$document_title = 'This is my title' . ' - Another Title';
        $document_title = 'Homepage';

        // PHP helper function
        $document_title = strtolower($document_title);

        $my_favourite_number = 2;
        $your_favourite_number = 4;

        //PHP variables are case sensitive
        $Your_Favourite_Number = 6;

        // Basic math in php
        $our_favourite_number = $my_favourite_number + $Your_Favourite_Number;

        $output_favourite_number = true;

        $nickname = 'Nick';
        $my_nickname = "My nickname is $nickname";

        $my_first_array = array(
          1 => "John",
          2 => "Nathan",
          3 => "Sarah",
          4 => "Craig",
          5 => "Waldo",
          6 => "Elizabeth",
        );
        // var_dump($my_first_array);

      ?>
      <h1><?php echo $document_title; ?></h1>
      <a href="?dismissed=false" class="button notification__reset">Reset Dismissed Cookie</a>
      <?php
        // String concatenation with php variable
        if($output_favourite_number){
          // echo '
          //   <p>Our favourite number is: ' . $our_favourite_number . '</p>
          // ';
        }

        if($our_favourite_number == 6){
          // echo '<p>Our favourite number is 6</p>';
        }elseif($our_favourite_number == 8){
          // echo '<p>Our favourite number is 8</p>';
        }else{
          // character escaping using \
          // echo '<p>That\'s not my favourite number! It\'s actually: ' . $our_favourite_number  . '</p>';
        }

        foreach($my_first_array as $person){
          // echo "<p>My name is " . $person . "</p>"; 
        }


        for($iterations = 1; $iterations <= 5; $iterations++){
          if($iterations == 3){
            continue;
          }elseif($iterations == 4){
            break;
          }
          // echo "<p>Iteration: " . $iterations . "</p>";
        }

        $iterations = 1;

        while($iterations <= 5){
          // echo "<p>Iteration: " . $iterations . "</p>";
          $iterations++;
        }

        $iterations2 = 1;
        do{
          echo "<p>Iteration: " . $iterations2 . "</p>";
          $iterations2++;
        }while($iterations2 <= 5);

      ?>
    </div>
  </section>
  <?php include 'partials/people-cards.php'; ?>
</main>