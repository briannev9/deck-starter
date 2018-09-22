
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Deck</title>
  <link href="https://fonts.googleapis.com/css?family=BioRhyme:300" rel="stylesheet">
  <link rel="stylesheet" href="deck.css">
</head>
<body>
  <?php
  /*
Task 1: create all 52 cards
Create arrays for suits and ranks
  Loop through the suits
  Loop through the ranks
  Create a card with current suit and rank

Task 2: Create 52 random cards
Loop 52 times 
  Get a random suit using rand() function 
  Get a random rank using rand() function 
  Create a card with random suit and rank
*/
  //simple array 
  $suits = ['hearts', 'spades', 'diamonds', 'clubs']; 
  $number =['A','2','3','4','5','6','7','8','9','10','J', 'Q', 'K']

   ?> 
  <div id="deck" class="deck">
    <?php foreach ($suits as $suit) { ?>
      <?php foreach ($ranks as $rank) :{ ?>
    <div class="card">
      <div class="number hearts"><?php echo $suit; ?></div><?php echo $rank; ?>
      <div class="suit"><img src="images/hearts.png"></div>
      <div class="number hearts">2</div>
    </div>
    <?php endofreach; ?>
      <?php } ?>
  </div>

  <div id="deck" class="deck">
    <?php
    $suit = $suits[random(0, count($suits) - 1)]; 
    $rank = $ranks[random(0, count($suits) - 1)]; 
    ?>
    <?php for ($i = 0; $i <52; $i++) {?>
    <div class="card">
      <div class="number hearts">2</div><div class="number hearts"><?php echo $suit; ?></div><?php echo $rank; ?>
      <div class="suit"><img src="images/<?php echo $suit?> .png"></div>
      <div class="suit"><img src="images/<?php echo $suit?>.png"></div>
      <div class="number <?php echo $suit?>"><?php echo $rank?></div>
    </div>
    <?php } ?>
  </div>
</body>
</html>