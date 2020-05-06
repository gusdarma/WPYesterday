console.log("loaded");
var observer = new IntersectionObserver(
  function (entries) {
    // no intersection with screen
    if (entries[0].intersectionRatio === 0)
      document.querySelector("#masthead").classList.add("header-sticky");
    // fully intersects with screen
    else if (entries[0].intersectionRatio === 1)
      document.querySelector("#masthead").classList.remove("header-sticky");
  },
  { threshold: [0, 1] }
);

observer.observe(document.querySelector("#divider"));
