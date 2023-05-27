<?php 
include('connect.php');
$connect = new connect();
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>
    // Lấy danh sách các danh mục từ cơ sở dữ liệu bằng AJAX
    $.ajax({
        url: "get_categories.php",
        method: "GET",
        dataType: "json",
        success: function(data) {
            // Tạo các phần tử HTML tương ứng với các danh mục và thêm chúng vào menu thả xuống
            var categoryList = $("#categoryList");
            $.each(data, function(index, category) {
                var categoryLink = $("<a class='dropdown-item' href='#'>" + category.category_name + "</a>");
                categoryList.append(categoryLink);
            });
        },
        error: function(xhr, status, error) {
            console.log("Lỗi: " + error);
        }
    }); 
</script>