<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/pages/owner_create_quiz.css">
    <title>Kahoot View Owner FE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
</head>

<body>
    <div class="create-quiz-box">
        <div class="create-heading">Create Quiz</div>
        <div class="input-form-quiz-gen">
            <label for="quiz-name-create">Quiz's name</label>
            <input type="text" name="quiz-name-create" placeholder="Enter Quiz's name...">
        </div>
        <div class="input-form-quiz-gen">
            <label for="quiz-category-create">Quiz's category</label>
            <input type="text" name="quiz-category-create" placeholder="Enter Quiz's categories...">
        </div>
        <div class="input-form-quiz-gen">
            <label for="quiz-des-create">Quiz's description</label>
            <textarea type="text" name="quiz-des-create" placeholder="Enter description about the quiz..." style="resize:none;"></textarea>
            <div></div>
        </div>
        <div class="question-create-state">
            <span>Question (0)</span>
            <span>Total Score: 100</span>
        </div>
        <div class="question-form-create-box">
            <div class="question-form">
                <div class="question-form-input-area">
                    <div class="input-form-quiz-gen">
                        <label for="question-cont">Question's content</label>
                        <input type="text" name="question-cont" placeholder="Enter Question...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-img">Question's Image</label>
                        <input type="text" name="question-img" placeholder="Enter URL...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-point">Question's point</label>
                        <input type="number" min="0" name="question-point" placeholder="Choose Question's point...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-time">Question's time (seconds)</label>
                        <input type="number" min="0" name="question-time" placeholder="Choose Question's time...">
                    </div>
                </div>

                <div class="question-form-choose-area">
                    <label for="">Create Options</label>
                    <div class="option-form">
                        <span>A.</span>
                        <input type="text" name="optionA">
                    </div>
                    <div class="option-form">
                        <span>B.</span>
                        <input type="text" name="optionB">
                    </div>
                    <div class="option-form">
                        <span>C.</span>
                        <input type="text" name="optionC">
                    </div>
                    <div class="option-form">
                        <span>D.</span>
                        <input type="text" name="optionD">
                    </div>
                    
                    <div class="correct-answer">
                        <label for="CA">Correct Answer:</label>
                        <select name="CA">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="delete-question-btn">
                    <button name="delete-question">Delete</button>
                </div>
            </div>
        </div>
        <div class="quiz-create-button">
            <button name="add-question-button">Add question</button>
            <button name="cancel-quiz-button">Cancel</button>
            <button name="confirm-quiz-button">Confirm</button>
        </div>
    </div>
</body>

</html>