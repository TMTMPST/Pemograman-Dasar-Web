$(document).ready(function () {

    loadComments();

    $('#commentForm').on('submit', function (event) {
        event.preventDefault();

        var formData = $(this).serialize();

        $.post('save_comment.php', formData, function (response) {
            $('#commentForm')[0].reset();
            loadComments();
        });
    });

    function loadComments() {
        $.get('load_comment.php', function (data) {
            console.log(data);
            $('#commentSection').html(data);
        });
    }

    loadCarouselImages();
    
    $('#uploadForm').on('submit', function (e) {
        e.preventDefault();
        
        var formData = new FormData(this);
        
        $.ajax({
            url: 'upload.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response != 0) {
                    loadCarouselImages();
                } else {
                    alert('File not uploaded. Please try again.');
                }
            }
        });
    });
    
    function loadCarouselImages() {
        $.ajax({
            url: 'load_images.php',
            type: 'GET',
            success: function (response) {
                var images = JSON.parse(response);
                var carouselInner = $('#carousel-images');
                carouselInner.empty();
                
                images.forEach(function (image, index) {
                    var activeClass = index === 0 ? 'active' : '';
                    var carouselItem = `<div class="carousel-item ${activeClass}">
                    <img src="${image}" class="d-block w-100" alt="...">
                    </div>`;
                    carouselInner.append(carouselItem);
                });
                
                $('#carouselExample').carousel();
            }
        });
    }
});
