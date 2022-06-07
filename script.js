let clearButton = document.querySelector(".clear-button");
let previewButton = document.querySelector(".preview-button");
let postButton = document.querySelector(".post-button");

let blogPostTitle = document.getElementById("blog-post-title");
let blogTextContent = document.getElementById("blog-text");

let blogPostTitleValidationMessage = document.querySelector(".invalid-blog-post-title-input-message");
let blogPostContentValidationMessage = document.querySelector(".invalid-blog-post-content-input-message");

blogPostTitle.value = localStorage.getItem("blogPostTitle").valueOf();
blogTextContent.value = localStorage.getItem("blogTextContent").valueOf();

clearButton.addEventListener("click", (event) => {
    event.preventDefault();

    blogPostTitle.value = "";
    blogTextContent.value = "";

    localStorage.setItem("blogPostTitle", "");
    localStorage.setItem("blogTextContent", "");
})

postButton.addEventListener("click", (event) => {
    if((blogPostTitle.value.length == 0) || (blogTextContent.value.length == 0)){
        event.preventDefault();
        
        if((blogPostTitle.value.length == 0) && (blogTextContent.value.length == 0)) {
            blogPostTitle.classList.add("invalid-input");
            blogTextContent.classList.add("invalid-input");
    
            blogPostTitleValidationMessage.textContent = "Please enter a title into the title field";
            blogPostContentValidationMessage.textContent = "Please enter some text into the blog text field.";
        }
        else if(blogPostTitle.value.length == 0){
            blogPostTitle.classList.add("invalid-input");
            blogPostTitleValidationMessage.textContent = "Please enter a title into the title field";
    
            blogTextContent.classList.remove("invalid-input");
            blogPostContentValidationMessage.textContent = "";
        }
        else if(blogTextContent.value.length == 0){
            blogTextContent.classList.add("invalid-input");
            blogPostContentValidationMessage.textContent = "Please enter some text into the blog text field.";
    
            blogPostTitle.classList.remove("invalid-input");
            blogPostTitleValidationMessage.textContent = "";
        }
        else {
            blogPostTitle.classList.remove("invalid-input");
            blogTextContent.classList.remove("invalid-input");
    
            blogPostTitleValidationMessage.textContent = "";
            blogPostContentValidationMessage.textContent = "";
        }
    }
    else {
        localStorage.setItem("blogPostTitle", "");
        localStorage.setItem("blogTextContent", "");
    }
})

previewButton.addEventListener("click", (event) => {
    event.preventDefault();

    if((blogPostTitle.value.length == 0) || (blogTextContent.value.length == 0)){
        if((blogPostTitle.value.length == 0) && (blogTextContent.value.length == 0)) {
            blogPostTitle.classList.add("invalid-input");
            blogTextContent.classList.add("invalid-input");
    
            blogPostTitleValidationMessage.textContent = "Please enter a title into the title field";
            blogPostContentValidationMessage.textContent = "Please enter some text into the blog text field.";
        }
        else if(blogPostTitle.value.length == 0){
            blogPostTitle.classList.add("invalid-input");
            blogPostTitleValidationMessage.textContent = "Please enter a title into the title field";
    
            blogTextContent.classList.remove("invalid-input");
            blogPostContentValidationMessage.textContent = "";
        }
        else if(blogTextContent.value.length == 0){
            blogTextContent.classList.add("invalid-input");
            blogPostContentValidationMessage.textContent = "Please enter some text into the blog text field.";
    
            blogPostTitle.classList.remove("invalid-input");
            blogPostTitleValidationMessage.textContent = "";
        }
        else {
            blogPostTitle.classList.remove("invalid-input");
            blogTextContent.classList.remove("invalid-input");
    
            blogPostTitleValidationMessage.textContent = "";
            blogPostContentValidationMessage.textContent = "";
        }
    }
    else {
        localStorage.setItem("blogPostTitle", blogPostTitle.value);
        localStorage.setItem("blogTextContent", blogTextContent.value);
        window.location.href = `./previewPost.php?title=${localStorage.getItem("blogPostTitle")}&blog-text=${localStorage.getItem("blogTextContent")}`;
    }

})
