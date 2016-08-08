/*role_Game*/
///choose your role game///
<script>
// Check if the user is ready to play!

confirm("I understand confirm!");

var age = prompt("What's your age");

if (age < 13)
{
    console.log("you're allowed to play but we take no responsibility");
}
else
{
    console.log("play on!");
}
console.log("You are at a swim meet, and you hear Phelps say 'Taking all bets.'");
console.log("Suddenly, Phelps stops and says, 'Who wants to race me?'");

var userAnswer = prompt("Do you want to race Phelps?");
if (userAnswer = "yes") {
    console.log("You and Phelps start racing. It's neck and neck! You win by an inch!");
} else { 
    console.log("Oh no! Phelps shakes his head and says 'I set a pace, so I can race without pacing.'");
}
var feedback = prompt("Rate the game out of 10");

if (feedback >= 8) {
    console.log("Thank you! We should race at the meet!");
} else {
    console.log("I'll keep practicing coding and racing.");
}
</script>