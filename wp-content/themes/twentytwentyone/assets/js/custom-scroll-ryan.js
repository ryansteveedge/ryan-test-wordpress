window.onload = function () {
   document.getElementById("linkclickera").addEventListener("click", (e) => {
      document.getElementById("type-a").scrollIntoView({
         behavior: "smooth",
         offsetTop: 80,
      });
      console.log("click")
   });
   document.getElementById("linkclickerb").addEventListener("click", (e) => {
      document.getElementById("type-b").scrollIntoView({
         behavior: "smooth",
         offsetTop: 80,
      });
      console.log("click");
   });
   document.getElementById("backtotop").addEventListener("click", (e) => {
      document.getElementById("top_ref").scrollIntoView({
         behavior: "smooth",
      });
      console.log("click");
   });
};

