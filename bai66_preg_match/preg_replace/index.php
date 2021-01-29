<?php 
	$subject = " zend_Controller
Module này giúp lấy các request từ phía Client và thực thi nó bằng các Action
Zend_Db
Dựa trên đối tuợng  PDO (PHP Data Objects), cung cấp cách thức giao tiếp với database
Zend_View
Chính là tầng View trong mô hình MVC
Zend_Acl
Quản lý phân quyền trong toàn bộ site
Zend_Feed
Giúp xử lý với Rss và Atom feeds
Zend_Filter
Chức năng lọc các chuỗi nhập vào xem có hợp lệ với yêu cầu không, ví dụ như kiểm tra 1 chuỗi là Email hoặc là ký tự số.
Zend_Pdf
Tạo và xử lý các file PDF
Zend_Service_Amazon, Zend_Service_Flickr, and Zend_Service_Yahoo
Cung cấp truy cập tới các dich vụ web APIS của các nhà cung cấp như Amazon, Flick, Yahoo
Zend_XmlRpc
Tạo ra  giao tiếp XMLRpc (giao tiếp client-server, các xử lý tập chung phía server, client chỉ để hiển thị).
Và còn rất nhiều các Object khác mà mình sẽ giới thiệu trong các bài viết tiếp theo.";

	$pattern = "/Zend/i";
	$replacement = "Anh duy tùng";

	echo $result = preg_replace($pattern, $replacement, $subject);

	// echo "<pre>";
	// print_r($result);
	// echo "</pre>";

 ?>