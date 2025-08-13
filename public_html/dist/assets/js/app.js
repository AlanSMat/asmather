new Vue({
  el: "#app",
  mounted() {
    this.getJson();
  },
  data: {
    work: {}
  },
  computed: {
    // used in the v-for loop
    formattedWork() {
      return Object.values(this.work);
    }
  },
  methods: {
    getBaseUrl() {
      const url = window.location.href;
      const res = url.split("/");
      let baseUrl = "";
      if (res[2] === "localhost") {
        baseUrl += `${res[0]}//${res[2]}/portfolio_php/dist`;
      } else {
        baseUrl += `${res[0]}//${res[2]}/dist`;
      }
      this.imgPath = `${baseUrl}/assets/img`;
      return `${baseUrl}/assets`;
    },
    getJson() {
      // see if work is in localStorage
      const work = localStorage.getItem("work");

      if (work) {
        // store work in variable
        this.work = JSON.parse(work);
        // nothing else to be done
        return;
      }
      // get work from local json file
      fetch(this.getBaseUrl() + "/json/work.json")
        .then(r => r.json())
        .then(
          json => {
            // copy to work variable
            this.work = json;
            // store in localStorage
            localStorage.setItem("work", JSON.stringify(this.work));
          },
          response => {
            console.log("Error loading json:", response);
          }
        );
    }
  }
});
