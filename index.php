<?php
 require_once ('db_connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title>Test Task</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/36e24f0b80.js" crossorigin="anonymous"></script>

</head>
<body>
<header class="stikcy-top bg-dark d-flex flex-column pt-5 pb-5">
    <a href="/" class="d-block container-fluid navbar-brad d-flex flex-row align-items-center justify-content-start w-75 m-auto text-decoration-none">
        <div class="me-2">
            <img src="https://honey-hunters.ru/public/img/logo_50.png" alt="not found" width="40" height="40">
        </div>
        <div>
            <div class="text-white text-decoration-none">HoneyHunters</div>
        </div>
    </a>
    <div class="d-flex flex-column align-items-center mt-5 w-75 m-auto header_container">
        <div class="justify-content-center">
            <img src="img/post.png" width="150" height="150" class="post-img" title="Введите комментарий в форму" alt="not found">
        </div>
        <div class="w-100 mt-5">
            <form method="post" action="#">
                <div class="d-flex flex-column form-group">
                    <div class="comment_form d-flex flex-row w-100">
                        <div class="w-50 h-100 d-flex flex-column form_name_email">
                            <div class="h-50">
                                <label for="name" class="text-light d-block">
                                    Имя
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" id="name" name="name" class="form-control-lg d-block bg-dark text-light w-85 mt-2 custom-input">
                            </div>
                            <div class="h-50">
                                <label for="email" class="text-light d-block mt-4">
                                    E-Mail
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="email" id="email" name="email" class="form-control-lg d-block bg-dark text-light w-85 mt-2 custom-input">
                            </div>
                        </div>
                        <div class="form_textarea w-50 d-flex flex-column align-items-end">
                            <div class="w-85">
                                <label for="comment" class="text-light d-block">
                                    Комментарий
                                    <span class="text-danger">*</span>
                                </label>
                            </div>
                            <textarea id="comment" name="comment" class="form-control bg-dark text-light d-block w-85 h-100 mt-2 custom-textarea"></textarea>
                        </div>
                    </div>
                    <div class="custom_btn_block form-group w-100 d-flex flex-row justify-content-end mt-5">
                        <input type="submit" value="Записать" class="custom-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

<main class="bg-light d-block w-100 m-auto pt-5 pb-5">
    <div class="d-flex flex-column w-75 m-auto">
        <div class="title text-center w-100">
            <span>Выводим комментарии</span>
        </div>
        <div class="comments d-flex flex-row w-100 text-center flex-wrap align-items-stretch">
            <div class="one_comment d-flex w-33 h-100" >
                <div class="d-flex flex-column w-75 m-auto mt-5 mb-5">
                    <div class="pt-2 pb-2" style="background: #4b596c; color:#e0e0e0;">Vasya</div>
                    <div class="pt-3 pb-3" style="background: #e9eef3; color:#6d737b; font-weight: bold">vasya@gmail.com</div>
                    <div class="pt-3 pb-3" style="background: #e9eef3; color:#6d737b; font-size: 13px; font-weight: normal; min-height: 120px;">Сообщение от Василия Пупкина</div>
                </div>
            </div>
            <div class="one_comment d-flex w-33 h-100" >
                <div class="d-flex flex-column w-75 m-auto mt-5 mb-5">
                    <div class="pt-2 pb-2" style="background: #58ad52; color:#e0e0e0;">Marusia</div>
                    <div class="pt-3 pb-3" style="background: #deebde; color:#58ad52; font-weight: bold">marusia@gmail.com</div>
                    <div class="pt-3 pb-3" style="background: #deebde; color:#768275; font-size: 13px; font-weight: normal; min-height: 120px;">Всем привет, я Маруся</div>
                </div>
            </div>
            <div class="one_comment d-flex w-33 h-100" >
                <div class="d-flex flex-column w-75 m-auto mt-5 mb-5">
                    <div class="pt-2 pb-2" style="background: #4b596c; color:#e0e0e0;">Vasya</div>
                    <div class="pt-3 pb-3" style="background: #e9eef3; color:#6d737b; font-weight: bold">vasya@gmail.com</div>
                    <div class="pt-3 pb-3" style="background: #e9eef3; color:#6d737b; font-size: 13px; font-weight: normal; min-height: 120px;">Сообщение от Василия Пупкина</div>
                </div>
            </div>
        </div>
    </div>

</main>

<footer class="bg-dark w-100 m-auto pt-3 pb-4">
    <div class="d-flex flex-row w-75 m-auto">
        <a href="/" class="d-block container-fluid navbar-brad d-flex flex-row align-items-center justify-content-start w-50 text-decoration-none">
            <div class="me-2">
                <img src="https://honey-hunters.ru/public/img/logo_50.png" alt="not found" width="35" height="35">
            </div>
            <div>
                <div class="text-white text-decoration-none footer-text">
                    HoneyHunters
                </div>
            </div>
        </a>

        <div class="d-flex flex-row w-50 justify-content-end" style="color: white">
            <div class="ms-3">
                <a href="https://vk.com/obslyzhivaniesaitov" target="_blank" class="fab fa-vk"></a>
            </div>
            <div class="ms-3">
                <a href="https://www.facebook.com/honeyhuntersmanagement/" target="_blank" class="fab fa-facebook-f"></a>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
