const btnPrevAll = document.querySelectorAll(".btn-prev");
const btnNextAll = document.querySelectorAll(".btn-next");
const rowAll = document.querySelectorAll(".seller .seller__content");
const scrollAmt = 308;
const scrollSpeed = 15;

function scrollPrev(el) {
    if(!el) return;
    el.scrollLeft -= scrollAmt;
}

function scrollNext(el) {
    if(!el) return;
    el.scrollLeft += scrollAmt;
}

btnPrevAll.forEach((el) => {
    el.addEventListener("click", () => {
        let rowEl = el.parentElement.parentElement.nextElementSibling;
        scrollPrev(rowEl);
    });
});

btnNextAll.forEach((el) => {
    el.addEventListener("click", () => {
        let rowEl = el.parentElement.parentElement.nextElementSibling;
        scrollNext(rowEl);
    });
});

function checkScrollActBtn(el) {
    if (el.scrollLeft + 5 >= el.scrollWidth - el.clientWidth) {
        el.parentElement.querySelector(".btn-next").classList.add("hide");
    } else {
        el.parentElement.querySelector(".btn-next").classList.remove("hide");
    }

    if (el.scrollLeft <= 0) {
        el.parentElement.querySelector(".btn-prev").classList.add("hide");
    } else {
        el.parentElement.querySelector(".btn-prev").classList.remove("hide");
    }

    if (el.scrollWidth <= 1200) {
        el.parentElement.querySelector(".btn-next").classList.add("hide");
        el.parentElement.querySelector(".btn-prev").classList.add("hide");
    }
}

function rowScroll(el, index) {
    const handleScroll = () => checkScrollActBtn(el);
    el.addEventListener("scroll", handleScroll);
    handleScroll(el);

    let scrollDirection = "right";
    let mouseOverStatus = false;

    setTimeout(() => {
        if (el.clientWidth != el.scrollWidth) {
            let myIntervalIds = setInterval(() => {
                let totalScrolled = el.scrollLeft + el.offsetWidth;

                if (mouseOverStatus) return;

                if (scrollDirection === "right") {
                    if (totalScrolled + 5 < el.scrollWidth) {
                        scrollNext(el);
                    } else {
                        scrollDirection = "left";
                    }
                } else {
                    if (el.scrollLeft > 0) {
                        scrollPrev(el);
                    } else {
                        scrollDirection = "right";
                    }
                }
            }, 12000);

            el.parentElement.addEventListener("mouseover", () => {
                mouseOverStatus = true;
            });

            el.parentElement.addEventListener("mouseout", () => {
                mouseOverStatus = false;
            });
        }px
    }, index * 6000 + 1000);
}
rowAll.forEach((el, index) => rowScroll(el, index));
