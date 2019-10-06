<?php
//access the global array called $_POST to get the values from the text fields
$capital_value = $_POST['capital'];
$zelda_value = $_POST['zelda'];
$japan_value = $_POST['japan'];
$music_value = $_POST['music'];
$joke_value = $_POST['joke'];
$right = 0;
$total = 5;

echo "<b><u> Answers: </u></b><br><br>";
echo "Question 1: What is the capital of Paraguay?<br>";
echo "<u>You answered:</u> " . $capital_value . "<br>";
echo "<u><b>Correct Answer:</b></u> Asuncion<br><br>";
if($capital_value === "Asuncion")
{
  $right = $right + 1;
}
echo "Question 2: What is the name of the main character in the Legend of Zelda series?<br>";
echo "<u>You answered:</u> " . $zelda_value . "<br>";
echo "<u><b>Correct Answer:</b></u> Link<br><br>";
if($zelda_value === "Link")
{
  $right = $right + 1;
}
echo "Question 3: Which of these is part of the Japanese writing system?<br>";
echo "<u>You answered:</u> " . $japan_value . "<br>";
echo "<u><b>Correct Answer:</b></u> All of the above<br><br>";
if($japan_value === "All of the above")
{
  $right = $right + 1;
}
echo "Question 4: <i>...Baby One More Time</i> is a song by which artist?<br>";
echo "<u>You answered:</u> " . $music_value . "<br>";
echo "<u><b>Correct Answer:</b></u> Britney Spears<br><br>";
if($music_value === "Britney Spears")
{
  $right = $right + 1;
}
echo "Question 5: What did the blanket say as it fell off the bed?<br>";
echo "<u>You answered:</u> " . $joke_value . "<br>";
echo "<u><b>Correct Answer:</b></u> Oh sheet<br><br>";
if($joke_value === "Oh sheet")
{
  $right = $right + 1;
}
if($right == 0)
{
  $percent = 0;
}
else
{
  $percent = ($right / $total) * 100;
}
echo "You answered " . $right . " question(s) right.<br>";
echo "Score: " . $percent . "%<br>";

?>
