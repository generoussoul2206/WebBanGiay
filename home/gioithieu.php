<?php
    session_start();
    include("../connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giới thiệu </title>
    <?php include("component/css.php") ?>
</head>
<body>


<div id="preloader">
        <div class="loader"></div>
    </div> 
    <div class="horizontal-main-wrapper">
        <!-- main header area start -->
        <?php include("component/header.php"); ?>
        <!-- main header area end -->
        <div class="main-content container">
          
           <div class="container" style="padding: 24px">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <img src="../assets/images/bg/vision.jpg" alt="..."  class="img-fluid rounded-3 mb-5 mb-lg-0"  style="border-radius: 50px">
                    </div>
                    <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="float: left;">Tầm nhìn của chúng tôi</h2>
                        <p>Công ty hướng đến việc truyền cảm hứng và cung cấp các sản phẩm để thúc đẩy tiềm năng. Ngoài ra, họ tập trung vào việc xác định lại thế nào là thể thao và như họ nói, tất cả mọi người có thân hình đều có một vận động viên trong người. Ý tưởng và hình ảnh điển hình của từ thể thao, nơi mọi người là những người chuyên nghiệp và chơi thể thao.</p>
                    </div>
                </div>  
           </div>
            <hr>
           <div class="container" style="padding: 24px;">
                <div class="row align-center">
                    <div class="col-lg-6" style="display: flex; flex-direction: column; justify-content: center;">
                        <h2 style="float: left;">Tầm nhìn của chúng tôi</h2>
                        <p>Có vẻ như Jordan Brand đang khởi động lại mọi thứ. Khi mà trong hơn 10 năm qua, danh tính của thương hiệu này gắn liền với hình tượng của những thiết kế Retro. Tuy nhiên, hãng cũng liên tục giới thiệu, ra mắt những phiên bản mới, đi kèm là thông điệp cho thế hệ tương lai sau này, với mong muốn rằng hình tượng Michael Jordan được xem như một nhân vật có ảnh hưởng trong lịch sử hơn là một “idol giới trẻ”.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="../assets/images/bg/nike.jpg" alt="..."  class="img-fluid rounded-3 mb-5 mb-lg-0"  style="border-radius: 50px">
                    </div>
                </div>  
           </div>
           <hr>
            <div class="container"  style="padding: 24px;">
                <div class="text-center">
                    <h2>Phát triển ứng dụng WEB N02 - Kì I 22/23</h2>
                    <p>Thành viên trong nhóm 1</p>
                </div>
                <div class="row" style="padding: 48px">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../assets/images/avatar/cuong.jpg" alt="..." class="img-fluid rounded-circle mb-4 px-4" style="width: 300px;">
                            <h5>Bùi Hoàng Cường</h5>
                            <p>82435 - CNT60DH</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../assets/images/avatar/phong.jpg" alt="..." class="img-fluid rounded-circle mb-4 px-4" style="width: 300px;">
                            <h5>Phạm Duy Phong</h5>
                            <p>84391 - CNT60DH</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="../assets/images/avatar/phong.jpg" alt="..." class="img-fluid rounded-circle mb-4 px-4" style="width: 300px;">
                            <h5>Nguyễn Việt Hùng</h5>
                            <p>83277 - CNT60DH</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<?php include("component/footer.php"); ?>
<!-- main wrapper start -->
<!-- main wrapper end -->
<?php include("component/js.php") ?>
</body>
</html>