<template>
  <div>
    <div class="register-container py-5 mt-5">
      <div class="container p-0">
        <div class="login-wrapper row m-0">
          <section class="col-md-4 col-12 p-0 left-register">
            <img src="/website/assets/images/login-profile.png" alt="img" />
            <span>Hello Friend</span>
            <p>
              To keep connected with us please login with your personal info
            </p>
          </section>
          <div class="col-md-8 col-12 right-register">
            <div class="loginText">
              <h1>Create Account</h1>
              <ul class="nav nav-tabs border-0" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link candidate-register active"
                    data-toggle="tab"
                    href="#candidate-tab"
                    >Candidate</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link company-register"
                    data-toggle="tab"
                    href="#company-tab"
                    >Company</a
                  >
                </li>
              </ul>
            </div>
            <div class="tab-content w-100">
              <div id="candidate-tab" class="tab-pane active">
                <form action="#" method="POST">
                  <input type="hidden" name="type" value="Candidate" />
                  <div class="row m-0">
                    <div class="col-12 p-0">
                      <section class="row m-0">
                        <div class="col-12 registerTab">
                          <div class="loginFeilds">
                            <div class="form-group">
                              <input
                                class="is-invali"
                                required
                                type="text"
                                placeholder="Your Name"
                                name="name"
                                id="name-input"
                              />
                              <label for="">Error message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="email"
                                required
                                placeholder="Email"
                                name="email"
                                id="email-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="number"
                                required
                                placeholder="Phone Number"
                                name="phone"
                                id="phone-no-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                required
                                type="password"
                                placeholder="Password"
                                name="password"
                                id="password-input"
                              />
                              <label for=""></label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                required
                                type="password"
                                placeholder="Confirm Password"
                                name="password_confirmation"
                                id="confirm-password-input"
                              />
                              <label for="">Error message</label>
                            </div>
                            <br />
                          </div>
                          <div class="loginButton">
                            <button>Sign Up</button>
                            <a href="{#"
                              >or<br />
                              Sign up with</a
                            >
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
                                    src="/website/assets/images/facebook.svg"
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
                              >Already have an account?
                              <router-link
                                data-toggle="collapse"
                                :to="{ name: 'Signin' }"
                                >Login</router-link
                              >
                            </span>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                </form>
              </div>
              <div id="company-tab" class="tab-pane">
                <br />
                <form action="#" method="POST">
                  <input type="hidden" name="type" value="Company" />
                  <div class="row m-0">
                    <div class="col-12 p-0">
                      <section class="row m-0">
                        <div class="col-12 registerTab">
                          <div class="loginFeilds">
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="text"
                                required
                                placeholder="Your Name"
                                name="name"
                                id="name-input"
                              />

                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="text"
                                required
                                placeholder="Company Name"
                                name="company_name"
                                id="company-name-input"
                              />

                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="email"
                                required
                                placeholder="Email"
                                name="email"
                                id="email-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="number"
                                required
                                name="phone"
                                placeholder="Phone Number"
                                id="phone-no-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="password"
                                required
                                name="password"
                                placeholder="Password"
                                id="password-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                            <div class="form-group">
                              <input
                                class="is-invali"
                                type="password"
                                required
                                placeholder="Confirm Password"
                                name="password_confirmation"
                                id="confirm-password-input"
                              />
                              <label for="">Error Message</label>
                            </div>
                            <br />
                          </div>
                          <div class="loginButton">
                            <button>Sign Up</button>
                            <router-link
                              data-toggle="collapse"
                              :to="{ name: 'Signup' }"
                              >or<br />
                              Sign up with</router-link
                            >
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
                                    src="/website/assets/images/facebook.svg"
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
                              >Already have an account?
                              <router-link
                                data-toggle="collapse"
                                :to="{ name: 'Signin' }"
                                >Login</router-link
                              >
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
        </div>
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