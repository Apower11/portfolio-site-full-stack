let blogPostPreviewTitle = document.querySelector(".blog-post-preview-heading");
let blogPostPreviewTextContent = document.querySelector(".blog-post-preview-content");

let previewSubmitPostButton = document.getElementById("preview-submit-post-button");

blogPostPreviewTitle.textContent = localStorage.getItem("blogPostTitle").valueOf();
blogPostPreviewTextContent.textContent = localStorage.getItem("blogTextContent").valueOf();

previewSubmitPostButton.addEventListener("click", (event) => {
    localStorage.setItem("blogPostTitle", "");
    localStorage.setItem("blogTextContent", "");
})