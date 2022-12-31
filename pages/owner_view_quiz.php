<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owner_view_quiz.css">
    <title>Kahoot View Owner FE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body>

    <div class="quiz-info-block">
        <div class="quiz-info-block-1">
        <div class="quiz-name">Computer Networks And Algorithms</div>
        <div class="current-rating">
            <div class="star-cont">
                <div class="stars-outer">
                    <div class="stars-inner"></div>
                </div>
                <span class="number-rating">3.5</span>
            </div>
        </div>
        <div class="quiz-info-genre">Science, Socialism, HIstory</div>
        <div class="player-num">33 players</div>
        <div class="quiz-creator">Creator: Pham Huu Duc</div>
        <div class="quiz-info-des">
            <p>About the quiz</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nesciunt eius consequuntur quia, quaerat sit sequi dicta harum ratione laudantium pariatur facere nulla cupiditate id possimus sapiente culpa repellendus explicabo earum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nesciunt eius consequuntur quia, quaerat sit sequi dicta harum ratione laudantium pariatur facere nulla cupiditate id possimus sapiente culpa repellendus explicabo earum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nesciunt eius consequuntur quia, quaerat sit sequi dicta harum ratione laudantium pariatur facere nulla cupiditate id possimus sapiente culpa repellendus explicabo earum?
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nesciunt eius consequuntur quia, quaerat sit sequi dicta harum ratione laudantium pariatur facere nulla cupiditate id possimus sapiente culpa repellendus explicabo earum?
            </p>
        </div>
        <div class="update">Last update: 12/31/2022</div>
        </div>
        <div class="max-score-area">
            <div class="max-score">112 points</div>
            <div class="stage-img"></div>
        </div>
    </div>
    
    <div class="container-result">
        <div class="question-total"><span class="text">Question:</span><span class="num-question">4</span></div>
        <div class="score-text"><span class="text">Total Score:</span><span class="score">100</span></div>
        <div class="result-report-owner">
            <div class="result-question">
                <div class="header">
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit? (10 points)</div>
                    <div class="image" title="Question Image"></div>
                </div>
                <div class="option optionA correct-ans">
                    <span>A.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionB">
                    <span>B.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionC">
                    <span>C.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionD">
                    <span>D.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
            </div>
            <div class="result-question">
                <div class="header">
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit? (10 points)</div>
                    <div class="image"></div>
                </div>
                <div class="option optionA">
                    <span>A.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionB correct-ans">
                    <span>B.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionC">
                    <span>C.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionD">
                    <span>D.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
            </div>
            <div class="result-question">
                <div class="header">
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit? Lorem ipsum, dolor sit amet consectetur adipisicing elit? Lorem ipsum, dolor sit amet consectetur adipisicing elit? (10 points)</div>
                    <div class="image"></div>
                </div>
                <div class="option optionA">
                    <span>A.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionB">
                    <span>B.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionC correct-ans">
                    <span>C.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
                <div class="option optionD wrong-ans">
                    <span>D.</span>
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                </div>
            </div>
        </div>
    </div>
    <script src="owner_view_quiz.js" type="module"></script>
</body>

</html>