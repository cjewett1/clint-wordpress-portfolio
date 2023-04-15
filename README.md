# Clinton's WordPress Portfolio Site

## Overview
Welcome to the repo for my WordPress portfolio site! I wanted to use this readme as a space to explain some of the choices I made and why I made them. The site is still a work in progress that I am continually looking to improve over time and add content to it. It serves as more of an overall look at some of the projects I have done in school and on my own time. I do have a portfolio made with React that focuses more on my development projects, feel free to check that out as well! Ill link it <a href="https://github.com/cjewett1/clints-react-portfolio" target="_blank">here</a> That one is a more ambitious and needs a bit of work yet. 

## Why did I make this project? Why did I use WordPress?
I created this site for a couple of reasons. I wanted an aesthetically pleasing website that I could add all of my projects to. The way its set up right now allows me to easily add new projects to the site. It features my color scheme and is a good representation of how I like to style things.

I wanted to practice with WordPress as well. I took a WordPress course in the Fall of 2022, so i wanted to keep my skills with it fairly sharp. This ended up being a great idea as my capstone project for school ended up being done in WordPress. I feel fairly confident in my development abilities using this powerful CMS. My site features minimal plugins to improve its speed and usability. I only add plugins when absolutely necessaary, I like to try and figure it out myself first! 😄

## Project Status
The site is near completion. There are some small things to optimize (mainly my scss files) but other than that I am fairly happy with the state of it. I will continue to work on this over time and update it.

## Code Examples

I wanted to highlight my sliding projects feature on the homepage. I am really happy with how it turned out!

```
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

```

## When I get more time, I am going to work on
  - Optimize my SCSS files
  - Add more written content to all of the projects featured on the site
  - Add more projects
  - Work on SEO and analytics
  - Ensure the performance score is as high as possible
  
## Challenges I faced while making this
Far and away the biggest challenge was getting SASS to work with WordPress and a barebones theme. I had never done this prior to this project and it was a bit of a learning process. I feel fine with it now, but at the time it took some figuring out and research.

The second biggest issue was removing a lot of the unwanted styles that came with the underscores theme. There was a lot of stuff in there that I didn't like and I had to do some digging to remove these styles.

## Useful Links
Check out <a href="https://clinton-gorda.com" target="_blank">The Site!</a>

 
## Contact
Feel free to [email me](mailto:clintondgorda@gmail.com) if you have any questions or comments about my project.

You can find me on <a href="https://www.linkedin.com/in/clintonjewett/" target="_blank">LinkedIn</a>

You can also find me on Slack as <a href="https://clintssandbox.slack.com/team/U051WJSE588" target="_blank">@clintonwebdev</a>

I'm always on Discord in some capacity, this probably the fastest way to reach me. Heres my username <a href="https://discordapp.com/users/123456789012345678" target="_blank">clint(booma)#4826</a>
