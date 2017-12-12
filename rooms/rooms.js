let main = () => {
  let roomsRef = db.ref("/watcher/rooms")

  roomsRef.on('value', snapshot => {
    $("#rooms-container").html('')
    updateRoomsContainer(snapshot)
    updateRoomsDropdown(snapshot)
  })
}

let addRoomContainer = (name, description, status) => {
  let statusTag
  let statusName

  switch (status) {
    case 'available':
      statusTag = 'success'
      statusName = 'Disponible'
      break
    case 'unavailable':
      statusTag = 'danger'
      statusName = 'No disponible'
      break
    case 'reserved':
      statusTag = 'warning'
      statusName = 'Reservada'
      break
    default:
      statusTag = 'info'
      statusName = '?'
      break
  }

  $("#rooms-container").append(`
    <div class='col-sm-6 col-md-4 col-xl-3 mb-3'>
      <div class='card'>
        <div class='card-body text-center'>
          <h4 class='card-title'>${name}</h4>
          <h6><span class='badge badge-${statusTag}'>${statusName}</span></h6>
          <p class='card-text'>${description}</p>
          <a href='/computers?room=${name}' class='btn btn-primary'>Ver sala</a>
        </div>
      </div>
    </div>
  `)
}

let updateRoomsContainer = snapshot => {
  snapshot.forEach(room => {
    let roomName = room.key
    let roomDescription = 'Computadoras disponibles: '
    let computersAvailables = 0
    let roomStatus

    room.forEach(roomSnapshot => {
      roomSnapshot.forEach(computer => {
        if (computer.val().available) {
          computersAvailables++
          roomDescription += (computer.key + ' ')
        }
      })
    })

    if (computersAvailables <= 0) {
      roomDescription = 'No hay computadoras disponibles'
      roomStatus = 'unavailable'
    } else {
      roomStatus = 'available'
    }
    addRoomContainer(roomName, roomDescription, roomStatus)
  })
}

main()
