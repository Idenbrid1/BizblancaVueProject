<template>
  <div>
    <div class="container py-5">
      <div class="login-page-container container p-0">
        <form action="#" method="POST">
          <div class="row m-0">
            <div class="col-12 p-0">
              <section class="login-wrapper row m-0">
                <div class="col-md-4 col-12 p-0 left-login">
                  <img
                    src="/website/assets/images/login-profile.png"
                    alt="img"
                  />
                  <span>Welcome Back</span>
                  <p>
                    To keep connected with us please login with your personal
                    info
                  </p>
                </div>
                <div class="col-md-8 col-12 right-login">
                  <div class="loginText">
                    <h1>Login Account</h1>
                    <p>
                      If you are already a member, please login using the form
                      below
                    </p>
                  </div>
                  <div class="loginFeilds">
                    <div class="form-group">
                      <input
                        type="email"
                        placeholder="Enter Username"
                        required
                        name="email"
                        id="email"
                      />
                      <label>incorrect username*</label>
                    </div>
                    <br />
                    <div class="form-group">
                      <input
                        type="password"
                        placeholder="Enter Password"
                        required
                        name="password"
                        id="password"
                      />
                      <label>incorrect password *</label>
                    </div>
                  </div>
                  <div class="rememberforgot">
                    <div>
                      <input
                        type="checkbox"
                        class=""
                        name=""
                        id="RememberPassword"
                      />
                      <label for="RememberPassword">Remember me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                  </div>
                  <div class="loginButton">
                    <button>Login</button>
                     <router-link
                        data-toggle="collapse"
                        :to="{ name: 'Signin' }"
                        >or<br />
                      Sign in with</router-link>
                  </div>
                  <div class="directLogin">
                    <ul class="directLoginIcons">
                      <li>
                        <a href="#"
                          ><img
                            src="/website/assets/images/search.svg"
                            alt="google"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img
                            src="/website/assets/images/facebookLogin.svg"
                            alt="facebook"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img
                            src="/website/assets/images/linkedin-round.svg"
                            alt="linkedin"
                        /></a>
                      </li>
                      <li>
                        <a href="#"
                          ><img
                            src="/website/assets/images/github.svg"
                            alt="github"
                        /></a>
                      </li>
                    </ul>
                    <span
                      >Don't have an account?
                      <router-link
                        data-toggle="collapse"
                        :to="{ name: 'Signup' }"
                        > Sign Up</router-link>
                    </span>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  mounted() {},
  methods() {},
};
</script>