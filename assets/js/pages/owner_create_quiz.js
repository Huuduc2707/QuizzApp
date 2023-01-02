function addQuestion(){
    let place = document.getElementById('addQuestion');
    let questionForm = document.getElementsByClassName('question-form-create-box');
    let order = parseInt(questionForm[questionForm.length - 1].id) + 1;
    place.innerHTML += `<div class="question-form-create-box" id="${order}">
            <div class="question-create-state">
                <span>Question ${order}</span>
            </div>
            <div class="question-form">
                <div class="question-form-input-area">
                    <div class="input-form-quiz-gen">
                        <label for="question-cont">Question's content</label>
                        <input type="text" name="question-cont${order}" placeholder="Enter Question...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-img">Question's Image</label>
                        <input type="text" name="question-img${order}" placeholder="Enter URL...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-point">Question's point</label>
                        <input type="number" min="0" name="question-point${order}" class="question-point" onkeyup="updateTotalScore()" placeholder="Choose Question's point...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-time">Question's time (seconds)</label>
                        <input type="number" min="0" name="question-time${order}" placeholder="Choose Question's time...">
                    </div>
                </div>

                <div class="question-form-choose-area">
                    <label for="">Create Options</label>
                    <div class="option-form">
                        <span>A.</span>
                        <input type="text" name="optionA${order}">
                    </div>
                    <div class="option-form">
                        <span>B.</span>
                        <input type="text" name="optionB${order}">
                    </div>
                    <div class="option-form">
                        <span>C.</span>
                        <input type="text" name="optionC${order}">
                    </div>
                    <div class="option-form">
                        <span>D.</span>
                        <input type="text" name="optionD${order}">
                    </div>
                    
                    <div class="correct-answer">
                        <label for="CA">Correct Answer:</label>
                        <select name="CA${order}">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="delete-question-btn">
                    <button name="delete-question" onclick="deleteQuestion(${order})">Delete</button>
                </div>
            </div>
        </div>`
}

function deleteQuestion(order){
    let questionForm = document.getElementsByClassName('question-form-create-box');
    if(questionForm.length === 1) alert("Your quiz must have at least 1 question");
    else{
        let question = document.getElementById(`${order}`);
        question.remove();
        for(let i=0;i<questionForm.length;i++){
            let num = parseInt(questionForm[i].id);
            if(num > order){
                questionForm[i].innerHTML = `<div class="question-create-state">
                <span>Question ${num-1}</span>
            </div>
            <div class="question-form">
                <div class="question-form-input-area">
                    <div class="input-form-quiz-gen">
                        <label for="question-cont">Question's content</label>
                        <input type="text" name="question-cont${num-1}" placeholder="Enter Question...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-img">Question's Image</label>
                        <input type="text" name="question-img${num-1}" placeholder="Enter URL...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-point">Question's point</label>
                        <input type="number" min="0" name="question-point${num-1}" class="question-point" onkeyup="updateTotalScore()" placeholder="Choose Question's point...">
                    </div>
                    <div class="input-form-quiz-gen">
                        <label for="question-time">Question's time (seconds)</label>
                        <input type="number" min="0" name="question-time${num-1}" placeholder="Choose Question's time...">
                    </div>
                </div>

                <div class="question-form-choose-area">
                    <label for="">Create Options</label>
                    <div class="option-form">
                        <span>A.</span>
                        <input type="text" name="optionA${num-1}">
                    </div>
                    <div class="option-form">
                        <span>B.</span>
                        <input type="text" name="optionB${num-1}">
                    </div>
                    <div class="option-form">
                        <span>C.</span>
                        <input type="text" name="optionC${num-1}">
                    </div>
                    <div class="option-form">
                        <span>D.</span>
                        <input type="text" name="optionD${num-1}">
                    </div>
                    
                    <div class="correct-answer">
                        <label for="CA">Correct Answer:</label>
                        <select name="CA${num-1}">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <div class="delete-question-btn">
                    <button name="delete-question" onclick="deleteQuestion(${num-1})">Delete</button>
                </div>
                </div>`;
                questionForm[i].id = `${num-1}`;
            }
        }
    }
}

function goBack(){
    window.location.replace('http://localhost/quizApp/index.php?page=myQuiz');
}

function updateTotalScore(){
    let score = document.getElementById('totalScore');
    let scoreInput = document.getElementsByClassName('question-point');
    let sum = 0;
    for(let i=0;i<scoreInput.length;i++){
        if(scoreInput[i].value) sum+=parseInt(scoreInput[i].value);
    }   
    score.innerText = `Total Score: ${sum}`;
}