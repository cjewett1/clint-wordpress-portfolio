const projectFlexItem = document.querySelectorAll(".project-flex-item");

const projectFirstChild = document.querySelector(".project-flex-container");

const projectImg = document.querySelectorAll(".project-flex-item");

projectFlexItem.forEach((project) => {
    project.addEventListener("mouseover", () => {
        removeActiveClasses();
        project.classList.add("active");
    });
});

function removeActiveClasses() {
    projectFlexItem.forEach((project) => {
        project.classList.remove("active");
    });
}

function removeClassHover() {
    projectImg.forEach((project) => {
        project.classList.remove("active");
    });
}
