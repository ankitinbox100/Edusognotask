<html>
  <head>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Edo sogno | Profilo</title>
  </head>
  <body>
    <div style="height:100%;background-image: url('image/bg.png')">
        
      <div class="header">
        <a href="/"><img src="image/logo.png" class="img" alt="" /> </a>
        <div class="login-container">
            <form action="<?php echo base_url(); ?>/logout" method="post"><button class="sign" type="submit">Signout</button></form>
      </div>
      </div>

      <div>
        <br />
        <h2 class="text-uppercase text-center mb-5">Ciao NOME ecco i tuoi eventi</h2>
        <div class="container py-5 h-100">
          <div class="padding-col justify-content-center align-items-center h-100">
            <div class="row">
            <div class="col-sm-4 ">
              <div
                class="new2 card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  
                    <div class="form-outline mb-4">
                      <label class="label-head-new">Nome evento</label>
                      <br />
                     <p>15-10-2022 15:00</p>
                    </div>
                   
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn-reg">JOIN</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div
                class="new2 card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  
                    <div class="form-outline mb-4">
                      <label class="label-head-new">Nome evento</label>
                      <br />
                     <p>15-10-2022 15:00</p>
                    </div>
                 
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn-reg">JOIN</button>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div
                class="new2 card shadow-2-strong card-registration"
                style="border-radius: 15px"
              >
                <div class="card-body p-4 p-md-5">
                  
                    <div class="form-outline mb-4">
                      <label class="label-head-new">Nome evento</label>
                 
                     <p>15-10-2022 15:00</p>
                    </div>
                 
                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn-reg">JOIN</button>
                    </div>
                </div>
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
