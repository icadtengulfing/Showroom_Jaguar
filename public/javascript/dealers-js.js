const dealers = [
  {
    name: "Lorem ipsum",
    city: "Lorem ipsum",
    address: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempor, justo ut ullamcorper placerat, lorem ipsum sagittis velit.",
    phone: "+Lorem ipsum",
    image: "./media/apakek.jpg"
  },
];

const dealerList = document.getElementById("dealer-list");
const searchInput = document.getElementById("dealer-search");
const searchBtn = document.getElementById("search-btn");

function renderDealers(data) {
  dealerList.innerHTML = "";

  data.forEach(d => {
    const card = document.createElement("div");
    card.className =
      "bg-black border border-gray-800 rounded-2xl overflow-hidden shadow-lg hover:shadow-gray-700/20 transition-all duration-300";
    card.innerHTML = `
      <img src="${d.image}" alt="${d.name}" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-xl font-semibold text-white mb-2">${d.name}</h3>
        <p class="text-gray-400 text-sm mb-1"><i class="fa-solid fa-location-dot mr-2 text-gray-500"></i>${d.city}</p>
        <p class="text-gray-500 text-sm mb-3">${d.address}</p>
        <p class="text-gray-400 text-sm"><i class="fa-solid fa-phone mr-2 text-gray-500"></i>${d.phone}</p>
      </div>
    `;
    dealerList.appendChild(card);
  });
}

renderDealers(dealers);

// Search
function handleSearch() {
  const keyword = searchInput.value.trim();
  if (keyword === "") {
    renderDealers(dealers);
  } else {
    dealerList.innerHTML = `<p class="text-gray-500 text-center col-span-full">Search feature is disabled in demo mode.</p>`;
  }
}

searchBtn.addEventListener("click", handleSearch);
searchInput.addEventListener("keypress", (e) => {
  if (e.key === "Enter") handleSearch();
});