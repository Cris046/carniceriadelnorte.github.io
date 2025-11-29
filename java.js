(function(){
  const html = document.documentElement;

  document.querySelectorAll(".acces-menu button").forEach(btn => {
    btn.addEventListener("click", () => {
      const a = btn.dataset.act;

      if(a === "bigger"){
        html.style.fontSize = "110%";
      }
      if(a === "smaller"){
        html.style.fontSize = "90%";
      }
      if(a === "contrast"){
        document.body.classList.toggle("high-contrast");
      }
      if(a === "reset"){
        html.style.fontSize = "";
        document.body.classList.remove("high-contrast");
      }
    });
  });
})();



