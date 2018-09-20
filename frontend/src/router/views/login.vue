<script>
import Layout from '@layouts/main'
import PlainLayout from '@layouts/plain'
import { authMethods } from '@state/helpers'
import appConfig from '@src/app.config'

export default {
  page: {
    title: 'Log in',
    meta: [{ name: 'description', content: `Log in to ${appConfig.title}` }],
  },
  components: { Layout, PlainLayout },
  data() {
    return {
      username: '',
      password: '',
      remember: false,
      authError: null,
      tryingToLogIn: false,
    }
  },  
  methods: {
    ...authMethods,
    // Try to log the user in with the username
    // and password they provided.
    async tryToLogIn() {
      this.tryingToLogIn = true
      // Reset the authError if it existed.
      this.authError = null
      try {
        const { data } = await this.logIn({
          username: this.username,
          password: this.password,
          remember: this.remember,
        })

        this.tryingToLogIn = false

        // Redirect to the originally requested page, or to the home page
        this.$router.push(this.$route.query.redirectFrom || { name: 'home' })
      } catch (e) {
        this.tryingToLogIn = false
        this.authError = error
      }
    },
  },
}
</script>

<template>
  <div class="login">
    <PlainLayout>
      <template slot="left">
        <div class="flex col left">
          <h3 class="title text-grey">Track your lumber and log records to see your results</h3>        
          <figure>
            <img width="300" src="@assets/images/icon-browser.svg" alt="">
          </figure>
          <article>
            <h3>logScale</h3>
            <p class="text-grey-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, error.</p>
          </article>        
        </div>
      </template>
      <template slot="right">
        <div class="flex col right">
          <article class="row">
            <h2 class="title">Get Started</h2>
            <p class="lead">By logging in your account</p>
          </article>

          <form
            :class="$style.form"
            @submit.prevent="tryToLogIn"
            slot="right"
          >
            <BaseInput
              v-model="username"
              name="username"
            />
            <BaseInput
              v-model="password"
              name="password"
              type="password"
            />
            <BaseCheckbox
              v-model="remember"
              name="remember"
              type="checkbox"
            />
            <BaseButton
              :disabled="tryingToLogIn"
              type="submit"
            >
              <BaseIcon
                v-if="tryingToLogIn"
                name="sync"
                spin
              />
              <span v-else>
                Log in
              </span>
            </BaseButton>
            <p v-if="authError" class="mt-5">
              There was an error logging in to your account.
            </p>
          </form>
        </div>

      </template>
    </PlainLayout>    
  </div>

</template>

<style lang="scss" module>
@import '@design';

.form {
  text-align: center;
  width: 400px;
  margin: 0 auto;
}
</style>
