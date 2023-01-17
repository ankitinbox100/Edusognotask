<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="<?php echo base_url('/style.css'); ?>" />
    <title>Edo sogno | Dimenticare</title>  </head>
  <body>
    <!-- <div class="bg"> -->
      <div style="background-image: url('image/bg.png')">
      <div class="header">
        <a href="/"><img src="image/logo.png" class="img" alt="" /> </a>
      </div>
      

      <div style=" margin-top: 10px; background-image: url('image/bg.png')">
        <br />
        <h2 class="text-uppercase text-center mb-5">Dimenticare password</h2>
        <div class="container py-5 h-100">
          <div class="justify-content-center align-items-center h-100">
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
            <div class="col-12">
              <div
                class="new card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  <form action="<?php echo base_url(); ?>/sendmail" method="post">
                    <div class="form-outline mb-4">
                      <label class="label-head">Inserisci l’email</label>
                      <br />
                      <input
                        type="email"
                        placeholder="name@example.com"
                        id="form3Example1cg"
                        class="input-border"
                        name="email"
                      />
                    </div>
                    <div class="btn-pd d-flex justify-content-center">
                      <button type="submit" class="btn-reg">Spedire</button>
                    </div>
                    <p
                      style="color: #2d224c"
                      class="text-center text-muted mt-5 mb-0"
                    ><a href="signin">
                    Accedi ora</a>
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
