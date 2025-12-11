// ======================================================
//  GEM AI Tour Guide – Full JavaScript Integration
// ======================================================

// Elements

const aiChat = document.getElementById("aiChat");
const chatBox = document.getElementById("aiMessages");
const messageInput = document.getElementById("aiInput");
const sendBtn = document.getElementById("aiSend");
const documentNotNavbar = document.getElementsByClassName('documentNotNavbar')[0]
// ======================================================
// 1) OPEN / CLOSE CHAT UI
// ======================================================
const aiButton = document.getElementById("aiButton");
const aiOverlay = document.getElementById("aiOverlay");
const closeAI = document.getElementById("closeAI");

aiButton.addEventListener("click", () => {
  aiOverlay.classList.add("show");
  messageInput.focus();
  showWelcomeMessage();
});
function showWelcomeMessage() {
  // لو الرسالة اتضافت قبل كده — متكررهاش
  if (document.getElementById("welcomeMsg")) return;

  const div = document.createElement("div");
  div.className = "ai-message ai-bot";
  div.id = "welcomeMsg";
  div.innerHTML = `
    Hello! 👋  
    I am <strong>GEM AI Tour Guide</strong>.  
    I can help you explore:<br><br>
    • Museum visit information<br>
    • Ticket plans<br>
    • Ancient Egyptian artifacts<br>
    • Events & exhibitions<br>
    • Kids Zone activities<br>
    • Learning programs<br>
    • Anything about the Grand Egyptian Museum!<br><br>
    <em>How can I help you today?</em>
  `;

  chatBox.appendChild(div);
  chatBox.scrollTop = chatBox.scrollHeight;
}

// فتح الـ AI
aiButton.addEventListener("click", () => {
  aiOverlay.classList.add("show");
  messageInput.focus();
});

// إغلاق الـ AI
closeAI.addEventListener("click", () => {
  aiOverlay.classList.remove("show");
});
closeAI.addEventListener("click", () => {
  aiOverlay.classList.remove("show");
});
documentNotNavbar.addEventListener("click", () => {
  aiOverlay.classList.remove("show");
});

// إغلاق عند الضغط خارج الشات
aiOverlay.addEventListener("click", (e) => {
  if (e.target === aiOverlay) {
    aiOverlay.classList.remove("show");
  }
});
    