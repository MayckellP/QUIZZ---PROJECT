var answer1 = document.getElementById("answer-1");
var answer2 = document.getElementById("answer-2");
var answer3 = document.getElementById("answer-3");
var answer4 = document.getElementById("answer-4");
var answer5 = document.getElementById("answer-5");

function choosed() {
  if (answer1.checked) {
    console.log("True");
    document.getElementById("collector-questions").value = "answer-1";
  }
  if (answer2.checked) {
    console.log("True");
    document.getElementById("collector-questions").value = "answer-2";
  }
  if (answer3.checked) {
    console.log("True");
    document.getElementById("collector-questions").value = "answer-3";
  }
  if (answer4.checked) {
    console.log("True");
    document.getElementById("collector-questions").value = "answer-4";
  }
  if (answer5.checked) {
    console.log("True");
    document.getElementById("collector-questions").value = "answer-5";
  }
}
