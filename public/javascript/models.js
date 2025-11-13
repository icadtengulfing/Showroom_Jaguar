const modelList = document.getElementById("model-list");
const modelContent = document.getElementById("model-content");

const modernModels = [
  "Jaguar F-TYPE",
  "Jaguar I-PACE",
  "Jaguar XE",
  "Jaguar XF"
];

const classicalModels = [
  "Jaguar E-TYPE",
  "Jaguar XJ220",
  "Jaguar XK120",
  "Jaguar Mark 2"
];

document.querySelectorAll("#vehicles-dropdown a").forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault();
    const type = e.target.textContent.trim();

    if (type === "Modern Type") {
      modelContent.innerHTML = modernModels
        .map((model) => `<p class="hover:text-white">${model}</p>`)
        .join("");
    } else if (type === "Classical Type") {
      modelContent.innerHTML = classicalModels
        .map((model) => `<p class="hover:text-white">${model}</p>`)
        .join("");
    }

    modelList.classList.remove("hidden");
    modelList.style.width = "350px";
    modelList.classList.add("backdrop-blur-2xl", "bg-black/50");

    modelList.animate(
      [{ width: "0" }, { width: "350px" }],
      { duration: 300, fill: "forwards", easing: "ease-in-out" }
    );
  });
});
