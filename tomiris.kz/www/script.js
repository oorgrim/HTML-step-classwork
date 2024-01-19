const faqs = document.querySelectorAll(".questions");
for (const item of faqs) {
const qua = item.childNodes; //дочернке уузлы
const question = qua[1];
const answer = qua[3];
const icon = question.querySelector(".icon-main");
icon.addEventListener("click", function () {
	answer.classList.toggle("hide");
	const i = icon.querySelector("i");
	i.classList.toggle("fa-xmark"); //xmark это я взяла с сайта fontawesome
});
}

    var getStartedLink = document.getElementById("sb");
    var descText = document.getElementById("desc_txt");
    getStartedLink.addEventListener("click", function() {
        descText.scrollIntoView({ behavior: "smooth" });
    });