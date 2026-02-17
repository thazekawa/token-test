importScripts("https://www.gstatic.com/firebasejs/10.12.2/firebase-app-compat.js");
importScripts("https://www.gstatic.com/firebasejs/10.12.2/firebase-messaging-compat.js");

firebase.initializeApp({
  apiKey: "AIzaSyA4Ix7j42trOZRWP2HEL0Cv0X-Grr2BQ3c",
  authDomain: "gatsby-firebase-35beb.firebaseapp.com",
  projectId: "gatsby-firebase-35beb",
  storageBucket: "gatsby-firebase-35beb.firebasestorage.app",
  messagingSenderId: "432789470435",
  appId: "1:432789470435:web:392d408c32128ef106d9d6"
});

const messaging = firebase.messaging();
