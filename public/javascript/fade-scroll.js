document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section, .fade-section, .fade-up");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible", "show");
          observer.unobserve(entry.target); 
        }
      });
    },
    {
      threshold: 0.2, 
    }
  );

  sections.forEach((section) => {
    observer.observe(section);
  });
});