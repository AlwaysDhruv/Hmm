<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>TextGen-AI</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="chat-container">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <div class="sidebar-header">
        <div class="sidebar-title">Chat History</div>
        <button class="close-sidebar" onclick="toggleSidebar()">×</button>
      </div>
      <div class="chat-history">
        <div class="chat-item active">
          <div class="chat-item-title">AI Assistant</div>
          <div class="chat-item-preview">How can I help you today?</div>
        </div>
      </div>
    </div>

    <div class="overlay" id="overlay" onclick="toggleSidebar()"></div>

    <!-- Main Chat -->
    <div class="main-chat">
      <div class="chat-header">
        <div class="header-left">
          <button class="sidebar-toggle" onclick="toggleSidebar()">☰</button>
          <div class="chat-title">TextGen-AI</div>
        </div>

        <?php include("icon.php"); ?>
      </div>

      <div class="chat-messages" id="chatMessages">
        <div class="message">
          <div class="message-avatar ai">TG</div>
          <div class="message-content">
            <span class="message-text">Hello 👋 I'm your AI assistant. How can I help you today?</span>
            <span class="copy-btn" onclick="copyMessage(this)">📋</span>
          </div>
        </div>
      </div>

      <!-- Input -->
      <div class="input-area">
        <form class="input-container" id="chatForm">
          <textarea class="message-input" id="messageInput" placeholder="Type your message here..." rows="1" onkeypress="handleKeyPress(event)" oninput="autoResize(this)"></textarea>
          <button class="send-btn" type="submit">➤</button>
        </form>
      </div>
    </div>
  </div>

  <script src="chat.js"></script>
</body>
</html>