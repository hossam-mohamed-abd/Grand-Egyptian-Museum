// عناصر الـ DOM
const openMemoryGameBtn = document.getElementById("openMemoryGame");
const memoryOverlay = document.getElementById("memoryOverlay");
const closeMemoryGameBtn = document.getElementById("closeMemoryGame");
const memoryGrid = document.getElementById("memoryGrid");
const restartBtn = document.getElementById("restartMemoryGame");
const memoryStatus = document.getElementById("memoryStatus");

let firstCard = null;
let secondCard = null;
let lockBoard = false;
let matches = 0;

const symbols = [
  "public/image/gameKids/cee.png",
  "public/image/gameKids/tout.png",
  "public/image/gameKids/key1.png",
  "public/image/gameKids/key2.png",
  "public/image/gameKids/key3.png",
  "public/image/gameKids/key4.png",
  "public/image/gameKids/key5.png",
  "public/image/gameKids/key6.png",
];

openMemoryGameBtn.addEventListener("click", () => {
  memoryOverlay.classList.add("show");
  initMemoryGame();
});

// غلق الأوفرلاي
closeMemoryGameBtn.addEventListener("click", () => {
  memoryOverlay.classList.remove("show");
});

// إعادة تشغيل اللعبة
restartBtn.addEventListener("click", () => {
  initMemoryGame();
});

function initMemoryGame() {
  // reset
  memoryGrid.innerHTML = "";
  firstCard = null;
  secondCard = null;
  lockBoard = false;
  matches = 0;
  updateStatus();

  // عمل Array أزواج + شفل
  const cardsData = [...symbols, ...symbols].sort(() => Math.random() - 0.5);

  // إنشاء الكروت
  cardsData.forEach((symbol) => {
    const card = document.createElement("div");
    card.classList.add("memory-card");
    card.dataset.symbol = symbol;

    card.innerHTML = `
        <div class="memory-card-inner">
          <div class="memory-face memory-front">GEM</div>
            <div class="memory-face memory-back">
              <img src="${symbol}" class="memory-icon" />
            </div>
        </div>
      `;

    card.addEventListener("click", () => onCardClick(card));
    memoryGrid.appendChild(card);
  });
}

function onCardClick(card) {
  if (lockBoard) return;
  if (card === firstCard) return;

  card.classList.add("flipped");

  if (!firstCard) {
    firstCard = card;
    return;
  }

  secondCard = card;
  checkMatch();
}

function checkMatch() {
  const isMatch = firstCard.dataset.symbol === secondCard.dataset.symbol;

  if (isMatch) {
    disableCards();
    matches++;
    updateStatus();
    checkWin();
  } else {
    unflipCards();
  }
}

function disableCards() {
  firstCard.style.cursor = "default";
  secondCard.style.cursor = "default";
  firstCard = null;
  secondCard = null;
}

function unflipCards() {
  lockBoard = true;
  setTimeout(() => {
    firstCard.classList.remove("flipped");
    secondCard.classList.remove("flipped");
    firstCard = null;
    secondCard = null;
    lockBoard = false;
  }, 800);
}

function updateStatus() {
  memoryStatus.textContent = `Matches: ${matches} / ${symbols.length}`;
}

function checkWin() {
  if (matches === symbols.length) {
    memoryStatus.textContent = "Great! You matched all symbols 🎉";
  }
}

// عناصر DOM
const openArtifactGame = document.getElementById("openArtifactGame");
const artifactOverlay = document.getElementById("artifactOverlay");
const closeArtifactGame = document.getElementById("closeArtifactGame");
const artifactRestart = document.getElementById("artifactRestart");
const artifactImage = document.getElementById("artifactImage");
const artifactOptions = document.querySelector(".artifact-options");
const artifactStatus = document.getElementById("artifactStatus");

// بيانات اللعبة
const artifacts = [
  {
    image: "public/image/artifacts/tut-mask.jpg",
    answer: "Tutankhamun Mask",
    options: ["Tutankhamun Mask", "Horus Statue", "Anubis Head"],
  },
  {
    image: "public/image/artifacts/ankh.jpg",
    answer: "Ankh (Key of Life)",
    options: ["Eye of Horus", "Ankh (Key of Life)", "Scarab Beetle"],
  },
  {
    image: "public/image/artifacts/scarab.jpg",
    answer: "Scarab Beetle",
    options: ["Pharaoh Crown", "Scarab Beetle", "Pyramid Tip"],
  },
  {
    image: "public/image/artifacts/eye-horus.png",
    answer: "Eye of Horus",
    options: ["Eye of Horus", "Papyrus Scroll", "Golden Sun"],
  },
];

// فتح اللعبة
openArtifactGame.addEventListener("click", () => {
  artifactOverlay.classList.add("show");
  loadArtifact();
});

// غلق اللعبة
closeArtifactGame.addEventListener("click", () => {
  artifactOverlay.classList.remove("show");
});

// تحميل قطعة أثرية جديدة
function loadArtifact() {
  const item = artifacts[Math.floor(Math.random() * artifacts.length)];
  artifactImage.src = item.image;
  artifactStatus.textContent = "Choose the correct answer!";

  renderOptions(item);
}

// عرض الخيارات
function renderOptions(item) {
  artifactOptions.innerHTML = "";

  item.options.forEach((option) => {
    const btn = document.createElement("button");
    btn.textContent = option;

    btn.onclick = () => {
      if (option === item.answer) {
        artifactStatus.textContent = "Correct! 🎉";
      } else {
        artifactStatus.textContent = "Try again!";
      }
    };

    artifactOptions.appendChild(btn);
  });
}

// إعادة لعبة
artifactRestart.addEventListener("click", loadArtifact);
