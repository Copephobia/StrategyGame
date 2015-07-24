# Simple PHP Strategy Game

A simple PHP-based multiplayer strategy game.

## Setting Up

* Copy the files to your web server.
* Modify the ```functions.php``` file to your MySQL server credentials.
* Set up the cron jobs (see below) to run at specified times.
* Register your account through the game.
* Play the game!

## Playing The Game

The goal of this game is to be number one in the overall rankings. Your overall ranking is determined by both your attack stat and your defense stat. To increase these two stats, you must raise them through purchasing weapons and training units. This can be achieved by battling other players for gold or food, and using your income and farming stats. Each "turn" occurs every 20 minutes (or however often you set the cron job to run). This turn give you battle turns, income (in gold), and farming (in food).

#### Attack

Your attack stat determines how much damage you do to other players when attacking them. To raise your attack stat, you may purchase warriors and swords. In order to maximize your warriors' strength, each warrior must have a sword. That is, you should have an equal number of swords and warriors. If you have more warriors than swords, those unequipped warriors will deal little damage. If you have more swords than warriors, they are simply not being used.

#### Defense

Your defense stat is similar to the attack stat, except it determines how much damage you deal when being attacked by another player. The stat calculation is the same as attack, where you should ideally have an equal number of shields and defenders.

#### Income

Your income determines how much gold you earn per turn. To increase this stat, you simply need to train more workers.

#### Farming

Your farming determines how much food you earn per turn. To increase this stat, you simply need to train more farmers.

#### Battling Players

Battling other players allows you to steal their gold or food. To attack another player, you must use a number of battle turns. Each battle turn represents 10% of your full attack power. That is, 1 turn equals 10% of your attack, while 10 turns equals 100% of your attack. If your attack is higher than your enemy's defense, you will steal some (or all) of their gold or food.