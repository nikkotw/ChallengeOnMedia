<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<template>
  <Head title="Welcome" />

  <div
    class="
      relative
      flex
      items-top
      justify-center
      min-h-screen
      bg-gray-100
      dark:bg-gray-900
      sm:items-center sm:pt-0
    "
  >
    <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
      <Link
        v-if="$page.props.user"
        :href="route('dashboard')"
        class="text-sm text-gray-700 underline"
      >
        Dashboard
      </Link>

      <template v-else>
        <Link :href="route('login')" class="text-sm text-gray-700 underline">
          Log in
        </Link>

        <Link
          v-if="canRegister"
          :href="route('register')"
          class="ml-4 text-sm text-gray-700 underline"
        >
          Register
        </Link>
      </template>
    </div>

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
          {{movies}}
      </div>

      <div
        class="
          mt-8
          bg-white
          dark:bg-gray-800
          overflow-hidden
          shadow
          sm:rounded-lg
        "
      >
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div
            class="flex justify-center mt-4 sm:items-center sm:justify-between"
          >
            <div class="bg-white">
              <div
                class="
                  max-w-2xl
                  mx-auto
                  py-16
                  px-4
                  sm:py-24 sm:px-6
                  lg:max-w-7xl lg:px-8
                "
              >
                <h2
                  class="text-2xl font-extrabold tracking-tight text-gray-900"
                >
                  Movies
                </h2>

                <div
                  class="
                    mt-6
                    grid grid-cols-1
                    gap-y-10 gap-x-6
                    sm:grid-cols-2
                    lg:grid-cols-4
                    xl:gap-x-8
                  "
                >
                  <div
                    v-for="movie in movies"
                    :key="movie.id"
                    class="group relative"
                  >
                    <div
                      class="
                        w-full
                        min-h-80
                        bg-gray-200
                        aspect-w-1 aspect-h-1
                        rounded-md
                        overflow-hidden
                        group-hover:opacity-75
                        lg:h-80 lg:aspect-none
                      "
                    >
                      <img
                        :src="movie.Poster"
                        :alt="product.imageAlt"
                        class="
                          w-full
                          h-full
                          object-center object-cover
                          lg:w-full lg:h-full
                        "
                      />
                    </div>
                    <div class="mt-4 flex justify-between">
                      <div>
                        <h3 class="text-sm text-gray-700">
                          <a :href="product.href">
                            <span aria-hidden="true" class="absolute inset-0" />
                            {{ movie.Title }}
                          </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">
                          {{ movie.Rating}}
                        </p>
                      </div>
                      <p class="text-sm font-medium text-gray-900">
                        {{ product.price }}
                      </p>
                    </div>
                  </div>
                </div>
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
        return {
        };
    },

    created() {
        
    },

    methods: {
        select() {            
        },
    },
};
</script>

<style scoped>
.bg-gray-100 {
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
  color: #718096;
  color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
  color: #4a5568;
  color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
  color: #1a202c;
  color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-gray-800 {
    background-color: #2d3748;
    background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    background-color: #1a202c;
    background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
  }

  .dark\:border-gray-700 {
    border-color: #4a5568;
    border-color: rgba(74, 85, 104, var(--tw-border-opacity));
  }

  .dark\:text-white {
    color: #fff;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
  }
}
</style>
