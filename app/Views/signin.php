<html>

<head>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Edo sogno | Accedere</title>
</head>

<body>
    <div style=" background-image: url('image/bg.png')">

        <div class="header">
            <a href="/"><img src="image/logo.png" class="img" alt="" /> </a>
        </div>

        <div>
            <br />
            <h2 class="text-uppercase text-center mb-5">Hai già un account?</h2>
            <div class="container py-5 h-100">
                <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif;?>
                <?php if(session()->getFlashdata('err')):?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('err') ?>
                </div>
                <?php endif;?>
                <div class="justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="new1 card shadow-2-strong card-registration" style="border-radius: 15px">
                            <div class="card-body p-4 p-md-5">
                                <form action="<?php echo base_url(); ?>/SigninController/loginAuth" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="label-head">Inserisci l’email</label>
                                        <br />
                                        <input type="email" name="email" placeholder="name@example.com"
                                            id="form3Example1cg" class="input-border"
                                            value="<?= set_value('email') ?>" />
                                    </div>
                                    <br />
                                    <div class="password-container">
                                        <label class="label-head">Inserisci la password</label>
                                        <br />
                                        <input type="password" placeholder="Scrivila qui" class="input-border"
                                            id="password" name="password" />
                                        <i class="fa-solid fa-eye" id="eye"></i>
                                    </div>

                                    <div class="btn-pd d-flex justify-content-center">
                                        <button type="submit" class="btn-reg">ACCEDI</button>
                                    </div>

                                    <p style="color: #2d224c" class="text-center text-muted mt-5 mb-0">
                                        <a href="/signup" style="margin-right: 20px;">
                                            Non hai ancora un profilo? Registrati</a>
                                        <a href="/forget">
                                            Dimenticare password</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
const passwordInput = document.querySelector("#password");
const eye = document.querySelector("#eye");
eye.addEventListener("click", function() {
    this.classList.toggle("fa-eye-slash");
    const type =
        passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
});
</script>