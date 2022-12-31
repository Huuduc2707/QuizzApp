<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/pages/result_fe.css">
    <title>Kahoot Result FE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

</head>

<body>

    <div class="container-result">
        <div class="score-text"><span class="text">Your Score:</span><span class="score">100/100</span></div>
        <div class="star-rating-area">
            <div class="star">
                <input type="radio" id="five" name="rate" value="5">
                <label for="five"></label>
                <input type="radio" id="four" name="rate" value="4">
                <label for="four"></label>
                <input type="radio" id="three" name="rate" value="3">
                <label for="three"></label>
                <input type="radio" id="two" name="rate" value="2">
                <label for="two"></label>
                <input type="radio" id="one" name="rate" value="1">
                <label for="one"></label>
            </div>
            <div class="rate-text">Please rate this quiz!</div>
        </div>
        <div class="result-report">
            <div class="result-question">
                <div class="header">
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit?</div>
                    <div class="image" title="Question Image"></div>
                </div>
                <div class="option optionA wrong-ans">
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
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit?</div>
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
                    <div class="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit? Lorem ipsum, dolor sit amet consectetur adipisicing elit? Lorem ipsum, dolor sit amet consectetur adipisicing elit?</div>
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
    <script src="../assets/js/pages/result_fe.js" type="module"></script>
</body>

</html>