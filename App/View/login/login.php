<div style="max-width:450px; margin: 0 auto; margin-top: 5%;">
  <div class="card border-secondary">
    <div class="card-header">
      <img src="<?=BASE?>img/logo_color.png" alt="Open Task Logo" style="max-width:32px;">
      Open Task
    </div>
    <div class="card-body">
      <form method="post" action="<?=BASE?>login/auth" onsubmit="return login();">
        <div>
          <label for="txtUsername">Usuário</label>
          <input type="text" class="form-control" id="txtUsername" name="txtUsername" placeholder="Digite seu Usuário">
        </div>

        <div class="mt-3">
          <label for="txtPassword">Senha</label>
          <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="*******">
        </div>

        <div class="mt-3">
          <button type="submit" name="btnLogin" class="btn btn-secondary w-100">Login</button>
        </div>

        <div class="alert alert-info mt-3" id="alertLogin">
          <p>- Preencha corretamente todos os campos</p>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  function login(){
    var msg = "";
    if(valueById("txtUsername").length < 2){
      msg += "<p>- Usuário inválido</p>";
    }

    if(valueById("txtPassword").length < 7){
      msg += "<p>- Senha inválida</p>";
    }

    if(msg == ""){
      return true;
    }else{
      setHTMLById("alertLogin", msg);
      return false;
    }
  }
</script>
