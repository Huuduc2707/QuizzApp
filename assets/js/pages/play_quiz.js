import Timer from "./Timer.js";

new Timer(document.querySelector(".question-body-countdown"));

function showQuiz(quizID){
    $.ajax({
    type: "GET",
    url: "../processing/play-quiz-processing.php",
    data: { id: quizID },
    success: (data) => {
      console.log(JSON.parse(data));
    },
  });
}

