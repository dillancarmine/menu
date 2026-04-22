// DATA (equivalente a tus arrays PHP)
const ham = {
  Sencilla: {
    text: "Carne de res, lechuga, cebolla, picante, jitomate, catsup, mostaza y mayonesa.",
    price: "$50.00",
  },
  "Sencilla con queso": {
    text: "Mismos ingredientes que la sencilla, pero con queso oaxaca.",
    price: "$55.00",
  },
  Hawaiana: {
    text: "Además de los ingredientes de la sencilla, lleva piña a la parrilla, jamón y queso oaxaca.",
    price: "$60.00",
  },
  Suiza: {
    text: "Además de los ingredientes de la sencilla, lleva tocino y queso oaxaca.",
    price: "$68.00",
  },
  Especial: {
    text: "Lleva todos los ingredientes de la sencilla, más los de la hawaiana y tocino.",
    price: "$75.00",
  },
  Extras: {
    text: "Puedes agregar ingredientes adicionales a tu hamburguesa por un costo extra.",
    price: "$10.00 - $20.00",
  },
};

const hd = {
  Sencillo: {
    text: "Salchicha, cebolla, picante, jitomate, catsup, mostaza y mayonesa.",
    price: "$18.00",
  },
  Especial: {
    text: "Además de los ingredientes del sencillo, lleva queso oaxaca y tocino.",
    price: "$25.00",
  },
  "Orden Sencilla": {
    text: "3 Hot Dogs sencillos.",
    price: "$50.00",
  },
  "Orden Especial": {
    text: "3 Hot Dogs especiales.",
    price: "$70.00",
  },
};

const pos = {
  "Flan de vaso": "$20.00",
  "Vaso de gelatina con crema y lechera": "$20.00",
  "Rebanada de gelatina flotatina": "$28.00",
  "Rebanada de flan napolitano": "$38.00",
  "Duraznos con crema": "$38.00",
};

const ex = {
  Cigarro: "$8.00",
  Refresco: "$18.00",
  "Café instantaneo": "$28.00",
  "Maruchan preparada": "$28.00",
};

// TEMPLATE helpers
const createCardFull = (title, text, price) => `
  <div class="col">
    <div class="card crd-cstm">
      <div class="card-body">
        <h5 class="card-title">${title}</h5>
        <p class="card-text">${text}</p>
        <p class="card-price">${price}</p>
      </div>
    </div>
  </div>
`;

const createCardSimple = (title, price) => `
  <div class="col">
    <div class="card crd-cstm">
      <div class="card-body">
        <h5 class="card-title">${title}</h5>
        <p class="card-price">${price}</p>
      </div>
    </div>
  </div>
`;

// RENDER functions (equivalente a foreach)
function renderHamburgers() {
  const container = document.getElementById("hamContainer");
  container.innerHTML = Object.entries(ham)
    .map(([name, data]) => createCardFull(name, data.text, data.price))
    .join("");
}

function renderHotDogs() {
  const container = document.getElementById("hdContainer");
  container.innerHTML = Object.entries(hd)
    .map(([name, data]) => createCardFull(name, data.text, data.price))
    .join("");
}

function renderPostres() {
  const container = document.getElementById("posContainer");
  container.innerHTML = Object.entries(pos)
    .map(([name, price]) => createCardSimple(name, price))
    .join("");
}

function renderExtras() {
  const container = document.getElementById("exContainer");
  container.innerHTML = Object.entries(ex)
    .map(([name, price]) => createCardSimple(name, price))
    .join("");
}

// INIT
document.addEventListener("DOMContentLoaded", () => {
  renderHamburgers();
  renderHotDogs();
  renderPostres();
  renderExtras();
});
