let negative = document.querySelector(".negative");
let firstCount = document.querySelector(".counter");
let counter = 1;
let plus = document.querySelector(".plus");

plus.onclick = function (ele) {
    if(counter < 10) {
        ele.preventDefault();
        firstCount.innerHTML = ++counter;
    }
};
negative.onclick = function (ele) {
    if (counter > 1) {
        ele.preventDefault();
        firstCount.innerHTML = --counter;
    }
};

