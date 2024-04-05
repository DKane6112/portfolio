const clear = document.getElementById("reset");
clear.addEventListener('click', (e) => {
    let ans = window.confirm('Are you sure you want to clear all content?');
    if (ans) {
        localStorage.clear();
    }
    else{
        e.preventDefault();
    }
});

const post = document.getElementById("post");
post.addEventListener('click', (e) => {
    const title = document.getElementById("title");
    const content = document.getElementById("content");
    let ans = window.confirm('Are you sure you want to post?');
    if(!ans){
        e.preventDefault();
    }
    else if(title.value == "" && content.value == ""){
        title.style.border = ".1rem solid red";
        title.setAttribute("placeholder", "Field cannot be empty");
        content.style.border = ".1rem solid red";
        content.setAttribute("placeholder","Field cannot be empty");
        e.preventDefault();
    }
    else if(title.value == ""){
        title.style.border = ".1rem solid red";
        title.setAttribute("placeholder", "Field cannot be empty");
        e.preventDefault();
    }
    else if(content.value == ""){
        content.style.border = ".1rem solid red";
        content.setAttribute("placeholder", "Field cannot be empty");
        e.preventDefault();
    }

});

document.getElementById("title").addEventListener('click', (e) => {
    e.target.style.border = ".1rem solid #232342";
    e.target.setAttribute("placeholder", "Title");
});

document.getElementById("content").addEventListener('click', (e) => {
    e.target.style.border = ".1rem solid #232342";
    e.target.setAttribute("placeholder", "Add content");
});