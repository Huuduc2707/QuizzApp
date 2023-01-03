export default class Timer{
    constructor(root){
        root.innerHTML = Timer.getHTML();

        this.el = {
            countDownEl: document.querySelector("#countDownTimer"),
            countButton: document.querySelector("input#inputNumber+button"),
            inputTime: document.querySelector("input#inputNumber")
        }

        this.timecount = null;

        this.countDown(this.timecount);

    }

    countDown(time){
        if(time == null){
            return;
        }
        let tmp = setInterval(()=>{
            this.el.countDownEl.innerHTML = `${time}`;
            time--;
            if(time < 0){
                clearInterval(tmp);
            }
        }, 1000);
    }

    static getHTML(){
        return `
        <div class="countDownTimerBound"><p id="countDownTimer">0</p></div>
        `;
    }
}