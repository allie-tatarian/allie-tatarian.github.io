//Initializing variables
let turn = 0; // Increases with each turn
let win = 0; // Set to 1 if you win
let glitch = 0; // Set to 1 if your word isn't 5 letters
// Getting page elements - the buttons, keyboard keys, and letters.
let resetbtn = document.getElementById("reset");
let guessbtn = document.getElementById("guess-btn");
const key = document.getElementsByClassName("key");
var keyArr = [].slice.call(key);
// keyArr makes the variable "key" work as an actual array.
// Got this idea from https://stackoverflow.com/questions/222841/most-efficient-way-to-convert-an-htmlcollection-to-an-array

//These hold the classes for the letter boxes, used in functions below
const one = document.getElementsByClassName("one");
const two = document.getElementsByClassName("two");
const three = document.getElementsByClassName("three");
const four = document.getElementsByClassName("four");
const five = document.getElementsByClassName("five");
const row = document.getElementsByClassName("row");
const letter = document.getElementsByClassName("letter");

// The list of 30 wordle words
let words = ["twirl", "serve", "whisk", "hello", "buddy", "silly", "adeiu", "quiet", "bench", "rainy", "learn", "oaken", "blush", "fresh", "crust", "funny", "queue", "adore", "marry", "flute", "batty", "pride", "munch", "helix", "croak", "shark", "paper", "foxes", "basic", "scarf",];

// To get a random word, we get a random number 0-29. This will be the index of our Wordle word.
index = Math.floor(Math.random() * 30);
wordle = words[index];
wordleLetters = wordle.split("");
console.log(wordle);

// The class that holds the guess. Full of functions that are called when the guess button is clicked.
class myGuess {
    constructor() {
        this.guess = document.form.guess.value.toLowerCase();
        // First, we grab the guessed word from the input, and we make the letters lowercase to match the wordle words.
        this.guessLetters = this.guess.split("");
        // This just makes it easier to loop over the letter later.
    }
    checkGuess() {
        //This function just makes sure that the guess is 5 letters, and that you aren't playing after winning.
        // Got the part to check for just letters from https://stackoverflow.com/questions/23556533/how-do-i-make-an-input-field-accept-only-letters-in-javascript
        if (this.guess.length !=5 || win == 1 || !/^[a-zA-Z]*$/g.test(this.guess)) {
            glitch = 1;
        } else {glitch = 0;}
        console.log("Glitch: " + glitch);
    }
    fillBoard() {
        if (glitch == 1) {
            return // For each of the following functions, if variable "glitch" was flipped in checkGuess(), the function won't run.
        } else {
            //Puts the letters in the boxes. The box columns are labeled one, two, etc. and the "turn" variable tells it which row to use.
        one[turn].innerHTML = this.guessLetters[0];
        two[turn].innerHTML = this.guessLetters[1];
        three[turn].innerHTML = this.guessLetters[2];
        four[turn].innerHTML = this.guessLetters[3];
        five[turn].innerHTML = this.guessLetters[4];
        }
    }
    compareWordle() {
        if (glitch == 1) {
            return
        } else {
            //compares the guess to the wordle word, and changes the class of the letter box to match.
        for (let i = 0; i < 5; i++) {
            const which = turn * 5 + i; // This is the number of the box. Boxes are numbered 0-29, "turn" tells it which row, then add i to get the right box.
            letter[which].classList.add("wrong"); // They boxes are all turned "wrong," but then "correct" or "move" will supercede.
            if (this.guessLetters[i] === wordleLetters[i]) {
                // If the guess and the wordle letter match, the box is correct.
                letter[which].classList.add("correct"); 
                wordleLetters[i] = "-"; //This replaces the letter with -, incase other copies of the same letter are there.
            }
        }
        for (let i = 0; i < 5; i++) {
            const which = turn * 5 + i;
            //There was probably a way to do this without repeating the loop, but I was having a hard time getting it to work right.
            for (let j = 0; j < 5; j++) {
                // The i loop loops over the guessed letters. The j loop loops over the wordle letters.
                if (this.guessLetters[i] === wordleLetters[j] && i != j) {
                    letter[which].classList.add("move");
                    // If the guessed letter matches a wordle letter at a different index, gives the class "move"
                    wordleLetters[j] = "-"; //This replaces the letter with -, incase other copies of the same letter are there.
                }
            }
        }
        wordleLetters = wordle.split(""); //Because we replaced some of the wordle letters with -, this just fixes it back for the next turn.
        }
    }
    updateKeyboard() {
        if (glitch == 1) {
            return
        } else {
        for (let i = 0; i < 26; i++) {
            //Loops over all of the letters of the keyboard.
            const thisKey = key[i].innerHTML;
            const letter = extractContent(thisKey).toLowerCase();
            // "letter" holds the keyboard letters. The guess letters were made lowercase, so the keyboard has to match.
            for (let j = 0; j < 5; j++) {
                // Loops over the letters in your guess
                if (this.guessLetters[j] === letter) {
                    if (this.guessLetters[j] === wordleLetters[j]) {
                        key[i].classList.add("correct");
                        // If your guessed letter matches the same wordle letter, the class "correct" is added to the keyboard letter
                    } else if (this.guessLetters[j] === wordleLetters[0] || this.guessLetters[j] === wordleLetters[1] || this.guessLetters[j] === wordleLetters[2] || this.guessLetters[j] === wordleLetters[3] || this.guessLetters[j] === wordleLetters[4]) {
                    //Less than idea way to call for this, but I didn't want to add another loop :(
                    // Compares your guessed letter with each of the wordle letters, if one matches the key gets the class "move"
                        key[i].classList.add("move");
                    } else {
                        key[i].classList.add("used");
                        //If the letter doesn't match any wordle letters, it gets the class "used"
                    }
                }
            }
        }
        }
    }
    win() {
        if (this.guess === wordle) {
            win = 1;
            alert("You win! The word was " + wordle + "!");
            //Straightforward, if your guess matches the wordle you win!
        }
    }
}

//This is a function to get the text of each key using the "key" class. Idea from: https://stackoverflow.com/questions/28899298/extract-the-text-out-of-html-string-using-javascript
// This is used in the "updateKeyboard()" part of the guess class.
function extractContent(html) {
        return new DOMParser()
                .parseFromString(html, "text/html")
                .documentElement.textContent;
}
//works by using: extractContent(key[i].innerHTML);
// i = 0-25

//This part of the function is grabbing the guessed word out of the input.
function guess() {
    // Makes a new variable based on the guess class and runs all the functions.
    const newGuess = new myGuess();
    newGuess.checkGuess();
    newGuess.fillBoard();
    newGuess.compareWordle();
    newGuess.updateKeyboard();
    newGuess.win();
    
    if (glitch == 0) {turn += 1;} //Increases the turn as long as your guess was valid.

    if (turn == 6 && win == 0) {
    alert("You lose! The word was " + wordle + "!"); // After 6 turns you lose.
    }

    if (win == 1 || turn == 6) {
    resetbtn.classList.remove("hidden");
    guessbtn.classList.add("hidden"); 
    // if you either win or lose, the "guess" button is hidden and the "reset" button is shown.
    }
}

//function to wipe the classes from the keys. Should work with forEach. Only works if you include both item and index, even though item is not used.
const wipeKeys = (item, index) => {
key[index].classList.remove("correct", "move", "wrong");
}

function reset() {
    //The reset function, runs when you hit the reset button.
    //This loop wipes the letters and classes from the letter boxes.
    for (let i = 0; i < 6; i++) {
            one[i].classList.remove("correct", "move", "wrong");
            one[i].innerHTML = "";
            two[i].classList.remove("correct", "move", "wrong");
            two[i].innerHTML = "";
            three[i].classList.remove("correct", "move", "wrong");
            three[i].innerHTML = "";
            four[i].classList.remove("correct", "move", "wrong");
            four[i].innerHTML = "";
            five[i].classList.remove("correct", "move", "wrong");
            five[i].innerHTML = "";
            }
    keyArr.forEach(wipeKeys);
    //This forEach wipes the classes from the keyboard keys.
    resetbtn.classList.add("hidden"); 
    guessbtn.classList.remove("hidden");
    // The reset button is hidden and the guess button is shown.
    index = Math.floor(Math.random() * 30);
    wordle = words[index];
    wordleLetters = wordle.split("");
    console.log(wordle);
    //A new wordle word is chosen.
    turn = 0;
    win = 0;
    glitch = 0;
    //Turn, win, and glitch variables are reset.
} 

// The click listeners for both buttons.
window.onload = function () {
guessbtn.addEventListener("click", guess);
resetbtn.addEventListener("click", reset);
}