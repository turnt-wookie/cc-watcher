var config = {
  apiKey: "AIzaSyCCteIm5vRzSwdku-rMMjZDfGqfr4DmOoY",
  authDomain: "cc-watcher.firebaseapp.com",
  databaseURL: "https://cc-watcher.firebaseio.com",
  projectId: "cc-watcher",
  storageBucket: "cc-watcher.appspot.com",
  messagingSenderId: "135634711640"
}
firebase.initializeApp(config)
var db = firebase.database()

db.ref('/watcher/rooms').on('value', snapshot => {
  updateRoomsDropdown(snapshot)
})

var getRoomsNames = () => {
  let names = []

  db.ref('/watcher/rooms').on('value', snapshot => {
    snapshot.forEach(room => {
      names.push(room.key)
    })
  })
  return names
}

var updateRoomsDropdown = snapshot => {
  $('#rooms-dropdown').html('')

  getRoomsNames().forEach(name => {
    $('#rooms-dropdown').append(`
      <a href="/computers?room=${name}" class="dropdown-item">${name}</a>
    `)
  })
}

$.urlParam = name => {
  let results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href)
  if (results == null) {
     return null
  } else {
     return results[1] || null
  }
}
