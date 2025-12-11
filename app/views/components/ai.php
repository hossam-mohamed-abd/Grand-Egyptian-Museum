  <!-- AI Floating Button -->
  <div id="aiButton">
    <img src="<?= ASSETS ?>image/ai.png" alt="GEM AI Tour Guide" />
  </div>
  <!-- AI Overlay (Full Screen Dark Background) -->
  <div id="aiOverlay">
    <!-- Chat Window Centered -->
    <div id="aiChat">
      <div class="ai-header">
        <h3>GEM AI Tour Guide</h3>
        <button id="closeAI">×</button>
      </div>

      <div class="ai-body" id="aiMessages"></div>

      <div class="ai-input-area">
        <input type="text" id="aiInput" placeholder="Ask me about the museum or Egypt…" />
        <button id="aiSend">Send</button>
      </div>
    </div>
  </div>