# Voice Chatbot using Whisper, Cohere, and gTTS 🎤

## Overview

This project is a simple AI-powered voice chatbot that allows users to communicate using speech instead of typing.

The chatbot records audio from the user's microphone, converts speech into text using OpenAI Whisper, sends the text to the Cohere language model to generate an intelligent response, and finally converts the generated response back into speech using Google Text-to-Speech (gTTS).

## Features

- 🎤 Record voice directly from the microphone.
- 📝 Convert speech to text using Whisper.
- 🤖 Generate intelligent responses using Cohere Command-R.
- 🔊 Convert AI responses into speech using gTTS.
- 💬 Support for general conversations and question answering.

## Technologies Used

- Python
- OpenAI Whisper
- Cohere API (Command-R-08-2024)
- Google Text-to-Speech (gTTS)
- SoundDevice
- SciPy
- FFmpeg

## Project Workflow

```text
User Speech
      │
      ▼
Microphone Recording
      │
      ▼
Whisper (Speech-to-Text)
      │
      ▼
Cohere LLM
      │
      ▼
AI Response
      │
      ▼
gTTS (Text-to-Speech)
      │
      ▼
Audio Response
```

## 📸 Results

### 1. 🎤 User Voice Recording

The chatbot successfully records the user's speech through the microphone and saves it as an audio file.

➡️ [Input Audio](Results/input.wav)

---

### 2. 📝 Speech-to-Text

Whisper accurately converts the recorded speech into text before sending it to the language model.

➡️ [Speech-to-Text Result](Results/Speech-to-Text.png)

---

### 3. 🤖 AI Response

The recognized text is processed by the Cohere Command-R model, which generates an intelligent and context-aware response.

➡️ [AI Response](Results/AI%20Response%20text.png)

---

### 4. 🔊 Voice Output

The AI-generated response is converted into speech using Google Text-to-Speech (gTTS).

➡️ [Response Audio](Results/response.mp3)



