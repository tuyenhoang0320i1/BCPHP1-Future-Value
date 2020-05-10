# BCPHP1-Future-Value

[Bài tập] Ứng dụng Future Value Calculator
Mục tiêu
Luyện tập phát triển ứng dụng PHP, xử lý dữ liệu gửi lên từ form, sử dụng các toán tử, và vòng lặp.

Mô tả
Ứng dụng Future Value Calculator được sử dụng để tính giá trị tương lai đối với các khoản tiền đầu tư.

Trang đầu tiên chứa form để nhập vào 3 dữ liệu chính:

Inventment Amount: Lượng tiền đầu tư ban đầu
Yearly Interest Rate: Lãi suất năm
Number of Years: Số năm đầu tư
Sau khi nhấn nút Calculate thì sẽ nhận được giá trị trong tương lai sẽ nhận được.

Công thức tính giá trị tương lai cho 1 năm:

Giá trị Tương lai = Giá trị Hiện tại + (Giá trị Hiện tại * Lãi suất)
Hướng dẫn
Tạo form với các trường như mô tả.

Sử dụng phương thức POST để gửi dữ liệu lên server.

Sử dụng biến $_POST để lấy dữ liệu được gửi lên.

Tính Giá trị Tương lai theo công thức đã cho, lặp lại theo số lượng năm.

Hiển thị kết quả.

Demo: http://demo.codegym.vn/lamp/2/future_value/
