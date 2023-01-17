<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="<?php echo base_url('/style.css'); ?>" />
    <title>Edo sogno | Registrati</title>

  </head>
  <body>
    <!-- <div class="bg"> -->
      <div style=" background-image: url('<?php echo base_url('image/bg.png'); ?>')">
      <div class="header">
        <a href="/"><img src="<?php echo base_url('image/logo.png'); ?>" class="img" alt="" /> </a>
      </div>

      <div style=" margin-top: 10px; background-image: url(<?php echo base_url('image/bg.png'); ?>')">
        <br />
        <h2 class="text-uppercase text-center mb-5">Crea il tuo account</h2>
        <div class="container py-5 h-100">
        <?php if(isset($validation)):?>
                <div class="alert alert-danger">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
          <div class="justify-content-center align-items-center h-100">
            <div class="col-12">
              <div
                class="new card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  <form action="<?php echo base_url(); ?>/singup" method="post">
                    <div class="form-outline mb-4">
                      <label class="label-head">Inserisci il nome</label>
                      <br />
                      <input
                        type="text"
                        placeholder="Mario"
                        id="form3Example1cg"
                        class="input-border"
                        value="<?= set_value('name') ?>"
                        name="name"
                      />
                    </div>
                    <br />
                    <div class="form-outline mb-4">
                      <label class="label-head">Inserisci il cognome</label>
                      <br />
                      <input
                        type="text"
                        placeholder="Rossi"
                        id="form3Example1cg"
                        class="input-border"
                        name="lastName"
                        value="<?= set_value('lastName') ?>"
                      />
                    </div>
                    <br />
                    <div class="form-outline mb-4">
                      <label class="label-head">Inserisci l’email</label>
                      <br />
                      <input
                        type="gmail"
                        placeholder="name@example.com"
                        id="form3Example1cg"
                        class="input-border"
                        name="email"
                      />
                    </div>
                    <br />
                    <div class="password-container">
                      <label class="label-head">Inserisci la password</label>
                      <br />
                      <input
                        type="password"
                        placeholder="Scrivila qui"
                        class="input-border"
                        id="password"
                        name="password"
                      />
                      <i class="fa-solid fa-eye" id="eye"></i>
                    </div>
                    <div class="btn-pd d-flex justify-content-center">
                      <button type="type" class="btn-reg">REGISTRATI</button>
                    </div>
                    <a href="/signin"><p
                      style="color: #2d224c"
                      class="text-center text-muted mt-5 mb-0"
                    >
                      Hai già un account? Accedi
                    </p></a>
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
  eye.addEventListener("click", function () {
    this.classList.toggle("fa-eye-slash");
    const type =
      passwordInput.getAttribute("type") === "password" ? "text" : "password";
    passwordInput.setAttribute("type", type);
  });
</script>
