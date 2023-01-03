<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../quizApp/assets/css/pages/player_view_quiz.css">
    <title>Quiz overview</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
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
                </p>
            </div>
            <div class="update">Last update: 12/31/2022</div>
            <button class="play-quiz">Play quiz</button>
        </div>
        <div class="max-score-area">
            <div class="max-score">112 points</div>
            <div class="stage-img"></div>
        </div>
    </div>

    <div class="quiz-info-block-next">
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
        <div class="quiz-comment-block">
            <div class="quiz-comment-block-1">
                <div class="comment-box-header">Comments (5)</div>
                <textarea type="text" class="comment-input-box" placeholder="Type your comment here..." style="resize:none;"></textarea>
                <button class="comment-submit">Submit</button>
            </div>
            <div class="comment__container opened" id="first-comment">
                <div class="comment__card">
                    <span><i class="fa-solid fa-circle-user"></i></span>
                    <span class="comment__title">The first comment</span>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                        eaque itaque sit tempora officiis, quisquam atque? Impedit
                        dignissimos error laudantium! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                        eaque itaque sit tempora officiis, quisquam atque? Impedit
                        dignissimos error laudantium! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                        eaque itaque sit tempora officiis, quisquam atque? Impedit
                        dignissimos error laudantium!
                    </p>
                    <div class="comment__card-footer">
                        <div>Likes 123</div>
                        <div>Dislikes 23</div>
                    </div>
                </div>
                <div class="comment__card">
                    <span><i class="fa-solid fa-circle-user"></i></span>
                    <span class="comment__title">The first comment</span>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                        eaque itaque sit tempora officiis, quisquam atque? Impedit
                        dignissimos error laudantium!
                    </p>
                    <div class="comment__card-footer">
                        <div>Likes 123</div>
                        <div>Dislikes 23</div>
                    </div>
                </div>
                <div class="comment__card">
                    <span><i class="fa-solid fa-circle-user"></i></span>
                    <span class="comment__title">The first comment</span>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum
                        eaque itaque sit tempora officiis, quisquam atque? Impedit
                        dignissimos error laudantium!
                    </p>
                    <div class="comment__card-footer">
                        <div>Likes 123</div>
                        <div>Dislikes 23</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../quizApp/assets/js/pages/player_view_quiz.js" type="module"></script>
</body>

</html>