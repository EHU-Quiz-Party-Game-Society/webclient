const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

Echo.channel(`quiz`)
    .listen('.send', (data) => {
        document.getElementsByName("question").forEach(function (element) {
            element.value = data.question.id;
        });

        if(data.question.type === 1) //Multiple Choice
        {
            document.getElementById("logo").style.display = "none"
            document.getElementById("multipleChoice").style.display = "grid"
            document.getElementById("numberChoice").style.display = "none"
            document.getElementById("letters").style.display = "none"
            document.getElementById("fastestFinger").style.display = "none"
        }
        if(data.question.type === 2) //Fastest Finger
        {
            document.getElementById("logo").style.display = "none"
            document.getElementById("multipleChoice").style.display = "none"
            document.getElementById("numberChoice").style.display = "none"
            document.getElementById("letters").style.display = "none"
            document.getElementById("fastestFinger").style.display = "grid"
        }
        if(data.question.type === 3) //Number
        {
            document.getElementById("logo").style.display = "none"
            document.getElementById("multipleChoice").style.display = "none"
            document.getElementById("numberChoice").style.display = "initial"
            document.getElementById("letters").style.display = "none"
            document.getElementById("fastestFinger").style.display = "none"
        }
        if(data.question.type === 4) //Letters
        {
            document.getElementById("logo").style.display = "none"
            document.getElementById("multipleChoice").style.display = "none"
            document.getElementById("numberChoice").style.display = "none"
            document.getElementById("letters").style.display = "grid"
            document.getElementById("fastestFinger").style.display = "none"
        }
    })
    .listen('.logo', () => {
        document.getElementById("logo").style.display = "initial"
        document.getElementById("multipleChoice").style.display = "none"
        document.getElementById("numberChoice").style.display = "none"
        document.getElementById("letters").style.display = "none"
        document.getElementById("fastestFinger").style.display = "none"
    })

function dis(val)
{
    document.getElementById("result").innerHTML+=val //Display to Client
    document.getElementById("calculator-grid-result").value+=val //Response to Server
}

function clr()
{
    document.getElementById("result").innerHTML = "" //Display to Client
    document.getElementById("calculator-grid-result").value = "" //Response to Server
}

setTimeout(function() {
    $('#alert').fadeOut('fast');
}, 3000);
