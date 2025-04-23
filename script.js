document.addEventListener("DOMContentLoaded", function () {
    const enrollButtons = document.querySelectorAll(".enroll-btn");

    enrollButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const courseId = this.getAttribute("data-course-id"); // Get course ID
            if (courseId) {
                window.location.href = `enroll.php?id=${courseId}`; // Redirect to enroll.php
            } else {
                alert("Course ID not found!"); // Error handling
            }
        });
    });
});
