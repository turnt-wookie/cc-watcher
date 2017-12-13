let main = () => {
  let roomsRef = db.ref("/watcher/rooms")
  let roomParam = $.urlParam('room')

  roomsRef.on('value', snapshot => {
    snapshot.forEach(room => {
      if (room.key == roomParam) {
        cleanRowContainer()
        updateComputersTitle(room.key)

        let rows = getRows(room)

        rows.forEach(row => {
          addRowDiv(row)
          appendRoomToRow(room, row)
        })
      }
    })
  })
}

let spanStatus = status => {
  let statusTag
  let statusName

  switch (status) {
    case 'available':
      statusTag = 'success'
      statusName = 'Disponible'
      activeness = ''
      break
    case 'unavailable':
      statusTag = 'danger'
      statusName = 'No disponible'
      activeness = 'disabled'
      break
    case 'reserved':
      statusTag = 'warning'
      statusName = 'Reservada'
      activeness = 'disabled'
      break
    default:
      statusTag = 'info'
      statusName = '?'
      activeness = 'disabled'
      break
  }

  return `<span class="badge badge-${statusTag}">${statusName}</span>`
}

let buttonStatus = status => {
  switch (status) {
    case 'available':
      activeness = ''
      break
    case 'unavailable':
      activeness = 'disabled'
      break
    case 'reserved':
      activeness = 'disabled'
      break
    default:
      activeness = 'disabled'
      break
  }

  return activeness
}

let updateComputersTitle = name => {
  $("#computers-title").html(`
    <h1 class="text-center mt-5">Computadoras del ${name}</h1>
  `)
}

let addRowDiv = name => {
  $("#computer-container").append(`
    <div class="row mb-5" id="row-${name}"></div>
  `)
  return name
}

let cleanRowContainer = () => {
  $("#computer-container").html(`
    <div id="computers-title"></div>
  `)
}

let getRows = room => {
  let roomRows = []
  
  room.forEach(roomData => {
    roomData.forEach(computer => {
      let rowMatches = false

      // First row inserted
      if (roomRows.length <= 0) {
        roomRows.push(computer.key[0])
      }

      roomRows.forEach(row => {
        if (computer.key[0] == row) {
          rowMatches = true
        }
      })

      // Add new rows only
      if (!rowMatches) {
        roomRows.push(computer.key[0])
      }
    })
  })

  return roomRows // ["a", "b", "c"]
}

let appendRoomToRow = (room, row) => {
  room.forEach(roomData => {
    roomData.forEach(computer => {
      if (computer.key[0] == row) {
        let span = computer.val().available
                    ? spanStatus('available')
                    : spanStatus('unavailable')
        let btnStatus = computer.val().available
                            ? buttonStatus('available')
                            : buttonStatus('unavailable')

        $(`#row-${row}`).append(`
          <div class="col-6 col-sm-4 col-md-3 col-xl-2 mb-3" id="column-${computer.key[1]}">
            <div class="card text-center">
              <div class="card-body">
                <h6 class="card-title">${computer.key}</h6>
                <h6>${span}</h6>
              </div>
              <!--div class="card-footer">
                <a href="/reserve" class="btn btn-primary btn-sm ${btnStatus}">Reservar</a>
              </div-->
            </div>
          </div>
        `)
      }
    })
  })

}

main()
